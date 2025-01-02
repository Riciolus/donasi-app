<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use App\Models\Fund;
use App\Models\User;
use App\Models\Withdrawal;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FundController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $funds = Fund::where('title', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->orWhere('category', 'LIKE', "%{$query}%")
            ->get();

        $users = User::where('name', 'LIKE', "%{$query}%")
            ->orWhere('email', 'LIKE', "%{$query}%")
            ->get();

        return view('layout.SearchFunds', compact('funds', 'query', 'users'));
    }


    public function create()
    {
        return view('layout.createCampaign');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => '',
            'category' => 'required',
            'goal_amount' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('public/funds', $imageName); // Store in storage/app/public/fund_images
            $validatedData['image_url'] = 'funds/' . $imageName;
        }

        // Create a fund with user_id
        Fund::create([
            'user_id' => auth()->id(),
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'category' => $validatedData['category'],
            'goal_amount' => (int) $validatedData['goal_amount'],
            'image_url' => $validatedData['image_url'],
        ]);

        return redirect()->route('main')->with('success', 'Berhasil membuat penggalangan dana!');
    }

    public function contribute(Request $request, $fundId)
    {
        $request->validate([
            'amount' => 'required|regex:/^\d+(\.\d{1,2})?$/', // Ensure input is numeric
        ]);

        $amount = str_replace('.', '', $request->input('amount')); // Remove dots
        $userId = auth()->id();

        Contribution::create([
            'fund_id' => $fundId,
            'user_id' => $userId,
            'amount' => (int) $amount, // Convert to integer
        ]);

        // Update collected amount
        $fund = Fund::findOrFail($fundId);
        $fund->collected_amount += (int) $amount;
        $fund->save();

        $user = User::findOrFail($userId);
        $user->balance -= (int) $amount;
        $user->save();

        return redirect()->back();
    }

    public function show(string $id)
    {
        $userId = auth()->id();

        $fund = Fund::with([
            'user',
            'contributions' => function ($query) {
                $query->latest()->take(3);
            }
        ])->findOrFail($id);

        $recentNews = $fund->contributions->filter(function ($contribution) {
            return $contribution->contribution_date >= Carbon::now()->subDay();
        })->count();

        $totalContributors = $fund->contributions->unique('user_id')->count();

        $withdrawals = Withdrawal::where('fund_id', $id)->count();


        return view('layout.detailCampaign', compact('fund', 'totalContributors', 'recentNews', 'userId', 'withdrawals'));
    }

    public function withdrawal(Request $request, $id)
    {
        // Preprocess the amount: remove commas or dots before validating
        $request->merge([
            'amount' => intval(str_replace(['.', ','], '', $request->input('amount'))),
        ]);

        // Now validate the cleaned amount
        $validatedData = $request->validate([
            'amount' => 'required|numeric|min:100000',
        ]);

        // Find the fund
        $fund = Fund::findOrFail($id);

        // Check for sufficient balance
        if ($fund->collected_amount < $validatedData['amount']) {
            return back()->with('error', 'Jumlah donasi kurang.');
        }

        // Deduct the amount from the fund's balance
        $fund->collected_amount -= $validatedData['amount'];
        $fund->save();


        // Create a new withdrawal record
        Withdrawal::create([
            'user_id' => auth()->id(),
            'fund_id' => $fund->id,
            'amount' => $validatedData['amount'],
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Berhasil menarik donasi!');
    }


    public function delete(string $id)
    {
        $userId = auth()->id();

        $fund = Fund::where('id', $id)->select('user_id')->first();

        if ($fund->user_id !== $userId) {
            return view('errors.unauthorized'); // Replace with your unauthorized view
        }

        Fund::where('id', $id)->delete();

        return redirect()->route('main')->with('success', 'Penggalangan berhasil dihapus!');
    }


}
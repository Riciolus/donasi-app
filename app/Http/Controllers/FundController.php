<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use App\Models\Fund;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout.createCampaign');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // dd($request);

    $validatedData = $request->validate([
        'title' =>  'required',
        'description' =>  '',
        'category' =>  'required',
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

    return redirect("/")->with('success', 'Fund created successfully.');
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
        'amount' => (int)$amount, // Convert to integer
    ]);

    // Update collected amount
    $fund = Fund::findOrFail($fundId);
    $fund->collected_amount += (int)$amount;
    $fund->save();

    $user = User::findOrFail($userId);
    $user->balance -= (int)$amount;
    $user->save();

    return redirect()->back();
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fund = Fund::with(['user', 'contributions' => function($query) {
            $query->latest()->take(3);
        }])->findOrFail($id);

        $recentNews = $fund->contributions->filter(function ($contribution) {
            return $contribution->contribution_date >= Carbon::now()->subDay();
        })->count();

        $totalContributors = $fund->contributions->unique('user_id')->count();
        
        return view('layout.detailCampaign', compact('fund', 'totalContributors', 'recentNews'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
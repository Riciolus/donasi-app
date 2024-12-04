<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
          $userId = auth()->id();
          $user = User::find($userId);

          $totalDonation = (int) Contribution::where('user_id', $userId)->sum('amount');

          return view('user.profile', compact('user', 'totalDonation'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => '',
            'imageProfile' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('imageProfile')) {
            $image = $request->file('imageProfile');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('public/profile', $imageName); // Store in storage/app/public/fund_images
            $validatedData['imageProfile'] = 'profile/' . $imageName;
        }

        $user = auth()->user();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        
        if (isset($validatedData['imageProfile'])) {
            $user->profile_image_url = $validatedData['imageProfile'];
        }

        if (isset($validatedData['password'])) {
            $user->password = bcrypt($validatedData['password']);
        }
        
        $user->save();
        
        return redirect('/profile');
    }

    public function topup(Request $request)
    {   
        $validatedData = $request->validate([
            'addBalance' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        ]);
        
        $amount = str_replace('.', '', $validatedData['addBalance']); // Remove dots

        $user = auth()->user();
        $user->balance += (int) $amount;
        $user->save();

        return redirect('/profile');
    }
}
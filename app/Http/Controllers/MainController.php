<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use App\Models\Fund;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index()
    {
        $userId = auth()->id();
        $userBalance = User::where('id', $userId)->select('balance')->first();
        $totalDonation = (int) Contribution::where('user_id', $userId)->sum('amount');

        $latestFunds = Fund::orderBy('created_at', 'desc')->take(5)->get();
        $oldestFunds = Fund::orderBy('created_at', 'asc')->take(5)->get();
        $randomFunds = Fund::inRandomOrder()->take(5)->get();
        $recommendationFunds = Fund::whereIn('id', [6, 7, 8])->get();

        $categories = Fund::select('category')
            ->distinct()
            ->pluck('category');

        // Fetch funds by category
        $fundsByCategory = [];
        foreach ($categories as $category) {
            $fundsByCategory[$category] = Fund::where('category', $category)->get();
        }

        return view('main', compact('latestFunds', 'oldestFunds', 'randomFunds', 'categories', 'recommendationFunds', 'fundsByCategory', 'userBalance', 'totalDonation'));
    }


}
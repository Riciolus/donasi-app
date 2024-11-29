<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use App\Models\Fund;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $userId = auth()->id(); // Example user ID
        $userBalance = User::where('id', $userId)->select('balance')->first();
        $totalDonation = (int) Contribution::where('user_id', $userId)->sum('amount');

        $latestFunds = Fund::orderBy('created_at', 'desc')->take(5)->get();
        $oldestFunds = Fund::orderBy('created_at', 'asc')->take(5)->get();
        $randomFunds = Fund::inRandomOrder()->take(5)->get();

        $categories = Fund::select('category')
        ->distinct()
        ->pluck('category');

    // Fetch funds by category
        $fundsByCategory = [];
        foreach ($categories as $category) {
        $fundsByCategory[$category] = Fund::where('category', $category)->get();
        }

        return view('main', compact('latestFunds', 'oldestFunds', 'randomFunds', 'categories', 'fundsByCategory','userBalance', 'totalDonation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
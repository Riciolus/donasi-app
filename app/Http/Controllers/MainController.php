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
         $userId = 1; // Example user ID
         
         // Fetch all funds
         $funds = Fund::with('user')->get();
     
         // Fetch user balance
         $userBalance = User::where('id', $userId)->select('balance')->first();
         
         // Calculate total donations by user
         $totalDonation = (int) Contribution::where('user_id', $userId)->sum('amount');
     

        //  dd($funds);
         // Pass all data to the view
         return view('main', compact('funds', 'userBalance', 'totalDonation'));
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
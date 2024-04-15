<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $user = auth()->user(); // Assuming you are using authentication and want to display the current user's total coins
    return view('dashboard', compact('user'));
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
     * Update the specified resource in storage. *****************
     */
    public function update(Request $request, User $user)
    {
        // Get the current user's total coins
        $currentTotalCoins = $user->total_coins;

        // Get the coins from the current task
        $taskCoins = $request->input('coins');

        // Calculate the new total coins by adding the current total coins with the coins from the current task
        $newTotalCoins = $currentTotalCoins + $taskCoins;

        // Update the user's total coins
        $user->update([
            'total_coins' => $newTotalCoins,
        ]);

        // Optionally, you can redirect back with a success message
        return redirect()->back()->with('success', 'Total coins updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

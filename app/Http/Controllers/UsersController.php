<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('layouts.users',compact('users'));
    }

    /**
     * Delete a user from database
     */
    public function delete(User $user){
        $user->delete();
        return back()->with('success', 'Utilisateur supprimé');
    }
}

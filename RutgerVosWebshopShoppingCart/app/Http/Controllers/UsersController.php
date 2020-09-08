<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {
     $user = User::find(1)->get();
     //dd($user);
    $users = DB::table('users')->get();
     return view('user', ['users' => $users]);
    }
    public function show(Request $request, $id)
    {
        $value = $request->session()->get('id');
        
    }
    // Get the currently authenticated user...
// $user = Auth::user();

// // Get the currently authenticated user's ID...
// $id = Auth::id();
    
}

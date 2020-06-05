<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
    // $user = User::find(1)->get();
    // dd($user);
    $users = DB::table('users')->get();
     return view('user.index', ['users' => $users]);
    }
    public function show(Request $request, $id)
    {
        $value = $request->session()->get('key');
        
    }
}

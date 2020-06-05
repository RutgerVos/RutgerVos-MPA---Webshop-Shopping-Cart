<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AtriclesController extends Controller
{
    public function index()
    {
    $user = User::find(1)->get();
    //dd($user);
    return view('Articles');
    }
}

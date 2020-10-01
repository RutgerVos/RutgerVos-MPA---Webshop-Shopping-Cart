<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * a function to get to you're profile
     */
    public function index()
    {
        $idUser = Auth::id();
        $user = User::find(1)->get();
        $users = DB::table('users')->get();
        $OrderDetail = OrderDetail::all();
        $order = Order::where('userId', $idUser)
            ->orderBy('id', 'desc')
            ->take(10)
            ->get();
        return view('user', ['users' => $users, 'OrderDetail' => $order]);
    }
    /**
     * a function to display id
     */
    public function show(Request $request, $id)
    {
        $value = $request->session()->get('id');

    }
    // Get the currently authenticated user...
    // $user = Auth::user();

// // Get the currently authenticated user's ID...
    // $id = Auth::id();

}

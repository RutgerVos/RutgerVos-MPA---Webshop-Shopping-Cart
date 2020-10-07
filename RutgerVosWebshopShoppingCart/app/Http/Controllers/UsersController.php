<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * a function to get to you're profile
     */
    public function index()
    {
        $idUser = Auth::id();
        $user = User::find(1)->get();
        $order = Order::where('userId', $idUser)
            ->orderBy('id', 'desc')
            ->take(10)
            ->get();
        return view('user', ['OrderDetail' => $order]);
    }
    public function orderDetails($id)
    {
        $orderDetail = Order::find($id)->article;

        return view('orderdetail', ['detail' => $orderDetail]);
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

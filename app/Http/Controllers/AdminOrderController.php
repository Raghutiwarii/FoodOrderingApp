<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;


class AdminOrderController extends Controller
{
    //
    public function index()
    {
        $orders = Order::all(); // Replace this with your actual query to fetch orders

        // Ensure that you are converting date strings to date objects if needed
        foreach ($orders as $order) {
            $order->date = \Carbon\Carbon::parse($order->date); // Assuming you are using Carbon for date handling
        }

        return view('admin.orders.index', ['orders' => $orders]);
    }

}

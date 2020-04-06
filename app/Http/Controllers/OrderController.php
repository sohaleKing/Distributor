<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function create(Request $request){
        $order = new Order;
        $order->tracking = $request->tracking;
        $order->save();

        return $order;
    }

    public function delete(int $orderId){
        $order = Order::find($orderId);    
        $order->delete();
        return "refund in process!";
    }
}

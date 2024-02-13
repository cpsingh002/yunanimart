<?php

namespace App\Livewire\Admin\Order;

use Livewire\Component;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;

class OrderComponent extends Component
{
    public function updateOrderStatus($order_id,$status)
    {
        $order = Order::find($order_id);
        $order->status = $status;
        if($status == "delivered")
        {
            $order->delivered_date = DB::raw('CURRENT_DATE');
        }
        else if($status == "canceled")
        {
            $order->canceled_date = DB::raw('CURRENT_DATE');
        }
        
        $order->save();
        session()->flash('order_message','Order status has been updated Successfully!');
    }
    
    public function render()
    {
        $orders=Order::all();
        return view('livewire.admin.order.order-component',['orders'=>$orders])->layout('layouts.admin');
    }
}

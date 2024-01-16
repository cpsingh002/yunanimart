<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;

class OrderDetailsComponent extends Component
{
    public $order_id;

    public function  mount($id)
    {
        $this->order_id = $id;

    }
    public function render()
    {
        $order = Order::where('id',$this->order_id)->first();
        $orderitems = OrderItem::where('order_id',$order->id)->get();
//dd($orderitems);
        return view('livewire.frontend.order-details-component',['order'=>$order,'orderitems'=>$orderitems])->layout('layouts.main');
    }
}

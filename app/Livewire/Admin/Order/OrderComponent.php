<?php

namespace App\Livewire\Admin\Order;

use Livewire\Component;
use App\Models\Order;
use App\Models\OrderItem;

class OrderComponent extends Component
{
    
    public function render()
    {
        $orders=Order::all();
        return view('livewire.admin.order.order-component',['orders'=>$orders])->layout('layouts.admin');
    }
}

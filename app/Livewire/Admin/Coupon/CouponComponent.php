<?php

namespace App\Livewire\Admin\Coupon;

use Livewire\Component;
use App\Models\Coupon;

class CouponComponent extends Component
{
    public function render()
    {
        $coupons =Coupon::all();
        return view('livewire.admin.coupon.coupon-component',['coupons'=>$coupons])->layout('layouts.admin');
    }
}

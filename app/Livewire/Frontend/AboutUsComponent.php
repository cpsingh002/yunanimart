<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

// use Controllers\easebuzz_lib\easebuzz_payment_gateway;
use Easebuzz\Easebuzz;

class AboutUsComponent extends Component
{


    public function render()
    {
        return view('livewire.frontend.about-us-component')->layout('layouts.main');
    }


    public function payeasybuzz()
    {
        
        $easebuzzObj = new Easebuzz(env('MERCHANT_KEY'), env('SALT'), env('ENV'));
        $postData = array ( 
            "txnid" => "T3SAT0B5OL", 
            "amount" => "100.0", 
            "firstname" => "jitendra", 
            "email" => "test@gmail.com", 
            "phone" => "1231231235", 
            "productinfo" => "Laptop", 
            "surl" => "http://localhost:3000/response.php", 
            "furl" => "http://localhost:3000/response.php", 
            
        );
    
      $data =   $easebuzzObj->initiatePaymentAPI($postData); 
      
      dd($data);
    }
}

<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Http\Request;
use Session;
use App\Models\Wishlist;
use App\Models\SaveForLater;
use App\Models\Tax;
use App\Models\Cart;
use App\Models\Product2;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\ShippingAddress;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Transaction;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;
use Exception;
use Stripe;
use Carbon\Carbon; 


class CheckOutComponent extends Component
{
    public $subtotalfinal;
    public $shopping_charge;
    public $finaldiscount;
    public $totalfinal;
    public $name;
    public $email;
    public $mobile;
    public $mobile_optional;
    public $line1;
    public $line2;
    public $landmark;
    public $city_id;
    public $state_id;
    public $country_id;
    public $zipcode;
    public $address_type;
    public $default_address;
    public $st_id;

    public $ship_to_different;
    public $selected_address;
    public $selected_add;
    public $payment_type;

    public $paymentmode;
    public $thankyou;

    public $cvc;
    public $exp_year;
    public $exp_month;
    public $card_no;
    public $card_name;

    public function mount()
    {
    // $this->country_id ="101";
    $this->ship_to_different = 1;
    // $this->payment_type = 'cc';
    }
    public function verifyForCheckout()
    {
        if(!Auth::check())
        {
            return redirect()->route('login');
        }
        elseif($this->thankyou)
        {
            return redirect()->route('thankyou');
        }
        elseif(!session()->get('checkout'))
        {
            return redirect()->route('product.cart');
        }
    }

    public function render()
    {
       $this->verifyForCheckout();
       if(session()->get('checkout'))
        {
        $this->subtotalfinal = session()->get('checkout')['subtotal'];
        $this->finaldiscount = session()->get('checkout')['discount'];
        $this->totalfinal = session()->get('checkout')['total'];
        }
        $countries = Country::all();
        $states = State::where('country_id',$this->country_id)->get();
        $cities = City::where('state_id',$this->st_id)->get();
        $ships = ShippingAddress::where('user_id',Auth::user()->id)->get();
        return view('livewire.frontend.check-out-component',['countries'=>$countries,'states'=>$states,'cities'=>$cities,'ships'=>$ships])->layout('layouts.main');
    }

    public function changecountry()
    {
        //dd($this->country_id);
        $this->state_id = 0;
        $this->city_id = 0;
        return;
    }
    public function changestate()
    {
        $this->st_id = $this->state_id;
        $this->city_id = 0;
        return;
        
    }

    public function adddress()
    {
        $this->dispatch('show-add-address-modal');
        return;
    }

    public function addAddress()
    {
        //dd($this->address_type, $this->default_address);
        $this->validate([
            'name'=>'required',
            
            'mobile'=>'required|numeric|digits:10',
           // 'mobile_optional'=>'required',
            'line1'=>'required',
           // 'line2'=>'required',
            //'landmark'=>'required',
            'city_id'=>'required',
            'state_id'=>'required',
            'country_id'=>'required',
            'zipcode'=>'required|numeric|digits:6',
            'address_type'=>'required',
           
        ]);
        //dd('heloo');

        $ship = new ShippingAddress();
        $ship->name = $this->name;
        $ship->user_id = Auth::user()->id;
        $ship->mobile = $this->mobile;
        $ship->mobile_optional = $this->mobile_optional;
        $ship->line1 = $this->line1;
        $ship->line2 = $this->line2;
        $ship->landmark = $this->landmark;
        $ship->city_id = $this->city_id;
        $ship->state_id = $this->state_id;
        $ship->country_id = $this->country_id;
        $ship->zipcode = $this->zipcode;
        $ship->address_type = $this->address_type;
        if($this->default_address){
            ShippingAddress::where('user_id', Auth::user()->id)->update(['default_address' => 0]);
            $ship->default_address = '1';
        }
        $ship->save();

        session()->flash('message', 'Address has been updated successfully');

        //For hide modal after add post added successfully
        $this->dispatch('close-modal');
    }

    public function paymentmethod($type)
    {
       // dd($type);
       // $this->payment_type = $type;
       return;
    }
    public function placeordercod ()
    {
        $this->payment_type = 'cod';
       // dd('hello');
       if(!$this->selected_address){
            session()->flash('message','Please! select delivery address');
                return ;
       }
        
       $ship = ShippingAddress::find($this->selected_address);
       if($ship){
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->subtotal = '230';//session()->get('checkout')['subtotal'];
        $order->discount = '0'; //session()->get('checkout')['discount'];
        $order->tax =  '24'; //session()->get('checkout')['tax'];
        $order->total = '230'; //session()->get('checkout')['total'];
        $order->name=$ship->name;
        $order->mobile=$ship->mobile;
        $order->mobile_optional=$ship->mobile_optional;
        $order->line1=$ship->line1;
        $order->line2=$ship->line2;
        $order->landmark=$ship->landmark;
        $order->city_id=$ship->city_id;
        $order->state_id=$ship->state_id;
        $order->country_id=$ship->country_id;
        $order->zipcode=$ship->zipcode;
        $order->order_number=Carbon::now()->timestamp;
        $order->status = 'ordered';
        $order->save();
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        foreach($carts as $item)
        {
            $orderItem = new OrderItem();
            $orderItem->product_id = $item->product_id;
            $orderItem->order_id = $order->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->quantity;
            $orderItem->save();
        }
        $this->makeTransaction($order->id,'pending','cod');
        $this->resetCart();
        $this->sendOrderConfirmationMail($order);

            // dd('asad');
       }else{
        dd('address not found');
       }
    }

    public function placeOrdercc()
    {
        $this->payment_type = 'cc';
       // dd('hello');
       if(!$this->selected_address){
            session()->flash('message','Please! select delivery address');
                return ;
       }

       $this->validate([
        'cvc'=>'required|numeric',
        'exp_year'=>'required|numeric',
        'exp_month'=>'required|numeric',
        'card_no'=>'required|numeric',
        'card_name' =>'required',
        ]);
dd($this->cvc, $this->card_no,$this->card_name,$this->exp_year,$this->exp_month);

        $ship = ShippingAddress::find($this->selected_address);
       if($ship){
            $order = new Order();
            $order->user_id = Auth::user()->id;
            $order->subtotal = '230';//session()->get('checkout')['subtotal'];
            $order->discount = '0'; //session()->get('checkout')['discount'];
            $order->tax =  '24'; //session()->get('checkout')['tax'];
            $order->total = '230'; //session()->get('checkout')['total'];
            $order->name=$ship->name;
            $order->mobile=$ship->mobile;
            $order->mobile_optional=$ship->mobile_optional;
            $order->line1=$ship->line1;
            $order->line2=$ship->line2;
            $order->landmark=$ship->landmark;
            $order->city_id=$ship->city_id;
            $order->state_id=$ship->state_id;
            $order->country_id=$ship->country_id;
            $order->zipcode=$ship->zipcode;
            $order->status = 'ordered';
            $order->save();
            $carts = Cart::where('user_id', Auth::user()->id)->get();
            foreach($carts as $item)
            {
                $orderItem = new OrderItem();
                $orderItem->product_id = $item->product_id;
                $orderItem->order_id = $order->id;
                $orderItem->price = $item->price;
                $orderItem->quantity = $item->quantity;
                $orderItem->save();
            }
            $stripe = Stripe::make(env('STRIPE_SECRET'));
                try{
                    $token = $stripe->tokens()->create([
                        'card'=>[
                            'number'=>$this->card_no,
                            'exp_month'=>$this->exp_month,
                            'exp_year'=>$this->exp_year,
                            'cvc' => $this->cvc
                        ]
                    ]);
                    if(!isset($token['id']))
                    {
                        session()->flash('stripe_error','THe stripe token was not generated correctly!');
                        $this->thankyou = 0;
                    }
                    $customer = $stripe->customers()->create([
                        'name' => $ship->name,
                        'email'=> Auth::user()->email,
                        'phone'=> $ship->mobile,
                        'address' =>[
                            'line1' => $ship->line1,
                            'postal_code' => $ship->zipcode,
                            'city' => $ship->citys->city,
                            'state' => $ship->state->name,
                            'country' => $ship->country->name
                        ],
                        'shipping' => [
                            'name' => $ship->name,
                            'address'=> [
                                'line1' => $ship->line1,
                                'postal_code' => $ship->zipcode,
                                'city' => $ship->citys->city,
                                'state' => $ship->state->name,
                                'country' => $ship->country->name
                            ],
                        ],
                        'source' => $token['id']
                    ]);

                    $charge = $stripe->charges()->create([
                        'customer'=>$customer['id'],
                        'currency'=>'INR',
                        'amount' => session()->get('checkout')['total'],
                        'description' => 'Payment for order no ' . $order->id
                    ]);

                    if($charge['status'] == 'succeeded')
                    {
                        $this->makeTransaction($order->id,'approved','cc');
                        $this->resetCart();
                    }
                    else
                    {
                        session()->flash('stripe_error','Error in Transaction');
                        $this->thankyou = 0;
                    }
                } catch(Exception $e){
                    session()->flash('stripe_error', $e->getMessage());
                    $this->thankyou = 0;
                }
            $this->sendOrderConfirmationMail($order);
       }

    }

    public function makeTransaction($order_id, $status,$mode)
    {
        $transaction = new Transaction();
        $transaction->user_id = Auth::user()->id;
        $transaction->order_id = $order_id;
        $transaction->mode = $mode;
        $transaction->status = $status;
        $transaction->save();
    }
    public function resetCart()
    {
        $this->thankyou = 1;
        Cart::where('user_id', Auth::user()->id)->delete();
       // session()->forget('checkout');
    }
    public function sendOrderConfirmationMail($order)
    {
        Mail::to(Auth::user()->email)->send(new OrderMail($order));
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Session;
use App\Models\Wishlist;
use Livewire\Attributes\On; 


use Illuminate\Support\Facades\Auth;

class WishlistCountComponent extends Component
{
    protected $listeners = ['refreshComponent'=>'$refresh'];
    public  $count;
    public $wishlist =[];

    
    #[On('wishlist_add')] 
    public function render(Request $request)
    {       
       // $this->Fhgh($request);
        // $cart = Cart::instance('wishlist')->content();
        // return view('livewire.wishlist-count-component',['carts' => $cart]);
       // $wishlist = $request->session()->get('wishlist');;
        // dd(count($wishlist));
    $this->count = 0;
        if(Auth::check())
        {
            $this->wishlist = Wishlist::where('user_id',Auth::user()->id)->get();
            $this->count = Wishlist::where('user_id',Auth::user()->id)->get()->count();

        }else{
            if (Session::has('wishlist')){
            $this->wishlist = $request->session()->get('wishlist');
            $this->count = count($this->wishlist);
            }
        }
        return view('livewire.wishlist-count-component');
    }
}

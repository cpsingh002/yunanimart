<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Http\Request;
use Session;
use App\Models\Wishlist;
use App\Models\Cart;
use App\Models\Product2;

use Illuminate\Support\Facades\Auth;

class WishlistComponent extends Component
{
    public $qty;

    public function render(Request $request)
    {        
        $wishlist=[]; 
        $count = 0;

        if(Auth::check())
        {

            $wish = Wishlist::where('user_id',Auth::user()->id)->get();
          // dd($wish);
            $product_ids = $wish->pluck('product_id')->toArray();
             //  dd($product_ids);
            $wishlist = Product2::whereIn('id',$product_ids)->get();
            $count = Wishlist::where('user_id',Auth::user()->id)->get()->count();
            foreach($wishlist as $item){
             $dffg=    Wishlist::where('user_id',Auth::user()->id)->where('product_id',$item->id)->first();

                $item['qty'] = $dffg->quantity;
            }   

        }else{
            if (Session::has('wishlist')){
                $wish = $request->session()->get('wishlist');
                $product_ids = array_keys($wish);
                $wishlist = Product2::whereIn('id',$product_ids)->get();
               
                $count = $wishlist->count();
                foreach($wishlist as $item){
                    $item['qty'] = $wish[$item->id]['quantity'];
                }   
            }
        }
        return view('livewire.frontend.wishlist-component',['wishlist'=>$wishlist,'count'=>$count])->layout('layouts.main');
    }


    

    public function removeFromWishlist(Request $request,$product_id)
    {
        if(Auth::check()){
                $wishlist = Wishlist::where('product_id',$product_id)->where('user_id',Auth::user()->id)->first();
                if($wishlist){
                    $wishlist->delete();
                    session()->flash('message','product remove from wishlist');
                    //$this->dispatch('wishlist-count-component','refreshComponent');
                    $this->dispatch('wishlist_add');
                    return;
                }
        }else{
            if (Session::has('wishlist')){

                $wishlistdf = $request->session()->get('wishlist');
                unset($wishlistdf[$product_id]);
                Session()->put('wishlist', $wishlistdf);
            // dd($wishlistdf);
            session()->flash('message','product remove from wishlist');
           // $this->dispatch('wishlist-count-component','refreshComponent');
           $this->dispatch('wishlist_add');
            return;

            }
        }
        return;
    }

    public function EmptyWishlist(Request $request)
    {
        if(Auth::check()){
            $wishlist = Wishlist::where('user_id',Auth::user()->id)->get();
            if($wishlist[0]){
                foreach($wishlist as $item){
                    $ewishlist = Wishlist::find($item->id);
                    $ewishlist->delete();
                }
                
                session()->flash('message','product remove from wishlist');
               // $this->dispatch('wishlist-count-component','refreshComponent');
               $this->dispatch('wishlist_add');
                return;
            }
        }else{
            if (Session::has('wishlist')){

                Session::forget('wishlist');
            session()->flash('message','product remove from wishlist');
           // $this->dispatch('wishlist-count-component','refreshComponent');
           $this->dispatch('wishlist_add');
            return;

            }
        }
        return;
    }

    public function MoveTOCart(Request $request,$id)
    {
        if(Auth::check()){
            $wishlist = Wishlist::where('user_id',Auth::user()->id)->where('product_id',$id)->first();
            if($wishlist){
                
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->product_id = $wishlist->product_id;
                $cart->product_name = $wishlist->product_name;
                $cart->product_image = $wishlist->product_image;
                $cart->price = $wishlist->price;
                $cart->quantity = $wishlist->quantity;
                $cart->save();
                
                $wishlist->delete();
                
                session()->flash('message','product move to  cart from wishlist');
              //  $this->dispatch('wishlist-count-component','refreshComponent');
              $this->dispatch('cart_add');
                return;
            }
        }else{
            if (Session::has('wishlist')){
                $wishlistdf = $request->session()->get('wishlist');
                if($wishlistdf[$id]){
                    $cart = $request->session()->get('cart');
                    $ghj = $wishlistdf[$id];
// dd($ghj['product_name']);               
                    $cart[$id] = [
                        'product_id' => $ghj['product_id'],
                        'product_name' => $ghj['product_name'],
                        'product_image' => $ghj['product_image'],
                        'quantity' => $ghj['quantity'],
                        'price' => $ghj['price']
                    ];
                    $request->Session()->put('cart', $cart);
                    unset($wishlistdf[$id]);
                    Session()->put('wishlist', $wishlistdf);
                }

                
            session()->flash('message','product remove from wishlist');
           // $this->dispatch('wishlist-count-component','refreshComponent');
           $this->dispatch('cart_add');
            return;

            }
        }
        return;
    }
}

<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Product;
use App\Models\Product2;
use App\Models\ProductVariant;
use App\Models\Wishlist;
use App\Models\Cart;
use Illuminate\Http\Request;
use Session;
use App\Models\review;
use App\Models\Question;


use Illuminate\Support\Facades\Auth;

class ProductDetailsComponent extends Component
{
    public $slug;
    public $quntiti;
    public $wish;
    public $pid;
    public $question;
    
    public function mount($slug)
    {
        $this->slug = $slug;
        $this->quntiti = 1; 
    }
     public function checkout(Request $request,$id,$sale_price){
        if(!Auth::check())
        {
            $this->dispatch('show-edit-post-modal');
            return;
        }
        else{
            $this->AddtoCart($request,$id,$sale_price);
            return $this->redirect('/check-out');
        }
    }
    public function askQuestion($id){
        if(!Auth::check())
        {
            $this->dispatch('show-edit-post-modal');
            return;
        }
        else{
            $this->pid=$id;
            $this->dispatch('openquestionModal');
        }
    }
    public function storeQuestion(){
        $this->validate([
            'question'=>'required',
        ]);
        $question =new Question();
        $question->product_id=$this->pid;
        $question->quser_id=Auth::id();
        $question->question= $this->question;
        $question->save();
        Session()->flash('message','Question has been Submited Successfully');
    }

    public function addToWishlist(Request $request,$product_id,$product_price)
    {
        $id= $product_id;
        if(Auth::check())
        {
            $wproduct = Wishlist::where('product_id',$product_id)->first();
            if($wproduct){
                session()->flash('message','product alreday added to wishlist');
                return;
            }else{
                $product = Product2::where('id', $product_id)->first();
                $wishlist = new Wishlist();
                $wishlist->user_id = Auth::user()->id;
                $wishlist->product_id = $product_id;
                $wishlist->product_name = $product->name;
                $wishlist->product_image = $product->image;
                $wishlist->price = $product->sale_price;
                $wishlist->quantity = $this->quntiti;
                $wishlist->save();
                session()->flash('message','product added to wishlist');
                // $this->dispatch('wishlist-count-component');
                $this->dispatch('wishlist_add');
                return;
            }
        }else{
            $product = Product2::where('id', $product_id)->first();
            $wishlist = $request->session()->get('wishlist');

                if ($product->sale_price == null) {
                    $wishlist[$id] = [
                        'product_id' => $product->id,
                        'product_name' => $product->name,
                        'product_image' => $product->image,
                        'quantity' => $this->quntiti,
                        'price' => $product->regular_price
                    ];
                    $request->Session()->put('wishlist', $wishlist);
                    return response::json(['success' => 'Successfully Added to wishlist']);

                } else {
                    $wishlist[$id] = [
                        'product_id' => $product->id,
                        'product_name' => $product->name,
                        'product_image' => $product->image,
                         'quantity' => $this->quntiti,
                        'price' => $product->sale_price
                    ];
                    Session()->put('wishlist', $wishlist);
                   
                    session()->flash('message','product adde dto wishlist');

                }
            session()->flash('message','product alre adde dto wishlist');
            $this->dispatch('wishlist_add');

        }
      
        //  $this->dispatch('wishlist-count-component','refreshComponent');
        return;
    }
    
    public function removeFromWishlist(Request $request,$product_id)
    {
        if(Auth::check()){
                $wishlist = Wishlist::where('product_id',$product_id)->where('user_id',Auth::user()->id)->first();
                if($wishlist){
                    $wishlist->delete();
                    session()->flash('message','product remove from wishlist');
                    // $this->dispatch('wishlist-count-component','refreshComponent');
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
             $this->wish = '';
            $this->dispatch('wishlist_add');
            return;

            }
        }
        return;
    }
    public function AddtoCart(Request $request,$product_id,$product_price)
    {
        $id= $product_id;
        if(Auth::check())
        {
            $wproduct = Cart::where('product_id',$product_id)->first();
            if($wproduct){
                session()->flash('message','product alreday added to Cart');
                return;
            }else{
                $product = Product2::where('id', $product_id)->first();
                if($this->quntiti >= $product->quantity)
                {
                    session()->flash('message','Item Quantity is not perest');
                    return;
                }else{
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->product_id = $product_id;
                $cart->product_name = $product->name;
                $cart->product_image = $product->image;
                $cart->price = $product->sale_price;
                $cart->quantity = $this->quntiti;
                $cart->save();
                session()->flash('message','product added to wishlist');
                // $this->dispatch('wishlist-count-component','refreshComponent');
                $this->dispatch('cart_add');
                return;
                }
            }
        }else{
            $product = Product2::where('id', $product_id)->first();
            $cart = $request->session()->get('cart');

                if ($product->sale_price == null) {
                    $cart[$id] = [
                        'product_id' => $product->id,
                        'product_name' => $product->name,
                        'product_image' => $product->image,
                        'quantity' => $this->quntiti,
                        'price' => $product->regular_price
                    ];
                    $request->Session()->put('cart', $cart);
                    return response::json(['success' => 'Successfully Added to Cart']);

                } else {
                    $cart[$id] = [
                        'product_id' => $product->id,
                        'product_name' => $product->name,
                        'product_image' => $product->image,
                         'quantity' => $this->quntiti,
                        'price' => $product->sale_price
                    ];
                    Session()->put('cart', $cart);
                   
                    session()->flash('message','product adde dto CArt');

                }
            session()->flash('message','product already add to Cart');
            $this->dispatch('cart_add');
        }
      
        //  $this->dispatch('wishlist-count-component','refreshComponent');
        return;
    }
    public function render(Request $request)
    {
        // dd($this->quntiti);
        $product= Product2::where('slug',$this->slug)->first();
       // dd($product);
       if($product->parent_id){
        $varaiants = Product2::where('parent_id',$product->parent_id)->orWhere('id',$product->parent_id)->get();
       }else{
        $varaiants = Product2::where('parent_id',$product->id)->get();
       }
        //dd($varaiants);
        if(Auth::check())
        {
            $wishlist = Wishlist::where('user_id',Auth::user()->id)->where('product_id',$product->id)->first();  
            if($wishlist){
                $this->wish = 1;
            } 

        }else{
            if (Session::has('wishlist')){
                $wish = $request->session()->get('wishlist');
                $product_ids = array_keys($wish);
                // in_array("100", $marks)
               // $wishlist = Product2::whereIn('id',$product_ids)->get();
                if(in_array($product->id, $product_ids)){
                    $this->wish = 1;
                } 
   
            }
        }
        $reviews=review::where('product_id',$product->id)->where('verified',1)->get();
        $questions = Question::where('product_id',$product->id)->get();
        
        
        return view('livewire.frontend.product-details-component',['product'=>$product,'varaiants'=>$varaiants,'reviews'=>$reviews,'questions'=>$questions])->layout('layouts.main');
    }
}

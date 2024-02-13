<div>
    <section class="section-padding mt-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-9">
                    <div class="cart_product">
                        <div class="cart_product_heading">
                            <div class="row align-items-center">
                                <div class="col-sm-6 text-lg-left">
                                    <h4>Shopping Cart
                                        <span>( {{$count}} Item )</span>
                                        
                                    </h4>
                                    <span class="text-danger">( {{$uploadper}} Med Prescription Required )</span>
                                </div>
                                <div class="col-sm-6 text-lg-right">
                                    <a href="#" wire:click.prevent="EmptyCart" class="btn btn-light btn-medium button-sm d-none d-md-inline-block"><i class="ti-trash"></i> Empty
                                        Cart</a>
                                </div>
                            </div>
                        </div>
                        @if(Session::has('message'))
						<div class="alert alert-success">
							<strong>Alert</strong>{{Session::get('message')}}
						</div>
					    @endif
                        @foreach($cart as $item)
                            <div class="cart_item">
                                <div class="cart_item_image">
                                    <img src="{{asset('admin/product/feat')}}/{{$item->image}}" alt="shop">
                                </div>
                                <div class="c-item-body mt-4 mt-md-0">
                                    <div class="cart_item_title mb-2">
                                        <a href="{{route('product-details',['slug'=>$item->slug])}}">
                                            <h4>{{$item->name}}</h4>
                                        </a>
                                        <div>@if($item->prescription)<span class="text-danger">Prescription Required for this Med</span> @endif</div>
                                        <p class="small mb-0 text-muted">{{$item->varaint_detail}}</p>
                                    </div>
                                    <div class="cart_item_price">
                                        <div class="product-price">
                                            <span>
                                                <strong>₹{{$item->sale_price}} </strong>
                                                <del>₹{{$item->regular_price}}</del>
                                                <small class="product-discountPercentage">({{$item->discount_value}}% OFF)</small>
                                            </span>
                                        </div>
                                        <div class="cart_product_remove">
                                            <a href="#" wire:click.prevent="removeFromCart({{$item->id}})"><i class="ti-trash"></i> Remove</a>
                                            @auth
                                            <a href="#" wire:click.prevent="Savetolater({{$item->id}})"><i class="ti-trash"></i> Save To Later</a>
                                                @endauth
                                        </div>      
                                       
                                    </div>
                                </div>
                                @if(Auth::check())

                                    @if($item->stock_status === "instock" )
                                    <div class="qty-input btn mt-4 mt-md-0">
                                        <a class="btn btn-increase" href="#" wire:click.prevent="decreaseQuantity('{{$item->id}}')">-</a>
                                        <input type="text" name="product-quatity" value="{{$item->qty}}" data-max="5" pattern="[0-9]*" >
                                        @if(($item->quantity - $item->qty) > 3)
                                        <a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{$item->id}}')">+</a>
                                        <input class="frm-input " value="1" type="hidden" id ="outofqty" name="outofqty" wire:model="out_of_qty">
                                        @php $this->out_of_qty = "" @endphp
                                        @endif
                                    </div>
                                    @if(($item->quantity - $item->qty) < 4)
                                    <div><input class="frm-input " value="1" type="hidden" id ="outofqty" name="outofqty" wire:model="out_of_qty">
                                    @php $this->out_of_qty = 2 @endphp
                                        <p>This Qunatity is not present </p></div>
                                    @endif
                                    @else
                                    <input class="frm-input" value="1" type="hidden" name="outofsctock" wire:model="out_of_stock">
                                    @php $this->out_of_stock = 2 @endphp
                                    <p> Out of Stock</p>
                                    @endif
                                @else
                                @if($item->stock_status === "instock" )
                                <div class="qty-input btn mt-4 mt-md-0">
                                    <a class="btn btn-increase" href="#" wire:click.prevent="decreaseQuantity('{{$item->id}}')">-</a>
                                    <input type="text" name="product-quatity" value="{{$item->qty}}" data-max="5" pattern="[0-9]*" >
                                   
                                    <a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{$item->id}}')">+</a>
                                    
                                </div>
                                
                                @else
                                <p> Out of Stock</p>
                                @endif
                                @endif
                            </div>
                        @endforeach
                        
                    </div>
                    @if(isset($savelater[0]))
                    <div class="cart_product">
                        <div class="cart_product_heading">
                            <div class="row align-items-center">
                                <div class="col-sm-6 text-lg-left">
                                    <h4>Save for Later
                                        <span>( {{$savelater->count()}} Item )</span>
                                    </h4>
                                </div>
                                <div class="col-sm-6 text-lg-right">
                                    <a href="#" wire:click.prevent="EmptySaveforlater" class="btn btn-light btn-medium button-sm d-none d-md-inline-block"><i class="ti-trash"></i> Empty
                                        SaveForLater</a>
                                </div>
                            </div>
                        </div>
                        @foreach($savelater as $item)
                            <div class="cart_item">
                                <div class="cart_item_image">
                                    <img src="{{asset('admin/product/feat')}}/{{$item->product->image}}" alt="shop">
                                </div>
                                <div class="c-item-body mt-4 mt-md-0">
                                    <div class="cart_item_title mb-2">
                                        <a href="{{route('product-details',['slug'=>$item->product->slug])}}">
                                            <h4>{{$item->product->name}}</h4>
                                        </a>
                                        <p class="small mb-0 text-muted">{{$item->product->varaint_detail}}</p>
                                    </div>
                                    <div class="cart_item_price">
                                        <div class="product-price">
                                            <span>
                                                <strong>₹{{$item->product->sale_price}} </strong>
                                                <del>₹{{$item->product->regular_price}}</del>
                                                <small class="product-discountPercentage">({{$item->product->discount_value}}% OFF)</small>
                                            </span>
                                        </div>
                                        <div class="cart_product_remove">
                                            <a href="#" wire:click.prevent="removeFromsavelater({{$item->id}})"><i class="ti-trash"></i> Remove</a>
                                            <a href="#" wire:click.prevent="MovetoCart({{$item->id}})"><i class="ti-trash"></i> Move To Cart</a>
                                        </div>      
                                        
                                    </div>
                                </div>
                                
                            </div>
                        @endforeach
                        
                    </div>
                    @endif
                </div>
                <div class="col-lg-3 mt-lg-0 mt-6">
                    @if(Session::has('coupon_message'))
                        <div class="alert alert-success">
                            {{Session::get('coupon_message')}}
                        </div>
                    @endif
                    <form wire:submit.prevent="applyCouponCode">
                        <h6 class="font-weight-bold">ApplY Coupon</h6>
                        <div class="mb-4">
                            <input type="text"  name="coupon-code" class="form-control" wire:model="CouponCode">
                            @error('CouponCode') <span class="text-danger">{{$message}}</span> @enderror
                                <!-- <label>Apply</label> -->
                        </div>
                        
                        @if($discount)
                            <a href ="#" wire:click.prevent="removeCoupon"><i class="fa fa-times text-danger">Remove Coupon</i></a>
                        @else
                            <button type="submit" class="btn btn-small">Apply</button>
                        @endif
					</form>
                    <div class="cart-summary">
                        <div class="cart-summary-wrap">
                            <h4>Cart Summary</h4>
                            <p>Sub Total <span>₹{{$subtotalc}}</span></p>
                            {{-- <p>Tax <span>₹{{$taxtotalc}}</span></p> --}}
                            @if($discount)
                            <p>Coupon Discount <span>₹{{$discount}}</span></p>
                            @endif
                            <p>Shipping Cost <span>₹{{$shippingcost}}</span></p>
                            <h2>Grand Total <span>₹{{$subtotalc + $shippingcost}}</span></h2>
                        </div>
                        @if($uploadper > 0)
                            <div class="cart-summary-button">
                                <a href="#" wire:click.prevent="prcheckout" id = "sbhjs" class="btn btn-primary btn-rounded btn-full btn-large">Upload Prescription <i class="ti-arrow-right"></i> </a>
                            </div>
                        @else
                            <div class="cart-summary-button">
                                <a href="#" wire:click.prevent="checkout" id = "sbhjs" class="btn btn-primary btn-rounded btn-full btn-large">Proceed to Checkout <i class="ti-arrow-right"></i> </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@push('scripts')
    <script>
        
            // $('#sbhjs').on('click',function(ev){
            //     //alert('gfhfgh');
            //     var data = $('#outofsctock').val();
            //     alert(data);
            //     @this.set('out_of_stock',data);
            // });

            // $('#sbhjs').on('click',function(ev){
            //     //alert('gfhfgh');
            //     var data = $('#outofqty').val();
            //     alert(data);
            //     @this.set('out_of_qty','1');
            // });
        
            window.addEventListener('show-edit-post-modal', event => {
                $('#login_modal').modal('show');
            });
    </script>
@endpush
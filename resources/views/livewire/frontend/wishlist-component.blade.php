<div>
    <section class="section-padding mt-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-9">
                    <div class="cart_product">
                        <div class="cart_product_heading">
                            <div class="row align-items-center">
                                <div class="col-sm-6 text-lg-left">
                                    <h4>Shopping Wishlist
                                        <span>( {{$count}} Item )</span>
                                    </h4>
                                </div>
                                <div class="col-sm-6 text-lg-right">
                                    <a href="#" wire:click.prevent="EmptyWishlist" class="btn btn-light btn-medium button-sm d-none d-md-inline-block"><i class="ti-trash"></i> Empty
                                        Wishlist</a>
                                </div>
                            </div>
                        </div>
                        @foreach($wishlist as $item)
                            <div class="cart_item">
                                <div class="cart_item_image">
                                    <img src="{{asset('admin/product/feat')}}/{{$item->image}}" alt="shop">
                                </div>
                                <div class="c-item-body mt-4 mt-md-0">
                                    <div class="cart_item_title mb-2">
                                        <h4>{{$item->name}}</h4>
                                        <p class="small mb-0 text-muted">{{$item->varaint_detail}}</p>
                                        <div class="cart_item_price">
                                            <div class="product-price">
                                                <span>
                                                    <strong>₹{{$item->sale_price}} </strong>
                                                    <del>₹{{$item->regular_price}}</del>
                                                    <small class="product-discountPercentage">({{$item->discount_value}}% OFF)</small>
                                                </span>
                                            </div>
                                            <div class="cart_product_remove">
                                                <a href="#" wire:click.prevent="removeFromWishlist({{$item->id}})">
                                                    <i class="ti-trash"></i> Remove</a>
                                            </div>
                                            <div>
                                            <a href="#" wire:click.prevent="MoveTOCart({{$item->id}})">
                                                    <i class="ti-trash"></i> Move to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="qty-input btn mt-4 mt-md-0">
                                    <i class="less">-</i>
                                    <input type="text" value="{{$item->qty}}"  name="product-quatity"/>
                                    <i class="more">+</i>
                                </div>
                            </div>
                        @endforeach
                        <div class="cart_item">
                            <div class="cart_item_image">
                                <img src="{{asset('assets/img/product/product-2.png')}}" alt="shop">
                            </div>
                            <div class="c-item-body  mt-4 mt-md-0">
                                <div class="cart_item_title mb-2">
                                    <h4>1mg Salmon Omega 3 Fish Oil Capsule</h4>
                                    <p class="small mb-0 text-muted">bottle of 60 capsules</p>
                                </div>
                                <div class="cart_item_price">
                                    <div class="product-price">
                                        <span>
                                        <strong>₹499 </strong>
                                            <del>₹1,000</del>
                                            <small class="product-discountPercentage">(50% OFF)</small>
                                        </span>
                                    </div>
                                    <div class="cart_product_remove">
                                        <a href="#">
                                            <i class="ti-trash"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="qty-input btn  mt-4 mt-md-0">
                                <i class="less">-</i>
                                <input type="text" value="2" />
                                <i class="more">+</i>
                            </div>
                        </div>
                        <div class="cart_item">
                            <div class="cart_item_image">
                                <img src="{{asset('assets/img/product/product-3.png')}}" alt="shop">
                            </div>
                            <div class="c-item-body  mt-4 mt-md-0">
                                <div class="cart_item_title mb-2">
                                    <h4>1mg Salmon Omega 3 Fish Oil Capsule</h4>
                                    <p class="small mb-0 text-muted">bottle of 60 capsules</p>
                                </div>
                                <div class="cart_item_price">
                                    <div class="product-price">
                                        <span>
                                        <strong>₹499 </strong>
                                            <del>₹1,000</del>
                                            <small class="product-discountPercentage">(50% OFF)</small>
                                        </span>
                                    </div>
                                    <div class="cart_product_remove">
                                        <a href="#">
                                            <i class="ti-trash"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="qty-input btn mt-4 mt-md-0">
                                <i class="less">-</i>
                                <input type="text" value="2" />
                                <i class="more">+</i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 mt-lg-0 mt-6">
                    <h6 class="font-weight-bold">Deliver to</h6>
                    <div class="mb-4">
                        <select class="form-control">
                            <option value="s">Siliguri - 734001</option>
                            <option value="s" selected>Delhi - 110002</option>
                            <option value="s">Kolkata - 700027</option>
                        </select>
                    </div>
                    <div class="cart-summary">
                        <div class="cart-summary-wrap">
                            <h4>Cart Summary</h4>
                            <p>Sub Total <span>$1250.00</span></p>
                            <p>Shipping Cost <span>$00.00</span></p>
                            <h2>Grand Total <span>$1250.00</span></h2>
                        </div>
                        <div class="cart-summary-button">
                            <a href="{{route('check-out')}}" class="btn btn-primary btn-rounded btn-full btn-large">Proceed to Checkout <i class="ti-arrow-right"></i> </a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
</div>

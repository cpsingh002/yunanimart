<li class="dropdown head-cart-content">
                    <button id="dropdownCartButton" class="btn dropdown-toggle" type="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="list-icon">
                            <i class="ti-bag"></i>
                        </div>
                    

                        <span class="badge badge-secondary">{{$count}}</span>
                    </button>

                    <div class="shopping-cart shopping-cart-empty dropdown-menu dropdown-menu-right"
                        aria-labelledby="dropdownMenuButton">
                        <!-- <ul class="shopping-cart-items">
                            <li>You have no items in your shopping cart.</li>
                        </ul> -->

                        <ul class="shopping-cart-items">
                            @foreach($wishlist as $item )
                            <li class="mini_cart_item">
                                <div class="left-section">
                                    <a href="product-single.html">
                                        <img src="{{asset('admin/product/feat')}}/{{$item['product_image']}}" alt="">
                                    </a>
                                </div>
                                <div class="right-section">
                                    {{$item['product_name']}}
                                    <div>
                                        <div class="item-desc">Qty: {{$item['quantity']}}</div>
                                        <div class="item-desc">₹ {{$item['price']}}</div>
                                    </div>
                                </div>			
                            </li>
                            @endforeach
                            
                            <li class="w-100 d-block">
                                <a href="{{route('wishlist')}}" class="btn btn-primary w-100 d-block">
                                    Proceed to Wishlist
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
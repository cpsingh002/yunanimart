<li class="dropdown head-cart-content">
    <button id="dropdownCartButton" class="btn dropdown-toggle" type="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div class="list-icon">
            <i class="ti-bag"></i>
        </div>
    

        <span class="badge badge-secondary">{{$cartcount}}</span>
    </button>

    <div class="shopping-cart shopping-cart-empty dropdown-menu dropdown-menu-right"
        aria-labelledby="dropdownMenuButton">
        <!-- <ul class="shopping-cart-items">
            <li>You have no items in your shopping cart.</li>
        </ul> -->

        <ul class="shopping-cart-items">
            @foreach($cartlist as $item )
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
            <li class="mini_cart_item">
                <div class="left-section">
                    <a href="product-single.html">
                        <img src="{{asset('assets/img/product/product-1.png')}}" alt="">
                    </a>
                </div>
                <div class="right-section">
                    TruRadix Curcumin Oral Strip Orange Mango
                    <div>
                        <div class="item-desc">Qty: 1</div>
                        <div class="item-desc">₹ 237</div>
                    </div>
                </div>			
            </li>
            <li class="w-100 d-block">
                <a href="{{route('cart')}}" class="btn btn-primary w-100 d-block">
                    Proceed to Cart
                </a>
            </li>
        </ul>
    </div>
</li>
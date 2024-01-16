<div class="col">
    <div class="header-search">
        <form action="#">
            <input class="form-control custom-search" name="search" value="{{$searchj}}"  placeholder="Search for Medicines and Health Products" type="text"  wire:model ="searchj" wire:keyup="productcheck">
        </form>
        <div class="search-content" >
            <div class="search-product d-none">
                @foreach($products as $product)
                    <div class="product list-view">
                        <a href="{{route('product-details',['slug'=>$product->slug])}}" class="product-img">
                            <img src="{{asset('admin/product/feat')}}/{{$product->image}}" class="" alt="" width="48" height="92">
                        </a>
                        <div class="product-info">
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                                <div class="review-count">4.5 (2,213)</div>
                            </div>
                            <h3>
                                <a href="{{route('product-details',['slug'=>$product->slug])}}">{{$product->name}}</a>
                            </h3>
                            <div class="product-value">
                                <div class="d-flex">
                                    <small class="regular-price">MRP <del>₹{{$product->regular_price}}</del></small>
                                    <div class="off-price">23% off</div>
                                </div>
                                <div class="current-price">₹{{$product->sale_price}}</div>
                            </div>
                        </div>
                        <!-- <div class="product-actions">
                            <a href="#" class="btn btn-soft-primary">
                                <i class="ti-heart"></i>
                                Add to Wishlist
                            </a>
                            <a href="#" class="btn btn-primary">
                                <i class="ti-shopping-cart"></i>
                                Add to cart
                            </a>
                        </div> -->
                    </div>

                @endforeach
                {{-- <div class="product list-view">
                    <a href="product-single.html" class="product-img">
                        <img src="{{asset('assets/img/product/product-1.png')}}" class="" alt="">
                    </a>
                    <div class="product-info">
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                            <div class="review-count">4.5 (2,213)</div>
                        </div>
                        <h3>
                            <a href="product-single.html">CoviFind Covid 19 Antigen Self Test Kit</a>
                        </h3>
                        <div class="product-value">
                            <div class="d-flex">
                                <small class="regular-price">MRP <del>₹2540.99</del></small>
                                <div class="off-price">23% off</div>
                            </div>
                            <div class="current-price">₹1007.99</div>
                        </div>
                    </div>
                    <div class="product-actions">
                        <a href="#" class="btn btn-soft-primary">
                            <i class="ti-heart"></i>
                            Add to Wishlist
                        </a>
                        <a href="#" class="btn btn-primary">
                            <i class="ti-shopping-cart"></i>
                            Add to cart
                        </a>
                    </div>
                </div>
                <div class="product list-view">
                    <a href="product-single.html" class="product-img">
                        <img src="{{asset('assets/img/product/product-2.png')}}" class="" alt="">
                    </a>
                    <div class="product-info">
                        <div class="product-rating">
                            <span>No reating</span>
                        </div>
                        <h3>
                            <a href="product-single.html">CoviFind Covid 19 Antigen Self Test
                                Kit</a>
                        </h3>
                        <div class="product-value">
                            <div class="d-flex">
                                <small class="regular-price">MRP <del>₹205.99</del></small>
                                <div class="off-price">43% off</div>
                            </div>
                            <div class="current-price">₹270.99</div>
                        </div>
                    </div>
                    <div class="product-actions">
                        <a href="#" class="btn btn-soft-primary">
                            <i class="ti-heart"></i>
                            Add to Wishlist
                        </a>
                        <a href="#" class="btn btn-primary">
                            <i class="ti-shopping-cart"></i>
                            Add to cart
                        </a>
                    </div>
                </div>
                <div class="product list-view">
                    <a href="product-single.html" class="product-img">
                        <img src="{{asset('assets/img/product/product-3.png')}}" class="" alt="">
                    </a>
                    <div class="product-info">
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                            <div class="review-count">4.5 (2,213)</div>
                        </div>
                        <h3>
                            <a href="product-single.html">CoviFind Covid 19 Antigen Self Test
                                Kit</a>
                        </h3>
                        <div class="product-value">
                            <div class="d-flex">
                                <small class="regular-price">MRP <del>₹270.99</del></small>
                                <div class="off-price">3% off</div>
                            </div>
                            <div class="current-price">₹260.99</div>
                        </div>
                    </div>
                    <div class="product-actions">
                        <a href="#" class="btn btn-soft-primary">
                            <i class="ti-heart"></i>
                            Add to Wishlist
                        </a>
                        <a href="#" class="btn btn-primary">
                            <i class="ti-shopping-cart"></i>
                            Add to cart
                        </a>
                    </div>
                </div>
                <div class="product list-view">
                    <a href="product-single.html" class="product-img">
                        <img src="{{asset('assets/img/product/product-4.png')}}" class="" alt="">
                    </a>
                    <div class="product-info">
                        <div class="product-rating">
                            <span>No reating</span>
                        </div>
                        <h3>
                            <a href="product-single.html">CoviFind Covid 19 Antigen Self Test
                                Kit</a>
                        </h3>
                        <div class="product-value">
                            <div class="d-flex">
                                <small class="regular-price">MRP <del>₹2780.99</del></small>
                                <div class="off-price">30% off</div>
                            </div>
                            <div class="current-price">₹2377.99</div>
                        </div>
                    </div>
                    <div class="product-actions">
                        <a href="#" class="btn btn-soft-primary">
                            <i class="ti-heart"></i>
                            Add to Wishlist
                        </a>
                        <a href="#" class="btn btn-primary">
                            <i class="ti-shopping-cart"></i>
                            Add to cart
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
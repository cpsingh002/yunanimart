<div>
    <section class="section-padding mt-4">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    
                    <div class="product-details-slider-area" wire:ignore>
                        <div class="big-image-wrapper">
                            <div class="product-details-big-image-slider-wrapper slider-for" data-autoplay="false"
                                data-nav="false">
                                <div class="single-image">
                                    <img src="{{asset('admin/product/feat')}}/{{$product->image}}" alt="slider">
                                </div>
                                @php
                                    $images = explode(",",$product->images);
                                @endphp
                                @foreach($images as $image)
                                    @if($image)
                                        <div class="single-image">
                                            <img src="{{asset('admin/product')}}/{{$image}}" alt="slider">
                                        </div>
                                    @endif
                                @endforeach
                                
                            </div>
                            <div class="slider-nav product-details-small-image-slider-wrapper" data-slides-to-show="3"
                                data-autoplay="false" data-slick-center-mode="true" data-nav="false">
                                <div class="single-image">
                                    <img src="{{asset('admin/product/feat')}}/{{$product->image}}" alt="slider">
                                </div>
                                @foreach($images as $image)
                                    @if($image)
                                        <div class="single-image">
                                            <img src="{{asset('admin/product')}}/{{$image}}" alt="slider">
                                        </div>
                                    @endif
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-8 mt-4">
                    <div class="row pl-lg-3">
                        <div class="col-lg-7">
                            <div class="single-product-content-description">
                                <p class="single-info">Brands <a href="category.html">{{$product->brand_id}}</a> </p>
                                <h4 class="product-title">{{$product->name}}</h4>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span class="review-count ml-3">4.5 (2,213)</span>
                                </div>
                                <p class="single-grid-product__price"><span class="discounted-price">₹{{$product->sale_price}}</span> <span
                                        class="main-price discounted">₹{{$product->regular_price}}</span></p>

                                <div class="single-info">
                                    <span class="d-block text-muted mb-2"><strong>SKU :</strong> {{$product->SKU}}</span>
                                    <span class="d-block text-muted mb-2"><strong>Category :</strong> {{$product->category_id}}</span>

                                    <span class="d-block text-muted mb-2"><strong>Availability :</strong> {{$product->stock_status}}</span>
                                </div>
                                @if(isset($varaiants[0]))
                                    <div class="varient mt-4">
                                        <h6 class="font-weight-bold text-dark mb-3">Product Varient</h6>
                                        <div class="row box-checkbox">
                                        <label tabindex="0">
                                                <input tabindex="-1" type="checkbox" checked name="" />
                                                <div class="icon-box">
                                                    <div class="label">{{$product->varaint_detail}}</div>
                                                    <span class="value">₹{{$product->sale_price}}</span>
                                                </div>
                                            </label>
                
                                            @foreach($varaiants as $av)
                                                @if($av->id == $product->id)
                                                @else
                                                    <a href = "{{route('product-details',['slug'=>$av->slug])}}">
                                                        <label tabindex="0">
                                                            
                                                            <div class="icon-box">
                                                                <div class="label">{{$av->varaint_detail}}</div>
                                                                <span class="value">₹{{$av->sale_price}}</span>
                                                            </div>
                                                        </label>
                                                    </a>
                                                @endif
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                @endif

                                <div class="product-actions my-4 justify-content-between">
                                    <!-- Quantity -->
                                    <div class="qty-input btn">
                                        <i class="less quntiti" >-</i>
                                        <input type="text"  name="quntiti" id= "quntiti"  wire:model="quntiti"/>
                                        <i class="more quntiti">+</i>
                                    </div>
                                    <!-- End Quantity -->
                                    @if(Session::has('message'))
                                         <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                    @endif
                                   
                                    <div class="product-buttons ml-0 ml-md-3 mt-4 mt-md-0 text-md-left text-center">
                                        @if($wish)
                                        <a class="btn btn-rounded btn-soft-primary mr-2" href="#" wire:click.prevent="removeFromWishlist({{$product->id}})"> <i
                                                class="fa fa-heart"></i> remove To Wishlist</a>
                                            
                                        @else
                                        <a class="btn btn-rounded btn-soft-primary mr-2" href="#" wire:click.prevent="addToWishlist({{$product->id}},{{$product->sale_price}})"> <i
                                                class="fa fa-heart"></i> Add To Wishlist</a>
                                        @endif
                                        
                                        <a class="btn btn-rounded btn-primary" href="#" wire:click.prevent="AddtoCart({{$product->id}},{{$product->sale_price}})"> <i
                                                class="fa fa-shopping-cart"></i> Add To Cart</a>
                                    </div>

                                </div>
                                <div class="mb-4">
                                    <a href="{{route('check-out')}}"
                                        class="btn btn-block btn-primary btn-pill transition-3d-hover">Buy
                                        Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mt-4 mt-lg-0">
                            <div class="bg-light p-3">
                                <h6>Delivery Options</h6>
                                @if($product->freecancellation)
                                <div class="media align-items-center">
                                    <span class="mr-2">
                                        <i class="ti-check text-primary small"></i>
                                    </span>
                                    <div class="media-body text-body small">
                                        <span class="font-weight-bold mr-1">Free Shipping</span>
                                    </div>
                                </div>
                                @endif
                                <div class="media align-items-center">
                                    <span class="mr-2">
                                        <i class="ti-check text-primary small"></i>
                                    </span>
                                    <div class="media-body text-body small">
                                        <span class="font-weight-bold mr-1"> Cash on Delivery Available</span>
                                    </div>
                                </div>
                                <div class="media align-items-center">
                                    <span class="mr-2">
                                        <i class="ti-check text-primary small"></i>
                                    </span>
                                    <div class="media-body text-body small">
                                        <span class="font-weight-bold mr-1"> 14 days Return</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h6 class="font-weight-bold text-dark">Products highlights</h6>
                                {!! $product->short_description !!}
                            </div>
                            <div class="mt-4">
                                <h6 class="font-weight-bold text-dark">Share on</h6>
                                <div class="social-links social-links-dark">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-behance"></i>
                                    </a>

                                </div>
                            </div>
                            <div class="form-group mt-5">
                                <h6 class="font-weight-bold text-dark">Delivery availability</h6>
                                <div class="input-group">
                                    <input type="text" class="form-control custom-location"
                                        placeholder="Delivery Pincode">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white cursor-pointer">
                                            Check
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="product-full-description">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="entry-product-section-heading">Description</h3>
                        <p>{!! $product->description !!}
                        </p>
                        <h3 class="entry-product-section-heading">Additional information</h3>
                        <div class="product-info-sec">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td>Number of Servings</td>
                                        <td>33</td>
                                    </tr>
                                    <tr>
                                        <td>Serving Size</td>
                                        <td>30 g</td>
                                    </tr>
                                    <tr>
                                        <td>Protein per Serving</td>
                                        <td>12 g</td>
                                    </tr>
                                    <tr>
                                        <td>Vegetarian/Non-Vegetarian</td>
                                        <td>Vegetarian</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h2 class="entry-product-section-heading"> Reviews </h2>
                        <div class="row justify-content-between">
                            <div class="col-lg-12">
                                <div class="review_content">
                                    <div class="mb-1">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span class="review-count ml-3">4.5 (2,213)</span>
                                        </div>
                                        <em>Published 54 minutes ago</em>
                                    </div>
                                    <h4>"Commpletely satisfied"</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus
                                        autem, distinctio hic omnis molestiae, perspiciatis deserunt labore nisi
                                        exercitationem non laudantium </p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="review_content">
                                    <div class="mb-1">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span class="review-count ml-3">4.5 (2,213)</span>
                                        </div>
                                        <em>Published 1 day ago</em>
                                    </div>
                                    <h4>"Always the best"</h4>
                                    <p>dolor reiciendis repellat accusantium exercitationem placeat consequatur,
                                        labore laboriosam perferendis in inventore magnam excepturi.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row justify-content-between">
                            <div class="col-lg-12">
                                <div class="review_content">
                                    <div class="mb-1">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span class="review-count ml-3">4.5 (2,213)</span>
                                        </div>
                                        <em>Published 54 minutes ago</em>
                                    </div>
                                    <h4>"Commpletely satisfied"</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus
                                        autem, distinctio hic omnis molestiae, perspiciatis deserunt labore nisi
                                        exercitationem non laudantium </p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="review_content">
                                    <div class="mb-1">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span class="review-count ml-3">4.5 (2,213)</span>
                                        </div>
                                        <em>Published 1 day ago</em>
                                    </div>
                                    <h4>"Always the best"</h4>
                                    <p>dolor reiciendis repellat accusantium exercitationem placeat consequatur,
                                        labore laboriosam perferendis in inventore magnam excepturi.</p>
                                </div>
                            </div>
                        </div>
                        <p class="text-right"><a href="leave-review.html" class="btn btn-primary">Leave a
                                review</a></p>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="single-row-slider-area pt-7">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center mb-4">
                        <h2>Related Products</h2>
                        <p>Mirum est notare quam littera gothica, quam nunc putamus parum
                            claram anteposuerit litterarum formas.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider arrow-light slider-gap" data-slides-to-show="6" data-autoplay="true"
                            data-nav="true" data-dots="false">
                            <div class="product">
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
                                        <a href="product-single.html"> TruRadix Curcumin Oral Strip Orange Mango</a>
                                    </h3>
                                    <div class="product-value">
                                        <div class="d-flex">
                                            <small class="regular-price">MRP <del>₹250.99</del></small>
                                            <div class="off-price">53% off</div>
                                        </div>
                                        <div class="current-price">₹237.99</div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <a href="product-single.html" class="product-img">
                                    <img src="{{asset('assets/img/product/product-2.png')}}" class="" alt="">
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
                                        <a href="product-single.html"> TruRadix Curcumin Oral Strip Orange Mango</a>
                                    </h3>
                                    <div class="product-value">
                                        <div class="d-flex">
                                            <small class="regular-price">MRP <del>₹250.99</del></small>
                                            <div class="off-price">53% off</div>
                                        </div>
                                        <div class="current-price">₹237.99</div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
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
                                        <a href="product-single.html"> TruRadix Curcumin Oral Strip Orange Mango</a>
                                    </h3>
                                    <div class="product-value">
                                        <div class="d-flex">
                                            <small class="regular-price">MRP <del>₹250.99</del></small>
                                            <div class="off-price">53% off</div>
                                        </div>
                                        <div class="current-price">₹237.99</div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <a href="product-single.html" class="product-img">
                                    <img src="{{asset('assets/img/product/product-4.png')}}" class="" alt="">
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
                                        <a href="product-single.html"> TruRadix Curcumin Oral Strip Orange Mango</a>
                                    </h3>
                                    <div class="product-value">
                                        <div class="d-flex">
                                            <small class="regular-price">MRP <del>₹250.99</del></small>
                                            <div class="off-price">53% off</div>
                                        </div>
                                        <div class="current-price">₹237.99</div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <a href="product-single.html" class="product-img">
                                    <img src="{{asset('assets/img/product/product-5.png')}}" class="" alt="">
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
                                        <a href="product-single.html"> TruRadix Curcumin Oral Strip Orange Mango</a>
                                    </h3>
                                    <div class="product-value">
                                        <div class="d-flex">
                                            <small class="regular-price">MRP <del>₹250.99</del></small>
                                            <div class="off-price">53% off</div>
                                        </div>
                                        <div class="current-price">₹237.99</div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <a href="product-single.html" class="product-img">
                                    <img src="{{asset('assets/img/product/product-6.png')}}" class="" alt="">
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
                                        <a href="product-single.html"> TruRadix Curcumin Oral Strip Orange Mango</a>
                                    </h3>
                                    <div class="product-value">
                                        <div class="d-flex">
                                            <small class="regular-price">MRP <del>₹250.99</del></small>
                                            <div class="off-price">53% off</div>
                                        </div>
                                        <div class="current-price">₹237.99</div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <a href="product-single.html" class="product-img">
                                    <img src="{{asset('assets/img/product/product-7.png')}}" class="" alt="">
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
                                        <a href="product-single.html"> TruRadix Curcumin Oral Strip Orange Mango</a>
                                    </h3>
                                    <div class="product-value">
                                        <div class="d-flex">
                                            <small class="regular-price">MRP <del>₹250.99</del></small>
                                            <div class="off-price">53% off</div>
                                        </div>
                                        <div class="current-price">₹237.99</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
</div>

@push('scripts')
    <script>
        
            $('#quntiti').on('change',function(ev){
                //alert('gfhfgh');
                var data = $('#quntiti').val();
                //alert(data);
                @this.set('quntiti',data);
            });

            $('.quntiti').on('click',function(ev){
                //alert('gfhfgh');
                var data = $('#quntiti').val();
               // alert(data);
                @this.set('quntiti',data);
            });
        
        
    </script>
@endpush

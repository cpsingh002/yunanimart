<div>
    @if(isset($sliders[0]))
    <div class="slider" data-autoplay="true" data-autoplay-speed="4000">
           
            @foreach($sliders as $slider)
                
                    <a href="{{$slider->link}}">
                        <img src="{{asset('admin/slider')}}/{{$slider->images}}" alt="" width="1500" height="365">
                    </a>
                
            @endforeach
        <a href="category.html">
            <img src="{{asset('assets/img/slider/slider-1.svg')}}" alt="">
        </a>
        <a href="category.html">
            <img src="{{asset('assets/img/slider/slider-2.jpg')}}" alt="">
        </a>
    </div>
    @endif


     <!-- //categories -->
    <div class="pt-5">
        <div class="py-5 bg-gradient">
            <div class="container-fluid theme-container">
                <div class="row mb-2">
                    <div class="col">
                        <h5 class="product-heading">Popular Category</h5>
                    </div>
                    <div class="col-auto text-md-right">
                        <a href="{{route('shop')}}" class="btn btn-primary btn-sm product-heading-btn">See All</a>
                    </div>
                </div>
                <div class="slider  arrow-light slider-gap" data-slides-to-show="8" data-autoplay="true" data-nav="true"
                    data-dots="false">
                    @foreach($categorys as $category)
                        <div class="product-categories">
                            <a href="{{route('product.category',['category_slug'=>$category->slug])}}" class="product-img ">
                                <img src="{{asset('admin/category')}}/{{$category->categorythum}}" class="" alt="" width="300" height="262">
                            </a>
                            <a href="{{route('shop')}}" class="product-info">
                                {{$category->name}}
                            </a>
                        </div>
                    @endforeach
                    @foreach($subcategorys as $scategory)
                        <div class="product-categories">
                            <a href="{{route('shop')}}" class="product-img ">
                                <img src="{{asset('admin/category')}}/{{$scategory->categorythum}}" class="" alt="" width="300" height="262">
                            </a>
                            <a href="{{route('shop')}}" class="product-info">
                                {{$scategory->name}}
                            </a>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>

    <!-- //category -->
    <!-- <div class="pt-5">
        <div class="container-fluid theme-container">
            <div class="slider  arrow-light slider-gap" data-slides-to-show="4" data-autoplay="true" data-nav="true"
                data-dots="false">
                <div class="product-categories-grid">
                    <div class="product-img">
                        <img src="{{asset('assets/img/category/category-1.png')}}" class="" alt="">
                        <div class="cat-info">
                            <h5 class="cat-name">
                                Tetanus Injection
                            </h5>
                            <a href="category.html" class="cat-link">
                                View All <i class="ti-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="product-categories-grid">
                    <div class="product-img">
                        <img src="{{asset('assets/img/category/category-2.png')}}" class="" alt="">
                        <div class="cat-info">
                            <h5 class="cat-name">
                                Darjeeling Teas
                            </h5>
                            <a href="category.html" class="cat-link">
                                View All <i class="ti-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="product-categories-grid">
                    <div class="product-img">
                        <img src="{{asset('assets/img/category/category-3.png')}}" class="" alt="">
                        <div class="cat-info">
                            <h5 class="cat-name">
                                Whey Protein
                            </h5>
                            <a href="category.html" class="cat-link">
                                View All <i class="ti-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="product-categories-grid">
                    <div class="product-img">
                        <img src="{{asset('assets/img/category/category-4.png')}}" class="" alt="">
                        <div class="cat-info">
                            <h5 class="cat-name">
                                Sport Nutrition
                            </h5>
                            <a href="category.html" class="cat-link">
                                View All <i class="ti-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="product-categories-grid">
                    <div class="product-img">
                        <img src="{{asset('assets/img/category/category-5.png')}}" class="" alt="">
                        <div class="cat-info">
                            <h5 class="cat-name">
                                Covid Masks
                            </h5>
                            <a href="category.html" class="cat-link">
                                View All <i class="ti-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="product-categories-grid">
                    <div class="product-img">
                        <img src="{{asset('assets/img/category/category-6.png')}}" class="" alt="">
                        <div class="cat-info">
                            <h5 class="cat-name">
                                Beauty Serum
                            </h5>
                            <a href="category.html" class="cat-link">
                                View All <i class="ti-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="product-categories-grid">
                    <div class="product-img">
                        <img src="{{asset('assets/img/category/category-7.png')}}" class="" alt="">
                        <div class="cat-info">
                            <h5 class="cat-name">
                                Natural Cream
                            </h5>
                            <a href="category.html" class="cat-link">
                                View All <i class="ti-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="product-categories-grid">
                    <div class="product-img">
                        <img src="{{asset('assets/img/category/category-8.png')}}" class="" alt="">
                        <div class="cat-info">
                            <h5 class="cat-name">
                                Hand Sanitizer
                            </h5>
                            <a href="category.html" class="cat-link">
                                View All <i class="ti-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- //product slider -->
    {{-- <div class="pt-5">
        <div class="container-fluid theme-container">
            <div class="row mb-4">
                <div class="col">
                    <h5 class="product-heading">Flash deals</h5>
                </div>
                <div class="col-auto text-md-right">
                    <a href="category.html" class="btn btn-primary btn-sm product-heading-btn">See All</a>
                </div>
            </div>
            <div class="slider  arrow-light slider-gap" data-slides-to-show="6" data-autoplay="true" data-nav="true"
                data-dots="false">
                <div class="product">
                    <a href="{{route('product-details')}}" class="product-img">
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
                            <a href="{{route('product-details')}}"> TruRadix Curcumin Oral Strip Orange Mango</a>
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
                    <a href="{{route('product-details')}}" class="product-img">
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
                            <a href="{{route('product-details')}}"> TruRadix Curcumin Oral Strip Orange Mango</a>
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
                    <a href="{{route('product-details')}}" class="product-img">
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
                            <a href="{{route('product-details')}}"> TruRadix Curcumin Oral Strip Orange Mango</a>
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
                    <a href="{{route('product-details')}}" class="product-img">
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
                            <a href="{{route('product-details')}}"> TruRadix Curcumin Oral Strip Orange Mango</a>
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
                    <a href="{{route('product-details')}}" class="product-img">
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
                            <a href="{{route('product-details')}}"> TruRadix Curcumin Oral Strip Orange Mango</a>
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
                    <a href="{{route('product-details')}}" class="product-img">
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
                            <a href="{{route('product-details')}}"> TruRadix Curcumin Oral Strip Orange Mango</a>
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
                    <a href="{{route('product-details')}}" class="product-img">
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
                            <a href="{{route('product-details')}}"> TruRadix Curcumin Oral Strip Orange Mango</a>
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
    </div>  --}}

    <!-- //Offer-->
    {{-- <div class="pt-5">
        <div class="offers-list bg-gradient py-5 offers-grid-2">
            <div class="container">
                <ul>
                    <li>
                        <div class="offer-image">
                            <img src="{{asset('assets/img/offer/offer-1.png')}}" alt="">
                        </div>
                        <div class="offer-info">
                            <h2 class="offer-title">
                                True Basics Flat 10% off
                            </h2>
                            <p class="offer-subtitle">
                                Clinically Researched Essentials
                            </p>
                            <a href="category.html" class="btn btn-primary btn-sm">Shop now</a>
                        </div>
                    </li>
                    <li>
                        <div class="offer-image">
                            <img src="{{asset('assets/img/offer/offer-2.png')}}" alt="">
                        </div>
                        <div class="offer-info">
                            <h2 class="offer-title">
                                True Basics Flat 10% off
                            </h2>
                            <p class="offer-subtitle">
                                Clinically Researched Essentials
                            </p>
                            <a href="category.html" class="btn btn-primary btn-sm">Shop now</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}

    <!-- //product Grid -->
    <div class="pt-5">
        <div class="container-fluid theme-container">
            <div class="row mb-4">
                <div class="col">
                    <h5 class="product-heading">Deals of the day</h5>
                </div>
                <div class="col-auto text-md-right">
                    <a href="category.html" class="btn btn-primary btn-sm product-heading-btn">See All</a>
                </div>
            </div>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="product">
                            <a href="{{route('product-details',['slug'=>$product->slug])}}" class="product-img">
                                <img src="{{asset('admin/product/feat')}}/{{$product->image}}" class="" alt="" width="500" height="967">
                            </a>
                            <div class="product-info">
                                <div class="product-rating">
                                    @php
                                    $ratingAvg=$product->reviews->avg('rating') 
                                    @endphp
                                    @foreach(range(1,5) as $i)
                                            @if($ratingAvg > 0)
                                                @if($ratingAvg > 0.5)
                                                <i class="fa fa-star"></i>
                                                @else
                                                    <i class="fa fa-star-half-o"></i>
                                                @endif
                                            @else
                                                <i class="fa fa-star-o"></i>
                                            @endif 
                                            @php $ratingAvg--; @endphp
                                    @endforeach
                                    <div class="review-count">{{number_format($product->reviews->avg('rating'),1)}}  ({{$product->reviews->count()}})</div>
                                </div>
                                <h3>
                                    <a href="{{route('product-details',['slug'=>$product->slug])}}"> {{$product->name}}</a>
                                </h3>
                                <div class="product-value">
                                    <div class="d-flex">
                                        <small class="regular-price">MRP <del>₹{{$product->regular_price}}</del></small>
                                        <div class="off-price">{{$product->discount_value}}% off</div>
                                    </div>
                                    <div class="current-price">₹{{$product->sale_price}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>

    <!-- //brand -->
    <div class="pt-5">
        <div class="py-5 bg-gradient">
            <div class="container-fluid theme-container">
                <div class="row mb-2">
                    <div class="col">
                        <h5 class="product-heading">Popular brands</h5>
                    </div>
                    <div class="col-auto text-md-right">
                        <a href="{{route('product.brands')}}" class="btn btn-primary btn-sm product-heading-btn">See All</a>
                    </div>
                </div>
                <div class="slider arrow-light slider-gap" data-slides-to-show="8" data-autoplay="true" data-nav="true"
                    data-dots="false">
                    @foreach($brands as $brand)
                        <div class="product-brand">
                            <a href="{{route('brand-products',['brand_slug'=>$brand->brand_slug])}}" class="product-img">
                                <img src="{{asset('admin/brand')}}/{{$brand->brand_image}}" class="category-img" alt="" width="200" height="200">
                            </a>
                            <!-- <a href="category.html" class="product-info">
                                Summer Essentials
                            </a> -->
                        </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
    </div>
 <div class="py-5">
        <div class="container-fluid theme-container">
            <div class="row mb-4">
                <div class="col">
                    <h5 class="product-heading">Exclusive Store</h5>
                </div>
                 <div class="col-auto text-md-right">
                    <a href="{{route('shop')}}" class="btn btn-primary btn-sm product-heading-btn">See All</a>
                </div> 
            </div>
            <div class="slider  arrow-light slider-gap" data-slides-to-show="2" data-autoplay="true" data-nav="true"
                data-dots="false">
                @foreach($banners as $banner)
                <div class="product">
                        <a href="{{$banner->link}}" class="product-img-add">
                            <img src="{{asset('admin/banner')}}/{{$banner->images}}" class="" alt="">
                        </a>
                    </div>
                @endforeach
                
            </div>
           {{-- <div class="slider  arrow-light slider-gap" data-slides-to-show="6" data-autoplay="true" data-nav="true"
                data-dots="false">
                @foreach($products as $product)
                    <div class="product">
                        <a href="{{route('product-details',['slug'=>$product->slug])}}" class="product-img">
                            <img src="{{asset('admin/product/feat')}}/{{$product->image}}" class="" alt="{{$product->slug}}" width="500" height="967">
                        </a>
                        <div class="product-info">
                            <div class="product-rating">
                                @php
                                    $ratingAvg=$product->reviews->avg('rating') 
                                    @endphp
                                    @foreach(range(1,5) as $i)
                                            @if($ratingAvg > 0)
                                                @if($ratingAvg > 0.5)
                                                <i class="fa fa-star"></i>
                                                @else
                                                    <i class="fa fa-star-half-o"></i>
                                                @endif
                                            @else
                                                <i class="fa fa-star-o"></i>
                                            @endif 
                                            @php $ratingAvg--; @endphp
                                    @endforeach
                                    <div class="review-count">{{$product->reviews->avg('rating')}}  ({{$product->reviews->count()}})</div>
                            </div>
                            <h3>
                                <a href="{{route('product-details',['slug'=>$product->slug])}}"> {{$product->name}}</a>
                            </h3>
                            <div class="product-value">
                                <div class="d-flex">
                                    <small class="regular-price">MRP <del>₹{{$product->regular_price}}</del></small>
                                    <div class="off-price">{{$product->discount_value}}% off</div>
                                </div>
                                <div class="current-price">₹{{$product->sale_price}}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div> --}}
        </div>
    </div>


    @foreach($category_banner as $categorys )
        @php $category=$this->c_details($categorys) @endphp
    <div class="py-5">
        <div class="container-fluid theme-container">
            <div class="row mb-4">
                <div class="col">
                    <h5 class="product-heading">Best of {{$category->name}}</h5>
                </div>
                 <div class="col-auto text-md-right">
                    <a href="{{route('shop')}}" class="btn btn-primary btn-sm product-heading-btn">See All</a>
                </div> 
            </div>
            <div class="slider  arrow-light slider-gap" data-slides-to-show="3" data-autoplay="true" data-nav="true"
                data-dots="false">
                @foreach($category->banner as $banner)
                <div class="product">
                        <a href="{{$banner->link}}" class="product-img-add">
                            <img src="{{asset('admin/banner')}}/{{$banner->images}}" class="" alt="">
                        </a>
                    </div>
                @endforeach
                
            </div>
            <div class="slider  arrow-light slider-gap" data-slides-to-show="6" data-autoplay="true" data-nav="true"
                data-dots="false">
                @foreach($category->productcount->take(8) as $product)
                    <div class="product">
                        <a href="{{route('product-details',['slug'=>$product->slug])}}" class="product-img">
                            <img src="{{asset('admin/product/feat')}}/{{$product->image}}" class="" alt="{{$product->slug}}" width="500" height="967">
                        </a>
                        <div class="product-info">
                            <div class="product-rating">
                                @php
                                if(isset($product->reviews)){
                                    $ratingAvg=$product->reviews->avg('rating');
                                    $rA=$ratingAvg;
                                    $ratingCount=$product->reviews->count();
                                }else{
                                    $ratingAvg=0;
                                    $ratingCount=0;
                                }
                                @endphp
                                
                                    @foreach(range(1,5) as $i)
                                            @if($ratingAvg > 0)
                                                @if($ratingAvg > 0.5)
                                                <i class="fa fa-star"></i>
                                                @else
                                                    <i class="fa fa-star-half-o"></i>
                                                @endif
                                            @else
                                                <i class="fa fa-star-o"></i>
                                            @endif 
                                            @php $ratingAvg--; @endphp
                                    @endforeach
                                    <div class="review-count">{{$rA}}  ({{$ratingCount}})</div>
                            </div>
                            <h3>
                                <a href="{{route('product-details',['slug'=>$product->slug])}}"> {{$product->name}}</a>
                            </h3>
                            <div class="product-value">
                                <div class="d-flex">
                                    <small class="regular-price">MRP <del>₹{{$product->regular_price}}</del></small>
                                    <div class="off-price">{{$product->discount_value}}% off</div>
                                </div>
                                <div class="current-price">₹{{$product->sale_price}}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>

@endforeach




    <div class="py-5">
        <div class="container-fluid theme-container">
            <div class="row mb-4">
                <div class="col">
                    <h5 class="product-heading">Most Rated Product</h5>
                </div>
                <div class="col-auto text-md-right">
                    <a href="{{route('shop')}}" class="btn btn-primary btn-sm product-heading-btn">See All</a>
                </div>
            </div>
            <div class="slider  arrow-light slider-gap" data-slides-to-show="6" data-autoplay="true" data-nav="true"
                data-dots="false">
                @foreach($fproducts as $product)
                    <div class="product">
                        <a href="{{route('product-details',['slug'=>$product->slug])}}" class="product-img">
                            <img src="{{asset('admin/product/feat')}}/{{$product->image}}" class="" alt="{{$product->slug}}" width="500" height="967">
                        </a>
                        <div class="product-info">
                            <div class="product-rating">
                                @php
                                    $ratingAvg=$product->reviews->avg('rating') 
                                    @endphp
                                    @foreach(range(1,5) as $i)
                                            @if($ratingAvg > 0)
                                                @if($ratingAvg > 0.5)
                                                <i class="fa fa-star"></i>
                                                @else
                                                    <i class="fa fa-star-half-o"></i>
                                                @endif
                                            @else
                                                <i class="fa fa-star-o"></i>
                                            @endif 
                                            @php $ratingAvg--; @endphp
                                    @endforeach
                                    <div class="review-count">{{number_format($product->reviews->avg('rating'),1)}}  ({{$product->reviews->count()}})</div>
                            </div>
                            <h3>
                                <a href="{{route('product-details',['slug'=>$product->slug])}}"> {{$product->name}}</a>
                            </h3>
                            <div class="product-value">
                                <div class="d-flex">
                                    <small class="regular-price">MRP <del>₹{{$product->regular_price}}</del></small>
                                    <div class="off-price">{{$product->discount_value}}% off</div>
                                </div>
                                <div class="current-price">₹{{$product->sale_price}}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>    
</div>

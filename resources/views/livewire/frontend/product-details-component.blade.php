
<div>
    <style>
    .pros{
        font-size:25px;
    }
</style>
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
                                <p class="single-info">Brand: <a href="{{route('brand-products',['brand_slug'=>$product->brand->brand_slug])}}">{{$product->brand->brand_name}}</a> </p>
                                <h4 class="product-title">{{$product->name}}</h4> 
                                
                                <div class="rating">
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
                                    <span class="review-count ml-3">{{number_format($product->reviews->avg('rating'),1)}} ({{$product->reviews->count()}})</span>
                                </div>
                                <p class="single-grid-product__price"><span class="discounted-price">₹{{$product->sale_price}}</span> <span
                                        class="main-price discounted">₹{{$product->regular_price}}</span></p>

                                <div class="single-info">
                                    <span class="d-block text-muted mb-2"><strong>SKU :</strong> {{$product->SKU}}</span>
                                    <span class="d-block text-muted mb-2"><strong>Category :</strong><a href="{{route('product.category',['category_slug'=>$product->category->slug])}}">{{$product->category->name}}</a></span>

                                    <span class="d-block text-muted mb-2"><strong>Availability :</strong> {{$product->stock_status}}</span>
                                </div>
                                @if(isset($varaiants[0]))
                                    <div class="varient mt-4">
                                        <h6 class="font-weight-bold text-dark mb-3">Product Varient : {{$attribute->name}}</h6>
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
                                                class="fa fa-heart"></i> Remove To Wishlist</a>
                                            
                                        @else
                                        <a class="btn btn-rounded btn-soft-primary mr-2" href="#" wire:click.prevent="addToWishlist({{$product->id}},{{$product->sale_price}})"> <i
                                                class="fa fa-heart"></i> Add To Wishlist</a>
                                        @endif
                                        @if($cart)
                                            <a class="btn btn-rounded btn-primary" href="#"> <i
                                                class="fa fa-shopping-cart"></i> Already Added To Cart</a>
                                        @else
                                            
                                                <a class="btn btn-rounded btn-primary" href="#" wire:click.prevent="AddtoCart({{$product->id}},{{$product->sale_price}})"> <i
                                                class="fa fa-shopping-cart"></i> Add To Cart</a>
                                        
                                        @endif
                                    </div>

                                </div>
                                @if(!$product->prescription)
                                <div class="mb-4">
                                    <a wire:click.prevent="checkout({{$product->id}},{{$product->sale_price}})"
                                        class="btn btn-block btn-primary btn-pill transition-3d-hover">Buy
                                        Now</a>
                                </div>
                                @endif
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
                                <ul class="pl-3">
                                    @if($product->prescription)
                                        <li>Government regulations require a prescription</li>
                                    @endif
                                    @if($product->is_baby)
                                        <li>For Baby </li>
                                    @endif
                                    @if($product->is_young)
                                        <li>For Adult</li>
                                    @endif
                                    @if($product->is_child)
                                        <li>For Child </li>
                                    @endif
                                    @if($product->age_limit)
                                        <li>Government regulations put  an age restrictions (18+ only)</li>
                                    @endif
                                </ul>
                                {!! $product->short_description !!}
                            </div>
                            <div class="mt-4">
                                <h6 class="font-weight-bold text-dark">Share on</h6>
                                <div class="social-links social-links-dark">
                                    
                                {!! $shareButtons !!} 
                                
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
                            {!! $product->additional_info !!}
                        </div>
                        <h2 class="entry-product-section-heading"> Reviews </h2>
                        <h5>Avg. Rating</h5>
                        @php
                            $ratingAvg=$product->reviews->avg('rating') 
                        @endphp
                        @foreach(range(1,5) as $i)
                        <div class="rating pros">
                            <span class="fa-stack" style="width:1em">

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
                            </span>
                        </div>
                        @endforeach <span>({{$product->reviews->count()}})</span>
                        <div class="row justify-content-between">
                             <div class="col-lg-12">
                                <div class="review_content">
                                    @foreach($reviews as $review)
                                    <div class="mb-1">
                                    @foreach(range(1,5) as $i)
                                    <div class="rating">
                                        <span class="fa-stack" style="width:1em">

                                            @if($review->rating > 0)
                                                @if($review->rating > 0.5)
                                                <i class="fa fa-star"></i>
                                                @else
                                                    <i class="fa fa-star-half-o"></i>
                                                @endif
                                            @else
                                                <i class="fa fa-star-o"></i>
                                            @endif
                                            @php $review->rating--; @endphp
                                        </span>
                                    </div>
                                    @endforeach
                                    
                                        <em>Published 54 minutes ago</em>
                                    </div>
                                    @php
                                        $images = explode(",",$review->images);
                                    @endphp
                                    @foreach($images as $image)
                                        @if($image)
                                            <div class="single-image">
                                                <img src="{{asset('admin/review')}}/{{$image}}" width="120" alt="slider">
                                            </div>
                                        @endif
                                    @endforeach
                                    <p>{{$review->message}}</p>
                                    <p>{{$review->user->name}}</p>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                        <p class="text-right"><a href="leave-review.html" class="btn btn-primary">Leave a
                                review</a></p>
                                
                                <h2 class="entry-product-section-heading"> Questions and Answers </h2>
                        <p class="text-right">
                            <a class="btn btn-rounded btn-soft-primary mr-2" wire:click.prevent="askQuestion({{$product->id}})" href="#">Ask Question</a>
                        </p>

                        @foreach($questions as $question)
                        <div class="mb-5">
                            <h4 class="mb-0 fs-exact-18">{{$question->id}}.{{$question->question}}</h4>
                        </div>
                        @foreach($question->answers as $answer)
                        <div class="mb-4">
                        <p> {{$answer->id}}.{{$answer->answer}}</p>
                        </div>
                        @endforeach
                        @endforeach
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
                            data-nav="true" data-dots="false" wire:ignore>
                            @foreach($rproducts as $rproduct)
                                <div class="product">
                                    <a href="{{route('product-details',['slug'=>$rproduct->slug])}}" class="product-img">
                                        <img src="{{asset('admin/product/feat')}}/{{$rproduct->image}}" class="" alt="{{$rproduct->slug}}" width="500" height="967">
                                    </a>
                                    <div class="product-info">
                                        <div class="product-rating">
                                            @php
                                            $ratingAvg=$rproduct->reviews->avg('rating') 
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
                                            <div class="review-count">{{number_format($rproduct->reviews->avg('rating'),1)}}  ({{$rproduct->reviews->count()}})</div>
                                        </div>
                                        <h3>
                                            <a href="{{route('product-details',['slug'=>$rproduct->slug])}}"> {{$rproduct->name}}</a>
                                        </h3>
                                        <div class="product-value">
                                            <div class="d-flex">
                                                <small class="regular-price">MRP <del>₹{{$rproduct->regular_price}}</del></small>
                                                <div class="off-price">{{$rproduct->discount_value}}% off</div>
                                            </div>
                                            <div class="current-price">₹{{$rproduct->sale_price}}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    
    <div wire:ignore.self class="modal fade" id="questionModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
            
                <div class="modal-header">
                    
                    <h4 class="modal-title fs-5" id="staticBackdropLabel">Question</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <div class="mb-4">
                        <label for="form-banner/name" class="form-label">Product name: </label>
                        <input type="text" class="form-control"
                            wire:model="pname" disabled value="{{$product->name}}" />
                    </div>
                    <div class="mb-4">
                        <label for="form-review/message" class="form-label">Question: </label>
                        <textarea type="text" class="form-control"
                            wire:model="question" name='question' ></textarea>
                            @error('question') <p class="text-danger">{{$message}}</p> @enderror
                    </div>        
                </div>
            
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" wire:click.prevent="storeQuestion">Submit</button>
            </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('livewire:init', () => {
       Livewire.on('openquestionModal', (event) => {
        $('#questionModal').modal('show');
       });
    });
    window.addEventListener('show-edit-post-modal', event => {
         $('#login_modal').modal('show');
    });
</script>
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

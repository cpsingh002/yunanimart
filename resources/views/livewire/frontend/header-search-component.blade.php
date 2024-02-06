<div class="col">
    <div class="header-search">
        <form action="{{route('searchs')}}">
            <input class="form-control custom-search" name="search" value="{{$searchj}}"  placeholder="Search for Medicines and Health Products" type="text"  wire:model ="searchj" wire:keyup="productcheck">
        </form>
        @if(isset($prodhjhjucts[0]))
        <div class="search-content" >
            <div class="search-product d-none">
                @foreach($prodhjhjucts as $product)
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
                        
                    </div>

                @endforeach
                
            </div>
        </div>
        @endif
    </div>
</div>
<div> 
    <main>
        <section class="pt-5 pt-md-7">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-8 order-md-2">
                        <div class="row shop-header align-items-center">
                            <div class="col-lg-6">
                                <div class="grid-icons">
                                    <button class="three-column active"></button>
                                    <button class="four-column d-none d-lg-block"></button>
                                    <button class="five-column d-none d-lg-block"></button>
                                    <button class="list-view"></button>
                                </div>
                            </div>
            
                            <div class="col-lg-6 text-lg-right">
            
                                <div class="single-select-block d-inline-block">
                                    <span class="select-title">Show:</span>
                                    <select class="wide border-0" id ="pagewsize" name="pagewsize" wire:model="pagesize">
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                    </select>
                                </div>
            
                                <div class="single-select-block d-inline-block">
                                    <span class="select-title">Sort By:</span>
                                    <select class="wide border-0" id="pagesorting" name ="pagesorting" wire:model="sorting">
                                        <option value ="default" selected="selected">Default</option>
                                        <option value="date">Sort by newness</option>
								        <option value="price">Sort by price: low to high</option>
								        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-md-4 col-sm-6 col-12">
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
                                </div>
                            @endforeach
                          
                        </div>
                    </div>
                    <div class="col-md-3 order-md-1">
                    <div class="sidebar-wrapper mt-5 mt-md-0">
                            <div class="sidebar-widget widget_categories">
                                <h6 class="widget-title">Categorys</h6>
                                <ul class="widget-list widget-filter-list list-unstyled pt-1" style="max-height: 11rem;"
                                    data-simplebar data-simplebar-auto-hide="false">
                                    @foreach($categorys as $category)
                                        <li
                                            class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <span class="fs-xs text-muted"><a href="{{route('product.category',['category_slug'=>$category->slug])}}">{{$category->name}}</a></span>
                                        </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-wrapper mt-5 mt-md-0">
                            <div class="sidebar-widget widget_categories">
                                <h6 class="widget-title">Brands</h6>
                                <ul class="widget-list widget-filter-list list-unstyled pt-1" style="max-height: 11rem;"
                                    data-simplebar data-simplebar-auto-hide="false">
                                    @foreach($brands as $brand)
                                        <li
                                            class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="brand-1" wire:model="brandtype" value="{{$brand->id}}"  wire:click="brandseletc">
                                                <label class="form-check-label widget-filter-item-text" for="brand-1">{{$brand->brand_name}}
                                                    one</label>
                                            </div><span class="fs-xs text-muted">{{$brand->productcount->count()}}</span>
                                        </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-wrapper mt-5 mt-md-0">
                            <div class="sidebar-widget widget_categories">
                                <h6 class="widget-title mb-2">Price </h6>
                                <div class="px-3"><span class="text-info">${{$min_price}} - ${{$max_price}}</span>
                                    <div class="widget-content" style="padding 10px 5px 40px 5px;">
						                <div id="slider" wire:ignore></div>
						            </div>
                               </div>
                            </div>
                        </div>
                        <div class="sidebar-wrapper mt-5 mt-md-0">
                            <div class="sidebar-widget widget_categories">
                                <h6 class="widget-title">PRODUCT TAGS</h6>
                                <ul class="widget-list widget-filter-list list-unstyled pt-1" style="max-height: 11rem;"
                                    data-simplebar data-simplebar-auto-hide="false">
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="brand-12">
                                            <label class="form-check-label widget-filter-item-text" for="brand-12">Tag
                                                one</label>
                                        </div><span class="fs-xs text-muted">425</span>
                                    </li>
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="brand-22">
                                            <label class="form-check-label widget-filter-item-text" for="brand-22">Tag
                                                two</label>
                                        </div><span class="fs-xs text-muted">15</span>
                                    </li>
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Brandina2">
                                            <label class="form-check-label widget-filter-item-text"
                                                for="Brandina2">Brandina</label>
                                        </div><span class="fs-xs text-muted">18</span>
                                    </li>
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Belleaeis2">
                                            <label class="form-check-label widget-filter-item-text"
                                                for="Belleaeis2">Belleaeis
                                            </label>
                                        </div><span class="fs-xs text-muted">103</span>
                                    </li>
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bilabong2">
                                            <label class="form-check-label widget-filter-item-text"
                                                for="bilabong2">Bilabong</label>
                                        </div><span class="fs-xs text-muted">27</span>
                                    </li>
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="birkenstock2">
                                            <label class="form-check-label widget-filter-item-text"
                                                for="birkenstock2">Birkenstock</label>
                                        </div><span class="fs-xs text-muted">10</span>
                                    </li>
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="klein2">
                                            <label class="form-check-label widget-filter-item-text" for="klein2">Calvin
                                                Klein</label>
                                        </div><span class="fs-xs text-muted">365</span>
                                    </li>
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="columbia2">
                                            <label class="form-check-label widget-filter-item-text"
                                                for="columbia2">Columbia</label>
                                        </div><span class="fs-xs text-muted">508</span>
                                    </li>
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="converse2">
                                            <label class="form-check-label widget-filter-item-text"
                                                for="converse2">Converse</label>
                                        </div><span class="fs-xs text-muted">176</span>
                                    </li>
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="dockers2">
                                            <label class="form-check-label widget-filter-item-text"
                                                for="dockers2">Dockers</label>
                                        </div><span class="fs-xs text-muted">54</span>
                                    </li>
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="fruit2">
                                            <label class="form-check-label widget-filter-item-text" for="fruit2">Fruit of
                                                the Loom</label>
                                        </div><span class="fs-xs text-muted">739</span>
                                    </li>
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="hanes2">
                                            <label class="form-check-label widget-filter-item-text"
                                                for="hanes2">Hanes</label>
                                        </div><span class="fs-xs text-muted">92</span>
                                    </li>
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="choo2">
                                            <label class="form-check-label widget-filter-item-text" for="choo2">Jimmy
                                                Choo</label>
                                        </div><span class="fs-xs text-muted">17</span>
                                    </li>
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="levis2">
                                            <label class="form-check-label widget-filter-item-text"
                                                for="levis2">Levi's</label>
                                        </div><span class="fs-xs text-muted">361</span>
                                    </li>
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="lee2">
                                            <label class="form-check-label widget-filter-item-text"
                                                for="lee2">Lee</label>
                                        </div><span class="fs-xs text-muted">264</span>
                                    </li>
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="wolverine2">
                                            <label class="form-check-label widget-filter-item-text"
                                                for="wolverine2">Wolverine</label>
                                        </div><span class="fs-xs text-muted">29</span>
                                    </li>
                                    <li class="widget-filter-item d-flex justify-content-between align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="wrangler2">
                                            <label class="form-check-label widget-filter-item-text"
                                                for="wrangler2">Wrangler</label>
                                        </div><span class="fs-xs text-muted">115</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-wrapper mt-5 mt-md-0">
                            <div class="sidebar-widget widget_categories">
                                <h6 class="widget-title">DISCOUNT</h6>
                                <ul class="widget-list widget-filter-list list-unstyled pt-1" style="max-height: 11rem;"
                                    data-simplebar data-simplebar-auto-hide="false">
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="brand-13"  value ="10" wire:model="discount" wire:click="brandseletc">
                                            <label class="form-check-label widget-filter-item-text" for="brand-13">
                                                Less than 10%</label>
                                        </div><span class="fs-xs text-muted">425</span>
                                    </li>
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="brand-23" value ="15" wire:model="discount" wire:click="brandseletc">
                                            <label class="form-check-label widget-filter-item-text" for="brand-23">
                                                10% and above</label>
                                        </div><span class="fs-xs text-muted">15</span>
                                    </li>
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Brandina3" value ="20" wire:model="discount" wire:click="brandseletc">
                                            <label class="form-check-label widget-filter-item-text" for="Brandina3">
                                                20% and above</label>
                                        </div><span class="fs-xs text-muted">18</span>
                                    </li>
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Belleaeis3" value ="30" wire:model="discount" wire:click="brandseletc">
                                            <label class="form-check-label widget-filter-item-text" for="Belleaeis3">30%
                                                and above
                                            </label>
                                        </div><span class="fs-xs text-muted">103</span>
                                    </li>
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bilabong3">
                                            <label class="form-check-label widget-filter-item-text" for="bilabong3">40%
                                                and above</label>
                                        </div><span class="fs-xs text-muted">27</span>
                                    </li>
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="birkenstock3">
                                            <label class="form-check-label widget-filter-item-text"
                                                for="birkenstock3">50% and above</label>
                                        </div><span class="fs-xs text-muted">10</span>
                                    </li>
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="klein3">
                                            <label class="form-check-label widget-filter-item-text" for="klein3">
                                                60% and above</label>
                                        </div><span class="fs-xs text-muted">365</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

@push('scripts')
	<script>
		var slider = document.getElementById('slider');
		noUiSlider.create(slider, {
    		start: [1, 1000],
    		connect: true,
    		range: {
        		'min': 1,
        		'max': 1000
    		},
			pips: {
        		mode: 'steps',
        		stepped: true,
        		density: 4
   	 		}
		});

		slider.noUiSlider.on('update',function(value){
			@this.set('min_price',value[0]);
			@this.set('max_price',value[1]);
		})
	</script>
	<script>
        
        $('#pagewsize').on('change',function(ev){
            //alert('gfhfgh');
            var data = $('#pagewsize').val();
            //alert(data);
            @this.set('pagesize',data);
        });
        
        $('#pagesorting').on('change',function(ev){
            //alert('gfhfgh');
            var data = $('#pagesorting').val();
            //alert(data);
            @this.set('sorting',data);
        });
    
    
</script>
@endpush
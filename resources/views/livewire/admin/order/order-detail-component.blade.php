 <!-- sa-app__toolbar / end -->
 <!-- sa-app__body -->
 <div id="top" class="sa-app__body">
     <div class="mx-xxl-3 px-4 px-sm-5">
         <div class="py-5">
             <div class="row g-4 align-items-center">
                 <div class="col">
                     <nav class="mb-2" aria-label="breadcrumb">

                     </nav>
                     <h1 class="h3 m-0"> Order Details  </h1>
                 </div>
                 <div class="col-auto d-flex">
                 <a href="{{route('admin.orders')}}" class="btn btn-primary">All orders</a>

                 </div>
             </div>
         </div>
     </div>
     <div class="mx-xxl-3 px-4 px-sm-5 pb-6">
         <div class="sa-layout">
             <!-- <div class="sa-layout__backdrop" data-sa-layout-sidebar-close=""></div> -->

             <div class="sa-layout__content">
                 <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        @foreach($orderitems as $orderitem)
                                            <div class="cart_product border-0">
                                                <div class="cart_item px-0">
                                                    <div class="cart_item_image">
                                                        <img src="{{asset('admin/product/feat')}}/{{$orderitem->product->image}}" alt="shop">
                                                    </div>
                                                    <div class="c-item-body">
                                                        <div class="cart_item_title mb-2">
                                                            <h4>{{$orderitem->product->name}}</h4>
                                                            <p class="small mb-0 text-muted">{{$orderitem->product->varaint_detail}}</p>
                                                        </div>
                                                        <div class="cart_item_price">
                                                            <div class="product-price">
                                                                <span>
                                                                    <strong>₹{{$orderitem->price}} </strong>
                                                                    <small class="product-discountPercentage">({{$orderitem->quantity}} items)</small>
                                                                </span>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        
                                    </div>
                                    
                                    
                                  
                                   
                                </div><!-- /.card-body -->
                                
                            </div>
                            <div class="row mt-4">
                                        <div class="col-lg-6">
                                            <div class="border p-3 mb-4">
                                                <h5 class="details">Order Info</h5>
                                                <div class="row no-gutters">
                                                    <div class="col-auto">
                                                        <i class="ti-map-alt text-secondary mr-2"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="text-muted small mb-2"> <strong>Delevery Address:</strong> {{$order->line1}}, {{$order->line2}},{{$order->zipcode}}</p>
                                                    </div>
                                                </div>
                                                <div class="row no-gutters">
                                                    <div class="col-auto">
                                                        <i class="ti-mobile text-secondary mr-2"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="text-muted small mb-0"><strong>Phone Number:</strong> {{$order->mobile}}</p>
                                                    </div>
                                                </div>
                                                <div class="row no-gutters">
                                                    <div class="col-auto">
                                                        <i class="ti-credit-card text-secondary mr-2"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="text-muted small mb-2"><strong>Payment Type:</strong> Stripe</p>
                                                    </div>
                                                </div>
                                                <div class="row no-gutters">
                                                    <div class="col-auto">
                                                        <i class="ti-calendar text-secondary mr-2"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="text-muted small mb-2"><strong>Order Receive On:</strong> {{$order->created_at->format('d M Y')}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="border p-3 mb-4">
                                                <h5 class="details">User Info</h5>
                                                <div class="row no-gutters">
                                                    <div class="col-auto">
                                                        <i class="ti-map-alt text-secondary mr-2"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="text-muted small mb-2"> <strong>User Name:</strong> {{$order->name}}</p>
                                                    </div>
                                                </div>
                                                <div class="row no-gutters">
                                                    <div class="col-auto">
                                                        <i class="ti-mobile text-secondary mr-2"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="text-muted small mb-0"><strong>Phone Number:</strong> {{$order->mobile}}</p>
                                                    </div>
                                                </div>
                                                <div class="row no-gutters">
                                                    <div class="col-auto">
                                                        <i class="ti-credit-card text-secondary mr-2"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="text-muted small mb-2"><strong>Sub Total:</strong> {{$order->subtotal}}</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
             </div>
         </div>
     </div>
 </div>

<div>
    <main>
        <div class="accounnt_header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-auto col-12 order-md-2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a class="text-nowrap" href="{{route('index')}}"><i class="fa fa-home mr-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item text-nowrap"><a href="{{route('orders')}}">Order</a>
                                </li>
                                <li class="breadcrumb-item text-nowrap active" aria-current="page">Order Details</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="order-md-1 text-center text-lg-left col-md col-12">
                        <h1 class="h3 mb-0">Orders</h1>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="accounnt_body">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-md-4 col-12">
                        <nav class="navbar navbar-expand-md mb-4 mb-lg-0 sidenav">
                            <!-- Menu -->
                            <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Sidebar Menu</a>
                            <!-- Button -->
                            <button class="navbar-toggler d-md-none rounded bg-primary text-light" type="button"
                                data-toggle="collapse" data-target="#sidenav" aria-controls="sidenav"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="ti-menu"></span>
                            </button>
                            <!-- Collapse navbar -->
                            <div class="collapse navbar-collapse" id="sidenav">
                                <div class="navbar-nav flex-column">
                                    <!-- List -->
                                    <div class="border-bottom">
                                        <div class="m-4">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="avater btn-soft-primary">DS</div>
                                                </div>
                                                <div class="col-auto">
                                                    <h6 class="d-block font-weight-bold mb-0">{{Auth::user()->name}}</h6>
                                                    <small class="text-muted">{{Auth::user()->email}}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled mb-0">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('user.account')}}"><i class="fa fa-user"></i> My
                                                Account</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="change-password.html"><i class="fa fa-lock"></i>
                                                Password</a>
                                        </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('user.address')}}"><i class="fa fa-address-book"></i>
                                                Address</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link active" href="{{route('orders')}}"><i class="fa fa-shopping-cart"></i>
                                                Order</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('wishlist')}}"><i class="fa fa-heart"></i>
                                                Wishlist</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out"></i>Logout</a>
                                        </li>
                                        <form id="logout-form" method="POST" action="{{route('logout')}}">
                                            @csrf
                                        </form>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="ml-0 ml-md-4">
                            <div class="d-none d-md-block">
                            <div class="row mb-md-5">
                                <div class="col">
                                    <h5 class="mb-1 text-white">Order Details</h5>
                                    <p class="mb-0 text-white small">
                                        You have full control to manage your own account setting.
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <a href="{{route('orders')}}" class="btn btn-primary btn-sm"> <i class="ti-angle-left"></i> Go Back</a>
                                    @if($order->status == "ordered")
                                        <a href="#" wire:click.prevent="cancelOrder" style="margin-right:20px" class="btn btn-warning pull-right">Cancel Order</a>
                                    @endif
                                </div>
                                

                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        @foreach($orderitems as $orderitem)
                                        <div class="col-md-6 col-sm-6 col-12">
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
                                                                    <del>₹1,000</del>
                                                                    <small class="product-discountPercentage">({{$orderitem->quantity}} items)</small>
                                                                </span>
                                                            </div>
                                                            <div class="cart_product_remove">
                                                                <a href="#"><i class="ti-truck"></i> Return Item</a>
                                                                <a class="btn btn-rounded btn-primary" wire:click.prevent="preview({{$orderitem->product->id}})" href="#">Post Review</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                    
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
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
                                                        <p class="text-muted small mb-2"><strong>Payment Type:</strong> {{$order->transaction->mode}},{{$order->transaction->status}},{{$order->transaction->transaction_id}}</p>
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
                                    </div>
                                    <ul class="timeline mt-4">
                                        <li class="timeline-item active">
                                            <div class="timeline-figure">
                                                <span class="tile tile-circle tile-sm"><i class="ti-arrow-circle-down"></i></span>
                                            </div>
                                            <div class="timeline-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <h6 class="timeline-heading">
                                                            Order placed
                                                        </h6>
                                                    </div>
                                                    <div class="d-none d-sm-block">
                                                        <span class="timeline-date">{{$order->created_at->format('d M Y')}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li class="timeline-item @if($order->staus == 'accepted') active @endif">
                                            <div class="timeline-figure">
                                                <span class="tile tile-circle tile-sm"><i class="ti-arrow-circle-down"></i></span>
                                            </div>
                                            <div class="timeline-body">  
                                                <div class="media">
                                                    <div class="media-body">
                                                        <h6 class="timeline-heading">
                                                            <a href="#" class="text-link">Order Accepted</a>
                                                        </h6>
                                                    </div>
                                                    <div class="d-none d-sm-block">
                                                        <span class="timeline-date"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @if($order->staus == 'delivered')
                                        <li class="timeline-item @if($order->staus == 'delivered') active @endif">
                                            <div class="timeline-figure">
                                                <span class="tile tile-circle tile-sm"><i class="ti-arrow-circle-down"></i></span>
                                            </div>
                                            <div class="timeline-body">  
                                                <div class="media">
                                                    <div class="media-body">
                                                        <h6 class="timeline-heading">
                                                            <a href="#" class="text-link">Order Delivered</a>
                                                        </h6>
                                                    </div>
                                                    <div class="d-none d-sm-block">
                                                        <span class="timeline-date">{{$order->delivered_date->format('d M Y')}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endif
                                        @if($order->staus == 'canceled')
                                        <li class="timeline-item @if($order->staus == 'canceled') active @endif">
                                            <div class="timeline-figure">
                                                <span class="tile tile-circle tile-sm"><i class="ti-arrow-circle-down"></i></span>
                                            </div>
                                            <div class="timeline-body">  
                                                <div class="media">
                                                    <div class="media-body">
                                                        <h6 class="timeline-heading">
                                                            <a href="#" class="text-link">Order Canceled</a>
                                                        </h6>
                                                    </div>
                                                    <div class="d-none d-sm-block">
                                                        <span class="timeline-date">{{$order->canceled_date->format('d M Y')}}</span>
                                                    </div></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endif
                                        
                                    </ul>
                                </div><!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div wire:ignore.self class="modal fade" id="productPreviewModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <style>
            

            .rating > label {
            color: #90A0A3;
            float: right;
            }

            .rating > label:before {
            margin: 5px;
            font-size: 2em;
            font-family: FontAwesome;
            content: "\f005";
            display: inline-block;
            }

            .rating > input {
            display: none;
            }

            .rating > input:checked ~ label,
            .rating:not(:checked) > label:hover,
            .rating:not(:checked) > label:hover ~ label {
            color: #F79426;
            }

            .rating > input:checked + label:hover,
            .rating > input:checked ~ label:hover,
            .rating > label:hover ~ input:checked ~ label,
            .rating > input:checked ~ label:hover ~ label {
            color: #FECE31;
            }
    </style>
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
        
        <div class="modal-header">
            
            <h4 class="modal-title fs-5" id="staticBackdropLabel">Review Product</h4>
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
                    wire:model="pname" disabled />
            </div>
            
            
            
            <div class="rating">
                <input type="radio" id="star5" wire:model="rating" name="rating" value="5" />
                <label class="star" for="star5"  title="Awesome" aria-hidden="true"></label>
                <input type="radio" id="star4" wire:model="rating" name="rating" value="4" />
                <label class="star" for="star4" title="Great" aria-hidden="true"></label>
                <input type="radio" id="star3" wire:model="rating" name="rating" value="3" />
                <label class="star" for="star3" title="Very good" aria-hidden="true"></label>
                <input type="radio" id="star2" wire:model="rating" name="rating" value="2" />
                <label class="star" for="star2" title="Good" aria-hidden="true"></label>
                <input type="radio" id="star1" wire:model="rating" name="rating" value="1" />
                <label class="star" for="star1" title="Bad" aria-hidden="true"></label>
                @error('rating') <p class="text-danger">{{$message}}</p> @enderror

            </div>
            <div class="mb-4">
                <label for="form-banner/name" class="form-label"> Image</label>
                <div class="input-form input-form2">
                    <input type="file" placeholder="image" wire:model="images" multiple>
                    @if($images)
                        @foreach($images as $image)
                            <img src="{{$image->temporaryUrl()}}" width="120" />
                        @endforeach
                    @endif
                    @error('images') <p class="text-danger">{{$message}}</p> @enderror
                </div>
            </div>
            <div class="mb-4">
                <label for="form-banner/name" class="form-label">Message: </label>
                <textarea type="text" class="form-control"
                    wire:model="message" name='message' ></textarea>
                    @error('message') <p class="text-danger">{{$message}}</p> @enderror
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary" wire:click.prevent="storeReview">Submit</button>
        </div>
        </form>
        </div>
    </div>
    </div>
</div>

@push('scripts')

<script>
    document.addEventListener('livewire:init', () => {
       Livewire.on('openproductPreviewModal', (event) => {
        $('#productPreviewModal').modal('show');
       });
    });
</script>
@endpush
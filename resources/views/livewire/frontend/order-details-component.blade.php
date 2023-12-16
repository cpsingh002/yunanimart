<div>
    <main>
        <div class="accounnt_header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-auto col-12 order-md-2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a class="text-nowrap" href="index.html"><i class="fa fa-home mr-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item text-nowrap"><a href="account.html">Account</a>
                                </li>
                                <li class="breadcrumb-item text-nowrap active" aria-current="page">Order</li>
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
                        <nav class="navbar navbar-expand-md mb-5 mb-lg-0 sidenav">
                            <!-- Menu -->
                            <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Sidebar Menu</a>
                            <!-- Button -->
                            <button class="navbar-toggler d-md-none rounded bg-primary text-light" type="button" data-toggle="collapse" data-target="#sidenav" aria-controls="sidenav" aria-expanded="false" aria-label="Toggle navigation">
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
                                                    <h6 class="d-block font-weight-bold mb-0">Deep saha</h6>
                                                    <small class="text-muted">yourmail@email.com</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled mb-0">
                                        <li class="nav-item">
                                            <a class="nav-link" href="account.html"><i class="fa fa-user"></i> My Account</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="change-password.html"><i class="fa fa-lock"></i> Password</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="address.html"><i class="fa fa-address-book"></i> Address</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{route('orders')}}"><i class="fa fa-shopping-cart"></i> Order</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('wishlist')}}"><i class="fa fa-heart"></i> Wishlist</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="fa fa-sign-out"></i> Logout</a>
                                        </li>
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
                                    <a href="orders.html" class="btn btn-primary btn-sm"> <i class="ti-angle-left"></i> Go Back</a>
                                </div>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="cart_product border-0">
                                        <div class="cart_item px-0">
                                            <div class="cart_item_image">
                                                <img src="{{asset('assets/img/product/product-3.png')}}" alt="shop">
                                            </div>
                                            <div class="c-item-body">
                                                <div class="cart_item_title mb-2">
                                                    <h4>1mg Salmon Omega 3 Fish Oil Capsule</h4>
                                                    <p class="small mb-0 text-muted">bottle of 60 capsules</p>
                                                </div>
                                                <div class="cart_item_price">
                                                    <div class="product-price">
                                                        <span>
                                                            <strong>₹499 </strong>
                                                            <del>₹1,000</del>
                                                            <small class="product-discountPercentage">(50% OFF)</small>
                                                        </span>
                                                    </div>
                                                    <div class="cart_product_remove">
                                                        <a href="#"><i class="ti-truck"></i> Return Item</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                                        <p class="text-muted small mb-2"> <strong>Delevery Address:</strong> Cavendish Street, Cartmel, Grange-Over-Sands, Cumbria, LA11 6PZ</p>
                                                    </div>
                                                </div>
                                                <div class="row no-gutters">
                                                    <div class="col-auto">
                                                        <i class="ti-mobile text-secondary mr-2"></i>
                                                    </div>
                                                    <div class="col">
                                                        <p class="text-muted small mb-0"><strong>Phone Number:</strong> 1234567890</p>
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
                                                        <p class="text-muted small mb-2"><strong>Order Receive On:</strong> 24 May 2021</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="timeline mt-4">
                                        <!-- .timeline-item -->
                                        <li class="timeline-item active">
                                            <!-- .timeline-figure -->
                                            <div class="timeline-figure">
                                                <span class="tile tile-circle tile-sm"><i class="ti-arrow-circle-down"></i></span>
                                            </div><!-- /.timeline-figure -->
                                            <!-- .timeline-body -->
                                            <div class="timeline-body">
                                                <!-- .media -->
                                                <div class="media">
                                                    <!-- .media-body -->
                                                    <div class="media-body">
                                                        <h6 class="timeline-heading">
                                                            Order placed
                                                        </h6>
                                                    </div><!-- /.media-body -->
                                                    <!-- .media-right -->
                                                    <div class="d-none d-sm-block">
                                                        <span class="timeline-date">About a minute ago</span>
                                                    </div><!-- /.media-right -->
                                                </div><!-- /.media -->
                                            </div><!-- /.timeline-body -->
                                        </li><!-- /.timeline-item -->
                                        <!-- .timeline-item -->
                                        <li class="timeline-item active">
                                            <!-- .timeline-figure -->
                                            <div class="timeline-figure">
                                                <span class="tile tile-circle tile-sm"><i class="ti-arrow-circle-down"></i></span>
                                            </div><!-- /.timeline-figure -->
                                            <!-- .timeline-body -->
                                            <div class="timeline-body">
                                                <!-- .media -->
                                                <div class="media">
                                                    <!-- .media-body -->
                                                    <div class="media-body">
                                                        <h6 class="timeline-heading">
                                                            <a href="#" class="text-link">Order Ready</a>
                                                        </h6>
                                                    </div><!-- /.media-body -->
                                                    <!-- .media-right -->
                                                    <div class="d-none d-sm-block">
                                                        <span class="timeline-date">3 hours ago</span>
                                                    </div><!-- /.media-right -->
                                                </div><!-- /.media -->
                                            </div><!-- /.timeline-body -->
                                        </li><!-- /.timeline-item -->
                                        <li class="timeline-item">
                                            <!-- .timeline-figure -->
                                            <div class="timeline-figure">
                                                <span class="tile tile-circle tile-sm"><i class="ti-arrow-circle-down"></i></span>
                                            </div><!-- /.timeline-figure -->
                                            <!-- .timeline-body -->
                                            <div class="timeline-body">
                                                <!-- .media -->
                                                <div class="media">
                                                    <!-- .media-body -->
                                                    <div class="media-body">
                                                        <h6 class="timeline-heading">
                                                            <a href="#" class="text-link">Way to deliver</a>
                                                        </h6>
                                                    </div><!-- /.media-body -->
                                                    <!-- .media-right -->
                                                    <div class="d-none d-sm-block">
                                                        <span class="timeline-date">3 hours ago</span>
                                                    </div><!-- /.media-right -->
                                                </div><!-- /.media -->
                                            </div><!-- /.timeline-body -->
                                        </li><!-- /.timeline-item -->
                                        <li class="timeline-item">
                                            <!-- .timeline-figure -->
                                            <div class="timeline-figure">
                                                <span class="tile tile-circle tile-sm"><i class="ti-arrow-circle-down"></i></span>
                                            </div><!-- /.timeline-figure -->
                                            <!-- .timeline-body -->
                                            <div class="timeline-body">
                                                <!-- .media -->
                                                <div class="media">
                                                    <!-- .media-body -->
                                                    <div class="media-body">
                                                        <h6 class="timeline-heading">
                                                            <a href="#" class="text-link">Delivered successfully</a>
                                                        </h6>
                                                    </div><!-- /.media-body -->
                                                    <!-- .media-right -->
                                                    <div class="d-none d-sm-block">
                                                        <span class="timeline-date">3 hours ago</span>
                                                    </div><!-- /.media-right -->
                                                </div><!-- /.media -->
                                            </div><!-- /.timeline-body -->
                                        </li><!-- /.timeline-item -->
                                    </ul>
                                </div><!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

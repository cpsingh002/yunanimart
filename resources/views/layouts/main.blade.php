<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <meta charset="utf-8">
    <title>Hospitania</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
    <meta name="description" content="hospitania">
    <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    @yield('page_css')

    @livewireStyles
</head>

<body>

    <div class="alert alert-warning alert-dismissible fade show announcement-header" role="alert">
        <div class="container-fluid">
            <div class="pro-description">
                <div class="pro-info">
                    Get<strong> UPTO 40% OFF </strong>on your 1st order
                    <!-- <div class="pro-link-dropdown js-toppanel-link-dropdown"> -->
                        <a href="{{route('shop')}}" class="pro-dropdown-toggle">
                            SHOP NOW
                        </a>
                    <!-- </div> -->
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

        </div>
    </div>

    <div class="header">
        <div class="container-fluid theme-container">
            <div class="top-header">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <a href="index.html">
                            <img src="{{asset('assets/img/logo.png')}}" alt="logo" class="header-logo">
                        </a>
                    </div>
                    <div class="col">
                        <div class="header-search">
                            <form action="#">
                                <input class="form-control custom-search"
                                    placeholder="Search for Medicines and Health Products" type="text">
                            </form>
                            <div class="search-content">
                                <div class="search-product d-none">
                                    <div class="product list-view">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <ul class="header-right-options">
                            <li class="link-item">
                                <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#login_modal">Login</a>
                            </li>
                            <li class="link-item">
                                <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#register_modal">Register</a>
                            </li>
                            <li class="dropdown head-cart-content">
                                <button id="dropdownCartButton" class="btn dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="list-icon">
                                        <i class="ti-bag"></i>
                                    </div>
                                    <span class="badge badge-secondary">2</span>
                                </button>

                                <div class="shopping-cart shopping-cart-empty dropdown-menu dropdown-menu-right"
                                    aria-labelledby="dropdownMenuButton">
                                    <!-- <ul class="shopping-cart-items">
                                        <li>You have no items in your shopping cart.</li>
                                    </ul> -->
                                    <ul class="shopping-cart-items">
                                        <li class="mini_cart_item">
                                            <div class="left-section">
                                                <a href="product-single.html">
                                                    <img src="{{asset('assets/img/product/product-2.png')}}" alt="">
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
                            <li class="dropdown">
                                <button id="dropdownCartButton" class="btn dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="list-icon">
                                        <i class="ti-user"></i>
                                    </div>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right user-links"
                                    aria-labelledby="dropdownMenuButton">
                                    <ul>
                                        <li>
                                            <a href="account.html">
                                                Account
                                            </a>
                                        </li>
                                        <li>
                                            <a href="change-password.html">
                                                Change Password
                                            </a>
                                        </li>
                                        <li>
                                            <a href="address.html">
                                                Address
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('orders')}}">
                                                My Orders
                                            </a>
                                        </li>
                                        <li>
                                            <a href="orders-details.html">
                                                Order Details
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('wishlist')}}">
                                                Wish List
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="{{route('upload-prescription')}}" class="btn btn-primary btn-sm">Upload</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-links">
                <div class="container-fluid theme-container">
                    <ul class="header-links-container">
                        <li class="header-links-item">
                            <div class="header-childrenItem-parent">
                                <a href="#">
                                    <span class="header-childrenItem-link-text">Disease</span>
                                </a>
                                <i class="fa fa-angle-down drop-icon"></i>
                            </div>
                            <div class="header-childrenItem-child-category-links">
                                <ul class="header-childrenItem-child-list">
                                    <li>
                                        <a href="category.html" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Medicines One</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category.html" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Medicines Two</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category.html" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Medicines Three</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-links-item">
                            <div class="header-childrenItem-parent">
                                <a href="#">
                                    <span class="header-childrenItem-link-text">Ayurveda</span>
                                </a>
                                <i class="fa fa-angle-down drop-icon"></i>
                            </div>
                            <div class="header-childrenItem-child-category-links">
                                <ul class="header-childrenItem-child-list">
                                    <li>
                                        <a href="category.html" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Boost Your Immunity</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category.html" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Masks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category.html" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Boost Your Immunity</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category.html" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Masks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category.html" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Boost Your Immunity</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category.html" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Masks</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-links-item">
                            <div class="header-childrenItem-parent">
                                <a href="#">
                                    <span class="header-childrenItem-link-text">Nutrition</span>
                                </a>
                                <i class="fa fa-angle-down drop-icon"></i>
                            </div>
                            <div class="header-childrenItem-child-category-links">
                                <ul class="header-childrenItem-child-list">
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Flash Deals</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Top Health Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Summer Essentials</span>
                                        </a>
                                    </li>
                                    <li><a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Trending Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Flash Deals</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Top Health Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Summer Essentials</span>
                                        </a>
                                    </li>
                                    <li><a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Trending Products</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="header-childrenItem-child-list">
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Personal Care</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Top Health Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Summer Essentials</span>
                                        </a>
                                    </li>
                                    <li><a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Trending Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Flash Deals</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Top Health Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Summer Essentials</span>
                                        </a>
                                    </li>
                                    <li><a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Trending Products</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-links-item">
                            <div class="header-childrenItem-parent">
                                <a href="#">
                                    <span class="header-childrenItem-link-text">Baby Car</span>
                                </a>
                                <i class="fa fa-angle-down drop-icon"></i>
                            </div>
                            <div class="header-childrenItem-child-category-links">
                                <ul class="header-childrenItem-child-list">
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Vitamins &amp;
                                                Supplements</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Multivitamins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Vitamins A-Z</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Mineral Supplements</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Nutritional Drinks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">For Adults</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">For Children</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">For Women</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Health Food &amp; Drinks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Green Tea &amp; Herbal
                                                Tea</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Herbal Juice</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Apple Cider Vinegar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Healthy Snacks</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="header-childrenItem-child-list">
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Vitamins &amp;
                                                Supplements</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Multivitamins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Vitamins A-Z</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Mineral Supplements</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Nutritional Drinks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">For Adults</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">For Children</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">For Women</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Health Food &amp; Drinks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Green Tea &amp; Herbal
                                                Tea</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Herbal Juice</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Apple Cider Vinegar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Healthy Snacks</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="header-childrenItem-child-list">
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Vitamins &amp;
                                                Supplements</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Multivitamins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Vitamins A-Z</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Mineral Supplements</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Nutritional Drinks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">For Adults</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">For Children</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">For Women</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Health Food &amp; Drinks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Green Tea &amp; Herbal
                                                Tea</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Herbal Juice</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Apple Cider Vinegar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Healthy Snacks</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-links-item">
                            <div class="header-childrenItem-parent">
                                <a href="#">
                                    <span class="header-childrenItem-link-text">Sexual Wellness</span>
                                </a>
                                <i class="fa fa-angle-down drop-icon"></i>
                            </div>
                            <div class="header-childrenItem-child-category-links">
                                <ul class="header-childrenItem-child-list">
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Vitamins &amp;
                                                Supplements</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Multivitamins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Vitamins A-Z</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Mineral Supplements</span>
                                        </a>
                                    </li>
                                    <li><a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Trending Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Flash Deals</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Top Health Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Summer Essentials</span>
                                        </a>
                                    </li>
                                    <li><a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Trending Products</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="header-childrenItem-child-list">
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Health Food &amp; Drinks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Green Tea &amp; Herbal
                                                Tea</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Herbal Juice</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Apple Cider Vinegar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Healthy Snacks</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-links-item">
                            <div class="header-childrenItem-parent">
                                <a href="#">
                                    <span class="header-childrenItem-link-text">Fitness </span>
                                </a>
                                <i class="fa fa-angle-down drop-icon"></i>
                            </div>
                            <div class="header-childrenItem-child-category-links">
                                <ul class="header-childrenItem-child-list">
                                    <li>
                                        <a href="category.html" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Boost Your Immunity</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category.html" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Masks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category.html" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Boost Your Immunity</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category.html" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Masks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category.html" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Boost Your Immunity</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category.html" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Masks</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-links-item">
                            <div class="header-childrenItem-parent">
                                <a href="#">
                                    <span class="header-childrenItem-link-text">Consultation</span>
                                </a>
                                <i class="fa fa-angle-down drop-icon"></i>
                            </div>
                            <div class="header-childrenItem-child-category-links">
                                <ul class="header-childrenItem-child-list">
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Flash Deals</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Top Health Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Summer Essentials</span>
                                        </a>
                                    </li>
                                    <li><a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Trending Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Flash Deals</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Top Health Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Summer Essentials</span>
                                        </a>
                                    </li>
                                    <li><a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Trending Products</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="header-childrenItem-child-list">
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Flash Deals</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Top Health Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Summer Essentials</span>
                                        </a>
                                    </li>
                                    <li><a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Trending Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Flash Deals</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Top Health Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Summer Essentials</span>
                                        </a>
                                    </li>
                                    <li><a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Trending Products</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-links-item">
                            <div class="header-childrenItem-parent">
                                <a href="#">
                                    <span class="header-childrenItem-link-text">Unani</span>
                                </a>
                                <i class="fa fa-angle-down drop-icon"></i>
                            </div>
                            <div class="header-childrenItem-child-category-links">
                                <ul class="header-childrenItem-child-list">
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Vitamins &amp;
                                                Supplements</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Multivitamins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Vitamins A-Z</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Mineral Supplements</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Nutritional Drinks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">For Adults</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">For Children</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">For Women</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Health Food &amp; Drinks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Green Tea &amp; Herbal
                                                Tea</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Herbal Juice</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Apple Cider Vinegar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Healthy Snacks</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="header-childrenItem-child-list">
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Vitamins &amp;
                                                Supplements</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Multivitamins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Vitamins A-Z</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Mineral Supplements</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Nutritional Drinks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">For Adults</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">For Children</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">For Women</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Health Food &amp; Drinks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Green Tea &amp; Herbal
                                                Tea</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Herbal Juice</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Apple Cider Vinegar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Healthy Snacks</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="header-childrenItem-child-list">
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Vitamins &amp;
                                                Supplements</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Multivitamins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Vitamins A-Z</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Mineral Supplements</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Nutritional Drinks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">For Adults</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">For Children</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">For Women</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Health Food &amp; Drinks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Green Tea &amp; Herbal
                                                Tea</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Herbal Juice</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Apple Cider Vinegar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Healthy Snacks</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="header-childrenItem-child-list">
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Vitamins &amp;
                                                Supplements</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Multivitamins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Vitamins A-Z</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Mineral Supplements</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Nutritional Drinks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">For Adults</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">For Children</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">For Women</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Health Food &amp; Drinks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Green Tea &amp; Herbal
                                                Tea</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Herbal Juice</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Apple Cider Vinegar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Healthy Snacks</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-links-item">
                            <div class="header-childrenItem-parent">
                                <a href="#">
                                    <span class="header-childrenItem-link-text">Allopathy</span>
                                </a>
                                <i class="fa fa-angle-down drop-icon"></i>
                            </div>
                            <div class="header-childrenItem-child-category-links">
                                <ul class="header-childrenItem-child-list">
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Vitamins &amp;
                                                Supplements</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Multivitamins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Vitamins A-Z</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Mineral Supplements</span>
                                        </a>
                                    </li>
                                    <li><a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Trending Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Flash Deals</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Top Health Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Summer Essentials</span>
                                        </a>
                                    </li>
                                    <li><a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Trending Products</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="header-childrenItem-child-list">
                                    <li>
                                        <a href="#" class="childItem-level-2">
                                            <span class="header-childrenItem-link-text">Health Food &amp; Drinks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Green Tea &amp; Herbal
                                                Tea</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Herbal Juice</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Apple Cider Vinegar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="childItem-level-3">
                                            <span class="header-childrenItem-link-text">Healthy Snacks</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-header">
        <div class="container-fluid theme-container">
            <div class="row align-items-center">
                <div class="col-auto">
                    <ul class="header-left-options">
                        <li class="link-item open-sidebar">
                            <i class="ti-menu"></i>
                        </li>
                    </ul>
                </div>
                <div class="col text-center">
                    <img src="{{asset('assets/img/logo.png')}}" alt="logo" class="header-logo">
                </div>
                <div class="col-auto">
                    <ul class="header-right-options">
                        <li class="link-item">
                            <span class="badge badge-secondary">0</span>
                            <i class="ti-bag"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="menu-sidebar">
                <div class="close">
                    <i class="ti-close"></i>
                </div>

                <div class="welcome d-flex align-items-center">
                    <a href="#"  data-toggle="modal" data-dismiss="modal" data-target="#login_modal" class="btn btn-soft-primary btn-md">Login</a>
                    <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#register_modal" class="btn btn-primary btn-md">Register</a>
                    <!-- <div class="avater btn-soft-primary">H</div>
                    <span>Hi, Deep saha</span> -->
                </div>
                <div class="mobileMenuLinks mb-4 mt-2">
                    <h6>Account Info</h6>
                    <ul>
                        <li><a href="account.html">Account</a></li>
                        <li><a href="{{route('orders')}}">My Orders</a></li>
                        <li><a href="{{route('wishlist')}}">Wish List</a></li>
                        <li><a href="index.html">Logout</a></li>
                    </ul>
                </div>
                <div class="mobileMenuLinks">
                    <h6>Category</h6>
                    <ul>
                        <li><a href="category.html">AllMedicines</a></li>
                        <li><a href="category.html">COVID Prevention</a></li>
                        <li><a href="category.html">Featured</a></li>
                        <li><a href="category.html">Fitness</a></li>
                        <li><a href="category.html">Diabetes</a></li>
                        <li><a href="category.html">COVID Test </a></li>
                        <li><a href="category.html">Papular</a></li>
                        <li><a href="category.html">Supplements</a></li>
                        <li><a href="category.html">Nutrition</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </div>
    {{$slot}}

    <footer class="site-footer footer-padding-lg bg-light mt-8">
        <div class="container-fluid theme-container">
            <div class="upper-footer">
                <div class="row justify-content-around">
                    <div class="col-lg-4 col-md-3 col-12">
                        <div class="widget">
                            <a href="index.html"><div class="footer-brand"><img src="{{asset('assets/img/logo.png')}}" alt=""></div></a>
                            
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore numquam sit optio consectetur et pariatur modi officiis veritatis repellat alias?</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="widget">
                            <div class="widget-title">
                                <h3>Usefull Links</h3>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">Documentation</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                                <li>
                                    <a href="#">Privacy &amp; terms</a>
                                </li>
                                <li>
                                    <a href="#">Sitemap</a>
                                </li>
                                <li>
                                    <a href="#">Customers</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="widget">
                            <div class="widget-title">
                                <h3>Help</h3>
                            </div>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="{{route('about-us')}}">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Business Partnership</a>
                                </li>
                                <li>
                                    <a href="{{route('blogs')}}">Blogs</a>
                                </li>
                                <li>
                                    <a href="{{route('contact-us')}}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="widget">
                            <div class="widget-title">
                                <h3>Policy</h3>
                            </div>
                            <ul>
                                <li>
                                    <a href="policy.html">Privacy policy</a>
                                </li>
                                <li>
                                    <a href="policy.html">Terms and Conditions</a>
                                </li>
                                <li>
                                    <a href="policy.html">Return Policy</a>
                                </li>
                                <li>
                                    <a href="policy.html">Refund Policy</a>
                                </li>
                                <li>
                                    <a href="policy.html">Ip Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="widget">
                            <div class="widget-title">
                                <h3>Social</h3>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">Facebook</a>
                                </li>
                                <li>
                                    <a href="#">Google</a>
                                </li>
                                <li>
                                    <a href="#">Pinterest</a>
                                </li>
                                <li>
                                    <a href="#">Linkedin</a>
                                </li>
                                <li>
                                    <a href="#">Dribble</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-footer">
                <div class="row">
                    <div class="col-md-6 text-lg-left">
                        <p class="mb-4 mb-md-0 text-muted">Copyright © 2021 Hospitania By Dsahathemes | All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-card text-lg-right">
                            <img class="img-fluid mx-2" src="{{asset('assets/img/payment-methods.png')}}" alt="Icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal clean_modal clean_modal-lg" id="login_modal" tabindex="-1" aria-labelledby="login_modal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                  {{--  <div class="row">
                        <div class="col-12">
                            <a href="#" class="btn btn-gray-border btn-full rounded btn-large text-capitalize mb-3">
                                <img src="assets/img/facebook.png" alt="">
                                Login with Facebook
                            </a>
                            <a href="#" class="btn btn-gray-border btn-full rounded btn-large text-capitalize">
                                <img src="assets/img/google.png" alt="">
                                Login with Google
                            </a>
                        </div>
                        <div class="col-12 text-center">
                            <p class="text-muted my-4">Or Login With</p>
                        </div>
                    </div> --}}
                    <div class="login_error d-none">
                        <div class="alert" role="alert">
                        </div>
                    </div>
                    <form method="POST" action="#" id="frmLogin">
                        @csrf
                        <div class="form-group">
                            <input name="email" required type="email" placeholder="Email"
                                class="form-control input-lg rounded">
                        </div>
                        <div class="form-group">
                            <input name="password" required type="password" placeholder="Password"
                                class="form-control input-lg rounded">
                        </div>
                        <div id="login_msg"></div>
                        <button type="submit" id="login_btn"
                            class="btn btn-primary btn-full btn-medium rounded">Login</button>
                        <div class="form-group text-center small font-weight-bold mt-3">
                            <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#forgot_modal"> Forgot
                                Password?</a>
                        </div>
                        <hr class="my-4">
                        <div class="form-group text-center small font-weight-bold mb-0">
                            Don’t have an account? <a href="#" data-toggle="modal" data-dismiss="modal"
                                data-target="#register_modal"> Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   {{-- <div class="modal clean_modal" id="forgot_modal" tabindex="-1" aria-labelledby="forgot_modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <input name="password" type="password" placeholder="Old Password"
                                class="form-control input-lg rounded">
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" placeholder="New Password"
                                class="form-control input-lg rounded">
                        </div>
                        <div class="form-group">
                            <input name="password" type="text" placeholder="Confirm Password"
                                class="form-control input-lg rounded">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-full btn-medium rounded">Change
                            Password</button>
                        <div class="form-group text-center small font-weight-bold mt-3">
                            Want to <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#login_modal">
                                Login?</a>
                        </div>
                        <hr class="my-4">
                        <div class="form-group text-center small font-weight-bold mb-0">
                            Don’t have an account? <a href="#" data-toggle="modal" data-dismiss="modal"
                                data-target="#register_modal"> Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="modal clean_modal clean_modal-lg" id="register_modal" tabindex="-1" aria-labelledby="register_modal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <div class="register_error d-none">
                        <div class="alert f-size-16" role="alert">
                        </div>
                    </div>
                    <form  method="POST"  id="frmRegistar">
                    @csrf
                {{--    <div class="row">
                            <div class="col-12">
                                <a href="#" class="btn btn-gray-border btn-full rounded btn-large text-capitalize mb-3">
                                    <img src="assets/img/facebook.png" alt="">
                                    Register with Facebook
                                </a>
                                <a href="#" class="btn btn-gray-border btn-full rounded btn-large text-capitalize">
                                    <img src="assets/img/google.png" alt="">
                                    Register with Google
                                </a>
                            </div>
                            <div class="col-12 text-center">
                                <p class="text-muted my-4">Or Register With</p>
                            </div>
                        </div> --}}
                        <div class="form-group mb-3">
                            <!-- <label for="name" class="col-md-4 col-form-label fw-bold text-md-end">{{ __('Name') }}</label> -->
                            <input class="form-control" required name="name" placeholder="First Name"    type="text">
                            <div id="name_error" class="field_error text-danger"></div>
                        </div>
                        <div class="form-group mb-3">
                            <!-- <label for="email" class="col-md-4 col-form-label fw-bold text-md-end">{{ __('Email Address') }}</label> -->
                            <input name="email" type="email" required placeholder="Email" class="form-control rounded">
                                <div id="email_error" class="field_error text-danger"></div>
                        </div>
                        <div class="form-group mb-3">
                            <input name="phone" type="text" required placeholder="Phone"
                                class="form-control rounded checkIsNumber phone-check">
                        </div>
                        <div class="form-group mb-3">
                            <!-- <label for="password"   class="col-md-4 col-form-label fw-bold text-md-end">{{ __('Password') }}</label> -->
                            <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                        </div>
                        <div class="form-group mb-3">
                            <!-- <label for="password-confirm"  class="col-md-4 col-form-label fw-bold text-md-end">{{ __('Confirm Password') }}</label>                          -->
                            <input id="password-confirm" type="password" class="form-control"   name="password_confirmation" required autocomplete="new-password">
                            <div id="password_error" class="field_error text-danger"></div>
                        </div>
                        <div id="checkboxed_error" class="field_error text-danger"></div>
                        <div id="thank_you_msg" class="field_error text-center text-success"></div>
                        <div id="register_msg" class= "msg-show text-center text-danger"></div>

                        <button type="submit" class="btn btn-primary btn-full btn-medium rounded">{{ __('Register') }}</button>
                    </form>
                        <div class="form-group text-center small font-weight-bold mt-3">
                            By continuing you agree to our <a href="#"> Terms and conditions.</a>
                        </div>
                        <hr class="my-4">
                        <div class="form-group text-center small font-weight-bold mb-0">
                            Don’t have an account? <a href="#" data-toggle="modal" data-dismiss="modal"
                                data-target="#login_modal"> Login</a>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Required vendor scripts (Do not remove) -->
    <script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.bundle.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- Modify theme scripts (Do not remove) -->
    <script src="{{asset('assets/js/theme.js')}}"></script>
    <script>

    jQuery('#frmRegistar').submit(function(e){
    //alert(jQuery('#frmRegistar').serialize());
        e.preventDefault();
        jQuery('.field_error').html('');
        jQuery.ajax({
            url:'{{ route('uregisteor') }}',
            data:jQuery('#frmRegistar').serialize(),
            type:'post',
            success:function(result){
                    if(result.status=="error"){
                        jQuery.each(result.error,function(key,val){
                        jQuery('#'+key+'_error').html(val[0]);
                    });
                }
                if(result.status=="success"){
                    // jQuery('#register_msg').html(result.msg);
                    jQuery('#frmRegistar')[0].reset();
                    jQuery('#thank_you_msg').html(result.msg);
                }
            }
        });
    });

jQuery('#frmLogin').submit(function(e){
  jQuery('#login_msg').html("");
  e.preventDefault();
  jQuery.ajax({
    url:'{{ route('ulogin') }}',
    data:jQuery('#frmLogin').serialize(),
    type:'post',
    success:function(result){
      if(result.status=="error"){
        jQuery('#login_msg').html(result.msg);
      }
      if(result.status=="success"){
       window.location.reload();
      }
    }
  });
});
    </script>
    @livewireScripts
	@stack('scripts')
</body>
</html>

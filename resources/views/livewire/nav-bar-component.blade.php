<div class="header-links">
    <div class="container-fluid theme-container">
        <ul class="header-links-container">
            @foreach($categorys as $category)
                <li class="header-links-item">
                    <div class="header-childrenItem-parent">
                        <a href="{{route('product.category',['category_slug'=>$category->slug])}}">
                            <span class="header-childrenItem-link-text">{{$category->name}}</span>
                        </a>
                        <i class="fa fa-angle-down drop-icon"></i>
                    </div>

                    <div class="header-childrenItem-child-category-links">
                        <ul class="header-childrenItem-child-list">
                            @foreach($category->subCategories as $scategory)
                                <li>
                                    <a href="{{route('product.category',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug])}}" class="childItem-level-2">
                                        <span class="header-childrenItem-link-text">{{$scategory->name}}</span>
                                    </a>
                                </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </li>
            @endforeach
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
                            <a href="{{route('shop')}}" class="childItem-level-2">
                                <span class="header-childrenItem-link-text">Boost Your Immunity</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('shop')}}" class="childItem-level-2">
                                <span class="header-childrenItem-link-text">Masks</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('shop')}}" class="childItem-level-2">
                                <span class="header-childrenItem-link-text">Boost Your Immunity</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('shop')}}" class="childItem-level-2">
                                <span class="header-childrenItem-link-text">Masks</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('shop')}}" class="childItem-level-2">
                                <span class="header-childrenItem-link-text">Boost Your Immunity</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('shop')}}" class="childItem-level-2">
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
                            <a href="{{route('shop')}}" class="childItem-level-2">
                                <span class="header-childrenItem-link-text">Boost Your Immunity</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('shop')}}" class="childItem-level-2">
                                <span class="header-childrenItem-link-text">Masks</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('shop')}}" class="childItem-level-2">
                                <span class="header-childrenItem-link-text">Boost Your Immunity</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('shop')}}" class="childItem-level-2">
                                <span class="header-childrenItem-link-text">Masks</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('shop')}}" class="childItem-level-2">
                                <span class="header-childrenItem-link-text">Boost Your Immunity</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('shop')}}" class="childItem-level-2">
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

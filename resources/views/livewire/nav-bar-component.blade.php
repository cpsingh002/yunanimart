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
        
        </ul>
    </div>
</div>

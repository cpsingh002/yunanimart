<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
<style>
        nav svg{
            height:20px;
        }
        nav .hidden{
            display:block !important;
        }
        
        /*nav .flex{*/
        /*    display:none;*/
        /*}*/
        
        /*nav span button.border{*/
        /*    border:0px solid !important;*/
        /*}*/
        /*nav span .border{*/
        /*    border:0px solid !important;*/
        /*}*/
    </style>
    <main>

        <div class="section-padding2 plr">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xxl-12 col-xl-12  col-lg-8 col-md-7">
                        

                        <div class="gridView customTab-content customTab-content-1 active">
                            <div class="row ">
                                @foreach($brands as $brand)
                                <div class="col-md-2 col-sm-4 col-6">
                                    <div class="product">
                                        <a href="{{route('brand-products',['brand_slug'=>$brand->brand_slug])}}" class="product-img">
                                            <img src="{{asset('admin/brand')}}/{{$brand->brand_image}}" class="" alt="" width="500" height="967">
                                        </a>
                                        <div class="product-info">
                                            
                                            <h3>
                                                <a href="{{route('brand-products',['brand_slug'=>$brand->brand_slug])}}"> {{$brand->brand_name}}</a>
                                            </h3>
                                            
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                             
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </main>
</div>
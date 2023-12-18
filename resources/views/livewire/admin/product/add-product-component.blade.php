
<div id="top" class="sa-app__body">
    <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
        <div class="container">
            <div class="py-5">
                <div class="row g-4 align-items-center">
                    <div class="col">
                        <nav class="mb-2" aria-label="breadcrumb">

                        </nav>
                        <h1 class="h3 m-0">Add Product</h1>
                    </div>
                    <div class="col-auto d-flex">
                        <a href="{{route('admin.products')}}" class="btn btn-primary">All Products</a>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="sa-entity-layout">
                        <div class="sa-entity-layout__body">
                            <div class="sa-entity-layout__main">
                                <div class="card">
                                    <div class="card-body p-5">
                                        @if(Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                        @endif
                                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                                            <div class="mb-3">
                                                <h2 class="mb-0 fs-exact-18">Basic information</h2>
                                            </div>

                                            <div class="row">
                                                <div class="sa-example__body py-0">
                                                   
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Category</label>
                                                                <div class="col-md-12">
                                                                    <select class="form-control" wire:model="category_id" wire:change="changeSubcategory">
                                                                        <option value="">Select Category</option>
                                                                        @foreach($categories as $category)
                                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('category_id') <p class="text-danger">{{$message}}</p> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Sub-Category</label>
                                                                <div class="col-md-12">
                                                                    <select class="form-control" wire:model="scategory_id" wire:change="changeattribute">
                                                                        <option value="0">Select Sub Category</option>
                                                                        @foreach($scategories as $scategory)
                                                                            <option value="{{$scategory->id}}">{{$scategory->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('scategory_id') <p class="text-danger">{{$message}}</p> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="my-2">
                                                                <label for="form-banner" class="form-label">Brands</label>
                                                                <div class="col-md-12">
                                                                    <select class="form-control" wire:model="brand_id" wire:change="changebrands">
                                                                        <option value="0">Select Brand Name</option>
                                                                        @foreach($brands as $brand)
                                                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('brand_id') <p class="text-danger">{{$message}}</p> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="my-2">
                                                            <label for="form-banner" class="form-label">Brands Model Number </label>
                                                            <div class="col-md-12">
                                                                <select class="form-control" wire:model="modelnumber_id">
                                                                    <option value="0">Select Brand Name</option>
                                                                    @foreach($modelnumbers as $modelnumber)
                                                                        <option value="{{$modelnumber->id}}">{{$modelnumber->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('modelnumber_id') <p class="text-danger">{{$message}}</p> @enderror
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                                                                            
                                                    <div class="mb-4">
                                                        <label for="form-banner" class="form-label">Attributes </label>
                                                            <div class="col-md-12">
                                                                @foreach($attributes as $key1 => $attribute)
                                                                    <label>{{$attribute->attribute}}</label>
                                                                    <!-- <input type="hidden" value="{{$attribute->id}}" wire:model="dfh.{{$key1}}"> -->
                                                                    <select class="form-control" wire:model="attribute_arr.{{$key1}}" wire:change="changehghg({{$attribute->id}}, {{$key1}})" >
                                                                        @foreach($attribute->attributeoptions as $attributeoption)
                                                                        <option value="{{$attributeoption->id}}">{{$attributeoption->option_details}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                @endforeach
                                                            
                                                            @error('attribute_id') <p class="text-danger">{{$message}}</p> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" placeholder="Title"
                                                            class="form-control" wire:model="name" wire:keyup="generateslug" />
                                                        @error('name') <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="form-category/slug" class="form-label">Product Slug</label>
                                                        <div class="input-group input-group--sa-slug">
                                                            <input type="text" placeholder="Category Slug" class="form-control"
                                                                wire:model="slug" />
                                                            @error('slug') <p class="text-danger">{{$message}}</p> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="control-label">Short Description</label>
                                                        <div class="input-group" wire:ignore>
                                                            <textarea class ="form-control" id="short_description" placeholder="Short Description" wire:model="short_description"></textarea>
                                                            @error('short_description') <p class="text-danger">{{$message}}</p> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="control-label">Description</label>
                                                        <div class="input-group" wire:ignore>
                                                            <textarea class ="form-control" id="description" placeholder="Description" wire:model="description"></textarea>
                                                            @error('description') <p class="text-danger">{{$message}}</p> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <label class="form-label">Available for
                                                                    Exchange</label>
                                                                <div class="input-group input-group--sa-slug">
                                                                    <select class="form-select mt-3" wire:model="for_exchange">
                                                                        <option  value="1">Yes</option>
                                                                        <option value="0">No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <label class="form-label">Available for
                                                                    Rent</label>
                                                                <div class="input-group input-group--sa-slug">
                                                                    <select class="form-select mt-3" wire:model="for_rent">
                                                                        <option value="1">Yes</option>
                                                                        <option value="0">No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <label class="form-label">Available for
                                                                    Sell</label>
                                                                <div class="input-group input-group--sa-slug">
                                                                    <select class="form-select mt-3" wire:model="for_sell">
                                                                        <option value="1">Yes</option>
                                                                        <option value="0" >No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>                                                        
                                                    {{--<div class="mb-4">
                                                            <label class="form-label">Product Specification</label>
                                                            <input type="text" placeholder="Product Specification"
                                                                class="form-control" wire:model="pname" />
                                                            @error('pname') <p class="text-danger">{{$message}}</p>
                                                            @enderror
                                                    </div>--}}
                                                    <div class="mb-4">
                                                        <label class="form-label">Price</label>
                                                        <div class="input-group input-group--sa-slug">
                                                            <input type="text" placeholder="Product Price"
                                                                class="form-control" wire:model="prices" />
                                                            @error('prices') <p class="text-danger">{{$message}}
                                                            </p> @enderror
                                                        </div>
                                                    </div>
                                                    {{--<div class="mb-4">
                                                    
                                                        <label class="form-label">How many year old</label>
                                                        <div class="input-group input-group--sa-slug">
                                                            <input type="text" placeholder="Years"
                                                                class="form-control" wire:model="price" />
                                                            @error('price') <p class="text-danger">
                                                                {{$message}}</p>
                                                            @enderror
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="form-package/validity"
                                                            class="form-label">Condition</label>
                                                        <div class="input-group input-group--sa-slug">
                                                            <input type="text" placeholder="Product Condition"
                                                                class="form-control" wire:model="validity" />
                                                            @error('validity') <p class="text-danger">
                                                                {{$message}}</p>
                                                            @enderror
                                                        </div>
                                                    </div>--}}

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <label class="form-label">Country</label>
                                                                <select class="form-control" wire:model="country_id" wire:change.prevent="changecountry">
                                                                    <option value="0">Select Country</option>
                                                                    @foreach($countries as $country)
                                                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('country_id') <p class="text-danger">{{$message}}</p> @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <label class="form-label">State</label>
                                                                <select class="form-control" wire:model="state_id" wire:change.prevent="changestate" >
                                                                    <option value="0">Select State</option>
                                                                    @foreach($states as $state)
                                                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                                
                                                                @error('state_id') <p class="text-danger">{{$message}}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <label class="form-label">City</label>
                                                                <select class="form-control" wire:model="city_id">
                                                                        <option value="0">Select City</option>
                                                                        @foreach($cities as $city)
                                                                            <option value="{{$city->id}}">{{$city->city}}</option>
                                                                        @endforeach
                                                                    </select>
                                                               
                                                                @error('city_id') <p class="text-danger">{{$message}}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                            
                                                    <p>Get Location cordenat using option</p>
                                                                    
                                                    <input name="cureent_location" id="different-add" value="1" type="radio" wire:model="cureent_location" wire:click="currentlocation" >
                                                    <label for="html">Current Location</label><br>
                                                    <input name="cureent_location" id="different-add" class="different-add-map" value="1" type="radio" wire:model="click_location" onclick="show2();" >
                                                    <label for="css">Click on map</label><br>
                                            
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div id="map-container"  style="display:none;">
                                                            <div id="mapa" style="overflow: hidden;position: sticky !important;top: 0;"></div>
                                                            </div>

                                                            
                                                        </div>
                                                    </div>
                                                            
                                                    <div class="mb-4">
                                                        <label class="form-label">ZipCode</label>
                                                        <input type="text" placeholder="Zipcode"
                                                            class="form-control" wire:model="zipcode" />
                                                        @error('zipcode') <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <input type="text" name="lat" id="lat" wire:model="lat" readonly>
                                                    <input type="text" name="long" id="long" wire:model="long" readonly>
                                                    
                                                    <div class="mb-4">
                                                        <label class="form-label">Address</label>
                                                        <div class="input-group input-group--sa-slug">
                                                            <input type="text" placeholder="Address"
                                                                class="form-control"  wire:model="address" />
                                                                
                                                            @error('address') <p class="text-danger">{{$message}}
                                                            </p> @enderror
                                                        </div>
                                                    </div>
                                                            
                                                            
                                                    <div class="mb-4">
                                                        <label for="formFile-1" class="form-label">Thumbnail Images</label>
                                                        <input type="file" class="form-control"  id="formFile-1" wire:model="thumbimage">
                                                            @if($thumbimage)
                                                                <img src="{{$thumbimage->temporaryUrl()}}" width="120" />
                                                            @endif
                                                            @error('thumbimage') <p class="text-danger">{{$message}}</p> @enderror
                                                               
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="formFile-1" class="form-label">Featured Images</label>
                                                        <input type="file" class="form-control" id="formFile-1" wire:model= "featimage">
                                                        @if($featimage)
                                                                <img src="{{$featimage->temporaryUrl()}}" width="120" />
                                                            @endif
                                                            @error('featimage') <p class="text-danger">{{$message}}</p> @enderror
                                                                
                                                    </div>
                                                    <div class="mb-4">
                                                            <label for="formFile-1" class="form-label">Images 4+</label>
                                                            <input type="file" class="form-control" id="formFile-1" wire:model="images" multiple>
                                                            @if($images)
                                                                @foreach($images as $image)
                                                                    <img src="{{$image->temporaryUrl()}}" width="120" />
                                                                @endforeach
                                                            @endif
                                                            @error('image') <p class="text-danger">{{$message}}</p> @enderror
                                                        
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="form-label">Meta Tag</label>
                                                        <input type="text" placeholder="Meta Tag"
                                                            class="form-control" wire:model="meta_keywords" />
                                                        @error('meta_keywords') <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="form-label">Meta Description</label>
                                                        <div class="input-group input-group--sa-slug">
                                                            <textarea placeholder="Meta Description"
                                                                class="form-control mt-3" rows="2" wire:model="meta_description"></textarea>
                                                            @error('meta_description') <p class="text-danger">{{$message}}
                                                            </p> @enderror
                                                        </div>
                                                    </div>
                                                            
                                                    <div class="mb-4">
                                                        <label class="form-label">Owner Name</label>
                                                        <input type="text" placeholder="Owner Name"
                                                            class="form-control" wire:model="owner_name" />
                                                        @error('owner_name') <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="form-label">Contact No</label>
                                                        <div class="input-group input-group--sa-slug">
                                                            <input type="number" placeholder="Contact No"
                                                                class="form-control" wire:model="contact_number" />
                                                            @error('contact_number') <p class="text-danger">{{$message}}
                                                            </p> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="form-label">Email</label>
                                                            <div class="input-group input-group--sa-slug">
                                                                <input type="email" placeholder="email_id"
                                                                    class="form-control" wire:model="email_id" />
                                                                @error('email_id') <p class="text-danger">
                                                                    {{$message}}</p>
                                                                @enderror
                                                            </div>
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="form-label">Exchange For</label>
                                                            <div class="input-group input-group--sa-slug">
                                                                <input type="test" placeholder=""
                                                                    class="form-control" wire:model="exchange_for" />
                                                                @error('exchange_for') <p class="text-danger">
                                                                    {{$message}}</p>
                                                                @enderror
                                                            </div>
                                                    </div>
                                                         

                                                    <div class="mb-4 text-center">
                                                        <button type="submit"
                                                            class="btn btn-primary">Submit</button>
                                                    </div>
                                                            
                                                </div>

                                            </div>
                                        </form>
                                        @if(Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
    


<!-- sa-app__body / end -->
<!-- sa-app__footer -->

@push('scripts')


@endpush
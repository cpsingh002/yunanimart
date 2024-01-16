
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
                        <a href="{{route('admin.products2')}}" class="btn btn-primary">All Products</a>
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
                                                    <div class="mb-4">
                                                        <label class="form-label">Med Name</label>
                                                        <input type="text" placeholder="Title"
                                                            class="form-control" wire:model="name" wire:keyup="generateSlug" />
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
                                                        <div class="col-md-6">
                                                            <div class="mb-4">
                                                                <label class="form-label">Regular Price</label>
                                                                <div class="input-group input-group--sa-slug">
                                                                <input type="text" placeholder="$price" class="form-control" wire:model="regular_price" />
                                                                @error('regular_price') <p class="text-danger">{{$message}}</p> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-4">
                                                                <label class="form-label">Sale Price</label>
                                                                <div class="input-group input-group--sa-slug">
                                                                    <input type ="text" placeholder="Sale Price" class ="form-control input-md" wire:model="sale_price"/>
                                                                    @error('sale_price') <p class="text-danger">{{$message}}</p> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div> 
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-4">
                                                                <label class="form-label">BulK Quantity </label>
                                                                <div class="input-group input-group--sa-slug">
                                                                <input type="number" placeholder="3" class="form-control" wire:model="bulk_quantity" />
                                                                @error('bulk_quantity') <p class="text-danger">{{$message}}</p> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-4">
                                                                <label class="form-label">Bulk Rate</label>
                                                                <div class="input-group input-group--sa-slug">
                                                                    <input type ="text" placeholder="Bulk rate" class ="form-control input-md" wire:model="bulk_rate"/>
                                                                    @error('bulk_rate') <p class="text-danger">{{$message}}</p> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div> 
                                                    <div class="mb-4">
                                                        <label class="form-label">SKU</label>
                                                        <input type ="text" placeholder="SKU" class ="form-control input-md" wire:model="SKU"/>
                                                        @error('SKU') <p class="text-danger">{{$message}}</p> @enderror
                                                        
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="form-label">Stock Status</label>
                                                        <select class="form-control">
                                                            <option value="instock">InStock</option>
                                                            <option value="outofstock">Out Stock</option>
                                                        </select>
                                                        @error('stock_status') <p class="text-danger">{{$message}}</p> @enderror
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="form-label">Featured</label>
                                                        <select class="form-control" wire:model="featured">
                                                            <option value="0">No</option>
                                                            <option value="1">Yes</option>
                                                        </select>
                                                        @error('featured') <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="form-label">Tax SLab</label>
                                                        <select class="form-control" wire:model="tax_id">
                                                            <option value="">Select Tax Slab</option>
                                                            @foreach($taxs as $tax)
                                                            <option value="{{$tax->id}}">{{$tax->tax_name}} {{$tax->value}}%</option>
                                                            @endforeach
                                                            
                                                        </select>
                                                        @error('tax_id') <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="form-label">Free Delivery</label>
                                                        <select class="form-control" wire:model="freecancellation">
                                                            <option value="0">No</option>
                                                            <option value="1">Yes</option>
                                                        </select>
                                                        @error('freecancellation') <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="form-label">Quantity</label>
                                                        <input type ="text" placeholder="10" class ="form-control input-md" wire:model="quantity"/>
                                                        @error('quantity') <p class="text-danger">{{$message}}</p> @enderror
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="form-label">Category</label>
                                                        <div class="col-md-12">
                                                            <select class="form-control" wire:model="medtype_id">
                                                                <option value="">Select Med Type</option>
                                                                @foreach($medtypes as $medtype)
                                                                    <option value="{{$medtype->id}}">{{$medtype->medtype}}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('medtype_id') <p class="text-danger">{{$message}}</p> @enderror
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="row">
                                                        <div class="col-md-4">
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
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Sub-Category</label>
                                                                <div class="col-md-12">
                                                                    <select class="form-control" wire:model="scategory_id" >
                                                                        <option value="0">Select Sub Category</option>
                                                                        @foreach($scategories as $scategory)
                                                                            <option value="{{$scategory->id}}">{{$scategory->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('scategory_id') <p class="text-danger">{{$message}}</p> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="my-2">
                                                                <label for="form-banner" class="form-label">Brands</label>
                                                                <div class="col-md-12">
                                                                    <select class="form-control" wire:model="brand_id" >
                                                                        <option value="">Select Brand Name</option>
                                                                        @foreach($brands as $brand)
                                                                            <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('brand_id') <p class="text-danger">{{$message}}</p> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                                                                                                                                                        

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <label class="form-label">Prescription Required</label>
                                                                <div class="input-group input-group--sa-slug">
                                                                    <select class="form-select mt-3" wire:model="prescription">
                                                                        <option  value="1">Yes</option>
                                                                        <option value="0">No</option>
                                                                    </select>
                                                                    @error('prescription') <p class="text-danger">{{$message}}</p> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <label class="form-label">Age Limit</label>
                                                                <div class="input-group input-group--sa-slug">
                                                                    <select class="form-select mt-3" wire:model="age_limit">
                                                                        <option value="1">Yes</option>
                                                                        <option value="0">No</option>
                                                                    </select>
                                                                    @error('age_limit') <p class="text-danger">{{$message}}</p> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <label class="form-label">Expiry date</label>
                                                                <div class="input-group input-group--sa-slug">
                                                                <input type="date" id="sale-date" placeholder="YYYY/MM/DD" class="form-control" wire:model="expiry_date" />
                                                                    @error('expiry_date') <p class="text-danger">{{$message}}</p> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>                                                        
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <label class="form-label">For Baby</label>
                                                                <div class="input-group input-group--sa-slug">
                                                                    <select class="form-select mt-3" wire:model="is_baby">
                                                                        <option  value="1">Yes</option>
                                                                        <option value="0">No</option>
                                                                    </select>
                                                                    @error('is_baby') <p class="text-danger">{{$message}}</p> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <label class="form-label">For Child</label>
                                                                <div class="input-group input-group--sa-slug">
                                                                    <select class="form-select mt-3" wire:model="is_child">
                                                                        <option value="1">Yes</option>
                                                                        <option value="0">No</option>
                                                                    </select>
                                                                    @error('is_child') <p class="text-danger">{{$message}}</p> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <label class="form-label">For Young</label>
                                                                <div class="input-group input-group--sa-slug">
                                                                    <select class="form-select mt-3" wire:model="is_young">
                                                                        <option value="1">Yes</option>
                                                                        <option value="0">No</option>
                                                                    </select>
                                                                    @error('is_young') <p class="text-danger">{{$message}}</p> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                            
                                                    <div class="mb-4">
                                                        <label for="formFile-1" class="form-label">Thumbnail Images</label>
                                                        <input type="file" class="form-control"  id="formFile-1" wire:model="image">
                                                        @if($image)
                                                            <img src="{{$image->temporaryUrl()}}" width="120" />
                                                        @endif
                                                        @error('image') <p class="text-danger">{{$message}}</p> @enderror
                                                               
                                                    </div>
                                                   
                                                    <div class="mb-4">
                                                        <label for="formFile-1" class="form-label">Images 4+</label>
                                                        <input type="file" class="form-control" id="formFile-1" wire:model="images" multiple>
                                                        @if($images)
                                                            @foreach($images as $image)
                                                                <img src="{{$image->temporaryUrl()}}" width="120" />
                                                            @endforeach
                                                        @endif
                                                        @error('images') <p class="text-danger">{{$message}}</p> @enderror
                                                        
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
                                                    
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">Product Attribute</label>
                                                        <div class="col-md-4">
                                                            <select class="form-control" wire:model="attr">
                                                                <option value="0">Select Product Attributes</option>
                                                                @foreach($attributes as $attribute)
                                                                    <option value="{{$attribute->id}}">{{$attribute->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <button type="button" class="btn btn-info" wire:click.prevent="add">Add</button>
                                                        </div>
                                                    </div>
                                                    @foreach($inputs as $key => $value)
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">{{$attributes->where('id',$attribute_arr[$key])->first()->name}}</label>
                                                            <div class="col-md-4">
                                                                <input type ="text" placeholder="{{$attributes->where('id',$attribute_arr[$key])->first()->name}}" class="form-control input-md" wire:model="attribute_values.{{$value}}" wire:keyup="done"/>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <button type="button" class="btn btn-info" wire:click.prevent="done">Done</button>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <button type="button" class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}},{{$attributes->where('id',$attribute_arr[$key])->first()->id}})">Remove</button>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                    <div class="col-md-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                All varaint
                                                            </div>
                                                        <div>
                                                        <div class="card" id="product_attr">
                                                            <div class="card-body" style="padding:15px;">
                                                                
                                                                    @foreach($para as $key1 => $tdata)
                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <div class="col-md-2 text-center">
                                                                                    <label for="size_id" class="control-label mb-1"> Variant</label>
                                                                                    <p>{{$tdata}}</p>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <label for="sku" class="control-label mb-1"> SKU</label>
                                                                                    <input id="sku"  type="text" class="form-control"  wire:model="skus.{{$key1}}" required>
                                                                                </div>
                                                                                <div class="col-md-1">
                                                                                    <label for="mrp" class="control-label mb-1"> MRP</label>
                                                                                    <input id="mrp" name="mrps[]" type="text" class="form-control"  wire:model="mrps.{{$key1}}" required>
                                                                                </div>
                                                                                <div class="col-md-1">
                                                                                    <label for="price" class="control-label mb-1"> Price</label>
                                                                                    <input id="price" name="pris[]" type="text" class="form-control"  wire:model="pris.{{$key1}}" required>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <label for="qty" class="control-label mb-1"> Bulk Qty</label>
                                                                                    <input id="qty" name="bulkqtys[]" type="text" class="form-control"  wire:model="bulkqtys.{{$key1}}" required>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <label for="qty" class="control-label mb-1"> Bulk Rate</label>
                                                                                    <input id="qty" name="bulkrates[]" type="text" class="form-control"  wire:model="bulkrates.{{$key1}}" required>
                                                                                </div>
                                                                                <div class="col-md-1">
                                                                                    <label for="qty" class="control-label mb-1"> Qty</label>
                                                                                    <input id="qty" name="qtyes[]" type="text" class="form-control"  wire:model="qtyes.{{$key1}}" required>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    @endforeach
                                                            </div>
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
<script src="https://cdn.tiny.cloud/1/5949s82j52s02vlrmcq6l2c2gkzihao5gxjymat25ancman4/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
        $(function(){
            tinymce.init({
                selector:'#short_description',
                setup:function(editor){
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var sd_data = $('#short_description').val();
                        @this.set('short_description',sd_data);
                    });
                }
            });

            tinymce.init({
                selector:'#description',
                setup:function(editor){
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var d_data = $('#description').val();
                        @this.set('description',d_data);
                    });
                }
            });
        });
    </script>
@endpush
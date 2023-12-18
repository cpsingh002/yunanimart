 <!-- sa-app__toolbar / end -->
 <!-- sa-app__body -->
 <div id="top" class="sa-app__body">
     <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
         <div class="container">
             <div class="py-5">
                 <div class="row g-4 align-items-center">
                     <div class="col">
                         <nav class="mb-2" aria-label="breadcrumb">

                         </nav>
                         <h1 class="h3 m-0">Add Attribute</h1>
                     </div>
                     <div class="col-auto d-flex">
                         <a href="{{route('admin.attributes')}}" class="btn btn-primary">All Attribute</a>
                     </div>

                 </div>
             </div>

             <div class="row">
                 <div class="col-md-10 m-auto">
                     <div class="sa-entity-layout">
                         <div class="sa-entity-layout__body">
                             <div class="sa-entity-layout__main">
                                 <div class="card">
                                     <div class="card-body p-5">
                                         @if(Session::has('message'))
                                         <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                         @endif
                                         <form class="form-horizontal" enctype="multipart/form-data"
                                             wire:submit.prevent="updateAttribute">
                                             <div class="mb-5">
                                                 <h2 class="mb-0 fs-exact-18">Basic information</h2>
                                             </div>                                      
                                                                                        
                                            
                                            <div class="mb-4">
                                                 <label for="form-banner/name" class="form-label">Name</label>
                                                 <input type="text" placeholder="Title" class="form-control"
                                                     wire:model="name" />
                                                 @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>

                                            {{-- <div class="mb-4">
                                                 <label for="form-banner/name" class="form-label">Slug</label>
                                                 <input type="text" placeholder="Slug" class="form-control"
                                                     wire:model="brand_slug" />
                                                 @error('brand_slug') <p class="text-danger">{{$message}}</p> @enderror
                                             </div> --}}
                                             
                    

                                             <div class="mb-4">
                                                 <label for="form-banner/image" class="form-label">Status</label>
                                                 <div class="input-group input-group--sa-slug">

                                                     <select class="form-select" wire:model="status">
                                                         <option value="0">Inactive</option>
                                                         <option value="1">Active</option>
                                                     </select>
                                                 </div>
                                             </div>


                                             <div class="mb-4 text-center">
                                                 <button type="submit" class="btn btn-primary">Update</button>
                                             </div>

                                         </form>

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
 <!-- sa-app__toolbar / end -->
 <!-- sa-app__body -->
 <div id="top" class="sa-app__body">
     <div class="mx-xxl-3 px-4 px-sm-5">
         <div class="py-5">
             <div class="row g-4 align-items-center">
                 <div class="col">
                     <nav class="mb-2" aria-label="breadcrumb">

                     </nav>
                     <h1 class="h3 m-0">Body Part  </h1>
                 </div>
                 <div class="col-auto d-flex">
                    <button type="button"  class="btn btn-primary" data-bs-toggle="modal"  data-bs-target="#exampleModalScrollable"> Add New Body part</button>
                 </div>
             </div>
         </div>
     </div>
     <div class="mx-xxl-3 px-4 px-sm-5 pb-6">
         <div class="sa-layout">
             <!-- <div class="sa-layout__backdrop" data-sa-layout-sidebar-close=""></div> -->

             <div class="sa-layout__content">
                 <div class="card">
                     @if(Session::has('message'))
                     <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                     @endif

                     <div class="p-4"><input type="text" placeholder="Start typing to search for customers" class="form-control form-control--search mx-auto" id="table-search"></div>
                     <!-- <div class="sa-divider"></div> -->
                     <table class="sa-datatables-init" data-order="[[ 1, &quot;asc&quot; ]]" data-sa-search-input="#table-search" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                         <thead>
                             <tr>
                                 <th>Id</th>
                                 <th> Name</th>
                                 <th>Slug</th>
                                 <th>Disease</th>
                                 <th>Status</th>
                                 <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach($bodyparts as $bodypart)
                             <tr>
                                 <td>{{$bodypart->id}}</td>
                                 <td>{{$bodypart->name}}</td>
                                 <td>
                                    <div class="badge badge-sa-success">{{$bodypart->slug}}</div>
                                 </td>
                                 
                                 <td>
                                     <p>after dis</p>
                                 </td>
                                 
                                 <td>@if($bodypart->status == 1)<a href="#" onclick="confirm('Are you sure, You want to Deactive this body part') || event.stopImmediatePropagation()" wire:click.prevent='DeactivePart({{$bodypart->id}})'> Active </a> 
                                @else <a href="#" onclick="confirm('Are you sure, You want to Active this Body Part') || event.stopImmediatePropagation()" wire:click.prevent='ActivePart({{$bodypart->id}})'>Deactive </a>
                                @endif</td>
                                 <td>
                                        <button class="btn btn-sm btn-primary" wire:click="editPost({{ $bodypart->id }})">Edit</button>
                                     <a href="#" wire:click="editPost({{ $bodypart->id }})"><i class="fa fa-edit"></i></a>
                                     <a href="#" onclick="confirm('Are you sure, You want to delete this category') || event.stopImmediatePropagation()"
                                         wire:click.prevent="deleteDisease({{$bodypart->id}})"><i class="fa fa-times ml-1 text-danger"></i></a>
                                 </td>
                             </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>


    <div wire:ignore.self class="modal fade"  id="exampleModalScrollable" tabindex="-1"  aria-labelledby="exampleModalScrollableTitle"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Add New Body Part</h5>
                    <button type="button" class="sa-close sa-close--modal" data-bs-dismiss="modal" aria-label="Close" wire:click="close"></button>
                </div>
                <div class="modal-body">
                    @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <form class="form-horizontal" wire:submit.prevent="storeBodyPart">
                        <div class="mb-5">
                            <h2 class="mb-0 fs-exact-18">Basic information</h2>
                        </div>
                        <div class="mb-4">
                            <label for="form-category/name" class="form-label">Body Part Name</label>
                            <input type="text" placeholder="Name" class="form-control"
                                wire:model="name" wire:keyup="generateslug" />
                            @error('name') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="form-category/slug" class="form-label">Slug</label>
                            <div class="input-group input-group--sa-slug">
                                <input type="text" placeholder="Category Slug" class="form-control"
                                    wire:model="slug" />
                                @error('slug') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                        </div>
                        

                        <div class="mb-4">
                            <label class="control-label">Description</label>
                            <div class="input-group" wire:ignore>
                                <textarea class ="form-control" id="description" placeholder="Description" wire:model="description"></textarea>
                            </div>
                            @error('description') <p class="text-danger">{{$message}}</p> @enderror

                        </div> 

                        
                        <div class="mb-4">
                            <div>
                                <label for="form-category/parent-category" class="form-label">Status
                                    </label>

                                <select class="form-select" wire:model="status">
                                    <option value>Select</option>
                                    <option value="0">Inactive</option>
                                    <option value="1">Active</option>
                                </select>
                                @error('status') <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="close">
                        Close</button
                    ><button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade"  id="EditModel" tabindex="-1"  aria-labelledby="EditModelTitle"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditModelTitle">Add New Body Part</h5>
                    <button type="button" class="sa-close sa-close--modal" data-bs-dismiss="modal" aria-label="Close" wire:click="close"></button>
                </div>
                <div class="modal-body">
                    @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <form class="form-horizontal" wire:submit.prevent="editPostData">
                        <div class="mb-5">
                            <h2 class="mb-0 fs-exact-18">Basic information</h2>
                        </div>
                        <div class="mb-4">
                            <label for="form-category/name" class="form-label">Body Part Name</label>
                            <input type="text" placeholder="Name" class="form-control"
                                wire:model="name" wire:keyup="generateslug" />
                            @error('name') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="form-category/slug" class="form-label">Slug</label>
                            <div class="input-group input-group--sa-slug">
                                <input type="text" placeholder="Category Slug" class="form-control"
                                    wire:model="slug" />
                                @error('slug') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                        </div>
                        

                        <div class="mb-4">
                            <label class="control-label">Description</label>
                            <div class="input-group" wire:ignore>
                                <textarea class ="form-control" id="description" placeholder="Description" wire:model="description"></textarea>
                            </div>
                            @error('description') <p class="text-danger">{{$message}}</p> @enderror

                        </div> 

                        
                        <div class="mb-4">
                            <div>
                                <label for="form-category/parent-category" class="form-label">Status
                                    </label>

                                <select class="form-select" wire:model="status">
                                    <option value>Select</option>
                                    <option value="0">Inactive</option>
                                    <option value="1">Active</option>
                                </select>
                                @error('status') <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="close">
                        Close</button
                    ><button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
 </div>

 @push('scripts')
    
        <script>
            window.addEventListener('close-modal', event =>{
                $('#exampleModalScrollable').modal('hide');
                $('#EditModel').modal('hide');
               
            });
    
    
            window.addEventListener('show-edit-post-modal', event => {
                $('#EditModel').modal('show');
            });

        </script>
    @endpush
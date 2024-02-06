<main>
    <div class="accounnt_header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-auto col-12 order-md-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a class="text-nowrap" href="{{route('index')}}"><i class="fa fa-home mr-2"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a class="text-nowrap" href="{{route('user.account')}}"><i class="fa fa-home mr-2"></i>Account</a>
                            </li>
                            <li class="breadcrumb-item text-nowrap active" aria-current="page">Address</li>
                        </ol>
                    </nav>
                </div>
                <div class="order-md-1 text-center text-md-left col-lg col-12">
                    <h1 class="h3 mb-0">Address</h1>
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
                                    <li class="nav-item ">
                                        <a class="nav-link" href="{{route('user.account')}}"><i class="fa fa-user"></i> My
                                            Account</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="change-password.html"><i class="fa fa-lock"></i>
                                            Password</a>
                                    </li> -->
                                    <li class="nav-item active">
                                        <a class="nav-link active" href="{{route('user.address')}}"><i class="fa fa-address-book"></i>
                                            Address</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('orders')}}"><i class="fa fa-shopping-cart"></i>
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
                                    <h5 class="mb-1 text-white">Address</h5>
                                    <p class="mb-0 text-white small">
                                        You have full control to manage your own account setting.
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#address_model" class="btn btn-primary btn-sm"> Add New Address</a>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5"></div>
                        <div class="card">
                        <div class="card-body">
                            <div class="row">
                                @if(isset($ships[0]))
                                    @foreach($ships as $ship)
                                    
                                        <div class="col-lg-6">
                                            <div class="address-block bg-light rounded p-3">
                                                <a href="#" class="edit_address" wire:click="editPost({{ $ship->id }})">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" class="delete_address" wire:click="deleteConfirmation({{ $ship->id }})">
                                                    <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                </a>
                                                <h6>{{$ship->name}}</h6>
                                                <p class="text-muted">{{$ship->mobile}}. {{$ship->mobile_optional}}</p>
                                                <span class="text-muted">{{$ship->line1}}.{{$ship->line2}}- {{$ship->zipcode}}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                <p> No Address Added yet</p>
                                @endif
                               
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal clean_modal clean_modal-lg" id="address_model" tabindex="-1" aria-labelledby="address_model" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <form  wire:submit.prevent="addAddress">
                        <div class="form-group">
                            <input name="name" required type="text" placeholder="Address Name" class="form-control input-lg rounded" wire:model="name">
                            @error('name') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="form-group">
                            <input name="phone" required type="text" placeholder="Phone Number" class="form-control input-lg rounded" wire:model="mobile">
                            @error('mobile') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="form-group">
                            <input name="phone_optional"  type="text" placeholder="Phone Number" class="form-control input-lg rounded" wire:model="mobile_optional">
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <label class="form-label" for="address">Address</label>
                                    <input type="text" required class="form-control" name="address" id="address" wire:model="line1">
                                    @error('line1') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label class="form-label" for="apt">Apt / Suite / Floor</label>
                                    <input type="text" class="form-control" name="line2" id="apt" wire:model="line2">
                                    
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label class="form-label" for="apt">LandMArk</label>
                                    <input type="text" class="form-control" name="landmark" id="apt" wire:model="landmark">
                                    @error('landmark') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label class="form-label" for="locality">Country</label>
                                    <!-- <input type="text" required class="form-control" name="country_id" id="locality" wire:model="country_id"> -->
                                    <select id="conutry" wire:model="country_id" wire:change="changecountry">
                                        <option value="">Select country</option>
                                        @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('country_id') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label class="form-label" for="administrative_area_level_1">State</label>
                                    
                                    <select id="state" wire:model="state_id" wire:change="changestate">
                                        <option value="">Select State</option>
                                        @foreach($states as $state)
                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('state_id') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label class="form-label" for="locality">City</label>
                                    
                                    <select id="city" wire:model="city_id">
                                        <option value="">Select State</option>
                                        @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->city}}</option>
                                        @endforeach
                                    </select>
                                    @error('city_id') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label class="form-label" for="postal_code">ZIP code</label>
                                    <input type="text" required class="form-control" name="zipcode" wire:model="zipcode">
                                    @error('zipcode') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <label class="form-label" for="country">Address Type</label>
                                    <input type="radio" name="address_type" value="home"  wire:model="address_type">For HOme
                                    <input type="radio" name="address_type" value="office"  wire:model="address_type">For Office
                                    <input type="radio" name="address_type" value="other"  wire:model="address_type">For Other
                                    <!-- <input type="radio" id="age1" name="age" value="30"> -->
                                    @error('address_type') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                                <div class="mb-4">
                                    <!-- <label class="form-label" for="postal_code">make My default address</label> -->
                                    <input type="checkbox" id="vehicle1" name="default_address" value="1" wire:model="default_address"> 
                                    <label for="vehicle1"> make My default address</label><br>
                                </div>
                            </div>
                        <button type="submit" id="address_btn" name="submit" class="btn btn-primary btn-full btn-medium rounded">Add Address</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="deletePostModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body pt-4 pb-4">
                    <h6>Are you sure? You want to delete this address!</h6>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-primary" wire:click="cancel()" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button class="btn btn-sm btn-danger" wire:click="deletePostData()">Yes! Delete</button>
                </div>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal clean_modal clean_modal-lg" id="editPostModal" tabindex="-1" aria-labelledby="editPostModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <form  wire:submit.prevent="updateAddress">
                        <div class="form-group">
                            <input name="name" required type="text" placeholder="Address Name" class="form-control input-lg rounded" wire:model="name">
                            @error('name') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="form-group">
                            <input name="phone" required type="text" placeholder="Phone Number" class="form-control input-lg rounded" wire:model="mobile">
                            @error('mobile') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="form-group">
                            <input name="phone_optional"  type="text" placeholder="Phone Number" class="form-control input-lg rounded" wire:model="mobile_optional">
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <label class="form-label" for="address">Address</label>
                                    <input type="text" required class="form-control" name="address" id="address" wire:model="line1">
                                    @error('line1') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label class="form-label" for="apt">Apt / Suite / Floor</label>
                                    <input type="text" class="form-control" name="line2" id="apt" wire:model="line2">
                                    
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label class="form-label" for="apt">LandMArk</label>
                                    <input type="text" class="form-control" name="landmark" id="apt" wire:model="landmark">
                                    @error('landmark') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label class="form-label" for="locality">Country</label>
                                    <!-- <input type="text" required class="form-control" name="country_id" id="locality" wire:model="country_id"> -->
                                    <select id="conutry" wire:model="country_id" wire:change="changecountry">
                                        <option value="">Select country</option>
                                        @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('country_id') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label class="form-label" for="administrative_area_level_1">State</label>
                                    
                                    <select id="state" wire:model="state_id" wire:change="changestate">
                                        <option value="">Select State</option>
                                        @foreach($states as $state)
                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('state_id') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label class="form-label" for="locality">City</label>
                                    
                                    <select id="city" wire:model="city_id">
                                        <option value="">Select State</option>
                                        @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->city}}</option>
                                        @endforeach
                                    </select>
                                    @error('city_id') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label class="form-label" for="postal_code">ZIP code</label>
                                    <input type="text" required class="form-control" name="zipcode" wire:model="zipcode">
                                    @error('zipcode') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <label class="form-label" for="country">Address Type</label>
                                    <input type="radio" name="address_type" value="home"  wire:model="address_type">For HOme
                                    <input type="radio" name="address_type" value="office"  wire:model="address_type">For Office
                                    <input type="radio" name="address_type" value="other"  wire:model="address_type">For Other
                                    <!-- <input type="radio" id="age1" name="age" value="30"> -->
                                    @error('address_type') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                                <div class="mb-4">
                                    <!-- <label class="form-label" for="postal_code">make My default address</label> -->
                                    <input type="checkbox" id="vehicle1" name="default_address" value="1" wire:model="default_address"> 
                                    <label for="vehicle1"> make My default address</label><br>
                                </div>
                            </div>
                        <button type="submit" id="address_btn" name="submit" class="btn btn-primary btn-full btn-medium rounded">Add Address</button>
                    </form>
                </div>
            </div>
        </div>
    </div>  
    
</main>

@push('scripts')
    <script>
        
            window.addEventListener('close-modal', event =>{
                $('#address_model').modal('hide');
                $('#deletePostModal').modal('hide');
                $('#editPostModal').modal('hide');
                
            });
        
            window.addEventListener('show-add-address-modal', event => {
                $('#address_model').modal('show');
            });
            window.addEventListener('show-delete-confirmation-modal', event => {
                $('#deletePostModal').modal('show');
            });
            window.addEventListener('show-edit-post-modal', event => {
                $('#editPostModal').modal('show');
            });

            
    </script>
@endpush
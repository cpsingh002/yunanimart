<div id="top" class="sa-app__body">
    <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
        <div class="container container--max--xl">
            <div class="py-5">
                <div class="row g-4 align-items-center">
                    <div class="col">
                        <nav class="mb-2" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-sa-simple">
                                <li class="breadcrumb-item"><a href="{{route('index')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{route('orders')}}">Orders</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Order #{{$order->order_number}}</li>
                            </ol>
                        </nav>
                        <h1 class="h3 m-0">Order #{{$order->order_number}}</h1>
                    </div>
                    <div class="col-auto d-flex"><a href="#" class="btn btn-secondary me-3">Delete</a><a href="#" class="btn btn-primary">Edit</a></div>
                </div>
            </div>
            <div class="sa-page-meta mb-5">
                <div class="sa-page-meta__body">
                    <div class="sa-page-meta__list">
                        <div class="sa-page-meta__item">{{$order->created_at->format('d M Y')}} at {{$order->created_at->format('H:i:s')}}</div>
                        <div class="sa-page-meta__item">{{$order->orderItems->count()}} items</div>
                        <div class="sa-page-meta__item">Total ${{$order->total}}</div>
                        <div class="sa-page-meta__item d-flex align-items-center fs-6"><span class="badge badge-sa-success me-2">{{$order->transaction->status}}</span><span class="badge badge-sa-warning me-2">Partially Fulfilled</span></div>
                    </div>
                </div>
            </div>
            <div class="sa-entity-layout" data-sa-container-query='{"920":"sa-entity-layout--size--md"}'>
                <div class="sa-entity-layout__body">
                    <div class="sa-entity-layout__main">
                        
                        <div class="card mt-5">
                            <div class="card-body px-5 py-4 d-flex align-items-center justify-content-between">
                                <h2 class="mb-0 fs-exact-18 me-4">Items</h2>
                                <!-- <div class="text-muted fs-exact-14"><a href="#">Edit items</a></div> -->
                            </div>
                            <div class="table-responsive">
                                <table class="sa-table">
                                    <tbody>
                                        @foreach($orderitems as $orderitem)
                                            <tr>
                                                <td class="min-w-20x">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('admin/product/feat')}}/{{$orderitem->product->image}}" class="me-4" width="40" height="40" alt="" />
                                                        <a href="{{route('product-details',['slug'=>$orderitem->product->slug])}}" class="text-reset">{{$orderitem->product->name}}</a>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="sa-price"><span class="sa-price__symbol">$</span><span class="sa-price__integer">₹{{$orderitem->price}}</span><span class="sa-price__decimal"></span></div>
                                                </td>
                                                <td class="text-end">{{$orderitem->quantity}}</td>
                                                <td class="text-end">
                                                    <div class="sa-price"><span class="sa-price__symbol">$</span><span class="sa-price__integer">{{$orderitem->price * $orderitem->quantity}}</span><span class="sa-price__decimal">.00</span></div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>
                                    <tbody class="sa-table__group">
                                        <tr>
                                            <td colspan="3">Subtotal</td>
                                            <td class="text-end">
                                                <div class="sa-price"><span class="sa-price__symbol">$</span><span class="sa-price__integer">{{$order->subtotal}}</span><span class="sa-price__decimal"></span></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Tax</td>
                                            <td class="text-end">
                                                <div class="sa-price"><span class="sa-price__symbol">$</span><span class="sa-price__integer">{{$order->tax}}</span><span class="sa-price__decimal"></span></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Discount</td>
                                            <td class="text-end">
                                                <div class="sa-price"><span class="sa-price__symbol">$</span><span class="sa-price__integer">-{{$order->discount}}</span><span class="sa-price__decimal">.00</span></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                Shipping
                                                <div class="text-muted fs-exact-13">via softhunters</div>
                                            </td>
                                            <td class="text-end">
                                                <div class="sa-price"><span class="sa-price__symbol">$</span><span class="sa-price__integer">80</span><span class="sa-price__decimal">.00</span></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td colspan="3">Total</td>
                                            <td class="text-end">
                                                <div class="sa-price"><span class="sa-price__symbol">$</span><span class="sa-price__integer">{{$order->total}}</span><span class="sa-price__decimal"></span></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-body px-5 py-4 d-flex align-items-center justify-content-between">
                                <h2 class="mb-0 fs-exact-18 me-4">Transactions</h2>
                                <div class="text-muted fs-exact-14"><a href="#">Add transaction</a></div>
                            </div>
                            <div class="table-responsive">
                                <table class="sa-table text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Payment
                                                <div class="text-muted fs-exact-13">via {{$order->transaction->mode}}</div>
                                            </td>
                                            <td>{{$order->transaction->created_at->format('d M Y')}}</td>
                                            <td class="text-end">
                                                <div class="sa-price"><span class="sa-price__symbol">$</span><span class="sa-price__integer">{{$order->transaction->amount}}</span><span class="sa-price__decimal"></span></div>
                                            </td>
                                        </tr>
                                        <!-- <tr>
                                            <td>
                                                Payment
                                                <div class="text-muted fs-exact-13">from account balance</div>
                                            </td>
                                            <td>November 2, 2020</td>
                                            <td class="text-end">
                                                <div class="sa-price"><span class="sa-price__symbol">$</span><span class="sa-price__integer">50</span><span class="sa-price__decimal">.00</span></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Refund
                                                <div class="text-muted fs-exact-13">to PayPal</div>
                                            </td>
                                            <td>December 10, 2020</td>
                                            <td class="text-end text-danger">
                                                <div class="sa-price"><span class="sa-price__symbol">$</span><span class="sa-price__integer">-325</span><span class="sa-price__decimal">.00</span></div>
                                            </td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-body px-5 py-4 d-flex align-items-center justify-content-between"><h2 class="mb-0 fs-exact-18 me-4">Balance</h2></div>
                            <table class="sa-table">
                                <tbody class="sa-table__group">
                                    <tr>
                                        <td>Order Total</td>
                                        <td class="text-end">
                                            <div class="sa-price"><span class="sa-price__symbol">$</span><span class="sa-price__integer">{{$order->total}}</span><span class="sa-price__decimal"></span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Return Total</td>
                                        <td class="text-end">
                                            <div class="sa-price"><span class="sa-price__symbol">$</span><span class="sa-price__integer">0</span><span class="sa-price__decimal">.00</span></div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody class="sa-table__group">
                                    <tr>
                                        <td>Paid by customer</td>
                                        <td class="text-end">
                                            <div class="sa-price"><span class="sa-price__symbol">$</span><span class="sa-price__integer">-{{$order->transaction->amount}}</span><span class="sa-price__decimal"></span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Refunded</td>
                                        <td class="text-end">
                                            <div class="sa-price"><span class="sa-price__symbol">$</span><span class="sa-price__integer">0</span><span class="sa-price__decimal">.00</span></div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>Balance <span class="text-muted">(customer owes you)</span></td>
                                        <td class="text-end">
                                            <div class="sa-price"><span class="sa-price__symbol">$</span><span class="sa-price__integer">{{$order->total - $order->transaction->amount}}</span><span class="sa-price__decimal">.00</span></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="sa-entity-layout__sidebar">
                        <div class="card">
                            <div class="card-body d-flex align-items-center justify-content-between pb-0 pt-4">
                                <h2 class="fs-exact-16 mb-0">Customer</h2>
                                <!-- <a href="#" class="fs-exact-14">Edit</a> -->
                            </div>
                            <div class="card-body d-flex align-items-center pt-4">
                                @if($order->user->profile)
                                    <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg"><img src="{{asset('admin/profiles')}}/{{$order->user->profile}}" width="40" height="40" alt="" /></div>
                                @else
                                    <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg"><img src="images/customers/customer-1-40x40.jpg" width="40" height="40" alt="" /></div>
                                @endif
                                <div class="ms-3 ps-2">
                                    <div class="fs-exact-14 fw-medium">{{$order->user->name}}</div>
                                    <div class="fs-exact-13 text-muted">{{$order->user->email}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-body d-flex align-items-center justify-content-between pb-0 pt-4">
                                <h2 class="fs-exact-16 mb-0">Contact person</h2>
                                <!-- <a href="#" class="fs-exact-14">Edit</a> -->
                            </div>
                            <div class="card-body pt-4 fs-exact-14">
                                <div>{{$order->name}}</div>
                                <div class="mt-1"><a href="#">{{$order->mobile}}</a></div>
                                <div class="text-muted mt-1">{{$order->mobile_optional}}</div>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-body d-flex align-items-center justify-content-between pb-0 pt-4">
                                <h2 class="fs-exact-16 mb-0">Shipping Address</h2>
                                <!-- <a href="#" class="fs-exact-14">Edit</a> -->
                            </div>
                            <div class="card-body pt-4 fs-exact-14">
                                {{$order->name}}<br />
                                {{$order->line1}}, {{$order->line2}}<br />
                                {{$order->zipcode}}, {{$order->city->city}}<br />
                                {{$order->state->name}}, {{$order->country->name}}
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-body d-flex align-items-center justify-content-between pb-0 pt-4">
                                <h2 class="fs-exact-16 mb-0">Billing Address</h2>
                                <a href="#" class="fs-exact-14">Edit</a>
                            </div>
                            <div class="card-body pt-4 fs-exact-14">
                                {{$order->user->name}}<br />
                                {{$order->user->email}}<br />
                                {{$order->user->phone}}<br />
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
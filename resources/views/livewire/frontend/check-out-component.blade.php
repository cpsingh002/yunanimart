<div>
    <section class="section-padding mt-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row pb-4">
                                <div class="col-sm-6">
                                    <div class="form-group mb-4">
                                        <label class="form-label">First name <span class='text-danger'>*</span></label>
                                        <input class="form-control" type="text" value="Jhon">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-4">
                                        <label class="form-label">Last name <span class='text-danger'>*</span></label>
                                        <input class="form-control" type="text" value="Doe">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-4">
                                        <label class="form-label">Email address <span
                                                class='text-danger'>*</span></label>
                                        <input class="form-control" type="email" value="jhon@doe.com">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-4">
                                        <label class="form-label">Company</label>
                                        <input class="form-control" type="text" value="Dsahathemes">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-4">
                                        <label class="form-label">Country <span class='text-danger'>*</span></label>
                                        <select class="form-control">
                                            <option value>Select country</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="France">France</option>
                                            <option value="India" selected>India</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Spain">Spain</option>
                                            <option value="UK">United Kingdom</option>
                                            <option value="USA">USA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="accordion">
                                <div class="accordion-item">
                                    <div class="accordion-title">
                                        <h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true"> Pay with Credit Card</h5>
                                    </div>
                                    <div class="accordion-content collapse show" id="collapseOne"
                                        data-parent="#accordion">
                                        <div class="accordion-content-inner">
                                            <p class="py-4">We accept following credit cards:&nbsp;&nbsp;<img class="d-inline-block align-middle" src="{{asset('assets/img/payment-methods.png')}}" style="width: 187px;" alt="Cerdit Cards"></p>
                                            <form class="credit-card-form row g-3">
                                                <div class="col-sm-6 mb-4">
                                                    <input class="form-control" type="text"
                                                        name="number" placeholder="Card Number" required="">
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <input class="form-control" type="text" name="name"
                                                        placeholder="Full Name" required="">
                                                </div>
                                                <div class="col-sm-3 mb-4">
                                                    <input class="form-control" type="text"
                                                        name="expiry" placeholder="MM/YY" required="">
                                                </div>
                                                <div class="col-sm-3 mb-4">
                                                    <input class="form-control" type="text" name="cvc"
                                                        placeholder="CVC" required="">
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <a href="thak-you.html" class="btn btn-primary d-block w-100">Place
                                                        order</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <!-- accordion Title -->
                                    <div class="accordion-title">
                                        <h5 class="mb-0" data-toggle="collapse" data-target="#collapseTwo">Pay with
                                            PayPal</h5>
                                    </div>
                                    <!-- accordion Content -->
                                    <div class="collapse accordion-content" id="collapseTwo" data-parent="#accordion">
                                        <div class="accordion-content-inner">
                                            <p class="pt-4 mb-0 pb-2"><span class="font-weight-bold">PayPal</span> - the safer, easier way to pay</p>
                                            <a href="thak-you.html" class="btn btn-primary">Checkout with PayPal</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <!-- accordion Title -->
                                    <div class="accordion-title">
                                        <h5 class="mb-0" data-toggle="collapse" data-target="#collapseThree"> Pay later
                                        </h5>
                                    </div>
                                    <!-- accordion Content -->
                                    <div class="collapse accordion-content" id="collapseThree" data-parent="#accordion">
                                        <div class="accordion-content-inner">
                                            <p class="pt-4 mb-0 pb-3"><span class="font-weight-bold">Cash On Delevary</span> -Buy Now Pay Later for all your shopping</p>
                                            <a href="thak-you.html" class="btn btn-primary">Place order</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-6">
                    <h6 class="font-weight-bold">Deliver to</h6>
                    <div class="mb-4">
                        <select class="form-control">
                            <option value="s">Siliguri - 734001</option>
                            <option value="s" selected>Delhi - 110002</option>
                            <option value="s">Kolkata - 700027</option>
                        </select>
                    </div>
                    <div class="cart-summary">
                        <div class="cart-summary-wrap">
                            <h4>Cart Summary</h4>
                            <p>Sub Total <span>$1250.00</span></p>
                            <p>Shipping Cost <span>$00.00</span></p>
                            <h2>Grand Total <span>$1250.00</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

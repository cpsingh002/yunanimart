<div>
    <main>
        <section class="py-5 py-md-8 overlay background-center text-white" data-overlay="6" data-overlay-color="dark" data-background="{{asset('assets/img/extra/page-about.jpg')}}">
            <div class="container">
                <div class="header-align">
                    <h1 class="h1 mb-1">Contact Us</h1>
                    <span>Lorem ipsum dolor sit amet, adipisicing elit.
                    </span>
                </div>
            </div>
        </section>
        <section class="pt-5 pt-md-7">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <h3 class="m-b10 text-uppercase">Get In Touch</h3>
                        <p class="text2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut hic voluptatibus unde quam veritatis quae velit aperiam. Voluptatem
                            laboriosam odio nulla, hic eius porro recusandae, nisi non quae nihil unde!
                        </p>
                        <hr>
                        <p class="m-b40 text">
                            25, Lomonosova
                            <br> St. Moscow,
                            <br>665087
                        </p>
                        <p class="text p-sm-b60">
                            <strong>E:</strong> info@email.com
                            <br>
                            <strong>P:</strong> +01 12345 67890
                            <br>
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114041.02049143793!2d88.3612319145676!3d26.71941404416647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e44114f5441dcd%3A0xdeb5c4702063edff!2sSiliguri%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1631501341871!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="row pt-5 pt-md-7">
                    <div class="col-lg-8 mx-auto">
                        <div class="contact-form">
                            @if(Session::has('message'))
                                 <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <form id="contact-form" action="#" wire:submit.prevent="addContactform" class="form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="text-left m-b20">
                                            <div class="form-message"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Name *" wire:model="name" type="text">
                                            @error('name') <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Email *" wire:model="email" type="text">
                                            @error('email') <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" id='subject' placeholder="Subject" wire:model="subject" type="text">
                                            @error('subject') <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Phone" wire:model="phone" type="text">
                                            @error('phone') <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea class="form-control " rows="4" wire:model="message" placeholder="Text Here"></textarea>
                                            @error('message') <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="text-center">
                                                <button class="btn btn-primary" type="submit" name="submit">SEND MESSAGE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

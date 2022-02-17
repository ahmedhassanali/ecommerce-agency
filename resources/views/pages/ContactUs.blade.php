@extends('layouts.app')

@section('content')

<section class="my-5">
    {{-- Get in Touch --}}
    <div class="d-flex justify-content-center mt-5 mb-2 " >
        <div class="my-5">
            <h1 class="display-4">Get in Touch</h1>
            <h3>We’re happy to talk to you.</h3>
        </div>
    </div>

    <div class="my-0 container col-sm-12 d-flex ">
        {{-- Let’s talk. --}}
        <div class="m-5 col-lg-5">
            <h1>Let’s talk. </h1>
            <h5>If you have any questions about the subscription or are not sure which plan is right for you,
                contact our team and let’s schedule a call.</h5>

            <div class="mt-5 row col-lg-12">
                <div class="col-lg-6 bg-primary text-white rounded pt-3 me-2">
                    <h4>Call us</h4>
                    <h5>1-335-670-6542</h5>
                </div>
                <div class="col-lg-5 bg-black text-white rounded pt-3">
                   <h4>Email us</h4>
                   <h5>hello@uxper.co</h5>
                </div>
            </div>
            <div class="mt-5">
                <h2>Address</h2>
                <h5>2866 Oakway Lane, New York, USA</h5>
            </div>
        </div>

        {{-- Send us a message. --}}
        <div class="m-5 col-lg-5">
            <h1>Send us a message.</h1>
            <h5>Feel free to contact us with questions, potential partnerships, or media inquiries.</h5>
            <div class="col-md-12 ">
                <div class="card card-primary ">

                    <div class="card-body">


                        <div class="row mt-3">
                            <h1>Register to Our Webinar</h1>
                            <div class="col-md-12 mt-3"><input type="text" class="form-control" placeholder="Enter Your Full Name" value=""></div>

                            <div class="row mt-3">
                                <div class="col-md-6 "><input placeholder="Date" class="form-control" type="text" onfocus="(this.type='date')" id="date"></div>
                                <div class="col-md-6"><input placeholder="Time" class="form-control" type="text" onfocus="(this.type='time')" id="time"></div>
                            </div>

                            <div class="col-md-12 mt-3"><input type="email" class="form-control" placeholder="Your Email" value=""></div>
                            <div class="col-md-12 mt-3"><input type="text"  class="form-control" placeholder="Your Phone" value=""></div>

                        </div>
                        <div class="row">
                            <div class="col-12 my-3">
                            <input type="submit" value="Send" class="btn btn-primary ">
                            </div>
                        </div>
                    </div>
                </div>
             </div>

        </div>

    </div>

</section>

@endsection

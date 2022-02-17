@extends('layouts.app')

@section('content')
@php
$services = 6;
@endphp
<section class="my-5">
    {{-- Get in Touch --}}
    <div class=" mx-5 pt-5 d-flex justify-content-center " >
        <div>
            <h1 class="display-4 ms-4">WHAT WE DO</h1>
            <h1>Innovation tailored to you</h1>
        </div>
    </div>
    {{-- <div class="col-12"  style="min-height: 100px">
        <img class="m-0 p-0 col-12" style="min-height: 50% : min-width:100%" src="{{asset('images/photo.jpeg')}}" alt="">
    </div> --}}

    <div class="d-flex justify-content-center flex-wrap container">
        @for ($i = 1; $i <= $services; $i++)
        <div  class='card col-lg-3 mt-5 mx-3' data-aos="zoom-in"  data-aos-duration="2000">
            <img class="card-img-top w-50 align-self-center my-4" src="{{asset('images/'.$i.'.svg')}}" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Ongoing Support</h4>
                <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
            </div>
        </div>
        @endfor
    </div>

    <div class=" mx-5 pt-5 d-flex justify-content-center " >
        <div>
            <h1 class="display-4">Really simple pricing</h1>
            <h1 class="ms-4">No hidden fees, no limits</h1>
        </div>
    </div>

    <div class="d-flex justify-content-center flex-wrap container">

        <div  class='card col-lg-3 mt-5 mx-3' data-aos="zoom-in"  data-aos-duration="2000">
            <div class="card-body">
                <div class=" mx-2">
                    <h1>FREE</h1>
                    <h3>$0/month</h3>
                    <h3>Perfect for startups</h3>
                </div>
                <div class="d-flex m-2">
                    <img class="" style="width: 20px ; height:20px"  src="{{asset('images/checked.png')}}" alt="">
                    <h6 class="mx-2">2 users</h6>
                </div>
                <div class="d-flex m-2">
                    <img class="" style="width: 20px ; height:20px"  src="{{asset('images/checked.png')}}" alt="">
                    <h6 class="mx-2">SaaS Metrics</h6>
                </div>
                <div class="d-flex m-2">
                    <img class="" style="width: 20px ; height:20px"  src="{{asset('images/cancel.png')}}" alt="">
                    <h6 class="mx-2">Team collaboration</h6>
                </div>
                <div class="d-flex m-2">
                    <img class="" style="width: 20px ; height:20px"  src="{{asset('images/cancel.png')}}" alt="">
                    <h6 class="mx-2">Export HTML code</h6>
                </div>
                <div class="d-flex m-2">
                    <img class="" style="width: 20px ; height:20px"  src="{{asset('images/cancel.png')}}" alt="">
                    <h6 class="mx-2">Upload Your Logo</h6>
                </div>

            </div>
            <button class="btn btn-primary ">Get Start</button>
        </div>
        <div  class='card col-lg-3 mt-5 mx-3' data-aos="zoom-in"  data-aos-duration="2000">
            <div class="card-body">
                <div class=" mx-2">
                    <h1>BASIC
                        Popular</h1>
                    <h3>$29/month</h3>
                    <h3>Perfect for company</h3>
                </div>
                <div class="d-flex m-2">
                    <img class="" style="width: 20px ; height:20px"  src="{{asset('images/checked.png')}}" alt="">
                    <h6 class="mx-2">2 users</h6>
                </div>
                <div class="d-flex m-2">
                    <img class="" style="width: 20px ; height:20px"  src="{{asset('images/checked.png')}}" alt="">
                    <h6 class="mx-2">SaaS Metrics</h6>
                </div>
                <div class="d-flex m-2">
                    <img class="" style="width: 20px ; height:20px"  src="{{asset('images/checked.png')}}" alt="">
                    <h6 class="mx-2">Team collaboration</h6>
                </div>
                <div class="d-flex m-2">
                    <img class="" style="width: 20px ; height:20px"  src="{{asset('images/cancel.png')}}" alt="">
                    <h6 class="mx-2">Export HTML code</h6>
                </div>
                <div class="d-flex m-2">
                    <img class="" style="width: 20px ; height:20px"  src="{{asset('images/cancel.png')}}" alt="">
                    <h6 class="mx-2">Upload Your Logo</h6>
                </div>

            </div>
            <button class="btn btn-primary ">Get Start</button>
        </div>

        <div  class='card col-lg-3 mt-5 mx-3' data-aos="zoom-in"  data-aos-duration="2000">
            <div class="card-body">
                <div class=" mx-2">
                    <h1>PRO</h1>
                    <h3>$69/month</h3>
                    <h3>Perfect for business</h3>
                </div>
                <div class="d-flex m-2">
                    <img class="" style="width: 20px ; height:20px"  src="{{asset('images/checked.png')}}" alt="">
                    <h6 class="mx-2">2 users</h6>
                </div>
                <div class="d-flex m-2">
                    <img class="" style="width: 20px ; height:20px"  src="{{asset('images/checked.png')}}" alt="">
                    <h6 class="mx-2">SaaS Metrics</h6>
                </div>
                <div class="d-flex m-2">
                    <img class="" style="width: 20px ; height:20px"  src="{{asset('images/checked.png')}}" alt="">
                    <h6 class="mx-2">Team collaboration</h6>
                </div>
                <div class="d-flex m-2">
                    <img class="" style="width: 20px ; height:20px"  src="{{asset('images/checked.png')}}" alt="">
                    <h6 class="mx-2">Export HTML code</h6>
                </div>
                <div class="d-flex m-2">
                    <img class="" style="width: 20px ; height:20px"  src="{{asset('images/checked.png')}}" alt="">
                    <h6 class="mx-2">Upload Your Logo</h6>
                </div>

            </div>
            <button class="btn btn-primary ">Get Start</button>
        </div>
    </div>
</section>

@endsection

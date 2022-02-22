@extends('layouts.app')

@section('content')

<!-- ======= Hero Section ======= -->

<section id="hero" class="text-center text-sm-start justify-content-center py-5 bg-Secondary">

<div class="container py-5">
    <div class="d-sm-flex align-items-center flex-row-reverse py-4 ">
        <img class="img-fluid w-50 w-sm-100 " src="{{asset('images/hero.svg')}}" alt="">
        <div class="">
            <h1 class="display-4">We build amazing
                <span class="text-primary">ECommerce</span>website for your business
            </h1>
            <a class="btn btn-primary my-2 px-5"
            href="{{route('ContactUs')}}">Contact Us</a>
        </div>
    </div>
</div>

</section><!-- End Hero -->


<!-- =======  Section Things We Do ======= -->
@php
$ThingsWeDo = 3;
@endphp
<section id='ThingsWeDo' class="text-center text-sm-start justify-content-center py-5" >
    <div class="container py-5" data-aos="fade-up">
        <h1 class="display-4 my-5">Things We <span class="text-primary"> Do </span></h1>
        <div class="d-flex justify-content-around flex-wrap">
            @for ($i = 1; $i <= $ThingsWeDo; $i++)
            <div  style="width:300px" data-aos="zoom-in"  data-aos-duration="2000">
                <img class="card-img-top w-50 align-self-center my-5" src="{{asset('images/'.$i.'.svg')}}" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Ongoing Support</h4>
                    <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section><!-- End Things We Do -->

<div class="d-flex justify-content-center mb-5" style="height: 100px;"><div class="vr"></div> </div>

<!-- =======  Section Our Happy Customers ======= -->

<section id='OurHappyCustomers'>
<div class="container py-5" data-aos="fade-up">
    <h1 class="display-4 my-5">Our<span class="text-primary"> Happy </span>Customers</h1>

    <div class=" my-5">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade shadow p-3 mb-5 bg-body rounded" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active d-block d-sm-flex text-black ">
                <img src="{{asset('images/OurHappyCustomers/3.jpg')}}" class="w-100 w-sm-50 " alt="">
                <div class="p-5">
                    <h5 class="card-text  text-secondary mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error voluptatem hic vitae inventore ut mollitia facere, repudiandae, nihil dolor ullam earum, dicta ea animi laboriosam? Quo cumque quos sunt possimus.</h5>
                    <h4 class="card-title display-6">Johan Nathan</h4>
                    <h4 class="card-title  text-secondary">Exiclub.com</h4>
                </div>
                </div>

                <div class="carousel-item d-block d-sm-flex text-black ">
                <img src="{{asset('images/OurHappyCustomers/2.jpg')}}" w-100 w-sm-50 " alt="">
                <div class="p-5">
                    <h5 class="card-text  text-secondary mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error voluptatem hic vitae inventore ut mollitia facere, repudiandae, nihil dolor ullam earum, dicta ea animi laboriosam? Quo cumque quos sunt possimus.</h5>
                    <h4 class="card-title display-6">Johan Nathan</h4>
                    <h4 class="card-title  text-secondary">Exiclub.com</h4>
                </div>
                </div>

                <div class="carousel-item d-block d-sm-flex text-black">
                <img src="{{asset('images/OurHappyCustomers/1.jpg')}}" class="w-100 w-sm-50" alt="">
                <div class="p-5">
                    <h5 class="card-text text-secondary  mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error voluptatem hic vitae inventore ut mollitia facere, repudiandae, nihil dolor ullam earum, dicta ea animi laboriosam? Quo cumque quos sunt possimus.</h5>
                    <h4 class="card-title display-6">Johan Nathan</h4>
                    <h4 class="card-title  text-secondary">Exiclub.com</h4>
                </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
    </div>
</div>
</section><!-- End Our Happy Customers -->


<!-- =======  Section why choose Us ======= -->
@php
    $whychooseUs = [['Satsifield Customers','1231'],['Successful Projects','546'],['Years of Experience','5']]
@endphp

<section  class="py-5 my-5 " id="whychooseUs" >
    <div   data-aos="fade-up"  class="ms-sm-0 ms-lg-5 me-0 p-5 shadow-5 hero-image  rounded bg-image "   style="background-color: #000000 ;height: 660px"  >
        <h1 class=" display-4 my-3 mt-md-5 text-white ">why Choose<span class="text-primary"> Us </span></h1>
        <div class="d-sm-flex align-items-center flex-row-reverse py-4 " >
            <img class="img-fluid w-25 d-sm-block d-none" src="{{asset('images/hero.svg')}}" alt="">
            <div>
                <h4 class="text-white pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</h4>
                <div class=" py-lg-5 row ">
                    @foreach ($whychooseUs as $item)
                        <div class="mb-5 col-lg-4 col-12" data-aos="fade-up" data-aos-duration="2000">
                            <span class="counter display-3 text-primary d-block" data-toggle="counterUp">{{$item[1]}}</span>
                            <span class="h6 text-white">{{$item[0]}}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section><!-- End why choose Us -->

<!-- =======  Section Our Partners ======= -->
@php
$numOfourPartners = 8;
@endphp
    <section  class="p-3 my-5" id="OurPartners" >
    <div class="container ">
        <h1 class="display-4 my-5 ">Our<span class="text-primary"> Partners </span></h1>
        <div class="row mx-3 col-12">
            @for ($i = 1; $i <= 8; $i++)
                <div  class='col-lg-3 col-6'  data-aos="fade-left" data-aos-duration="2000">
                    <img  class="img-fluid mb-5 mx-0"  src="{{asset('images/ourPartners/'.$i.'.png')}}"  alt="">
                </div>
            @endfor
        </div>
    </div>
</section><!-- End Our Partners -->

<div class="d-flex justify-content-center mx-5" style="height: 100px;"><div class="vr"></div> </div>


<!-- =======  Section Selected Works ======= -->
@php
$numOfSelectedWorks = 4;
@endphp
<section  class="p-3" id="Selected Works" >
<div class="container ">
    <h1 class="display-4 my-3"><span class="text-primary"> Selected </span>Works</h1>
    <h5 >The balance in design is the most important thing.</h5>
    <div class="d-flex justify-content-around  flex-wrap py-3 ">
        @for ($i = 1; $i < $numOfSelectedWorks; $i++)
            <div data-aos="fade-up"  data-aos-duration="2000" class="my-5 py-5">
                <img class="img-fluid mb-2" src="{{asset('images/SelectedWorks/'.$i.'.png')}}"     alt="">
                <h5 >1. Golo - Travel Booking Website</h5>
            </div>
            <div data-aos="fade-up" >
                @php $i++; @endphp
                <img class="img-fluid mb-2" src="{{asset('images/SelectedWorks/'.$i .'.png')}}"     alt="">
                <h5  >1. Golo - Travel Booking Website</h5>
            </div>
        @endfor
    </div>

    <div>
        <button class="btn-cer mx-auto d-block bg-white " href="">More</button>
    </div>
    <div class="d-flex justify-content-center my-5" style="height: 100px;"><div class="vr"></div> </div>

</div>
</section><!-- End Selected Works -->
@endsection






@extends('front.inc.master')
@section('content')
<div class="banner ">
    <div class="col-11 mx-auto py-4">
        <div class="bg-top-bar text-center text-uppercase f-20">
            <p class="font-head">Promotion Task Bar</p>
        </div>
    </div>
    <div class="offer-bg " id="bg-trans"
        style="background:url('{{ asset('assets/front/img/offer-bg.svg') }}') ">
        <div class="container-fluid col-11 mx-auto h-100 ">
            <div class="row align-items-center pt-lg-5 mt-lg-5">
                <div class="col-xxl-12 col-xl-12 col-12">
                    <div class="row justify-content-center text-center">
                        <div class="col-xxl-8 col-xl-8 col-10">
                            <h1 class="clr-3 fw-600 line-height">
                                What we offer
                            </h1>
                            <p class="f-18 pt-4 fw-400 clr-3">Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                text ever
                                since the 1500s.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-12 pt-6 pe-lg-5">
                    <img src="{{ asset('assets/front/img/offer-1.png') }}" alt="">
                </div>
                <div class="col-xxl-5 col-xl-6 col-12 pt-6 ps-lg-5">
                    <h1 class="f-50 fw-600 clr-3">
                        Laser hair removal trio: Client
                        file | Data | Pro & post form
                    </h1>
                    <p class="f-20 pt-4 fw-400 clr-3">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    <button class="btn-3 btn-slide-right mt-5">
                        Get Started
                    </button>
                </div>
                <div class="offset-xxl-1 col-xxl-5 col-xl-6 col-12 pt-6 pe-lg-5">
                    <h1 class="f-50 fw-600 clr-3">
                        Laser hair removal trio: Client
                        file | Data | Pro & post form
                    </h1>
                    <p class="f-20 pt-4 fw-400 clr-3">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    <button class="btn-3 btn-slide-right mt-5">
                        Get Started
                    </button>
                </div>
                <div class="col-xxl-6 col-xl-6 col-12 pt-6 ps-lg-5">
                    <img src="{{ asset('assets/front/img/offer-2.png') }}" alt="">
                </div>
                <div class="col-xxl-6 col-xl-6 col-12 pt-6 pe-lg-5">
                    <img src="{{ asset('assets/front/img/offer-3.png') }}" alt="">
                </div>
                <div class="col-xxl-5 col-xl-6 col-12 pt-6 ps-lg-5">
                    <h1 class="f-50 fw-600 clr-3">
                        Laser hair removal trio: Client
                        file | Data | Pro & post form
                    </h1>
                    <p class="f-20 pt-4 fw-400 clr-3">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    <button class="btn-3 btn-slide-right mt-5">
                        Get Started
                    </button>
                </div>
                <div class="offset-xxl-1 col-xxl-5 col-xl-6 col-12 pt-6 pe-lg-5">
                    <h1 class="f-50 fw-600 clr-3">
                        Laser hair removal trio: Client
                        file | Data | Pro & post form
                    </h1>
                    <p class="f-20 pt-4 fw-400 clr-3">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    <button class="btn-3 btn-slide-right mt-5">
                        Get Started
                    </button>
                </div>
                <div class="col-xxl-6 col-xl-6 col-12 pt-6 ps-lg-5">
                    <img src="{{ asset('assets/front/img/offer-4.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<section class="" id="bg-trans"
    style="background:url('{{ asset('assets/front/img/sec-5.svg') }}') center center/cover no-repeat; height: 938px;">
    <div class="container-fluid ">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-xxl-6 col-xl-6 col-12 my-5 py-5 text-center">
                <h1 class="fw-700 clr-3 m-0">What people are saying</h1>
                <p class="f-18 fw-400 clr-3 pt-5 m-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's.</p>
            </div>
            <div class="review-slider-parent ">
                <div class="review-slider mx-3 slick-slide-point">
                    <div class="review-sec">
                        <a class="review-img ">
                            <img class="d-inline pe-3" src="{{ asset('assets/front/img/review-2.png') }}" alt="">
                        </a>
                        <span class="f-18 fw-600 clr-3">- John Doe</span>
                        <p class="f-18 fw-400 clr-3 pt-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                        <p class="pt-3">
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                        </p>
                    </div>
                </div>
                <div class="review-slider mx-3 slick-slide-point">
                    <div class="review-sec">
                        <a class="review-img ">
                            <img class="d-inline pe-3" src="{{ asset('assets/front/img/review-2.png') }}" alt="">
                        </a>
                        <span class="f-18 fw-600 clr-3">- John Doe</span>
                        <p class="f-18 fw-400 clr-3 pt-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                        <p class="pt-3">
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                        </p>
                    </div>
                </div>
                <div class="review-slider mx-3 slick-slide-point">
                    <div class="review-sec">
                        <a class="review-img ">
                            <img class="d-inline pe-3" src="{{ asset('assets/front/img/review-2.png') }}" alt="">
                        </a>
                        <span class="f-18 fw-600 clr-3">- John Doe</span>
                        <p class="f-18 fw-400 clr-3 pt-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                        <p class="pt-3">
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                        </p>
                    </div>
                </div>
                <div class="review-slider mx-3 slick-slide-point">
                    <div class="review-sec">
                        <a class="review-img ">
                            <img class="d-inline pe-3" src="{{ asset('assets/front/img/review-2.png') }}" alt="">
                        </a>
                        <span class="f-18 fw-600 clr-3">- John Doe</span>
                        <p class="f-18 fw-400 clr-3 pt-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                        <p class="pt-3">
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                        </p>
                    </div>
                </div>
                <div class="review-slider mx-3 slick-slide-point">
                    <div class="review-sec">
                        <a class="review-img ">
                            <img class="d-inline pe-3" src="{{ asset('assets/front/img/review-2.png') }}" alt="">
                        </a>
                        <span class="f-18 fw-600 clr-3">- John Doe</span>
                        <p class="f-18 fw-400 clr-3 pt-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                        <p class="pt-3">
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                        </p>
                    </div>
                </div>
                <div class="review-slider mx-3 slick-slide-point ">
                    <div class="review-sec ">
                        <a class="review-img ">
                            <img class="d-inline pe-3" src="{{ asset('assets/front/img/review-2.png') }}" alt="">
                        </a>
                        <span class="f-18 fw-600 clr-3">- John Doe</span>
                        <p class="f-18 fw-400 clr-3 pt-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                        <p class="pt-3 position-relative">
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                            <i class="fa fa-star me-2 clr-icon f-22" aria-hidden="true"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection 
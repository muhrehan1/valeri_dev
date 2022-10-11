@extends('front.inc.master')
@section('content')
<div class="banner ">
    <div class="col-11 mx-auto py-4">
        <div class="bg-top-bar text-center text-uppercase f-20">
            <p class="font-head">Promotion Task Bar</p>
        </div>
    </div>
    <div class="about-banner-bg " id="bg-trans"
        style="background:url('{{ asset('assets/front/img/about-banner.svg') }}') ">
        <div class="container-fluid col-11 mx-auto h-100">
            <div class="row justify-content-center align-items-center h-100 ps-xxl-5">
                <div class="col-xxl-10 col-xl-10 col-12">
                    <h1 class="clr-3 fw-600 line-height">
                        Terms of service
                    </h1>
                    <p class="f-18 col-xxl-6 col-xl-8 col-12 pt-4 fw-400 clr-3">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<section class=" terms-sec" style="background:url('{{ asset('assets/front/img/terms-sec.svg')}}')">
    <div class="container h-100 px-0 pt-lg-5 mt-lg-5">
        <div class="row justify-content-center align-items-center pt-lg-5 mt-5 ">
            <div class="col-xxl-12 col-xl-12 col-10 text-start py-5">
                <h2 class="clr-3 fw-600 line-height-2 pb-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </h2>
                <p class="f-18  pt-4 fw-400 clr-3">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                    est laborum.</p>
                <p class="f-18  pt-4 fw-400 clr-3">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="border-terms pt-4 my-lg-5 w-100"></div>
                <h2 class="clr-3 fw-600 line-height-2 pt-5 pb-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </h2>
                <p class="f-18  pt-4 fw-400 clr-3">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                    est laborum.</p>
                <div class="row py-lg-5 py-3">
                    <div class="col-xxl-6 col-xl-6 col-12 pb-3 pb-lg-0">
                        <img src="{{ asset('assets/front/img/terms-1.png') }}" alt="">
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-12">
                        <img src="{{ asset('assets/front/img/terms-2.png') }}" alt="">
                    </div>
                </div>
                <h2 class="clr-3 fw-600  pt-5 pb-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </h2>
                <p class="f-18  pt-4 fw-400 clr-3">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                    est laborum.</p>
                <p class="f-18  pt-4 fw-400 clr-3">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>
</section>
@endsection
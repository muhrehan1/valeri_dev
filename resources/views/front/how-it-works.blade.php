@extends('front.inc.master')
@section('content')

<div class="banner ">
    <div class="col-11 mx-auto py-4">
        <div class="bg-top-bar text-center text-uppercase f-20">
            <p class="font-head">Promotion Task Bar</p>
        </div>
    </div>
    <div class="works-bg " id="bg-trans"
        style="background:url('{{ asset('assets/front/img/works-bg.svg')}}')">
        <div class="container-fluid col-11 mx-auto h-100 ">
            <div class="row align-items-center pt-lg-5 mt-lg-5">
                <div class="col-xxl-12 col-xl-12 col-12">
                    <div class="row justify-content-center text-center">
                        <div class="col-xxl-8 col-xl-8 col-10">
                            <h1 class="clr-3 fw-600 line-height">
                                How it works
                            </h1>
                            <p class="f-18 pt-4 fw-400 clr-3">Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                text ever
                                since the 1500s.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 pt-6 bg-texture position-relative">
                    <div class="row  text-center justify-content-center align-items-center">
                        <div class="col-xxl-2 col-xl-3 col-6 pb-5 px-4 mx-xxl-3" style="z-index: 9999;">
                            <div class="bg-steps d-inline">
                                <img class="step-img" src="{{ asset('assets/front/img/step-1.png') }}" alt="">
                            </div>
                            <h2 class="fw-600 f-28 clr-3 pt-5">Choose a plan</h2>
                            <p class="f-16 pt-4 fw-400 clr-3">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. </p>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-6 pb-5 px-4 mx-xxl-3" style="z-index: 9999;">
                            <div class="bg-steps d-inline">
                                <img class="step-img" src="{{ asset('assets/front/img/step-2.png') }}" alt="">
                            </div>
                            <h2 class="fw-600 f-28 clr-3 pt-5">Add clinic staff</h2>
                            <p class="f-16 pt-4 fw-400 clr-3">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. </p>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-6 pb-5 px-4 mx-xxl-3" style="z-index: 9999;">
                            <div class="bg-steps d-inline">
                                <img class="step-img" src="{{ asset('assets/front/img/step-3.png') }}" alt="">
                            </div>
                            <h2 class="fw-600 f-28 clr-3 pt-5">Manage records</h2>
                            <p class="f-16 pt-4 fw-400 clr-3">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. </p>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-6 pb-5 px-4 mx-xxl-3" style="z-index: 9999;">
                            <div class="bg-steps d-inline">
                                <img class="step-img" src="{{ asset('assets/front/img/step-4.png') }}" alt="">
                            </div>
                            <h2 class="fw-600 f-28 clr-3 pt-5">No more paper files</h2>
                            <p class="f-16 pt-4 fw-400 clr-3">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class=" works-sec" style="background:url('{{ asset('assets/front/img/works-sec.svg') }}')">
    <div class="container h-100 ">
        <div class="row justify-content-center align-items-center pt-6">
            <div class="col-xxl-12 col-xl-10 col-11 text-center laptop-img"
                style="background:url('{{ asset('assets/front/img/laptop.svg') }}') ">
                <div class="pt-lg-4 mt-2 offset-1 col-10 position-relative">
                    <!-- <img class="vid-img" src="assets/front/img/video-img " alt=""> -->
                    <div class="vid-img "
                        style="background:url('{{ asset('assets/front/img/video-img.jpg')}}') ">
                    </div>
                    <div class="vid-sec ">
                        <a class="gallery" data-fancybox="mygallery"
                            href="{{ asset('assets/front/video/video.mp4') }}" tabindex="0"><img alt=""
                                class="lazy" src="{{ asset('assets/front/img/video-img.png') }}"><i
                                class="icon-border"><img class="icon-play" src="{{ asset('assets/front/img/play-icon.png') }}" alt=""></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-6 works-bg" id="bg-trans"
    style="background:url('{{ asset('assets/front/img/works-sec-2.svg') }}')">
    <div class="container-fluid col-11 mx-auto h-100">
        <div class="row justify-content-center text-center align-items-center h-100">
            <div class="col-xxl-6 col-xl-6 col-12 mt-5 pt-5">
                <h1 class="fw-700 clr-3 m-0">No more paper files</h1>
                <p class="f-18 fw-400 clr-3 pt-5 m-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's.</p>
                <button class="btn-3 btn-slide-right mt-5">
                    START FREE TRIAL
                </button>
            </div>
            <div class="col-xxl-12 col-xl-12 col-12 mb-5 pt-5 pt-lg-0">
                <div class="row align-items-center">
                    <div class="col-lg-6 px-5 ">
                        <a class="sec-3-img">
                            <img src="{{ asset('assets/front/img/hero-sec-3.png') }}" alt="">
                        </a>
                        <p class="pt-4">
                            <a class="clr-a f-32 fw-600" href="">Simple data</a>
                        </p>
                    </div>
                    <div class="col-lg-6 px-5">
                        <a class="sec-3-img">
                            <img src="{{ asset('assets/front/img/hero-sec-4.png') }}" alt="">
                        </a>
                        <p class="pt-4">
                            <a class="clr-a-2 f-32 fw-600" href="">Organized data</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
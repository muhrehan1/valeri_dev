@extends('front.inc.master')

@section('content')


<div class="banner ">
    <div class="col-11 mx-auto py-4">
        <div class="bg-top-bar text-center text-uppercase f-20">
            <p class="font-head">Promotion Task Bar</p>
        </div>
    </div>
    <div class="about-banner-bg " id="bg-trans"
        style="background:url('{{asset('assets/front/img/about-banner.svg')}}') ">
        <div class="container-fluid col-11 mx-auto h-100">
            <div class="row justify-content-center align-items-center h-100 ps-xxl-5">
                <div class="col-xxl-10 col-xl-10 col-12">
                    <h1 class="clr-3 fw-600 line-height">
                        Our Services
                    </h1>
                    <p class="f-18 col-xxl-6 col-xl-8 col-12 pt-4 fw-400 clr-3">Lorem Ipsum is simply dummy text of the
                        printing and
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                        1500s.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class=" pricing-sec" style="background:url('{{ asset('assets/front/img/pricing-sec.svg')}}')">
    <div class="container h-100 px-0 pt-lg-5 mt-lg-5">
        <div class="row justify-content-center text-center align-items-center pt-xxl-5 mt-xxl-5 pb-5 pb-lg-0 me-0">
            <div class=" text-center py-5 pe-0">
                <h1 class="clr-3 fw-600 line-height pb-xxl-3 pb-xl-0">
                    Subscription plans & pricing
                </h1>
            </div>
            <div class="col-xxl-4 col-xl-4 col-10 pt-md-0 pt-4 text-start pb-lg-4">
                <div class="off px-xxl-5 px-xl-4">
                    <div class="pt-5">
                        <div class="bg-services serve-bg-1 d-inline ">
                            <img class="services-img " src="{{ asset('assets/front/img/service-1.png') }}" alt="">
                        </div>
                        <h3 class="f-22 fw-700 clr-3 pt-5">Client management</h3>
                        <p class="f-16  pt-4 fw-400 clr-3">Lorem Ipsum is simply dummy text of the
                            printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-10 pt-md-0 pt-4 text-start pb-lg-4">
                <div class="off px-xxl-5 px-xl-4">
                    <div class="pt-5">
                        <div class="bg-services serve-bg-2 d-inline ">
                            <img class="services-img " src="{{ asset('assets/front/img/service-2.png') }}" alt="">
                        </div>
                        <h3 class="f-22 fw-700 clr-3 pt-5">Client management</h3>
                        <p class="f-16  pt-4 fw-400 clr-3">Lorem Ipsum is simply dummy text of the
                            printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-10 pt-md-0 pt-4 text-start pb-lg-4">
                <div class="off px-xxl-5 px-xl-4">
                    <div class="pt-5">
                        <div class="bg-services serve-bg-3 d-inline ">
                            <img class="services-img " src="{{ asset('assets/front/img/service-3.png') }}" alt="">
                        </div>
                        <h3 class="f-22 fw-700 clr-3 pt-5">Client management</h3>
                        <p class="f-16  pt-4 fw-400 clr-3">Lorem Ipsum is simply dummy text of the
                            printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-10 pt-md-0 pt-4 text-start">
                <div class="off px-xxl-5 px-xl-4">
                    <div class="pt-5">
                        <div class="bg-services serve-bg-4 d-inline ">
                            <img class="services-img " src="{{ asset('assets/front/img/service-4.png') }}s}}" alt="">
                        </div>
                        <h3 class="f-22 fw-700 clr-3 pt-5">Client management</h3>
                        <p class="f-16  pt-4 fw-400 clr-3">Lorem Ipsum is simply dummy text of the
                            printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-10 pt-md-0 pt-4 text-start">
                <div class="off px-xxl-5 px-xl-4">
                    <div class="pt-5">
                        <div class="bg-services serve-bg-5 d-inline ">
                            <img class="services-img " src="{{ asset('assets/front/img/service-5.png') }}" alt="">
                        </div>
                        <h3 class="f-22 fw-700 clr-3 pt-5">Client management</h3>
                        <p class="f-16  pt-4 fw-400 clr-3">Lorem Ipsum is simply dummy text of the
                            printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-10 pt-md-0 pt-4 text-start">
                <div class="off px-xxl-5 px-xl-4">
                    <div class="pt-5">
                        <div class="bg-services serve-bg-6 d-inline ">
                            <img class="services-img " src="{{ asset('assets/front/img/service-6.png') }}" alt="">
                        </div>
                        <h3 class="f-22 fw-700 clr-3 pt-5">Client management</h3>
                        <p class="f-16  pt-4 fw-400 clr-3">Lorem Ipsum is simply dummy text of the
                            printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="serve-sec" id="bg-trans"
    style="background:url('{{ asset('assets/front/img/serve-sec.svg') }}') ">
    <div class="container-fluid h-100 ps-0 pt-5">
        <div class="row justify-content-center align-items-center pt-5">
            <div class="col-xxl-5 col-xl-5 col-12  pt-xxl-5 pt-xl-3 pt-3">
                <div class="mt-lg-3 serve-lp"
                    style="background:url('{{ asset('assets/front/img/serve-sec-2.png') }}') ">
                </div>
            </div>
            <div class="offset-lg-1 col-xxl-6 col-xl-6 col-10 align-self-center pt-5 pt-lg-0">
                <h1 class="fw-600 clr-3">Want to know more?</h1>
                <p class="f-22 fw-600 col-lg-8 clr-3 pt-lg-5 pt-4">Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry. </p>
                <p class="f-18 fw-400 col-lg-9 clr-3 pt-lg-4 pt-3">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                    1500s.</p>
                <p class="f-18 fw-400 col-lg-8 clr-3 pt-lg-4 pt-3">Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry. </p>
            </div>
        </div>
    </div>
</section>
<section class="num-sec" id="bg-trans"
    style="background:url('https://staging.designinternal.com/html/dash-board/valeri/assets/front/img/num-sec.svg') ">
    <div class="container h-100 px-0 pt-lg-5 mt-lg-5">
        <div class="row justify-content-center text-center align-items-center me-0">
            <div class="col-xxl-12 col-xl-12 col-12 py-5 pe-0">
                <h1 class="fw-600 clr-3 py-5">Let our numbers convince you</h1>
                <div class="col-12 pt-5 ">
                    <div class="row  text-center justify-content-center text-center align-items-center me-0">
                        <div class="col-xxl-2 col-xl-2 col-5 pb-5 px-1 mx-lg-5 mx-1" data-aos="fade"
                            data-aos-duration="3000">
                            <div class="row justify-content-center">
                                <div class="bg-steps ">
                                    <img class="step-img-2" src="assets/front/img/num-1.png" alt="">
                                </div>
                                <div class="pt-5">
                                    <h2 class="fw-600 clr-3 f-50 count d-inline">2.000</h2>
                                    <h2 class="clr-3 f-50 d-inline">+</h2>
                                </div>
                                <p class="f-20 pt-4 fw-600 clr-3 p-0">Doctors & employees
                                    use clinicminds</p>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-5 pb-5 px-1 mx-lg-5 mx-1" data-aos="fade"
                            data-aos-duration="3000">
                            <div class="row justify-content-center">
                                <div class="bg-steps ">
                                    <img class="step-img-2" src="assets/front/img/num-2.png" alt="">
                                </div>
                                <div class="pt-5">
                                    <h2 class="fw-600 clr-3 f-50 count d-inline">3.6</h2>
                                    <h2 class="clr-3 f-50 d-inline">M</h2>
                                </div>
                                <p class="f-20 pt-4 fw-600 clr-3 p-0">Medical records
                                    created</p>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-5 pb-5 px-1 mx-lg-5 mx-1" data-aos="fade"
                            data-aos-duration="3000">
                            <div class="row justify-content-center">
                                <div class="bg-steps ">
                                    <img class="step-img-2" src="assets/front/img/num-3.png" alt="">
                                </div>
                                <div class="pt-5">
                                    <h2 class="fw-600 clr-3 f-50  count d-inline">95</h2>
                                    <h2 class="clr-3 f-50 d-inline">%</h2>
                                </div>
                                <p class="f-20 pt-4 fw-600 clr-3 p-0">Customer support
                                    satisfaction</p>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-5 pb-5 px-1 mx-lg-5"mx-1 data-aos="fade"
                            data-aos-duration="3000">
                            <div class="row justify-content-center">
                                <div class="bg-steps ">
                                    <img class="step-img-2" src="assets/front/img/num-4.png" alt="">
                                </div>
                                <div class="pt-5">
                                    <h2 class="fw-600 clr-3 f-50  count d-inline">20</h2>
                                    <h2 class="clr-3 f-50 d-inline">%</h2>
                                </div>
                                <p class="f-20 pt-4 fw-600 clr-3 p-0">Average increase in
                                    appointments</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
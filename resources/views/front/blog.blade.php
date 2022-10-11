@extends('front.inc.master')
@section('content')

<div class="banner ">
    <div class="col-11 mx-auto py-4">
        <div class="bg-top-bar text-center text-uppercase f-20">
            <p class="font-head">Promotion Task Bar</p>
        </div>
    </div>
    <div class="blog-bg " id="bg-trans"
        style="background:url('{{asset('assets/front/img/blog-bg.svg')}}') ">
        <div class="container h-100 ">
            <div class="row justify-content-center text-center align-items-center pt-lg-5 mt-lg-5">
                <div class="col-xxl-8 col-xl-10 col-10">
                    <h1 class="clr-3 fw-600 line-height">
                        Our Blogs
                    </h1>
                    <p class="f-18 pt-4 fw-400 clr-3">Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s.</p>
                    <div class="px-lg-5 mx-lg-5 pt-7">
                        <div class="form-control text-start px-5">
                            <input class="input-style " type="text" name="search" placeholder="Search..."
                                class="form-control w-1 00">
                            <a href=""> <i class="fa fa-search clr-6"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row text-start py-lg-5 px-0">
                    <div class="col-xxl-6 col-xl-6 col-12 px-0 py-4 ">
                        <div class="off p-0 mx-2 ">
                            <img class="blog-img" src="{{asset('assets/front/img/blog-1.jpg')}}" alt="">
                            <div class="p-4">
                                <h3 class="f-32 fw-600 clr-3">Lorem ipsum</h3>
                                <p class="f-16 fw-400 clr-3 pt-xxl-3 ">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                </p>
                                <p class="f-16 fw-400 clr-3 pt-xxl-3 mb-0">March 23rd, 2022 · 4 min read
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-12 px-0 py-4">
                        <div class="off p-0 mx-2">
                            <img class="blog-img" src="{{asset('assets/front/img/blog-2.jpg')}}" alt="">
                            <div class="p-4">
                                <h3 class="f-32 fw-600 clr-3">Lorem ipsum</h3>
                                <p class="f-16 fw-400 clr-3 pt-xxl-3 ">Lorem ipsum dolor sit amet, consectetur elit.
                                </p>
                                <p class="f-16 fw-400 clr-3 pt-xxl-3 mb-0">March 23rd, 2022 · 4 min read
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-12 px-0 py-4">
                        <div class="off p-0 mx-2">
                            <img class="blog-img" src="{{asset('assets/front/img/blog-3.jpg')}}" alt="">
                            <div class="p-4">
                                <h3 class="f-32 fw-600 clr-3">Lorem ipsum</h3>
                                <p class="f-16 fw-400 clr-3 pt-xxl-3 ">Lorem ipsum dolor sit amet, consectetur elit.
                                </p>
                                <p class="f-16 fw-400 clr-3 pt-xxl-3 mb-0">March 23rd, 2022 · 4 min read
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-12 px-0 py-4">
                        <div class="off p-0 mx-2">
                            <img class="blog-img" src="{{asset('assets/front/img/blog-4.jpg')}}" alt="">
                            <div class="p-4">
                                <h3 class="f-32 fw-600 clr-3">Lorem ipsum</h3>
                                <p class="f-16 fw-400 clr-3 pt-xxl-3 ">Lorem ipsum dolor sit amet, consectetur elit.
                                </p>
                                <p class="f-16 fw-400 clr-3 pt-xxl-3 mb-0">March 23rd, 2022 · 4 min read
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-12 px-0 py-4">
                        <div class="off p-0 mx-2">
                            <img class="blog-img" src="{{asset('assets/front/img/blog-5.jpg')}}" alt="">
                            <div class="p-4">
                                <h3 class="f-32 fw-600 clr-3">Lorem ipsum</h3>
                                <p class="f-16 fw-400 clr-3 pt-xxl-3 ">Lorem ipsum dolor sit amet, consectetur elit.
                                </p>
                                <p class="f-16 fw-400 clr-3 pt-xxl-3 mb-0">March 23rd, 2022 · 4 min read
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-12 px-0 py-4 ">
                        <div class="off p-0 mx-2 ">
                            <img class="blog-img" src="{{asset('assets/front/img/blog-6.jpg')}}" alt="">
                            <div class="p-4">
                                <h3 class="f-32 fw-600 clr-3">Lorem ipsum</h3>
                                <p class="f-16 fw-400 clr-3 pt-xxl-3 ">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                </p>
                                <p class="f-16 fw-400 clr-3 pt-xxl-3 mb-0">March 23rd, 2022 · 4 min read
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-12 px-0 py-4  ">
                        <div class="off p-0 mx-2 ">
                            <img class="blog-img" src="{{asset('assets/front/img/blog-7.jpg')}}" alt="">
                            <div class="p-4">
                                <h3 class="f-32 fw-600 clr-3">Lorem ipsum</h3>
                                <p class="f-16 fw-400 clr-3 pt-xxl-3 ">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                </p>
                                <p class="f-16 fw-400 clr-3 pt-xxl-3 mb-0">March 23rd, 2022 · 4 min read
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-12 px-0 py-4 ">
                        <div class="off p-0 mx-2">
                            <img class="blog-img" src="{{asset('assets/front/img/blog-8.jpg')}}" alt="">
                            <div class="p-4">
                                <h3 class="f-32 fw-600 clr-3">Lorem ipsum</h3>
                                <p class="f-16 fw-400 clr-3 pt-xxl-3 ">Lorem ipsum dolor sit amet, consectetur elit.
                                </p>
                                <p class="f-16 fw-400 clr-3 pt-xxl-3 mb-0">March 23rd, 2022 · 4 min read
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-12 px-0 py-4 ">
                        <div class="off p-0 mx-2">
                            <img class="blog-img" src="{{asset('assets/front/img/blog-9.jpg')}}" alt="">
                            <div class="p-4">
                                <h3 class="f-32 fw-600 clr-3">Lorem ipsum</h3>
                                <p class="f-16 fw-400 clr-3 pt-xxl-3 ">Lorem ipsum dolor sit amet, consectetur elit.
                                </p>
                                <p class="f-16 fw-400 clr-3 pt-xxl-3 mb-0">March 23rd, 2022 · 4 min read
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row my-lg-5">
                        <nav aria-label="...">
                            <ul class="pagination pagination-sm justify-content-center ">

                                <li class=" active btn-page  btn-slide-left-2 mx-4" aria-current="page">
                                    <a class="btn-page" href="#" aria-label="Next">
                                        <span class="f-20" aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class=" active btn-page  btn-slide-left-2 mx-lg-2 me-2" aria-current="page">
                                    <a class="btn-page" href="#">01</a>
                                </li>
                                <li class="btn-page btn-slide-left-2 mx-lg-2"><a class="btn-page" href="#">02</a> </li>
                                <li class="btn-page btn-slide-left-2 mx-2"><a class="btn-page" href="#">03</a></li>
                                <li class="btn-page btn-slide-left-2 mx-lg-2"><a class="btn-page" href="#">04</a></li>
                                <li class=" active btn-page  btn-slide-left-2 mx-4" aria-current="page">
                                    <a class="btn-page" href="#" aria-label="Next">
                                        <span class="f-20" aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
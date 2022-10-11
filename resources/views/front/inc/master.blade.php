<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>{{$title}}</title>
    <link rel="icon" href="{{asset('assets/front/icon.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/vendor.css')}}" async />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/style.css')}}" async />
</head>

<body>
    <header class=" home  ">
        <nav class="bg-head">
            <div class="container-fluid col-11 mx-auto pt-4">
                <div class="row justify-content-sm-between  justify-content-center align-items-center">
                    <div class="col-xxl-3 col-xl-3 col-3 p-0">
                        <a class="" href="{{route('home')}}"><img class=""
                                src="{{asset('assets/front/img/logo.png')}}"></a>
                    </div>
                    <div class="col-xxl-7 col-xl-8 col-8 nav-bar  align-items-center justify-content-center">
                        <ul class="list-unstyled mb-0  text-uppercase d-lg-flex d-md-block nav-btn">
                            <li class="py-3 pe-4 ps-lg-0 ps-4 position-relative">
                                <a class="link-active font-head" href="{{route('home')}}">Home</a>
                            </li>
                            <li class="py-3 px-4 position-relative dropdown">
                                <a class="font-head dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Learn More
                                </a>
                                <ul class="list-unstyled dropdown-cont position-absolute "
                                    aria-labelledby="navbarDropdown">
                                    <li><a class="font-head clr-4 dropdown-item" href="#">lorem</a></li>
                                    <li><a class="font-head clr-4 dropdown-item" href="#">lorem</a></li>
                                    <li><a class="font-head clr-4 dropdown-item" href="#">lorem</a></li>
                                </ul>
                            </li>
                            <li class="py-3 px-4 position-relative dropdown">
                                <a class="font-head dropdown-toggle" href="{{ route('pricing') }}" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Plans & Pricing
                                </a>
                                <ul class="list-unstyled dropdown-cont position-absolute "
                                    aria-labelledby="navbarDropdown">
                                    <li><a class="font-head clr-4 dropdown-item" href="#">lorem</a></li>
                                    <li><a class="font-head clr-4 dropdown-item" href="#">lorem</a></li>
                                    <li><a class="font-head clr-4 dropdown-item" href="#">lorem</a></li>
                                </ul>
                            </li>
                            <li class="py-3 px-4 position-relative dropdown">
                                <a class="font-head dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Store
                                </a>
                                <ul class="list-unstyled dropdown-cont position-absolute "
                                    aria-labelledby="navbarDropdown">
                                    <li><a class="font-head clr-4 dropdown-item" href="#">lorem</a></li>
                                    <li><a class="font-head clr-4 dropdown-item" href="#">lorem</a></li>
                                    <li><a class="font-head clr-4 dropdown-item" href="#">lorem</a></li>
                                </ul>
                            </li>
                            <li class="py-3 px-4 position-relative">
                                <a class="link-active font-head" href="{{route('about')}}">About Us</a>
                            </li>
                            <li class="py-3 ps-4 position-relative">
                                <a class="link-active font-head" href="{{route('contact')}}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class=" col-12 d-lg-none d-block align-self-center text-center f-md py-2">
                        <ul
                            class="list-unstyled d-flex justify-content-between align-items-center justify-content-lg-center mb-0 ">
                            <li class="d-lg-none ">
                                <a href="#"><span class="fa fa-home clr-1"
                                        aria-hidden="true"></span>
                                    <p class="mb-0 d-lg-none"></p>
                                </a>
                            </li>
                            <li class="pl-lg-5 ">
                                <a href="#"><span class="fa fa-shopping-cart clr-1"
                                        aria-hidden="true"></span>
                                    <p class="mb-0 d-lg-none"></p>
                                </a>
                            </li>
                            <li class="d-lg-none mt-3 clr-1">
                                <h5 class="nav-open ">☰</h5>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xxl-1 col-xl-1 col-1 text-end pe-0 d-none d-lg-block">
                        <button class="btn py-2 px-4">
                            <div class="text-center ">
                                <a href="">
                                    <i class="fa fa-shopping-cart pe-2 clr-4" aria-hidden="true"></i>
                                </a>
                                <span class="fw-400">00</span>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>


        {{-- Content Starts --}}

                @yield('content')

        {{-- Content Ends --}}

        <footer class="footer-bg"
    style="background:url('{{asset('assets/front/img/footer-bg.svg')}}')">
    <div class="container pb-3">
        <div class="row h-100 pt-5  justify-content-end">
            <div class="col-xxl-8 col-xl-8 col-12">
                <div class="row">
                    <div class="col-xxl-4 col-xl-3 col-6 pt-5">
                        <h2 class="clr-4 fw-600">
                            About
                        </h2>
                        <ul class="list-unstyled mb-0 pt-4 ">
                            <li class="py-2 pe-4">
                                <a class=" clr-5 font-p f-18" href="{{route('about')}}">About Us</a>
                            </li>
                            <li class="py-2 pe-4">
                                <a class=" clr-5 font-p f-18" href="{{route('customersupport')}}">Customer Support</a>
                            </li>
                            <li class="py-2 pe-4">
                                <a class=" clr-5 font-p f-18" href="{{route('team')}}">Our Team</a>
                            </li>
                            <li class="py-2 pe-4">
                                <a class=" clr-5 font-p f-18" href="{{route('contact')}}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xxl-4 col-xl-3 col-6 pt-5">
                        <h2 class="clr-4 fw-600">
                            Policies
                        </h2>
                        <ul class="list-unstyled mb-0 pt-4 ">
                            <li class="py-2 pe-4">
                                <a class=" clr-5 font-p f-18" href="{{route('terms')}}">Terms of Service</a>
                            </li>
                            <li class="py-2 pe-4">
                                <a class=" clr-5 font-p f-18" href="{{route('home')}}">Platform Consent</a>
                            </li>
                            <li class="py-2 pe-4">
                                <a class=" clr-5 font-p f-18" href="{{route('home')}}">Privacy Policy</a>
                            </li>
                            <li class="py-2 pe-4">
                                <a class=" clr-5 font-p f-18" href="{{route('home')}}">Disclaimer</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xxl-4 col-xl-3 col-6 pt-5">
                        <h2 class="clr-4 fw-600">
                            Navigation
                        </h2>
                        <ul class="list-unstyled mb-0 pt-4 ">
                            <li class="py-2 pe-4">
                                <a class=" clr-5 font-p f-18" href="{{route('pricing')}}">Pricing</a>
                            </li>
                            <li class="py-2 pe-4">
                                <a class=" clr-5 font-p f-18" href="{{route('services')}}">Services</a>
                            </li>
                            <li class="py-2 pe-4">
                                <a class=" clr-5 font-p f-18" href="{{route('blog')}}">Blogs</a>
                            </li>
                            <li class="py-2 pe-4">
                                <a class=" clr-5 font-p f-18" href="{{route('howitworks')}}">How it works</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-xl-4 text-lg-end">
                <h2 class="clr-4 fw-600 pt-5">
                    We send really nice emails
                </h2>
                <div class="input-group pt-5">
                    <div class="form-outline subs-input d-flex">
                        <input class="input-style me-lg-5 pe-5" type="text" name="name" placeholder="Full name"
                            class="form-control w-1 00">
                        <button class="btn-4 btn-slide-left ms-lg-5">
                            <a href=""> <i class="fa fa-angle-right clr-4"></i></a>
                        </button>
                    </div>
                </div>
                <div class="pt-5">
                    <a class="f-14 ms-3" href=""> <i class="social-icon fa fa-facebook clr-4"></i></a>
                    <a class="f-14 ms-3" href=""> <i class="social-icon fa fa-twitter clr-4"></i></a>
                    <a class="f-14 ms-3" href=""> <i class="social-icon fa fa-instagram clr-4"></i></a>
                    <a class="f-14 ms-3" href=""> <i class="social-icon fa fa-youtube-play clr-4"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="border-footer pt-5 mt-5">
    </div>
    <div class="text-center pt-3 mt-1">
        <span class="clr-4 f-16">© 2022 <a class="clr-1" href="">Valerie</a>. All rights reserved.</span>
    </div>
</footer>

<script type="text/javascript" src="{{asset('assets/front/js/plugin.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/custom.js')}}"></script>
<script type="text/javascript">
function increaseCount(a, b) {
    var input = b.previousElementSibling;
    var value = parseInt(input.value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    input.value = value;
}

function decreaseCount(a, b) {
    var input = b.nextElementSibling;
    var value = parseInt(input.value, 10);
    if (value > 1) {
        value = isNaN(value) ? 0 : value;
        value--;
        input.value = value;
    }
}
</script>
</body>

</html>

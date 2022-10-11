
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>{{ $title }}</title>
    <link rel="icon" href="{{ asset('assets/front/img/logo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/vendor.css') }}" async />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/style.css') }}" async />
</head>

<body>
    <section class="logo-bg" id="bg-trans"
        style="background:url('{{ asset('assets/front/img/login-bg.svg') }}') center center/cover no-repeat; height: 1100px;">
        <div class="container-fluid ">
            <div class="row justify-content-lg-start justify-content-center text-start align-items-center">
                <div class="col-12">
                    <div class="row align-items-center">
                        <div class="col-xxl-6 col-xl-6 col-6 ">
                            <img class="pt-4 ps-5" src="uploads/settings/logo.png" alt="">
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-6 text-end pe-5 pt-4 pt-lg-0">
                            <span class="f-18 fw-400 clr-3 pe-2">Already have an account?</span>
                            <a class="f-20 fw-700 clr-1" href="">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-12 ps-0 d-none d-lg-block">
                    <div class=""
                        style="background:url('https://staging.designinternal.com/html/dash-board/valeri/assets/front/img/login-hero.svg') left center/contain no-repeat; height: 871px;">
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-10 ps-0 pt-5 pt-lg-0">
                    <h1 class="f-50 fw-600 clr-3">Create Account</h1>
                    <p class="f-18 fw-400 clr-3 pt-2">Welcome back! Please enter your details.</p>
                    <form class="row pt-3 text-start">
                        <div class="col-12 my-2">
                            <label class="f-18 fw-600 clr-3 p-3" for="fname">Username</label>
                            <input type="text" name="" placeholder="" class="form-control clr-3 w-100">
                        </div>
                        <div class="col-12 my-2">
                            <label class="f-18 fw-600 clr-3 p-3" for="lname">Email</label>
                            <input type="text" name="" placeholder="@example.com" class="form-control clr-3 w-100">
                        </div>
                        <div class="col-6 my-2">
                            <label class="f-18 fw-600 clr-3 p-3" for="email">Password</label>
                            <input type="text" name="" placeholder="" class="form-control clr-3 w-100">
                        </div>
                        <div class="col-6 my-2">
                            <label class="f-18 fw-600 clr-3 p-3" for="email">Email</label>
                            <input type="text" name="" placeholder="" class="form-control clr-3 w-100">
                        </div>
                    </form>
                    <div class="form-check pt-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label ps-3" for="flexCheckDefault">
                            By creating on account, you agree to the Terms of Services
                            and Conditions, and Privacy Policy
                        </label>
                    </div>
                    <button class="btn-2 btn-slide-left mt-4 w-100">
                        Create Account
                    </button>
                    <div class="position-relative">
                        <p class="clr-3 f-16 fw-400 text-center pt-4 or-border">or</p>
                    </div>
                    <div class="position-relative bg-social text-center mt-4">
                        <a class="f-18 fw-700 clr-3 social-icon-1" href="">Continue with Google </a>
                    </div>
                    <div class="position-relative bg-social text-center mt-3">
                        <a class="f-18 fw-700 clr-3 social-icon-2" href="">Continue with Google </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
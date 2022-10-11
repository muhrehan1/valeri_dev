@extends('front.inc.master')
@section('content')



                <div class="banner ">
    <div class="col-11 mx-auto py-4">
        <div class="bg-top-bar text-center text-uppercase f-20">
            <p class="font-head">Promotion Task Bar</p>
        </div>
    </div>
    <div class="about-banner-bg " id="bg-trans"
        style="background:url('https://staging.designinternal.com/html/dash-board/valeri/assets/front/img/about-banner.svg') ">
        <div class="container-fluid col-11 mx-auto h-100">
            <div class="row justify-content-center align-items-center h-100 ps-xxl-5">
                <div class="col-xxl-10 col-xl-10 col-12">
                    <h1 class="clr-3 fw-600 line-height pb-4">
                        Contact us
                    </h1>
                    <a class="f-32 fw-400 clr-3 border-end" href="">Email Us: support@silversouls.com</a>
                    <a class="f-32 fw-400 clr-3 ps-lg-3 " href="">Call Us: (012) 345 6789</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="contact-sec" id="bg-trans"
    style="background:url('https://staging.designinternal.com/html/dash-board/valeri/assets/front/img/contact-sec.svg') center center/cover no-repeat; height: 818px;">
    <div class="container h-100">
        <div class="row justify-content-center align-items-center pt-5">
            <div class="location-slider pt-5 mt-3">
                <div class="off p-2 mx-2 slick-slide-point">
                    <iframe class="map-box"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3109.7238500732756!2d-77.66873108432742!3d38.79296456069764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b664977111b987%3A0x64589a6858e04cdc!2sGrace%20Church%20of%20Gainesville!5e0!3m2!1sen!2s!4v1663886539489!5m2!1sen!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="p-3">
                        <p class="f-22 fw-400 clr-3 pt-4 px-2">541 W. Church St. Gainesville, VA 20155
                        </p>
                        <a class="clr-3 pt-3 f-22 fw-600 px-2 pb-3" href="">Call Us: (012) 345 6789</a>
                    </div>
                </div>
                <div class="off p-2 mx-2 slick-slide-point">
                    <iframe class="map-box"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3109.7238500732756!2d-77.66873108432742!3d38.79296456069764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b664977111b987%3A0x64589a6858e04cdc!2sGrace%20Church%20of%20Gainesville!5e0!3m2!1sen!2s!4v1663886539489!5m2!1sen!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="p-3">
                        <p class="f-22 fw-400 clr-3 pt-4 px-2">541 W. Church St. Gainesville, VA 20155
                        </p>
                        <a class="clr-3 pt-3 f-22 fw-600 px-2 pb-3" href="">Call Us: (012) 345 6789</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="form-bg" id="bg-trans"
    style="background:url('https://staging.designinternal.com/html/dash-board/valeri/assets/front/img/form-bg.svg') center center/cover no-repeat; height: 1013px;">
    <div class="container h-100">
        <div class="row justify-content-center text-center align-items-center h-100">
            <div class="col-xxl-8 col-xl-10 col-12">
                <h1 class="clr-3 fw-600 line-height">
                    Send us a message
                </h1>
                <p class="f-18 pt-4 fw-400 clr-3">his research report contains an analysis of
                    the top American health tech companies and private label manufacturers.</p>
                <form class="mt-5 pt-3 row text-start">
                    <div class="col-xxl-6 col-xl-12 col-12 my-2">
                        <label class="f-18 fw-600 clr-3 p-3" for="fname">First Name</label>
                        <input type="text" name="" placeholder="" class="form-control clr-3 w-100">
                    </div>
                    <div class="col-xxl-6 col-xl-12 col-12 my-2">
                        <label class="f-18 fw-600 clr-3 p-3" for="lname">Last Name</label>
                        <input type="text" name="" placeholder="" class="form-control clr-3 w-100">
                    </div>
                    <div class="col-xxl-12 col-xl-12 col-12 my-2">
                        <label class="f-18 fw-600 clr-3 p-3" for="email">Email</label>
                        <input type="text" name="" placeholder="" class="form-control clr-3 w-100">
                    </div>
                    <div class="col-xxl-12 col-xl-12 col-12 my-2">
                        <label class="f-18 fw-600 clr-3 p-3" for="message">Message</label>
                        <textarea class="form-control clr-3 w-100" placeholder="" rows="4"></textarea>
                    </div>
                </form>
                <button class="btn-3 px-6 btn-slide-right mt-5">
                    SUBMIT
                </button>
            </div>
        </div>
    </div>
</section>


@endsection

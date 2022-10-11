<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        $title ='Welcome to journey Church';
        return view('front.index',compact('title'));

    }

    public function about()
    {
        $title  = "Welcome to journey Church | About";
        return view('front.about',compact('title'));
    }

    public function contact()
    {
        $title = "Welcome to journey Church | Contact";
        return view('front.contact',compact('title'));
    }


    public function pricing()
    {
        $title = "Welcome to journey Church | Pricing";
        return view('front.subscription',compact('title'));
    }


    public function blog()
    {
        $title = "Welcome to journey Church | Blogs";
        return view('front.blog',compact('title'));
    }


    public function customer_support()
    {
        $title = "Welcome to journey Church | Customer Support";
        return view('front.customer-support',compact('title'));
    }



    public function how_it_works()
    {
        $title = "Welcome to journey Church | How it Works";
        return view('front.how-it-works',compact('title'));
    }


    public function login_signup()
    {
        $title = "Welcome to journey Church | Login/Signup";
        return view('front.login-signup',compact('title'));
    }

    public function services()
    {
        $title = "Welcome to journey Church | Services";
        return view('front.services',compact('title'));
    }

    public function team()
    {
        $title = "Welcome to journey Church | Team";
        return view('front.team',compact('title'));
    }


    public function terms()
    {
        $title = "Welcome to journey Church | Terms";
        return view('front.terms',compact('title'));
    }


    public function what_we_offer()
    {
        $title = "Welcome to journey Church | What we offer";
        return view('front.what-we-offer',compact('title'));
    }

}

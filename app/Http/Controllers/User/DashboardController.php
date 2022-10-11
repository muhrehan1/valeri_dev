<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $title = "Admin | Dashboard";
        return view('backend.user.dashboard',compact('title'));
    }
}

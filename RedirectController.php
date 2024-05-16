<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function loginpage(Request $request)
    {
        return view('login');
    }
    public function registerpage(Request $request)
    {
        return view('register');
    }
    public function homepage(Request $request)
    {
        return view('home');
    }
    public function notificationpage(Request $request)
    {
        return view('notification');
    }
    public function feespage(Request $request)
    {
        return view('fees');
    }
    public function paymentpage(Request $request)
    {
        return view('payment');
    }
    public function settingpage(Request $request)
    {
        return view('setting');
    }
    public function logoutpage(Request $request)
    {
        return view('logout');
    }
}

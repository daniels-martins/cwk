<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if ($request->user()->has_paid) //i ought to do this  return view('dashboard')
        // but i'm doing this instead
        dd('Welcome to your dashboard Mr.'. $request->user()->username);
        // i did this but it was unnecessary cos lara is bae
            // if (Session::has('restriction_sms')) {
            //     Session::flash('restriction_sms', "Sorry you need to pay to access our services");
            // }
        return redirect()->route('checkout1.index');

    }
    
    
    
}

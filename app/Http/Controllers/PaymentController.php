<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __invoke()
    {
         return view('auth.thankyou');
    }
    
    
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    function index(){
        return view('subscriptions.index');
    }
}

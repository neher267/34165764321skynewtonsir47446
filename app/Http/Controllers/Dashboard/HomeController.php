<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Request as FlightRequest;
use Illuminate\Support\Facades\Auth;
use App\Request as PermitRequest;

class HomeController extends Controller
{
    public function index()
    {
        return view('backend.pages.index');    	
    }
    
    public function contact()
    {
    	return view('backend.pages.contact-us');
    }

    public function request_status($status)
    {
        if(Auth::user()->role == 'admen'){
            $results = FlightRequest::where('status', $status)->latest()->get();
        } else {
            $results = FlightRequest::where('status', $status)
                       ->where('user_id', Auth::user()->id)->latest()->get();
        }       
        
        return view('backend.pages.status', compact('results', 'status'));    	
    }    

    public function permit_request_show(PermitRequest $request)
    {
        return view('backend.pages.request-view', compact('request'));   
    }

    public function terms_and_conditions()
    {
        return view('backend.pages.terms-and-conditions');  
    }
}

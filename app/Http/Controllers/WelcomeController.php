<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function goToContactPage()
    {
        return view('layout/layout_fluid');


        //return URL::asset('css/file.css');
       // return view('pages/contact')->with("email","tom@126.com");
    }


}

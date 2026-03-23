<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * All HomePage Function Include
     * 
     */

    // Home One 
    public function indexOne(){
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.homes.indexOne', compact('bodyClass'));
    }
    // Home Two 
    public function indexTwo(){
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.homes.indexTwo', compact('bodyClass'));
    }
    // Home Three 
    public function indexThree(){
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.homes.indexThree', compact('bodyClass'));
    }


   
}

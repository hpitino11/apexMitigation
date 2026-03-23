<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{


    public function about() {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.about', compact('bodyClass'));
    }

    public function architecture() {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.architecture', compact('bodyClass'));
    }

    public function blog() {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.blog', compact('bodyClass'));
    }

    public function blogDetails() {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.blogDetails', compact('bodyClass'));
    }

    public function blogSidebar() {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.blogSidebar', compact('bodyClass'));
    }

    public function buildingRenovation() {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.buildingRenovation', compact('bodyClass'));
    }

    public function cart() {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.cart', compact('bodyClass'));
    }

    public function checkout() {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.checkout', compact('bodyClass'));
    }

    public function constructionSite() {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.constructionSite', compact('bodyClass'));
    }

    public function contact() {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.contact', compact('bodyClass'));
    }

    public function errorPage() {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.errorPage', compact('bodyClass'));
    }

    public function faq() {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.faq', compact('bodyClass'));
    }

    public function interiorDesign() {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.interiorDesign', compact('bodyClass'));
    }

    public function pricing() {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.pricing', compact('bodyClass'));
    }

    public function projectDetails() {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.projectDetails', compact('bodyClass'));
    }

    public function projects() {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.projects', compact('bodyClass'));
    }

    public function securitySystem() {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.securitySystem', compact('bodyClass'));
    }

    public function services() {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.services', compact('bodyClass'));
    }

    public function shop() {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.shop', compact('bodyClass'));
    }

     public function shopDetails() {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.shopDetails', compact('bodyClass'));
    }

    public function team () {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.team', compact('bodyClass'));
    }

    public function teamDetails () {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.teamDetails', compact('bodyClass'));
    }

    public function testimonials () {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.testimonials', compact('bodyClass'));
    }


    public function uiuxDesign() {
        $bodyClass = 'page-wrapper body-dark-bg';
        return view('frontend.pages.uiuxDesign', compact('bodyClass'));
    }

   
    
   

}

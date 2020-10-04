<?php
namespace App\Http\Controllers;

Use Illuminate\Http\Request;
class SiteController extends Controller
{
   public function showHome(){
        return view('home');
    }
    public function showAbout(){
        return view('about');
    }
    public function showService(){
        return view('service');
    }
    public function showPortfolio(){
        return view('portfolio');
    }

}

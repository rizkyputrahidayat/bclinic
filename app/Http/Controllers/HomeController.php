<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Face;
use App\Models\Facial;
use Illuminate\Http\Request;
use App\Models\Slimming;
use App\Models\SpecialOffer;

class HomeController extends Controller
{
    public function About()
    {
        $carousel = Carousel::get();
        return view('about', compact('carousel'));
    }
 
    public function Slimming()
    {
        $slimming = Slimming::get();
        return view('home.slimming', compact('slimming'));
    }
    public function facebody()
    {
        $face = Face::get();
        return view('home.facebody', compact('face'));
    }
    public function facial()
    {
        $facial = Facial::get();
        return view('home.facial', compact('facial'));
    }
  
    public function Career(){
        return view('home.careers');
    }
    public function Story()
    {
        return view('home.Story');
    }
    public function Location()
    {
        return view('home.Location');
    }
    public function SpecialOffer()
    {
        $special_offer = SpecialOffer::get();
        return view('home.SpecialOffer', compact('special_offer'));
    }
    public function Faq()
    {
        return view('home.Faq');
    }
    public function Blog()
    {
        return view('home.Blog');
    }
    public function Bupdate()
    {
        return view('home.Bupdate');
    }
    public function Video()
    {
        return view('home.Video');
    }
    public function Servicesproducts()
    {
        $carousel = Carousel::get();
        return view('home.Servicesproducts', compact('carousel'));
    }
    public function Skincare()
    {
        return view('home.Skincare');
    }
    public function ALLtestimoni()
    {
        return view('home.ALLtestimoni');
    }
    public function OurExpert()
    {
        return view('home.OurExpert');
    }
}

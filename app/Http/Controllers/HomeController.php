<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slimming;

class HomeController extends Controller
{
    public function Slimming()
    {
        $slimming = Slimming::get();
        return view('home.Slimming', compact('slimming'));
    }
    public function facebody()
    {
        return view('home.facebody');
    }
    public function Facial()
    {
        return view('home.Facial');
    }
    public function careers()
    {
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
        return view('home.SpecialOffer');
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
        return view('home.Servicesproducts');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
class FrontendController extends Controller
{
    public function home(){
        $getonecarosels =Carousel::where('status','active')->get()->first();  
        $getcarosels = Carousel::where('id','!=',$getonecarosels->id)->where('status','active')->orderBy('id','desc')->get();
        return view('frontend.home.home',compact('getonecarosels','getcarosels'));
    }

    public function about(){
        return view('frontend.about.about');
    }
    public function product(){
        return view("frontend.products.products");
    }
    public function delivary(){
        return view('frontend.delivery.delivery');
    }
    public function payment(){
        return view('frontend.payment.payment');
    }
    public function faq(){
        return view('frontend.faq.faq');
    }

    public function contact(){
        return view('frontend.contact.contact');
    }
}

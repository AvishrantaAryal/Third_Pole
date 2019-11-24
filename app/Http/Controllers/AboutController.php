<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Session;
use App\About;
use App\Traits\imageTrait;
use Illuminate\Support\Facades\DB;


class AboutController extends Controller
{
    use imageTrait;
    public function add(){
    	return view('cd-admin.about.aboutform');
    }

    public function store(){
    	 $request = Request()->all();
        $v = $this->validateRequest();
        $about = new About;
         $img = $this->insertimage($request['image']);
        $about['image']= $img;
        $about['alt']=$request['alt'];
         
        $about['tagline']=$request['tagline'];
        
        $about['description']=$request['description'];
       $about->save();
       return redirect('/about-view');
    }

    public function view(){
    	  $d= DB::table('abouts')->get()->first();
        return view('cd-admin.about.aboutshow',compact('d'));
    }

    public function update()
    {
        $request = Request()->all();
        $v = $this->updaterequest();
        $about = About::get()->first();
        $about['description'] = $request['description'];
        
        
        $about->save();
          Session::flash('updatesuccess');
        return redirect('/abouts-view');
        }

             public function updaterequest(){
       		 return Request()->validate([
            'description' => 'required',
            
        ]);
    }


		public function validateRequest(){
        return Request()->validate([
            'alt' => 'required',
            'image' => 'required|image',
          
			'tagline'=>'required',
			'description'=>'required',            
        ]);
    }
}


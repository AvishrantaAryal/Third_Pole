<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Session;
use App\Faq;
use Illuminate\Support\Facades\DB;

class FAQController extends Controller
{
    public function add(){
        return view('cd-admin.faq.addfaq');
    }
    public function view(){
        $d= DB::table('faqs')->get()->all();
        $er = Faq::get()->all();
      return view('cd-admin.faq.viewfaq',compact('d','er'));
  }

    public function store(){
        $request = Request()->all();
        $v = $this->validateRequest();
        $about = new Faq;
         
         
        $about['title']=$request['title'];
        
        $about['description']=$request['description'];
       $about->save();
       return redirect('/faq-view');
    
    }
    public function delete($id){
        DB::table('faqs')->where('id',$id)->delete();
        Session::flash('deletesuccess');
        return redirect('faq-view');
    }

    public function update($id)
    {
        $request = Request()->all();
        $v = $this->updaterequest();
        $about = Faq::where('id',$id)->get()->first();
        $about['title']=$request['title'];
        $about['description'] = $request['description'];
        
        
        $about->save();
          Session::flash('updatesuccess');
        return redirect('/faq-view');
        }

             public function updaterequest(){
       		 return Request()->validate([
                    'title'=>'required',
            'description' => 'required',
            
        ]);
    }


    public function validateRequest(){
        return Request()->validate([
            
          
			'title'=>'required',
			'description'=>'required',            
        ]);
    }
}

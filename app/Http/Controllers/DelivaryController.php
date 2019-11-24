<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delivary;
use Illuminate\Support\Session;
use Illuminate\Support\Facades\DB;
class DelivaryController extends Controller
{
    public function add(){
        return view('cd-admin.delivary.delivaryform');
    }
    public function view(){
        $d= DB::table('delivaries')->get()->all();
        $er = Delivary::get()->all();
      return view('cd-admin.delivary.delivaryshow',compact('d','er'));
  }
    public function store(){
        $request = Request()->all();
        $v = $this->validateRequest();
        $about = new Delivary;
         
         
        $about['title']=$request['title'];
        
        $about['description']=$request['description'];
       $about->save();
       return redirect('/delivary-view');
    

    }

    public function delete($id){
        DB::table('delivaries')->where('id',$id)->delete();
        Session::flash('deletesuccess');
        return redirect('delivary-view');
    }

    public function update($id)
    {
        $request = Request()->all();
        $v = $this->updaterequest();
        $about = Delivary::where('id',$id)->get()->first();
        $about['title']=$request['title'];
        $about['description'] = $request['description'];
        
        
        $about->save();
          Session::flash('updatesuccess');
        return redirect('/delivary-view');
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

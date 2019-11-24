<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Session;
use App\Payment;
use Illuminate\Support\Facades\DB;
class PaymentController extends Controller
{
    public function add(){
        return view('cd-admin.payment.addpayment');
    }
    public function view(){
        $d= DB::table('payments')->get()->all();
        $er = Payment::get()->all();
        return view('cd-admin.payment.viewpayment',compact('d','er'));
    }
    public function store(){
        $request = Request()->all();
        $v = $this->validateRequest();
        $about = new Payment;
         
         
        $about['title']=$request['title'];
        
        $about['description']=$request['description'];
       $about->save();
       return redirect('/payment-view');
    
    }
    public function delete($id){
        DB::table('payments')->where('id',$id)->delete();
        Session::flash('deletesuccess');
        return redirect('payment-view');
    }

    public function update($id)
    {
        $request = Request()->all();
        $v = $this->updaterequest();
        $about = Payment::where('id',$id)->get()->first();
        $about['title']=$request['title'];
        $about['description'] = $request['description'];
        
        
        $about->save();
          Session::flash('updatesuccess');
        return redirect('/payment-view');
        }

             public function updaterequest(){
       		 return Request()->validate([
            'title'=>'',
            'description' => 'required',
            
        ]);
    }


    public function validateRequest(){
        return Request()->validate([
            
          
			'title'=>'',
			'description'=>'required',            
        ]);
    }
}

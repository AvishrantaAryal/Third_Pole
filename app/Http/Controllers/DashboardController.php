<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Mail\Quickmail;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{

    public function dashboard(){
       $ad = DB::table('users')->get()->all();
       $user=DB::table('users')->orderBy('id','DESC')->get()->first(); 
       return view('cd-admin.home.home',compact('ad','user'));
       //dd($admin);
    }
    public function logout(){
        Auth::logout();
        return redirect()->back();
    }
     public function quickmail(){
   $data = request()->validate([
    		'email' => 'required|email',
    		'subject'=>'required',
    		'message' => 'required'
    	]);

        $a = [];
        $a['created_at'] = Carbon::now('Asia/Kathmandu');
        $final = array_merge($a,$data);
        DB::table('quickmails')->insert($final);
        Mail::to($data['email'])->send(new QuickMail($data));
        Session::flash('success');

      	return redirect('/admin');
    }

     public function view(){
        $mail =	Quickmail::orderBy('id', 'DESC')->paginate(10);
        dd($mail);
    	return view('cd-admin.home.mails',compact('mail'));
    }

    public function del($id){
    	 DB::table('quickmails')->where('id',$id)->delete();
        Session::flash('deletesuccess');
        return redirect('view-all-mails');
    }
    }

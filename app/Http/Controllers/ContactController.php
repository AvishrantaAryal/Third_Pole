<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm ; 
use App\Contact;
use Illuminate\Support\Session;
use Carbon\Carbon;
use Illuminate\Support\DB;

class ContactController extends Controller
{
    
    public function contact(){
        $c=DB::table('contacts')->orderBy('id','Desc')->paginate(10);
            return view('cd-admin.contact.contact',compact('c'));
        }
        public function reply(){
            $d=DB::table('replies')->orderBy('id', 'DESC')->paginate(10);
            return view('cd-admin.contact.viewreply',compact('d'));	
        }
    
        public function addcontact(){
            return view('cd-admin.contact.create');
        }
    
        public function replyform($id){
            $n=DB::table('contacts')->where('id',$id)->get()->first();
            return view('cd-admin.contact.reply',compact('n'));
        }
    
         public function store(){
    
            $data = request()->validate([
                'name' => 'required',
                'email' => 'required|email',
                'subject'=>'required',
                'phone'=>'required',
                'message' => 'required',
            'phone'=>'required'
            ]);
      
    
            $a = [];
            $a['created_at'] = Carbon::now('Asia/Kathmandu');
            $final = array_merge($a,$data);
            DB::table('contacts')->insert($final);
              return redirect('/');
      }
      public function deleteinbox($id){
          $test = DB::table('contacts')->where('id',$id)->get()->first();
            
            DB::table('contacts')->where('id',$id)->delete();
            Session::flash('deletesuccess');
            return redirect('/viewcontact');
      }
    
    
      public function storereply($id){
           $data = request()->validate([
                'email' => 'required|email',
                'subject' => 'required|',
                'message' => 'required',
                'status' => 'required'
            ]);
            $a = [];
            $a['created_at'] = Carbon::now('Asia/Kathmandu');
            $a['contact_id'] = $id;
            $final = array_merge($a,$data);
            DB::table('replies')->insert($final);
            
             Mail::to($data['email'])->send(new ContactForm($data));
            return redirect('/replies');
           
      }
      public function deletereply($id){
          $test = DB::table('replies')->where('id',$id)->get()->first();
            
            DB::table('replies')->where('id',$id)->delete();
            Session::flash('deletesuccess');
            return redirect('/replies');
      }
    }
    
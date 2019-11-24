<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\imageTrait;
use App\Category;
use Illuminate\Support\Session;
Use Carbon\Carbon;
class CategoryController extends Controller
{
    use imageTrait;
    public function add(){
        return view('cd-admin.category.addcategory');

    }
    public function view(){
        $test= DB::table('categories')->get()->all();
        $er = Category::get()->all();
        return view('cd-admin.category.category',compact('test','er'));
    }
    public function store(){
        $a = [];
        $data = $this->validationform();
        if(isset($data['image'])){
        $img = $this->insertimage($data['image']);
        $a['image'] = $img;
        }

        $a['created_at']=Carbon::now('Asia/Kathmandu');
        $final = array_merge($data,$a);
        
        DB::table('categories')->Insert($final);
        Session::flash('success');
         return redirect('/category-view');
    }
    public function status($id){
        $a = [];
        $test = DB::table('categories')->where('id',$id)->get()->first();
        if($test->status=='active')
        {
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active'; 
        }
        DB::table('categories')->where('id',$id)->update($a);
        return redirect('/category-view');
    }
    public function update($id){
        $test = DB::table('categories')->where('id',$id)->get()->first();
        $a = [];
        $data = $this->validationupdate();
        if(isset($data['image']))
        {
        
         if (file_exists('public/imageupload/'.$test->image)) 
         {
             unlink('public/imageupload/'.$test->image);
         }
         
         $test = $this->addimage($data['image']);
         $a['image'] = $test ;
         $a['updated_at'] =Carbon::now('Asia/Kathmandu');
         $replace = array_replace($data,$a);
         $data = DB::table('categories')->where('id',$id)->update($replace);
    	 }
    	 else
    	 {
         $a['updated_at'] =Carbon::now('Asia/Kathmandu');
         $replace = array_replace($data,$a);
         
        DB::table('categories')->where('id',$id)->update($replace);
   		 }
            Session::flash('updatesuccess');
        return redirect('/category-view');
    }

    public function delete($id){
        $test = DB::table('categories')->where('id',$id)->get()->first();
	  if (file_exists('public/imageupload/'.$test->image)) 
	  {
	    unlink('public/imageupload/'.$test->image);
	   }
	  DB::table('categories')->where('id',$id)->delete();
      Session::flash('deletesuccess');
      return redirect('category-view');
    }



    public function validationform(){
    $data =  Request()->validate([
      'name' => 'required',
      'image'=>'required|image',
      'alt' => 'required',
      'status' => 'required',
      
      ]);
        return $data;

    }
    public function validationupdate(){
        $data =  Request()->validate([
          'name' => 'required',
          'image'=>'',
          'alt' => 'required',
          'status' => 'required',
          
          ]);
            return $data;
    
        }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Traits\imageTrait;
use Carbon\Carbon;
use Illuminate\Support\Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{   
    use imageTrait;

    public function add(){
        $cat = Category::get()->all();
        return view('cd-admin.product.addproduct',compact('cat'));
    }

    public function view(){
        $test = DB::table('products')->get()->all();
        $er = Product::all();
        return view('cd-admin.product.viewproduct',compact('test','er'));
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
        
        DB::table('products')->Insert($final);
        Session::flash('success');
        return redirect('/product-view');

    }
    public function update($id){
        $test = DB::table('products')->where('id',$id)->get()->first();
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
         $data = DB::table('products')->where('id',$id)->update($replace);
    	 }
    	 else
    	 {
         $a['updated_at'] =Carbon::now('Asia/Kathmandu');
         $replace = array_replace($data,$a);
         
        DB::table('products')->where('id',$id)->update($replace);
   		 }
            Session::flash('updatesuccess');
        return redirect('/product-view');
    }
    public function deleteproduct($id){
        $test = DB::table('products')->where('id',$id)->get()->first();
	  if (file_exists('public/imageupload/'.$test->image)) 
	  {
	    unlink('public/imageupload/'.$test->image);
	   }
	  DB::table('products')->where('id',$id)->delete();
      Session::flash('deletesuccess');
      return redirect('product-view');
    }
    public function status($id){
        $a = [];
        $test = DB::table('products')->where('id',$id)->get()->first();
        if($test->status=='active')
        {
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active'; 
        }
        DB::table('products')->where('id',$id)->update($a);
        return redirect('/product-view');
    }
    

    
    public function validationform(){
        $data =  Request()->validate([
      'name' => 'required',
      'image'=>'mimes:jpg,jpeg,png',
      'description' => 'required',
      'alt' => '',
      'status' => 'required',
      'color' => '',
      'weight' => '',
      'size'=>'',
      'dimension' => '',
      'category'=>'',
      'subcategory'=>'',
      'price'=>'required',
      'review'=>'required',
      'arrival'=>'required',
      'regularprice'=>'required',
      ]);
        return $data;

    }
    public function validationupdate(){
        $data =  Request()->validate([
      'name' => 'required',
      'image'=>'mimes:jpg,jpeg,png',
      'description' => 'required',
      'alt' => '',
      'status' => 'required',
      'color' => '',
      'weight' => '',
      'size'=>'',
      'dimension' => '',
      'category'=>'',
      'subcategory'=>'',
      'price'=>'required',
      'review'=>'required',
      'arrival'=>'required',
      'regularprice'=>'required',
      ]);
        return $data;

    }
    
}

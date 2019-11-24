<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Traits\imageTrait;
use Session;
class Carousel extends Model
{
    protected $guarded =[];
    use imageTrait;
     public function store($set)
      {
      	$a=[];
      	$test = $this->insertimage($set['image']);
      	$a['image'] = $test;
            $a['created_at'] =Carbon::now('Asia/Kathmandu');
            $replace = array_replace($set,$a);
            DB::table('carousels')->Insert($replace);
            Session::flash('success');
      }
	public function remove($id)
  	{
    $test = DB::table('carousels')->where('id',$id)->get()->first();
      if (file_exists('imageupload/'.$test->image)) 
      {
        unlink('imageupload/'.$test->image);
       }
      DB::table('carousels')->where('id',$id)->delete();
      Session::flash('deletesuccess');
  	}

	public function insertcontrol()
	{
  		$request =Request()->all();
  		$data =  Request()->validate([
    	'name' => 'required',
    	'description' => 'required',
    	'image' => 'required|image',
    	'alt' => 'required',
    	'status' => 'required',
		]);
  		return $data;
	}
}
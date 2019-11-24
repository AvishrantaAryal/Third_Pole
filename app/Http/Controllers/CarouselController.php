<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use App\Traits\imageTrait;
use Illuminate\Support\Facades\DB;
class CarouselController extends Controller
{
    use imageTrait;
    public function add(){
        return view('cd-admin.carousel.addcarousel');
    }
    public function view(){
    	$carousel = DB::table('carousels')->get()->all();
    	$er = Carousel::all();
    	return view('cd-admin.carousel.carousel',compact('er','carousel'));
    }

    public function store(Carousel $c)
    {

        $set = $c->insertcontrol();
        $c->store($set);
        return redirect('/carousel-view');
    }
    public function delete($id,Carousel $p)
    {
    $p->remove($id);
    return redirect('/carousel-view');
    }


	public function statusupdate($id)
	{
	  $a = [];
	  $test = DB::table('carousels')->where('id',$id)->get()->first();
	    if($test->status=='active')
	        {
	            $a['status'] = 'inactive';
	        }
	    else
	        {
	            $a['status'] = 'active'; 
	        }
	    	DB::table('carousels')->where('id',$id)->update($a);
	    	return redirect('/carousel-view');
	    }
}



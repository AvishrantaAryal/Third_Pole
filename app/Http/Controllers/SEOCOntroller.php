<?php

namespace App\Http\Controllers;

use App\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SEOCOntroller extends Controller
{
    public function add(){
    	return view('cd-admin.seo.addseo');
    }
    public function view(){
         $er = App\seo::all();
    	$seo=DB::table('seos')->get();
    	return view('cd-admin.seo.viewseo',compact('seo','er'));
    }
    public function store(Seo $s){
    	$test = $s->validationinsert();
  		$s->store($test);
        return redirect('/view-seo');

    }
    public function edit($id)
    {
    $ser = Seo::where('id',$id)->get()->first();
     return view('cd-admin.seo.editseo',compact('ser'));
    
    }

    public function updateseo(Seo $p,$id)
     {
        $data = $p->validationupdate();
    
        $p->updateseo($data,$id);
        return redirect('/view-seo');

    }
    public function delete($id,Seo $p)
    {
    $p->remove($id);
    return redirect('/view-seo');
    }
}

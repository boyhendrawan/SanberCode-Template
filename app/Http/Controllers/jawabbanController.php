<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\jawabbanModel;
use App\Model\pertanyaanModel;

class jawabbanController extends Controller
{
    function index($id)
    {
    	$item=jawabbanModel::read($id);
        $file=pertanyaanModel::get_once($id);

    	return view('tugas2.index_jawabban',["items"=>$item,"file" =>$file]);
    }
    function create($id)
    {
    	$file=pertanyaanModel::get_once($id);

    	return view('tugas2.form_jawabban',compact("file"));
    }
    function store(Request $request)
    {
    	$data=$request->all();
        unset($data["_token"]);

        $id=$data['pertanyaan_id'];
        $data['created_at'] =now();
        $data['updated_at'] =now();
        $simpan=jawabbanModel::simpan($data);
      
    	if($simpan)
        {
            return redirect("/jawabban/$id")->with("jawabban","jawabban telah di tambah");
        }


    }
}

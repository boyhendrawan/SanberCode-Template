<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\pertanyaanModel;
class pertanyaanController extends Controller
{
    public function index()
    {
    	$items=pertanyaanModel::get_all();

    	return view('Tugas2.index_pertanyaan',["items"=>$items]);
    }
    public function create()
    {
    	return view('Tugas2.form_pertanyaan');
    }
    public function store(Request $request)
    {
    	// dd($request->all()); //untuk debuging
    	$data=$request->all();
		unset($data["_token"]);
		$items=pertanyaanModel::simpan($data);
		if($items)
		{
			return redirect('/pertanyaan');
		}
    }
}

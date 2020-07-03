<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\pertanyaanModel;
use App\Model\jawabbanModel;
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
        $data['created_at']=now();
        $data['updated_at']=now();
		$items=pertanyaanModel::simpan($data);

		if($items)
		{
			return redirect('/pertanyaan')->with('create_per',"pertanyaan telah di tambah");
		}
    }

    public function show($id)
    {
        $pertanyaan=pertanyaanModel::get_once($id);
        $jawabban=jawabbanModel::read($id);

        return view("tugas2.show",["pertanyaan" =>$pertanyaan,"jawabban"=>$jawabban]);

    }
    public function edit($id)
    {
         $pertanyaan=pertanyaanModel::get_once($id);
         return view('tugas2.edit',["items"=>$pertanyaan]);
    }
    public function update(Request $request,$id)
    {
        $data=$request->all();
        $data["updated_at"] =now();
        

        $items=pertanyaanModel::updates($id,$data);

        if($items)
        {
            return redirect('/pertanyaan')->with("update","pertanyaan telah di update");
        }
    }
    public function destroy($id)
    {  
        $delete=pertanyaanModel::destory($id);

        return redirect("/pertanyaan")->with("delete","pertanyaan beserta jawabban di hapus ");
    }
}

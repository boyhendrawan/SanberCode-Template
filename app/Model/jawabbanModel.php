<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class jawabbanModel extends Model
{
    const CREATED_AT='create_time';
    public static function read($id)
    {
    	$testing=DB::table('table_jawabban')->where('pertanyaan_id',$id)->orderBy('id','desc')->get();
    	return $testing;

    }
    public static function simpan($data)
    {
    	$save=DB::table("table_jawabban")->insert($data);
    	return $save;
    }
}	

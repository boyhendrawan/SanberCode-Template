<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class jawabbanModel extends Model
{
    public static function read($id)
    {
    	$testing=DB::table('table_jawabban')->where('pertanyaan_id',$id)->get();
    	return $testing;

    }
    public static function simpan($data)
    {
    	$save=DB::table("table_jawabban")->insert($data);
    	return $save;
    }
}	

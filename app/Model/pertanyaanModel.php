<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pertanyaanModel extends Model
{
    public static function get_all()
    {
    	$items=DB::table('table_pertanyaan')->get();
    	return $items;
    }

    public static function simpan($data)
    {
    	$new_item=DB::table('table_pertanyaan')->insert($data);
    	return $new_item;
    }

    public static function get_once($id)
    {
        $file=DB::table('table_pertanyaan')->where('id',$id)->first();
        return $file;
    }
}

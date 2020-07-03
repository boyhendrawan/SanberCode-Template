<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pertanyaanModel extends Model
{
    public $timestamps=true;
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
        $file=DB::table('table_pertanyaan')->where('id',$id)
                ->first();
        return $file;
    }
    public static function updates($id,$request)
    {
       
        $item=DB::table('table_pertanyaan')
                ->where('id',$id)
                ->update([
                    "judul"     => $request["judul"],
                    "isi"       => $request["isi"],
                    "updated_at"=> $request["updated_at"],
                ]);

                return $item;
    }
    public static function destory($id)
    {
        $delete=DB::table('table_pertanyaan')->where('id',$id)->delete();

        return $delete;
    }
}

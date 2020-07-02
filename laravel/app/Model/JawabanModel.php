<?php

namespace App\Model;
use Illuminate\Support\Facades\DB;

class JawabanModel{
    public static function get_all(){
        $jawaban = DB::table('balasan')->get();
        return $jawaban;
    }

    public static function get($id){
        $jawaban = DB::table('balasan')->where('balas_id','=',$id)->get();
        return $jawaban;
    }

    public static function save($data){
        $new_jawaban = DB::table('balasan')->insert($data);
        return $new_jawaban;
    }
}
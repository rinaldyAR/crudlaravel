<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\JawabanModel;

class JawabanController extends Controller
{
    public function index($id){
        $jawaban = JawabanModel::get($id);
        //dd($id);
        return view('jawaban', compact('jawaban'));
    }

    public function create($id){
        //dd($id);
        return view('createJawaban', compact('id'));
    }
    public function store(Request $request){
        //dd($request->all());
        $data = $request->all();
        unset($data['_token']); 
        $item = JawabanModel::save($data);
        //dd($item);Jawaban
    }
}

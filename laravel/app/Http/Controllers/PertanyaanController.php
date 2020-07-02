<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\PertanyaanModel;

class PertanyaanController extends Controller
{
    //
    public function index(){
        $pertanyaan = PertanyaanModel::get_all();
        //dd($pertanyaan);
        return view('index', compact('pertanyaan'));
    }

    public function create(){
        return view('createPertanyaan');
    }
    public function store(Request $request){
        //dd($request->all());
        $data = $request->all();
        unset($data['_token']); 
        $item = PertanyaanModel::save($data);
        //dd($item);
    }
}

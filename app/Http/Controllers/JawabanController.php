<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\jawabanModel;

class JawabanController extends Controller
{
    public function index(){
        $jawaban = JawabanModel::get_all();
        return view('jawaban.index', compact('jawaban'));
    }

    public function show($pertanyaan_id){
        $jawaban = JawabanModel::find_by_id($pertanyaan_id);
        return view('jawaban.show', compact('jawaban'));
    }
}

?>
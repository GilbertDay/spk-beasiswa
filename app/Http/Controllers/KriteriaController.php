<?php

namespace App\Http\Controllers;
use App\Models\Kriteria;
use App\Models\Subkriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index(){
        $data = Kriteria::all();
        $data_sub = Subkriteria::all();
        // dd($data_sub) where('kriteria_id',2)->get();
        return view ('kriteria',['kriteria'=>$data],['subkriteria'=>$data_sub]);
    }

    public function addSubKriteria(Request $req){
        $data_sub = new Subkriteria;
        $data_sub->kriteria_id = $req->kriteria_id;
        $data_sub->ket_kriteria = $req->ket_kriteria;
        $data_sub->nilai = $req->nilai;
        $data_sub->bobot = $req->bobot;
        $data_sub->atribut = $req->atribut;
        $data_sub->save();
        return redirect('/kriteria');
    }
}

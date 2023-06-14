<?php

namespace App\Http\Controllers;
use App\Models\View_Tabel_Keputusan;
use App\Models\View_Hasil;
use App\Models\View_Tabel_Normalisasi;

use Illuminate\Http\Request;

class perhitunganController extends Controller
{
    public function index(){
        $tabelKeputusan = View_Tabel_Keputusan::all();
        $tabelNormalisasi = View_Tabel_Normalisasi::all();
        $tabelHasil = View_Hasil::orderBy('hitungan','desc')->get();
        // dd($data_sub) where('kriteria_id',2)->get();
        return view ('perhitungan', compact('tabelKeputusan','tabelNormalisasi', 'tabelHasil'));
    }

}

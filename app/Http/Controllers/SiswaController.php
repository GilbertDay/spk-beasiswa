<?php

namespace App\Http\Controllers;
use App\Models\Kriteria;
use App\Models\Subkriteria;
use App\Models\Siswa;
use App\Models\View_Tabel_Keputusan;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        $siswa = View_Tabel_Keputusan::all();
        $nilai = Subkriteria::where('kriteria_id',1)->get();
        $penghasilan = Subkriteria::where('kriteria_id',2)->get();
        $tanggungan = Subkriteria::where('kriteria_id',3)->get();
        // dd($data_sub) where('kriteria_id',2)->get();
        return view ('addSiswa', compact('siswa','nilai', 'penghasilan','tanggungan'));
    }

    public function addSiswa(Request $req){
        $data_mhs = new Siswa;
        $data_mhs->NISN = $req->NISN;
        $data_mhs->nama_siswa = $req->nama_siswa;
        $data_mhs->gender = $req->gender;
        $data_mhs->no_hp = $req->no_hp;
        $data_mhs->nilai_raport = $req->nilai_raport;
        $data_mhs->penghasilan = $req->penghasilan;
        $data_mhs->tanggungan = $req->tanggungan;
        $data_mhs->save();
        return redirect('/');
    }
}

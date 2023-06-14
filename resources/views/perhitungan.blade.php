@extends('layout.app');
@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card corona-gradient-card">
            <div class="card-body py-4 px-0 px-sm-3">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                    <h3 class="mb-1 mb-sm-0 text-center">Selamat Datang Di Website</h3>
                    <h3 class="mb-1 mb-sm-0 text-center">Sistem Pendukung Keputusan Beasiswa</h3>
                    <h5 class="mb-1 mb-sm-0 text-center">Metode SAW</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
            <div class="card-body text">
                <h4 class="card-title">Tabel Keputusan</h4>
                <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                    <tr>
                        <th> NISN </th>
                        <th> Nilai Raport </th>
                        <th> Penghasilan </th>
                        <th> Tanggungan </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tabelKeputusan as $data)
                        <tr class="text-light">
                            <td> {{$data['NISN']}} </td>
                            <td> {{$data['nilai_raport']}} </td>
                            <td> {{$data['penghasilan']}} </td>
                            <td> {{$data['tanggungan']}} </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>

    <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
            <div class="card-body text">
                <h4 class="card-title">Tabel Normalisasi</h4>
                <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                    <tr>
                        <th> NISN </th>
                        <th> Nilai Raport </th>
                        <th> Penghasilan </th>
                        <th> Tanggungan </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tabelNormalisasi as $data)
                        <tr class="text-light">
                            <td> {{$data['NISN']}} </td>
                            <td> {{$data['raport']}} </td>
                            <td> {{$data['penghasilan']}} </td>
                            <td> {{$data['tanggungan']}} </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body text">
                <h4 class="card-title">Hasil Perhitungan</h4>
                <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                    <tr>
                        <th> NISN </th>
                        <th> Nama Siswa </th>
                        <th> Hasil </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tabelHasil as $data)
                        <tr class="text-light">
                            <td> {{$data['NISN']}} </td>
                            <td> {{$data['nama_siswa']}} </td>
                            <td> {{$data['hitungan']}} </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

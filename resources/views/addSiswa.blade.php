@extends('layout.app');
@section('content')
    <!-- Form -->
    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title text-center">Tambah Data Mahasiswa</h4>
                <p class="card-description">Biodata</p>
                <form action="/addSiswa" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NISN</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control text-light" name="NISN" placeholder="NISN">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control text-light" name="nama_siswa" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group row text-light">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Gender</label>
                        <div class="col-sm-9">
                            <select class="form-control text-light" name="gender">
                                <option>Pria</option>
                                <option>Wanita</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">No Hp</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control text-light" name="no_hp" placeholder="Nomor Handphone">
                        </div>
                    </div>

                    <p class="card-description">Kriteria</p>
                    <div class="form-group row text-light">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Nilai Raport</label>
                        <div class="col-sm-9">
                            <select class="form-control text-light" name="nilai_raport">
                            @foreach($nilai as $data)
                                <option value="{{$data['id_subkriteria']}}">{{$data['ket_kriteria']}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row text-light">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Penghasilan</label>
                        <div class="col-sm-9">
                            <select class="form-control text-light" name="penghasilan">
                            @foreach($penghasilan as $data)
                                <option value="{{$data['id_subkriteria']}}">{{$data['ket_kriteria']}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row text-light">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Tanggungan Anak</label>
                        <div class="col-sm-9">
                            <select class="form-control text-light" name="tanggungan">
                            @foreach($tanggungan as $data)
                                <option value="{{$data['id_subkriteria']}}">{{$data['ket_kriteria']}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
                </div>
            </div>
        </div>
        <!-- Sebelah -->
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body text">
                    <h4 class="card-title">Data Mahasiswa</h4>
                    <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                        <tr>
                            <th> NISN </th>
                            <th> Nama </th>
                            <th> Gender </th>
                            <th> No Telp </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($siswa as $data)
                        <tr class="text-light">
                            <td> {{$data['NISN']}} </td>
                            <td> {{$data['nama_siswa']}} </td>
                            <td> {{$data['gender']}} </td>
                            <td> {{$data['no_hp']}} </td>
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

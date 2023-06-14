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
      <!-- Form -->
      <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title text-center">Kriteria</h4>
              <form action="/addKriteria" method="POST">
                @csrf
                  <div class="form-group row text-light">
                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Jenis Kriteria</label>
                    <div class="col-sm-9">
                        <select class="form-control text-light" name="kriteria_id">
                            @foreach($kriteria as $data)
                            <option value="{{$data['kriteria_id']}}">{{$data['nama_kriteria']}}</option>
                            @endforeach
                          </select>
                    </div>
                  </div>
                  <div class="form-group row text-light">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nilai</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control text-light" name="nilai" placeholder="Nilai">
                    </div>
                  </div>
                  <div class="form-group row text-light">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Keterangan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control text-light" name="ket_kriteria" placeholder="Keterangan">
                    </div>
                  </div>
                  <div class="form-group row text-light">
                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Bobot</label>
                    <div class="col-sm-9">
                      <input type="number" step="any" class="form-control text-light" name="bobot" placeholder="Bobot / 100">
                    </div>
                  </div>
                  <div class="form-group row text-light">
                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Atribut</label>
                    <div class="col-sm-9">
                        <select class="form-control text-light" name="atribut">
                            <option value="Benefit">Benefit</option>
                            <option value="Cost">Cost</option>
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
                <div class="card-body">
                  <h4 class="card-title">Daftar Kriteria</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                          <tr>
                            <th> Kriteria </th>
                            <th> Keterangan </th>
                            <th> Nilai </th>
                            <th> Bobot </th>
                            <th> Atribut </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($subkriteria as $data)
                        <tr>
                            <td> {{$data['kriteria_id']}} </td>
                            <td> {{$data['ket_kriteria']}} </td>
                            <td> {{$data['nilai']}} </td>
                            <td> {{$data['bobot']}} </td>
                            <td> {{$data['atribut']}} </td>
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

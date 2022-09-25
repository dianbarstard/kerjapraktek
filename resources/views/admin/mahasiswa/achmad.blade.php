@extends('layouts.admin')

@section('content') 

<div class="content">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Wali</h3>

                <div class="card-tools">
                    <form action="/mahasiswa/search" class="form-inline" method="GET">
                    <input type="search" name="search" class="form-control float-right" placeholder="Isikan Nama">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Tanggal</th>
                      <th>Materi</th>
                      <th>Lokasi</th>
                      <th>Lokasi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($mahasiswa as $mahasiswa)
                    <tr>
                      <td>{{$mahasiswa->no}}</td>
                      <td>{{$mahasiswa->nama}}</td>
                      <td>{{$mahasiswa->tanggal}}</td>
                      <td>{{$mahasiswa->materi}}</td>
                      <td>{{$mahasiswa->lokasi}}</td>
                      <td>{{$mahasiswa->achmad['lokasi']}}</td>
                     
                    </tr>  
                    @endforeach
                               
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection
</div>
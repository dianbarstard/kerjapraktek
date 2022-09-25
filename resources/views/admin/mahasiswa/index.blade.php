@extends('layouts.admin')

@section('content') 


<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Portal Berita Tahun 2021</h3>&nbsp;
                <a href="/mahasiswa/create" class="btn btn-primary"><i class="nav-icon fas fa-plus"></i>&nbsp Tambah Data</a>
                <a href="{{url('/downloadpdf')}}" target="_blank" class="btn btn-info btn-md">Download PDF</a>
                
                <div class="card-tools">
                    <form action="/mahasiswa/search" class="form-inline" method="GET">
                    <input type="search" name="search" class="form-control float-right" placeholder="Isikan Tanggal">

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
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Nama</th>
                      <th>Tanggal Siaran</th>
                      <th>Materi Liputan</th>
                      <th>Lokasi</th>
                      <th>Aksi</th>
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
                      <td> <a href="/mahasiswa/{{$mahasiswa->id}}/delete" class="btn btn-danger" onclick="return confirm('Apakah Yakin Dihapus ? {{$mahasiswa->no}}')"><i class="nav-icon fas fa-trash"></i>&nbsp Hapus</a> 
                      <a href="/mahasiswa/{{$mahasiswa->id}}/edit" class="btn btn-warning"><i class="nav-icon fas fa-pen"></i>&nbsp Edit</a>  
                      </td>
                      
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
@extends('layouts.admin')

@section('content') 


<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Abby Aditya September 2021</h3>&nbsp;
                <a href="absep21/create" class="btn btn-primary"><i class="nav-icon fas fa-plus"></i>&nbsp Tambah Data</a>
                <a href="{{url('/absep21pdf')}}" target="_blank" class="btn btn-info btn-md">Download PDF</a>
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
                    @foreach ($absep21 as $absep21)
                    <tr>
                      <td>{{$absep21->no}}</td>
                      <td>{{$absep21->nama}}</td>
                      <td>{{$absep21->tanggal}}</td>
                      <td>{{$absep21->materi}}</td>
                      <td>{{$absep21->lokasi}}</td>
                      <td> <a href="/absep21/{{$absep21->id}}/delete" class="btn btn-danger" onclick="return confirm('Apakah Yakin Dihapus ? {{$absep21->no}}')"><i class="nav-icon fas fa-trash"></i>&nbsp Hapus</a> 
                      <a href="/absep21/{{$absep21->id}}/edit" class="btn btn-warning"><i class="nav-icon fas fa-pen"></i>&nbsp Edit</a>  
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
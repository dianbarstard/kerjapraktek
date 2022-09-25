@extends('layouts.admin')

@section('content') 

<div class="content">
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Portal Berita</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/absep21/{{$absep21->id}}/update" method="POST">
                  {{csrf_field()}}
                  
                <div class="card-body">
                    <div class="form-group">
                        <label for="no">No</label>
                        <input type="text" class="form-control" name="no" id="exampleInputEmail1" placeholder="No" value="{{$absep21->no}}">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Nama" value="{{$absep21->nama}}">
                    </div>

                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="text" class="form-control" name="tanggal" id="exampleInputEmail1" placeholder="Tanggal Materi" value="{{$absep21->tanggal}}">
                    </div>

                    <label for="materi" class="form-label">Materi</label>
                      <div class="form-floating">
                          <textarea name="materi" id="floatingTextArea" class="form-control">{{$absep21->materi}}</textarea>
                      </div>
                    
                    <div class="form-group">
                      <label for="lokasi">Lokasi</label>
                      <input type="text" class="form-control" name="lokasi" id="exampleInputEmail1" placeholder="Lokasi" value="{{$absep21->lokasi}}">
                    </div>

                </div>
                <!-- /.card-body -->
              </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Update</button>
                </div>
</div>
              </form>
            </div>
@endsection
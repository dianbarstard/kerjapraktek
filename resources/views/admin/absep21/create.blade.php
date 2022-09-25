@extends('layouts.admin')

@section('content') 

<div class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Portal Berita</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/absep21/store')}}" method="POST">
                  {{csrf_field()}}
                  
                <div class="card-body">
                    <div class="form-group">
                        <label for="no">No</label>
                        <input type="text" class="form-control" name="no" id="exampleInputEmail1" placeholder="No">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Nama">
                    </div>

                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="text" class="form-control" name="tanggal" id="exampleInputEmail1" placeholder="Tanggal Materi">
                    </div>

                    <label for="materi" class="form-label">Materi</label>
                      <div class="form-floating">
                          <textarea name="materi" id="floatingTextArea" class="form-control" ></textarea>
                      </div>

                    <div class="form-group">
                      <label for="lokasi">Lokasi</label>
                      <input type="text" class="form-control" name="lokasi" id="exampleInputEmail1" placeholder="Lokasi">
                    </div>

                </div>
                <!-- /.card-body -->
              </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
</div>
              </form>
            </div>
@endsection
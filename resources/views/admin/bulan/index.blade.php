@extends('layouts.admin')

@section('content')

<div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <ul class="pagination pagination-month justify-content-center">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item active">
                      <a class="page-link" href="#">
                          <p class="page-month">Januari</p>
                          <p class="page-year">2020</p>
                      </a>
                  </li>

                  <li class="page-item">
                      <a class="page-link" href="#">
                          <p class="page-month">Februari</p>
                          <p class="page-year">2020</p>
                      </a>
                  </li>
                
                  <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/perbulan">»</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!-- END TYPOGRAPHY -->
      </div><!-- /.container-fluid -->
    </section>

@endsection
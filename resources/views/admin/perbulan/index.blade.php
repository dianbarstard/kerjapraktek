@extends('layouts.admin')

@section('content')

<div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <ul class="pagination pagination-month justify-content-center">
                  <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/bulan">«</a></li>
                  <li class="page-item active">
                      <a class="page-link" href="#">
                          <p class="page-month">Maret</p>
                          <p class="page-year">2020</p>
                      </a>
                  </li>

                  <li class="page-item">
                      <a class="page-link" href="#">
                          <p class="page-month">April</p>
                          <p class="page-year">2020</p>
                      </a>
                  </li>
                
                  <li class="page-item active">
                      <a class="page-link" href="http://127.0.0.1:8000/absep21">
                          <p class="page-month">September</p>
                          <p class="page-year">2021</p>
                      </a>
                  </li>

                  <li class="page-item">
                      <a class="page-link" href="#">
                          <p class="page-month">Oktober</p>
                          <p class="page-year">2021</p>
                      </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
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
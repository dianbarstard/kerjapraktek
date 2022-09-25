@extends('layouts.admin')

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{asset('AdminLTE-3.1.0/dist/img/LOGOTVRIJABAR.png')}}" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">TVRI JAWA BARAT</h3>

                <p class="text-muted text-center">Didirikan Pada Tanggal 11 Maret 1987</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Portal Berita</b> <a href="https://tvrinews.com/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </li>

                  <li class="list-group-item">
                    <b>Situs Web</b> <a href="https://www.tvrijabar.co.id/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </li>

                  <li class="list-group-item">
                    <b>Sejarang TVRI Jawa Barat</b> <a href="https://id.wikipedia.org/wiki/TVRI_Jawa_Barat#:~:text=TVRI%20Jawa%20Barat%20didirikan%20pada,acara%20berita%20daerah%20khas%20TVRI.&text=Pada%20tahun%202003%2C%20TVRI%20Bandung%20mulai%20beroperasi%20secara%20normal." class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </li>
                  
                </ul>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tetang Kami</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <strong><i class="fas fa-tv mr-1"></i> Saluran</strong>
              <p class="text-muted">
              Analog: 6 VHF/40 UHF<br>Digital: 35 UHF<br>Virtual: 2
              </p>

              <hr>

              <strong><i class="fas fa-tv mr-1"></i> Branding</strong>
              <p class="text-muted">
              TVRI Jabar (alternatif)
              </p>

              <hr>

              <strong><i class="fas fa-hands mr-1"></i> Slogan</strong>
              <p class="text-muted">
              Sobat Urang Sararea (Sahabat Kita Semua)
              </p>

              <hr>

              <strong><i class="fas fa-language mr-1"></i> Bahasa</strong>
              <p class="text-muted">
              Bahasa Indonesia<br>Bahasa Sunda
              </p>

              <hr>

              <strong><i class="fas fa-tv mr-1"></i> Afiliasi</strong>
              <p class="text-muted">
              TVRI Nasional
              </p>

              <hr>

              <strong><i class="fas fa-user mr-1"></i> Pemilik</strong>
              <p class="text-muted">
              LPP Nasional
              </p>

              <hr>

              <strong><i class="fas fa-podcast mr-1"></i> Siaran Perdana</strong>
              <p class="text-muted">
              11 Maret 1987; 34 tahun lalu
              </p>

              <hr>

              <strong><i class="fas fa-book mr-1 "></i> Berkas Tanda Panggil</strong>
              <p class="text-muted">
              TVRI Bandung (1987-2003)<br>TVRI Jabar & Banten (2003-2007)
              </p>

              <hr>

              <strong><i class="fas fa-map-marker-alt mr-1"></i> Lokasi</strong>
              <p class="text-muted">Jl. Raya Cibaduyut 269 Bandung, Jawa Barat</p>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        
                      </div>
                      <!-- /.user-block -->
                      <p>

                          <h3><b>Program Acara TVRI Jawa Barat</b></h3><br>
                              <li><b>Berita</b></li>
                                  <ul>
                                    <li>Berita Daerah (1987-2001)</li>
                                    <li>Kanal 6 (2001-2002), diberi nama "Kanal 6" karena hadir pada pukul 18.00 dan saat itu TVRI Bandung memiliki saluran pada frekuensi 6 VHF</li>
                                    <li>Berita Regional (2002-2007), mulai ditayangkan pada pukul 15.30</li>
                                    <li>Jabar dalam Berita (2008-2019)</li>
                                    <li>Jawa Barat Hari Ini (2019-sekarang)</li>
                                    <li>Berita Basa Sunda (2004-2009), program berita berbahasa Sunda yang ditayangkan selama 15 menit pada awal mengudara siaran TVRI Jawa Barat<br>Kalawarta (2009-sekarang), menggantikan nama Berita Basa Sunda</li>
                                  </ul>
                                
                              <li><b>Hiburan</b></li>
                                  <ul>
                                    <li>Bruk Brak, program talkshow yang bekerjasama dengan Harian Umum Pikiran Rakyat</li>
                                    <li>Jalan-Jalan ka Desa</li>
                                  </ul>

                                  <li><b>Dokter Kita</b></li>
                                  <li><b>Bilik Konsultasi</b></li>
                                  <li><b>Bilik Konsultasi</b></li>
                                  <li><b>Wayang Golek</b></li>
                                  <li><b>Cianjuran</b></li>
                                  <li><b>Dunia Anak</b></li>
                                  <li><b>Kandaga</b></li>
                                  <li><b>Cahaya Kalbu</b></li>
                                  <li><b>Ngaji Yoo</b></li>
                                  <li><b>Info Tani</b></li>
                                  <li><b>Sang Kreator</b></li>
                                  <li><b>Pangeran Biru</b></li>
                                  <li><b>Kabar Olahraga</b></li>

                          <br>

                          <h3><b>Penyiar</b></h3>
                          <b>Jawa Barat Hari Ini</b>
                                  <ul>
                                    <li>Tegar Bestari</li>
                                    <li>Hanifa Paramitha</li>
                                    <li>Lorenzo Mukuan</li>
                                    <li>Erza Nabila</li>
                                    <li>Gumelar Wijaya</li>
                                  </ul>
                          
                          <b>Kalawarta</b>
                                  <ul>
                                    <li>Fredericko Sinatria</li>
                                    <li>Hilmie Azizi</li>
                                    <li>Amelia Putri</li>
                                    <li>Andin Wijaya</li>
                                    <li>Reiner Ekadiredja</li>
                                  </ul>

                      </p>
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                          <h3><b>Galeri Logo</b></h3>
                      </div>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="{{asset('AdminLTE-3.1.0/dist/img/1.jpg')}}" alt="Photo">
                          <img class="img-fluid" src="{{asset('AdminLTE-3.1.0/dist/img/2.jpg')}}" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="{{asset('AdminLTE-3.1.0/dist/img/3.jpg')}}" alt="Photo">
                              <img class="img-fluid" src="{{asset('AdminLTE-3.1.0/dist/img/4.jpg')}}" alt="Photo">
                              <img class="img-fluid" src="{{asset('AdminLTE-3.1.0/dist/img/5.jpg')}}" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="{{asset('AdminLTE-3.1.0/dist/img/6.jpg')}}" alt="Photo">
                              <img class="img-fluid" src="{{asset('AdminLTE-3.1.0/dist/img/7.jpg')}}" alt="Photo">
                              <img class="img-fluid" src="{{asset('AdminLTE-3.1.0/dist/img/8.jpg')}}" alt="Photo">
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      
                    </div>
                    <!-- /.post -->

                  
</section>

@endsection
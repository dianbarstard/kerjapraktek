<div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Nama</th>
                      <th>Tanggal Siaran</th>
                      <th>Materi Liputan</th>
                      <th>Lokasi</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($karyawan as $karyawan)
                    <tr>
                      <td>{{$karyawan->no}}</td>
                      <td>{{$karyawan->nama}}</td>
                      <td>{{$karyawan->tanggal}}</td>
                      <td>{{$karyawan->materi}}</td>
                      <td>{{$karyawan->lokasi}}</td>
                      
                      
                    </tr>  
                    @endforeach
                               
                  </tbody>
                </table>
              </div>
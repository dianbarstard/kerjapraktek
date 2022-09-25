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
                    @foreach ($mahasiswa as $mahasiswa)
                    <tr>
                      <td>{{$mahasiswa->no}}</td>
                      <td>{{$mahasiswa->nama}}</td>
                      <td>{{$mahasiswa->tanggal}}</td>
                      <td>{{$mahasiswa->materi}}</td>
                      <td>{{$mahasiswa->lokasi}}</td>
                      
                      
                    </tr>  
                    @endforeach
                               
                  </tbody>
                </table>
              </div>
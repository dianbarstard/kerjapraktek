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
                    @foreach ($absep21 as $absep21)
                    <tr>
                      <td>{{$absep21->no}}</td>
                      <td>{{$absep21->nama}}</td>
                      <td>{{$absep21->tanggal}}</td>
                      <td>{{$absep21->materi}}</td>
                      <td>{{$absep21->lokasi}}</td>
                      
                      
                    </tr>  
                    @endforeach
                               
                  </tbody>
                </table>
              </div>
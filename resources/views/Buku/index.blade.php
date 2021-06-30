<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

    <h2 class="text-center">Aplikasi Data Pegawai</h2>
    <p class="font-weight-light text-center">ZULFA ROHMAWATI MAYASARI (18090053)</p>

   <div class="container mt-3">
    
   <a href="{{route('buku.create')}}" class="btn btn-warning mb-2">Tambah</a>
    <a href="{{route('buku.cetak')}}" target="_blank" class="btn btn-success mb-2">Cetak</a>
    
   
   
    <table class="table table-striped ">
        <thead class="thead-danger">
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Gambar Pegawai</th>
            <th scope="col">NIP</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Alamat</th>
           <th scope="col">Actions</th>

          </tr>
        </thead>
        <tbody>
            @php
                $nomor=1;
            @endphp
            @forelse ($bukus as $buku)
            <tr>
                <th scope="row">{{$nomor++}}</th>
                <!-- <td>{{$buku->gambar}}</td> -->
                <td>
                    <!-- <a href="{{asset('img/'.$buku -> gambar)}}" target="_blank" rel="nooper noreferrer">Lihat Gambar</a> -->
                    <img src="{{$buku -> gambar}}" height="80px" width="100px" alt="" srcset="">
                </td>
                <td>{{$buku -> nip}}</td>
                <td>{{$buku -> nama}}</td>
                <td>{{$buku -> alamat}}</td>
                
                <td>
                    
                    <form action="{{route('buku.destroy',$buku->id)}}" method='POST'>
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                    <a type="button" href="{{route('buku.edit',$buku->id)}}" class="btn btn-warning">Edit</a>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
              </tr>

              @empty
              <tr>
              <td colspan="6" class="text-center">Tidak ada data</td>
              </tr>
                
            @endforelse
        </tbody>
      </table>
      <form action="{{ route('logout') }}" method="POST">
    @csrf
    
    <button type="submit" margin-left="50px" class="btn btn-danger mb-2">LOGOUT</button>

    </form>
    </div>
    
    
</body>
</html>
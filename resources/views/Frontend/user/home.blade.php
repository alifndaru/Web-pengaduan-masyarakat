<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Pengaduan page</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{route('home')}}">Laporkan</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('buat-laporan')}}">Laporan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li>
              {{-- <p>{{}}</p> --}}
            </li>
          </ul>
        </div>
      </div>
    </nav>
      
    </nav>
    <div class="card mt-5 m-5">
      <div class="card-header">
        Masukan laporan kamu
      </div>
      <form action="{{route('laporkan')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <div class="mb-3">
            <input type="hidden" name="user_nik">
            <label for="exampleFormControlTextarea1" class="form-label">Nama</label>
            <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Isi laporan</label>
            <textarea class="form-control" value="{{old('description')}}"  name="description"  id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="input-group mb-3 p-1">
            <input type="file" value="{{ old('image')}}" name="image" class="form-control" id="inputGroupFile01" required/>
          </div>
          <button class="btn btn-primary">Laporkan</button>
        </div>
      </form>
    </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>
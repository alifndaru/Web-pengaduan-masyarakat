<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div>
    <h6>Laporan Pengaduan</h6>
    <h6>{{ $pengaduan->created_at->format('l, d F Y') }}</h6>
  </div>
  <hr class="solid">
    
    <div class="mt-3 mb-3">
      <h6>Nama : {{ $pengaduan->name }}</h6>
      <h6>NIK : {{ $pengaduan->user_nik }}</h6>      
      <h6>No. Telepon : {{ $pengaduan->user->phone }}</h6>      
    </div>
    <table class="table table-bordered">
      <thead class="thead">
        <tr>
          <th scope="col">Laporan Pengaduan</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <td>{{ $pengaduan->description }}</td>
        <td>{{ $pengaduan->status }}</td>
      </tbody>
    </table>
</body>
</html>
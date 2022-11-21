@extends('Backend.layouts.app')
@section('content')
<section class="section">
  <div class="section-header">
    <h3>Detail pengaduan</h3>
  </div>
  <div>
    {{-- <button type="button" class="btn btn-primary mb-3">Eksport pdf</button> --}}
    <a href="{{route('cetak', $items->id_tanggapan)}}"><button type="button" class="btn btn-primary mb-3">Eksport PDF</button></a>
  </div>
  <div class="card">
    <div class="card-header">
      Informasi pembuat laporan
    </div>
    @foreach ($items->details as $item) 
      <div class="card-body">
        <h6 class="card-title">Nama pembuat pengaduan : {{$item->name}}</h6>
        <h6 class="card-title">Nik : {{$item->user_nik}}</h6>
        <h6 class="card-title">No.tlp : {{$items->user->phone}} </h6>
        <h6 class="card-title">Tanggal : {{$item->created_at->format('l, d F Y - H:i:s') }} </h6>
        <h6 class="card-title">Status :
           @if ($items->status == 'belum diproses')
           <button type="button" class="btn btn-sm btn-danger ml-2" disabled>{{$items->status}}</button>
          @elseif($items->status == 'sedang diproses')
            <button type="button" class="btn btn-sm btn-warning ml-2" disabled>{{$items->status}}</button>
          @else
            <button type="button" class="btn btn-sm btn-primary ml-2" disabled>{{$items->status}}</button>
          @endif
        </h6>
        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        Penjelasan
      </div>
      <div class="card-body">
        <h6 class="card-title">Foto</h6>
        <img src="{{$items->image}}" alt="">
        <h6 class="card-title mb-3">Keterangan</h6>
        <p>{{$items->description}}</p>
      </div>
    </div>
    @endforeach
    
   

  <div class="card">
    <div class="card-body">
      <h6 class="card-title mb-4">Tanggapan</h6>
       @if (empty($tanggapan->tanggapan))
          Belum ada tanggapan
        @else
          <p>{{$tanggapan->tanggapan}}</p>
        @endif
    </div>
  </div>

  <a href="{{route('tanggapan.show', $items->id_tanggapan)}}"><button type="button" class="btn btn-xl btn-primary">Berikan tanggapan</button></a>
  
</section>
@endsection
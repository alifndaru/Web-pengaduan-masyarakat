@extends('Backend.layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
          <h3>Berikan tanggapan</h3>
        </div>
        <div>
          <form method="POST" enctype="multipart/form-data" action="{{  route('tanggapan.store') }}">
            @csrf
            <div class="card">
                <div class="card-header">
                  <h4>Tanggapan</h4>
                </div>
                <div class="card-body">
                <div class="form-group">
                  <input type="hidden" name="id_pengaduan" value="{{ $item->id_pengaduan }} ">
                  <label>isi Tanggapan</label>
                  <textarea class="form-control" name="tanggapan" value="{{old('description')}}"></textarea>
                </div>
                <div class="form-group">
                  <label>Petugas</label>
                  <select  name="user_nik">
                    @foreach ($item->petugas as $data)
                      <option value="{{$data->user_nik}}">{{$data->user_nik}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>status</label>
                  <select name="status" class="form-control">
                    <option>Belum diproses</option>
                    <option>Sedang diproses</option>
                    <option>selesai</option>
                  </select>
                </div>
                <button class="btn btn-sm btn-primary">tanggapi</button>
              </div>
            </div>
          </form>
        </div>
    </section>
@endsection
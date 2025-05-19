@extends('layout/app')
@section('content')

<form action="{{ url('siswa/' . $data->nisn) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-header py-3">
    <h2>Ubah Data</h2>
</div>
<div class="card-body">
    <div class="form-group">
    <div class="mb-3">
  <label for="nisn" class="form-label"></label>
  <input type="text" class="form-control" name="nisn" placeholder="NISN" value="{{$data->nisn}}">
</div>
<div class="mb-3">
  <label for="nama_siswa" class="form-label"></label>
  <input type="text" class="form-control" name="nama_siswa" placeholder="Nama" value="{{$data->nama_siswa}}">
</div>
    <div class="mb-3">
  <label for="kelas" class="form-label"></label>
  <input type="text" class="form-control" name="kelas" placeholder="Kelas" value="{{$data->kelas}}">
</div>
<div class="mb-3">
  <label for="email" class="form-label"></label>
  <input type="text" class="form-control" name="email" placeholder="Email" value="{{$data->email}}">
</div>
<div class="mb-3">
  <label for="no_hp" class="form-label"></label>
  <input type="string" class="form-control" name="no_hp" placeholder="Nomor Telepon" value="{{$data->no_hp}}">
</div>
            <div class="card-footer"></div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
</div>
</div>
</form>
@endsection
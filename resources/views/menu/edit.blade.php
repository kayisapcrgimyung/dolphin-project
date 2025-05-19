@extends('layout/app')
@section('content')

<form action="{{url('menu/'.$data->kodemapel)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-header py-3">
    <h2>Ubah Data</h2>
</div>
<div class="card-body">
    <div class="form-group">
    <div class="mb-3">
  <label for="nama_mapel" class="form-label"></label>
  <input type="text" class="form-control" name="nama_mapel" placeholder="Mata Pelajaran" value="{{$data->nama_mapel}}">
</div>
<div class="mb-3">
  <label for="nama_tugas" class="form-label"></label>
  <input type="text" class="form-control" name="nama_tugas" placeholder="Nama Tugas" value="{{$data->nama_tugas}}">
</div>
<div class="mb-3">
  <label for="nilai" class="form-label"></label>
  <input type="text" class="form-control" name="nilai" placeholder="Nilai" value="{{$data->nilai}}">
</div>
  <div class="card-footer"></div>
        <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
</div>
</form>
@endsection
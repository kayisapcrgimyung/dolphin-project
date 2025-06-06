@extends('layout/app')
@section('content')

<form action="{{route('guru.store')}}" method="POST">
    @csrf
    <div class="card-header py-3">
    <h2>Tambah Data</h2>
</div>
<div class="card-body">
    <div class="form-group">
    <div class="mb-3">
  <label for="nip" class="form-label"></label>
  <input type="text" class="form-control" name="nip" placeholder="NIP" value="{{old('nip')}}">
</div>
<div class="mb-3">
  <label for="nama_guru" class="form-label"></label>
  <input type="text" class="form-control" name="nama_guru" placeholder="Nama Guru" value="{{old('nama_guru')}}">
</div>
    <div class="mb-3">
  <label for="mata_pelajaran" class="form-label"></label>
  <input type="text" class="form-control" name="mata_pelajaran" placeholder="Mata Pelajaran" value="{{old('mata_pelajaran')}}">
</div>
<div class="mb-3">
  <label for="email" class="form-label"></label>
  <input type="text" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
</div>
<div class="mb-3">
  <label for="no_hp" class="form-label"></label>
  <input type="text" class="form-control" name="no_hp" placeholder="Nomor Telepon" value="{{old('no_hp')}}">
</div>
            <div class="card-footer"></div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
</div>
</div>
</form>
@endsection
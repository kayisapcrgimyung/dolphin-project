@extends('layout/app')

@section('content')

<form action="{{ url('tugas/' .$data->kodemapel) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="card-header py-3">
        <h2>Tambah Data</h2>
    </div>

    <div class="card-body">
        <div class="form-group">
            <!-- Input Nama Mapel -->
            <div class="mb-3">
                <label for="nama_mapel" class="form-label"></label>
                <input type="text" class="form-control" name="nama_mapel" placeholder="Nama Mapel" value="{{ $data->nama_mapel}}">
            </div>

            <!-- Input Nama Tugas -->
            <div class="mb-3">
                <label for="nama_tugas" class="form-label"></label>
                <input type="text" class="form-control" name="nama_tugas" placeholder="Nama Tugas" value="{{ $data->nama_tugas}}">
            </div>

            <!-- Input Tenggat Waktu -->
            <div class="mb-3">
                <label for="tempo" class="form-label"></label>
                <input type="date" class="form-control" name="tempo" value="{{ $data->tempo }}">
            </div>

            <!-- Pilihan Status Pengerjaan -->
            <div class="mb-3">
                <label for="pengerjaan" class="form-label"></label>
                <select name="pengerjaan" class="form-control">
  <option value="Belum Selesai">Belum Selesai</option>
  <option value="Dalam Pengerjaan">Dalam Pengerjaan</option>
  <option value="Selesai">Selesai</option>
</select>

            </div>
        </div>
    </div>

    <!-- Tombol Submit -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection

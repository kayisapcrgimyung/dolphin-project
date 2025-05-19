@extends('layout/app')

@section('content')

@if(session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
@endif

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="page-title">
                            Tugas
                        </div>
                    </div>
                    <div class="col-sm-6 text-sm-right">
                        <div class="mt-sm-0 mt-2">
                            <button class="btn btn-outline-primary mr-2">
                                <img src="assets/img/excel.png" alt="">
                                <span class="ml-2">Excel</span>
                            </button>
                            <button class="btn btn-outline-danger mr-2">
                                <img src="assets/img/pdf.png" alt="" height="18">
                                <span class="ml-2">PDF</span>
                            </button>
                            <button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <a class="btn btn-primary mb-3" href="{{ route('tugas.create') }}">Tambah Data</a>
                <div class="table-responsive">
                    <table class="table custom-table">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Mata Pelajaran</th>
                                <th>Nama Tugas</th>
                                <th>Tenggat Watu</th>
                                <th>Pengerjaan</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            @foreach($tugas as $tugasItem)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $tugasItem->nama_mapel }}</td>
                                    <td>{{ $tugasItem->nama_tugas }}</td>
                                    <td>{{ $tugasItem->tempo }}</td>
                                    <td>{{ $tugasItem->pengerjaan }}</td>
                                    <td class="text-right">
                                        <a href="{{ url('tugas/' . $tugasItem->kodemapel . '/edit') }}" class="btn btn-primary btn-sm mb-1">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <form action="{{ url('tugas/' . $tugasItem->kodemapel) }}" method="POST" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm mb-1" onclick="return confirm('Apakah Anda Ingin Menghapus Data?')">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>       
</div>

@endsection

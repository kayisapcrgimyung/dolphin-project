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
                            Daftar Pengumpulan Tugas
                        </div>
                    </div>
                    <div class="col-sm-6 text-sm-right">
                        <div class="mt-sm-0 mt-2">
                            <button class="btn btn-outline-primary mr-2">
                                <img src="{{ asset('assets/img/excel.png') }}" alt="">
                                <span class="ml-2">Excel</span>
                            </button>
                            <button class="btn btn-outline-danger mr-2">
                                <img src="{{ asset('assets/img/pdf.png') }}" alt="" height="18">
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
                {{-- Tambahkan tombol tambah data jika diperlukan --}}
                {{-- <a class="btn btn-primary mb-3" href="{{ route('pengumpulan.create') }}">Tambah Data</a> --}}

                <div class="table-responsive">
                    <table class="table custom-table">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Mata Pelajaran</th>
                                <th>Nama Tugas</th>
                                <th>File</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($pengumpulan as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->mapel }}</td>
                                    <td>{{ $item->nama_tugas }}</td>
                                    <td>
                                        <a href="{{ asset('storage/' . $item->file_tugas) }}" target="_blank" class="btn btn-sm btn-outline-info">Lihat File</a>
                                    </td>
                                </tr>
                            @endforeach
                            @if($pengumpulan->isEmpty())
                                <tr>
                                    <td colspan="5" class="text-center text-muted">Belum ada tugas yang dikumpulkan.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

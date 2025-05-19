@extends('layout/app')

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-8 text-center">
        <h2>Welcome Admin</h2>
        <img src="{{asset('assets/img/dash/dash-5.jpg')}}" alt="Gambar Dashboard" 
             class="img-fluid rounded shadow mt-4"
             style="max-width: 800px; width: 100%; height: auto;">
             <img src="{{asset('assets/img/header1.jpg')}}" alt="Gambar Dashboard" 
             class="img-fluid rounded shadow mt-4"
             style="max-width: 800px; width: 100%; height: auto;">
    </div>
</div>
@endsection

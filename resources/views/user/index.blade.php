<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dolphin Assignments - Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('assets/img/dolphine2.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
     
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+62 823 1234 564</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>dolphin@example.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="https://id.linkedin.com/in/sandra-carter-16871b359">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="https://www.instagram.com/xtarlightw?igsh=eDFzNDFhbHp6NHA=">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index2.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-book-reader mr-3"></i>Dolphin</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                
                <a href="/sesi/logout" class="btn btn-primary py-2 px-4 d-none d-lg-block">Logout</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center my-5 py-5">
            <h1 class="text-white mt-4 mb-4">Kirim Tugasmu Sekarang Juga</h1>
            <h1 class="text-white display-1 mb-5">Kapanpun dan Dimana pun</h1>
            
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{asset('img/laptop.jpeg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Tentang Kami</h6>
                        <h1 class="display-4">Memudahkan Kalian Mengumpulkan dan Mengirimkan Tugas</h1>
                    </div>
                    <p>Kami membuat website ini untuk memudahkan para siswa maupun ibu/bapa guru agar bisa 
                        mengumpulkan dan melihat tugas dengan mudah. Dengan website ini, siswa bisa mengumpulkan tugas kapan saja dan dimana saja tanpa harus datang ke sekolah.
                        Ibu/bapa guru juga bisa melihat tugas siswa dengan mudah dan cepat. Kami berharap website ini bisa membantu para siswa dan ibu/bapa guru dalam proses belajar mengajar.
                        Jangan ragu untuk menghubungi kami jika ada pertanyaan atau saran. Kami siap membantu anda kapan saja.
                    </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Guru Start -->
    
    <!-- Guru End -->

    <!--  Menu Start -->

<div class="container-fluid py-5">
  <div class="container py-5">
    <div class="bg-white p-4 shadow rounded">
      <h2 class="text-center text-primary mb-4">Nilai Tugas</h2>
      <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Mata Pelajaran</th>
              <th>Nama Tugas</th>
              <th>Nilai</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($user2 as $idx => $item)
              <tr>
                <td>{{ $idx + 1 }}</td>
                <td>{{ $item->nama_mapel }}</td>
                <td>{{ $item->nama_tugas }}</td>
                <td>{{ $item->nilai }}</td>
              </tr>
            @empty
              <tr>
                <td colspan="4">Belum ada data nilai tugas.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

 <!-- Menu End -->

    
    
    <!-- Riwayat Start -->
    <div class="container-fluid py-5">
  <div class="container py-5">
    <div class="bg-white p-4 shadow rounded">
      <h2 class="text-center text-primary mb-4">Riwayat Tugas</h2>
      <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Nama Tugas</th>
              <th>Mata Pelajaran</th>
              <th>Tanggal Selesai</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($riwayat2 as $idx => $item)
              <tr>
                <td>{{ $idx + 1 }}</td>
                <td>{{ $item->nama_tugas }}</td>
                <td>{{ $item->nama_mapel }}</td>
                <td>{{ $item->tgl_selesai }}</td>
              </tr>
            @empty
              <tr>
                <td colspan="4">Belum ada data riwayat tugas.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
    <!-- Riwayat End -->


    <!-- Siswa Start -->
    
    <!-- Siswa End -->


    <!-- Tugas Start -->
    <div class="container-fluid py-5">
  <div class="container py-5">
    <div class="bg-white p-4 shadow rounded">
      <h2 class="text-center text-primary mb-4">Tugas Milikmu!</h2>
      <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Mata Pelajaran</th>
              <th>Nama Tugas</th>
              <th>Batas Waktu Kumpul</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($tugas2 as $idx => $item)
              <tr>
                <td>{{ $idx + 1 }}</td>
                <td>{{ $item->nama_mapel }}</td>
                <td>{{ $item->nama_tugas }}</td>
                <td>{{ $item->tempo }}</td>
              </tr>
            @empty
              <tr>
                <td colspan="4">Belum ada data riwayat tugas.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
    <!-- Tugas End -->


    <!-- Courses Start -->
    <div class="container-fluid px-0 py-5">
    <div class="row justify-content-center bg-image mx-0 mb-5">
        <div class="col-lg-6 py-5">
            <div class="bg-white p-5 my-5">
                <h1 class="text-center mb-4">Kirimkan Tugasmu Sekarang Juga!</h1>
                
                
                <form action="{{ route('pengumpulan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control bg-light border-0" placeholder="Nama" style="padding: 30px 20px;">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="mapel" class="form-control bg-light border-0" placeholder="Mata Pelajaran" style="padding: 30px 20px;">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="nama_tugas" class="form-control bg-light border-0" placeholder="Nama Tugas" style="padding: 30px 20px;">
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                {{-- Input file untuk foto atau dokumen tugas --}}
                                <input type="file" name="file_tugas" class="form-control bg-light border-0" style="padding: 30px 20px;">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12">
                            <button class="btn btn-primary btn-block" type="submit" style="height: 60px;">Kirim!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- Courses End -->


    <!-- Footer2 Start -->
    
    <!-- Footer2 End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
        
    <!-- Courses End -->

    <!-- Team Start -->
    
    <!-- Team End -->


    <!-- Testimonial Start -->
    
    <!-- Testimonial Start -->


    <!-- Contact Start -->
    
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <a href="index2.html" class="navbar-brand">
                        <h1 class="mt-n2 text-uppercase text-white"><i class="fa fa-book-reader mr-3"></i>Dolphin</h1>
                    </a>
                    <p class="m-0">Lembaga website untuk memudahkan murid dan guru agar bisa mengirimkan tugas kapanpun dan dimana pun</p>
                </div>
                <div class="col-md-6 mb-5">
                    <h3 class="text-white mb-4">Fax</h3>
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Fax Address">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-4">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Lebih dekat dengan kami</h3>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>204 Baker Street, Seoul, Indonesia</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+62 823 1234 567</p>
                    <p><i class="fa fa-envelope mr-2"></i>dolphin@gmail.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-twitter"></i></a>
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-facebook-f"></i></a>
                        <a class="text-white mr-4" href="https://id.linkedin.com/in/sandra-carter-16871b359"><i class="fab fa-2x fa-linkedin-in"></i></a>
                        <a class="text-white" href="https://www.instagram.com/xtarlightw?igsh=eDFzNDFhbHp6NHA="><i class="fab fa-2x fa-instagram"></i></a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 border-top py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0">Copyright &copy; <a class="text-white" href="#">Dolphin Corp</a>. All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <p class="m-0">Designed by <a class="text-white" href="https://htmlcodex.com">Agnia & Alkayisa</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
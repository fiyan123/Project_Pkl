<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Penilaian Siswa - PANS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets0/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets0/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets0/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets0/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets0/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('assets0/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets0/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('assets0/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <style>
        body
        {
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
        @include('layouts.components_siswa.navbar2')
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('assets0/img/carousel-1.jpg') }}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Penilaian Online Terbaik</h5>
                                <h1 class="display-3 text-white animated slideInDown">Platform Perhitungan Nilai Terbaik</h1>
                                <p class="fs-5 text-white mb-4 pb-2"> "Saya mendengar, dan saya lupa. Saya melihat, dan saya ingat. Saya melakukannya, dan saya mengerti." Pepatah Cina.</p>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('assets0/img/carousel-2.jpg') }}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Penilaian Online Terbaik</h5>
                                <h1 class="display-3 text-white animated slideInDown">Dapatkan Hasil Nilai Online Dari Rumah Anda</h1>
                                <p class="fs-5 text-white mb-4 pb-2">"Jika orang tidak melakukan hal-hal konyol, tidak ada hal cerdas yang akan pernah terjadi." <br> Ludwig Wittgenstein</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            @yield('content')
        </div>
    </div>
    <!-- Categories Start -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Data Kemampuan</h6>
                <h1 class="mb-5">Hal - Hal Yang Bisa DiLakukan</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Kemampuan Struktur</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Kelas Online</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-folder-open text-primary mb-4"></i>
                            <h5 class="mb-3">Tugas Projek</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book text-primary mb-4"></i>
                            <h5 class="mb-3">Buku Perpustakaan</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="https://agromediagroup.com/wp-content/uploads/2020/11/pratiksha-mohanty-DRZQLqm-wk8-unsplash.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Tentang Website</h6>
                    <h1 class="mb-4">Penilaian Akademik Siswa</h1>
                    <p class="mb-4"> “Jika Anda membuat rencana untuk satu tahun, taburlah padi; jika Anda membuat rencana untuk satu dekade, tanamlah pohon; jika Anda membuat rencana untuk seumur hidup, didiklah orang-orang” – Pepatah Cina</p>
                    <p class="mb-4">"Belajar tanpa berpikir adalah pekerjaan yang sia-sia, berpikir tanpa belajar itu berbahaya." – Konfusius</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Kemampuan Struktur</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Kelas Online</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Sertifikat Internasional</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pengembangan Karakter</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Sistem Informasi</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pembinaan Akhlak & Budi Pekerti</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Footer Start -->
        @include('layouts.components_siswa.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets0/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets0/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets0/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets0/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets0/js/main.js') }}"></script>

    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    {{-- <script src="{{ asset('js/bootstrap.min.js') }}" defer></script> --}}
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#dataTable').DataTable();
    });
    </script>
</body>
</html>
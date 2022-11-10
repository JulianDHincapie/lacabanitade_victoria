<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cabañitas la Victoria</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Kelly - v4.9.1
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="position-absolute top-0 start-0 w-100 shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">

            <h1 class="logo me-auto me-lg-0"><a href="index.html"></a><i class="fa-sharp fa-solid fa-cabin"></i></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0 ms-5">
                <i class="bi bi-list mobile-nav-toggle"></i>
                <ul>
                    <li><a class="active" href="#">Inicio</a></li>
                    <li><a href="#descripcion">Descripcion</a></li>
                    <li><a href="#ubicacion">Ubicacion</a></li>
                    @can(['administrador'])
                        <li><a href="{{ route('reservas.index') }}">Reservas</a></li>
                        <li><a href="{{ route('usuarios.index') }}">Usuarios</a></li>
                    @endcan
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-solid fa-user me-2"></i>{{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        Cerrar sesión
                                        <form id="logout-form" action="{{ route('logout') }}" method="post">
                                            @csrf
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endauth

                </ul>
            </nav><!-- .navbar -->

            <div class="header-social-links me-5">
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <div>

                </div>

    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container d-flex flex-column align-items-center text-center" data-aos="zoom-in"
            data-aos-delay="100">
            <h1>La Cabañita De Victoria</h1>
            <h2>Bienvenido al mejor estadia con el mejor servicio</h2>
            <a href="{{ route('reservas.create') }}" class="btn-about shadow">Reserva aqui</a>
        </div>

    </section><!-- End Hero -->
    <section class="content-section bg-light" id="descripcion">
        <div class="text-center p-5">
            <h1 class="mb-5">Descripcion</h1>
            <div class="card shadow mb-5" style="width: 100%; ">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="{{ asset('images/cabana1.jpg') }}" class="img-fluid rounded-start" alt="">
                    </div>
                    <div class="col-md-6">
                        <h4 class="card-header card-title">La cabañita de Victoria</h5>
                            <div class="card-body">
                                <p>La cabañita de Victoria les ofrece una muy buena estadia, lo mas acogido
                                    para tu comodidad, nos encontramos en el barrio el paien la
                                    direccion Cra. 12 #172 - 39, Ibagué, Calubaima, Ibagué, Tolima.
                                    ¡Te esperamos!
                                </p>
                            </div>
                    </div>
                    <div class="card-footer shadow">
                        <p class="card-text"><small class="text-muted">Estadia Ibagué</small></p>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-5" style="width: 100%;">
                <div class="row g-0">
                    <div class="col-md-6 ">
                        <h4 class="card-header card-title">La cabañita de Victoria</h5>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil incidunt,
                                    exercitationem delectus corrupti rerum omnis minus quisquam ratione ipsam nobis
                                    dolorem optio, repudiandae repellendus voluptatem voluptatum dolorum, tempore
                                    facere. Quasi.</p>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('images/cabana2.jpg') }}" class="img-fluid rounded-end" alt="">
                    </div>
                    <div class="card-footer shadow">
                        <p class="card-text"><small class="text-muted">Estadia Ibagué</small></p>
                    </div>
                </div>
            </div>
            <div class="card shadow" style="width:100%; ">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="{{ asset('images/cabana3.jpg') }}" class="img-fluid rounded-start" alt="">
                    </div>
                    <div class="col-md-6 ">
                        <h4 class="card-header card-title">La cabañita de Victoria</h5>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil incidunt,
                                    exercitationem delectus corrupti rerum omnis minus quisquam ratione ipsam nobis
                                    dolorem optio, repudiandae repellendus voluptatem voluptatum dolorum, tempore
                                    facere. Quasi.</p>
                            </div>
                    </div>
                    <div class="card-footer shadow">
                        <p class="card-text"><small class="text-muted">Estadia Ibagué</small></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <section class="content-section bg-light " id="ubicacion">
        <div class="text-center">
            <h1>Ubicacion</h1>
            <div class="mapa mt-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7955.617882590535!2d-75.14506431799835!3d4.446623330890746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38cf9c92953a43%3A0x3630c99955a4fc8e!2sSalado%2C%20Ibagu%C3%A9%2C%20Tolima!5e0!3m2!1ses!2sco!4v1666884580754!5m2!1ses!2sco"
                    width="95%" height="400" style="" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="shadow"></iframe>
            </div>
        </div>
    </section>



    <!-- ======= Footer ======= -->
    <footer id="footer" class="">
        <div class="container">
            <div class="copyright">
                &copy; Contactanos a <strong><span>lacabañitavictoria@gmail.com</span></strong>. O
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->
                Al número <a href="#">3153040730</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>

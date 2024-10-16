<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCO</title>
    <link rel="website icon" type="png" href="assets/images/icon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://kit.fontawesome.com/cbcafb1e3c.js" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <div class="pc">
            <div class="big-nav fixed-nav">
                <div class="container-fluid">
                    <div class="row justify-content-around">
                        <div class="col-3 sec-logo p-2">
                            <div class="d-flex justify-content-end w-100">
                                <a href="{{route('index')}}" class="me-3 mt-2">
                                    <img src="assets/images/logo-header.png" class="logo-header">
                                </a>
                            </div>
                        </div>
                        <div class="sec-header p-1 col-9">
                            <nav class="navbar navbar-expand-lg">
                                <div class="container-fluid">
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <div class="d-flex justify-content-end w-100">
                                            <ul class="navbar-nav mb-2 mb-lg-0 part-nav">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page"
                                                        href="{{route('index')}}">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{route('about')}}">about</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{route('services')}}">services</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{route('projects')}}">projects</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{route('people')}}">people</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{route('blog')}}">blogs</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{route('career')}}">career</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{route('contact')}}">contact us</a>
                                                </li>
                                            </ul>
                                            <div class="end-nav">
                                                <ul class="navbar-nav mb-2 mb-lg-0">
                                                    <li class="nav-item" id="openModalBtn">
                                                        <a aria-current="page" href="#" class="text-decoration-none">
                                                            <i class="fa-solid fa-magnifying-glass"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link btn button-nav icon-nav" id="sidebarToggle">
                                                            <img src="assets/images/icon-big.png">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Sidebar -->
                                            <div id="sidebar" class="sidebar">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <div>
                                                        <img src="assets/images/black-logo.png">
                                                    </div>
                                                    <div>
                                                        <button class="btn mt-2" id="closeSidebar">
                                                            <i class="fa-solid fa-xmark text-secondary mt-2 fs-3"></i>
                                                        </button> <!-- Close button -->
                                                    </div>
                                                </div>
                                                <hr class="text-dark">
                                                <div class="container mt-3">
                                                    <h4 class="lh-sm">
                                                        Finding The Best
                                                        Construction Services
                                                    </h4>
                                                    <p class="text-secondary mt-3">
                                                        At PCO, we believe that building is more than just constructing
                                                        spaces—it’s about creating environments that resonate with the
                                                        people who live, work, and grow in them. To us, every building
                                                        is a reflection of the human spirit: designed with care, shaped
                                                        by purpose, and brought to life with passion.
                                                    </p>
                                                    <h4>
                                                        contact us
                                                    </h4>
                                                    <div>
                                                        <ul>
                                                            <li>
                                                                <div class="d-flex justify-content-start">
                                                                    <div class="mt-1">
                                                                        <i
                                                                                class="fa-solid fa-location-dot"></i>
                                                                    </div>
                                                                    <div>

                                                                        Building 13 & 15, chillout petrol station
                                                                        Rehab 2, first settlement, new cairo
                                                                    </div>
                                                                </div>

                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <i class="fa-regular fa-envelope"></i>
                                                                </span>
                                                                bd@pco-eg.net
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <i class="fa-solid fa-phone"></i>
                                                                </span>
                                                                010 22220287
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <i class="fa-regular fa-clock"></i>
                                                                </span>
                                                                Working Hrs : 8 am to 5 pm
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- The Modal -->
                                    <div id="myModal" class="modal">
                                        <span class="close">
                                            <i class="fa-solid fa-xmark text-secondary mt-2 fs-3"></i>
                                        </span>
                                        <div class="modal-content">
                                            <div class="search-container d-flex justify-content-center">
                                                <input class="w-75" type="text" id="searchInputModal"
                                                    placeholder="search....">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-start">
                <div class="col-1 left-bar">
                    <div class="info-header">
                        <p>
                            +201022220287
                        </p>
                        <div class="line">
                        </div>
                        <p>
                            call us
                        </p>
                    </div>

                    <div class="social-icon">
                        <ul>
                            <li>
                                <a href="https://www.instagram.com/primeconsulting.office/"
                                    class="text-decoration-none">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/search/results/all/?fetchDeterministicClustersOnly=true&heroEntityKey=urn%3Ali%3Aorganization%3A11870299&keywords=prime%20consulting%20office&origin=RICH_QUERY_SUGGE"
                                    class="text-decoration-none">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/PCO.eg?mibextid=LQQJ4d" class="text-decoration-none">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/201022220287" class="text-decoration-none">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="line">
                    </div>
                    <p>
                        follow us
                    </p>
                </div>
                <!--
                    <div class="col-11 p-0">
                    <img src="assets/images/Building-Your-Vision.jpg" style="width: 100%;">
                </div>
                -->
                <div class="col-11 sec-video" style="padding-left: 0px;">
                    <video autoplay loop muted>
                        <source src="assets/images/PCO SITE....mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        <div class="mob">
            <nav class="navbar bg-dark fixed-top p-2">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="assets/images/logo-header.png" class="logo-header-mob">
                    </a>
                    <button class="navbar-toggler icon-nav p-0" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <img src="assets/images/icon-mob.png" class="icon-nav-mob">
                    </button>
                    <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header mt-3">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                                <img src="assets/images/logo-header.png" class="logo-header-mob">
                            </h5>
                            <button type="button" class="btn-close bg-white rounded-0" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body mt-2">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{route('index')}}">Home</a>
                                </li>
                                <hr>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('about')}}">about</a>
                                </li>
                                <hr>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('services')}}">services</a>
                                </li>
                                <hr>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('projects')}}">projects</a>
                                </li>
                                <hr>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('people')}}">people</a>
                                </li>
                                <hr>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('blog')}}">blogs</a>
                                </li>
                                <hr>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('career')}}">career</a>
                                </li>
                                <hr>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact')}}">contact us</a>
                                </li>
                                <hr>
                            </ul>
                            <div class="d-flex justify-content-center mt-3">
                                <span style="width: 9%;">
                                    <a href="https://www.youtube.com/@alsaifhome">
                                        <i class="fa-brands fa-facebook-f text-white"></i>
                                    </a>
                                </span>
                                <span style="width: 9%;">
                                    <a href="https://www.instagram.com/alsaifhome?igsh=MWszYjZuc2wxdWFiYg==">
                                        <i class="fa-brands fa-instagram text-white"></i>
                                    </a>
                                </span>
                                <span style="width: 9%;">
                                    <a href="https://www.linkedin.com/company/alsaifhome/">
                                        <i class="fa-brands fa-linkedin-in text-white"></i>
                                    </a>
                                </span>
                                <span style="width: 9%;">
                                    <a href="https://wa.me/216?text=">
                                        <i class="fa-brands fa-whatsapp  text-white"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="row">
                <div class="col-12 sec-video">
                    <!--
                        <img src="assets/images/Building-Your-Vision.jpg" style="width: 100%;">
                    -->
                    <video autoplay loop muted>
                        <source src="assets/images/PCO Mobile view.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </header>

    <section class="about-us mb-xl-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 my-auto">
                    <div class="d-flex justify-content-start">
                        <div class="horizontal-line"></div>
                        <h5>
                            Welcome to PCO
                        </h5>
                    </div>
                    <h1>
                        prime consulting office
                    </h1>
                    <p>
                        Our philosophy, "Building is a Human Being," drives everything we do. Each structure we craft is
                        not just about bricks and mortar but about fostering connections, inspiring communities, and
                        enriching lives.
                    </p>
                    <p class="text">
                        we build with the belief that every project is a story, and we are honored to be the
                        storytellers. Together, let’s create spaces that reflect the essence of humanity and stand the
                        test of time.
                    </p>
                    <a type="button" href="{{route('about')}}" class="btn button mt-2">
                        learn more
                    </a>
                </div>
                <div class="col-xl-6 my-auto">
                    <img src="assets/images/about-us.png" style="width: 100%;">
                </div>
            </div>
        </div>
    </section>

    <section class="services mb-xl-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="d-flex justify-content-center text-center">
                    <div class="horizontal-line-bg"></div>
                    <h4 class="me-2 ms-1"> what we do </h4>
                    <div class="horizontal-line-bg"></div>
                </div>
                <h3 class="text-center">
                    Our Services That We Provide
                </h3>
                <div class="col-xl-6">
                    <p class="text-center">
                        we offer a wide range of professional construction and design services tailored to meet your
                        project's unique needs
                    </p>
                </div>
            </div>
            <div class="row justify-content-center mt-xl-5 mt-lg-5 mt-md-5">
                <div class="col-xl-4 service">
                    <a href="#" class="text-decoration-none">
                        <div class="d-flex justify-content-between">
                            <div  style="width: 20%;">
                                <img src="assets/images/--ARCHITECTURE-DESIGN.png">
                            </div>
                            <div  style="width: 70%;">
                                <h2>Architectural design</h2>
                                <p class="fs-6">
                                    innovative and sustainable architecture
                                </p>
                            </div>
                            <div style="width: 10%;">
                                <img src="assets/images/arrow.png" class="arrow">
                            </div>
                        </div>
                        <hr>
                    </a>
                </div>
                <div class="col-xl-4 service">
                    <a href="#" class="text-decoration-none">
                        <div class="d-flex justify-content-between">
                            <div  style="width: 20%;">
                                <img src="assets/images/FULL-CONSTRUCTION-PACKAGE.png">
                            </div>
                            <div style="width: 70%;">
                                <h2>Full Construction Package</h2>
                                <p class="fs-6">
                                    all-inclusive construction packages
                                </p>
                            </div>
                            <div style="width: 10%;">
                                <img src="assets/images/arrow.png" class="arrow">
                            </div>
                        </div>
                        <hr>
                    </a>
                </div>
                <div class="col-xl-4 service">
                    <a href="#" class="text-decoration-none">
                        <div class="d-flex justify-content-between">
                            <div  style="width: 20%;">
                                <img src="assets/images/COORDINATION.png">
                            </div>
                            <div style="width: 70%;">
                                <h2>coordination</h2>
                                <p class="fs-6">
                                    expert project coordination service
                                </p>
                            </div>
                            <div style="width: 10%;">
                                <img src="assets/images/arrow.png" class="arrow">
                            </div>
                        </div>
                        <hr>
                    </a>
                </div>
                <div class="col-xl-4 service">
                    <a href="#" class="text-decoration-none">
                        <div class="d-flex justify-content-between">
                            <div  style="width: 20%;">
                                <img src="assets/images/RENDERING-&-ANIMATION.png">
                            </div>
                            <div style="width: 70%;">
                                <h2>Rendering & Animation</h2>
                                <p class="fs-6">
                                    advanced 3D visualization and animation techniques
                                </p>
                            </div>
                            <div style="width: 10%;"
                                <img src="assets/images/arrow.png" class="arrow">
                            </div>
                        </div>
                        <hr>
                    </a>
                </div>
                <div class="col-xl-4 service">
                    <a href="#" class="text-decoration-none">
                        <div class="d-flex justify-content-between">
                            <div  style="width: 20%;">
                                <img src="assets/images/DESIGN-REVIEW.png">
                            </div>
                            <div style="width: 70%;">
                                <h2>Design Review</h2>
                                <p class="fs-6">
                                    ensure that every aspect of the project meets the highest standards
                                </p>
                            </div>
                            <div style="width: 10%;">
                                <img src="assets/images/arrow.png" class="arrow">
                            </div>
                        </div>
                        <hr>
                    </a>
                </div>
                <div class="col-xl-4 service">
                    <a href="#" class="text-decoration-none">
                        <div class="d-flex justify-content-between">
                            <div  style="width: 20%;">
                                <img src="assets/images/LANDSCAPE.png">
                            </div>
                            <div style="width: 70%;">
                                <h2>Landscape</h2>
                                <p class="fs-6">
                                    creating stunning and sustainable landscape designs
                                </p>
                            </div>
                            <div style="width: 10%;">
                                <img src="assets/images/arrow.png" class="arrow">
                            </div>
                        </div>
                        <hr>
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a type="button" href="{{route('services')}}" class="btn serv-button rounded-0">
                    view all services
                </a>
            </div>
        </div>
    </section>

    <section class="projects mb-xl-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5">
                    <div class="d-flex justify-content-start">
                        <div class="horizontal-line"></div>
                        <h5>
                            OUR WORK
                        </h5>
                    </div>
                    <h3>
                        Successfully completed
                        projects for our clients
                    </h3>
                </div>
                <div class="col-xl-5">
                    <div class="d-flex justify-content-center">
                        <img src="assets/images/180.png">
                        <p>
                            project <br>completed
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="pc">
                    <div class="col-12 p-3">
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                    aria-label="Slide 5"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href="#">
                                        <div class="d-flex justify-content-center">
                                            <div style="width: 23%;" class="me-3">
                                                <div class="image-container">
                                                    <img src="assets/images/Delta-Business-Park1.jpg"
                                                        class="image-project">
                                                </div>
                                            </div>
                                            <div style="width: 53%;" class="me-3">
                                                <div class="image-container">
                                                    <img src="assets/images/Delta-Business-Park2.jpg"
                                                        class="image-project">
                                                </div>
                                            </div>
                                            <div style="width: 23%;">
                                                <div class="image-container">
                                                    <img src="assets/images/Delta-Business-Park3.jpg"
                                                        class="image-project">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="#">
                                        <div class="d-flex justify-content-center">
                                            <div style="width: 23%;" class="me-3">
                                                <div class="image-container">
                                                    <img src="assets/images/V90-Mall01.jpg" class="image-project">
                                                </div>
                                            </div>
                                            <div style="width: 53%;" class="me-3">
                                                <div class="image-container">
                                                    <img src="assets/images/V90-Mall02.jpg" class="image-project">
                                                </div>
                                            </div>
                                            <div style="width: 23%;">
                                                <div class="image-container">
                                                    <img src="assets/images/V90-Mall03.jpg" class="image-project">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="#">
                                        <div class="d-flex justify-content-center">
                                            <div style="width: 23%;" class="me-3">
                                                <div class="image-container">
                                                    <img src="assets/images/Three-Sixty-LMD01.jpg"
                                                        class="image-project">
                                                </div>
                                            </div>
                                            <div style="width: 53%;" class="me-3">
                                                <div class="image-container">
                                                    <img src="assets/images/Three-Sixty-LMD02.jpg"
                                                        class="image-project">
                                                </div>
                                            </div>
                                            <div style="width: 23%;">
                                                <div class="image-container">
                                                    <img src="assets/images/Three-Sixty-LMD03.jpg"
                                                        class="image-project">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="#">
                                        <div class="d-flex justify-content-center">
                                            <div style="width: 23%;" class="me-3">
                                                <div class="image-container">
                                                    <img src="assets/images/KEEVA01.jpg" class="image-project">
                                                </div>
                                            </div>
                                            <div style="width: 53%;" class="me-3">
                                                <div class="image-container">
                                                    <img src="assets/images/KEEVA02.jpg" class="image-project">
                                                </div>
                                            </div>
                                            <div style="width: 23%;">
                                                <div class="image-container">
                                                    <img src="assets/images/KEEVA03.jpg" class="image-project">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="#">
                                        <div class="d-flex justify-content-center">
                                            <div style="width: 23%;" class="me-3">
                                                <div class="image-container">
                                                    <img src="assets/images/Layan-mosque01.jpg" class="image-project">
                                                </div>
                                            </div>
                                            <div style="width: 53%;" class="me-3">
                                                <div class="image-container">
                                                    <img src="assets/images/Layan-mosque02.jpg" class="image-project">
                                                </div>
                                            </div>
                                            <div style="width: 23%;">
                                                <div class="image-container">
                                                    <img src="assets/images/Layan-mosque03.jpg" class="image-project">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mob">
                    <div class="col-12">
                        <div id="carouselExampleCaptions" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                                    aria-label="Slide 5"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href="#">
                                        <div class="row justify-content-center">
                                            <div class="col-12 mb-3">
                                                <img src="assets/images/Delta-Business-Park1.jpg" class="image-project">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <img src="assets/images/Delta-Business-Park2.jpg" class="image-project">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <img src="assets/images/Delta-Business-Park3.jpg" class="image-project">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="#">
                                        <div class="row justify-content-center">
                                            <div class="col-12 mb-3">
                                                <img src="assets/images/V90-Mall01.jpg" class="image-project">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <img src="assets/images/V90-Mall02.jpg" class="image-project">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <img src="assets/images/V90-Mall03.jpg" class="image-project">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="#">
                                        <div class="row justify-content-center">
                                            <div class="col-12 mb-3">
                                                <img src="assets/images/Three-Sixty-LMD01.jpg" class="image-project">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <img src="assets/images/Three-Sixty-LMD02.jpg" class="image-project">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <img src="assets/images/Three-Sixty-LMD03.jpg" class="image-project">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="#">
                                        <div class="row justify-content-center">
                                            <div class="col-12 mb-3">
                                                <img src="assets/images/KEEVA01.jpg" class="image-project">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <img src="assets/images/KEEVA02.jpg" class="image-project">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <img src="assets/images/KEEVA03.jpg" class="image-project">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="#">
                                        <div class="row justify-content-center">
                                            <div class="col-12 mb-3">
                                                <img src="assets/images/Layan-mosque01.jpg" class="image-project">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <img src="assets/images/Layan-mosque02.jpg" class="image-project">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <img src="assets/images/Layan-mosque03.jpg" class="image-project">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="people mb-xl-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="d-flex justify-content-center text-center">
                    <div class="horizontal-line-bg"></div>
                    <h4 class="me-2 ms-1"> people </h4>
                    <div class="horizontal-line-bg"></div>
                </div>
                <h3 class="text-center">
                    our team
                </h3>
                <div class="col-xl-6">
                    <p class="text-center">
                        Meet the PCO Team , our team is composed of dedicated architects, engineers, and project
                        managers
                        who are passionate about creating impactful spaces.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 mb-3">
                    <div class="card rounded-0">
                        <img src="assets/images/Rogina khaled.jpg" class="card-img-top rounded-0" alt="...">
                        <div class="info-social bg-dark w-100 p-3">
                            <div class="d-flex justify-content-start">
                                <span style="width: 13%;">
                                    <a href="">
                                        <i class="fa-brands fa-facebook-f text-white border border-1 p-1"></i>
                                    </a>
                                </span>
                                <span style="width: 13%;">
                                    <a href="">
                                        <i class="fa-brands fa-instagram text-white border border-1 p-1"></i>
                                    </a>
                                </span>
                                <span style="width: 13%;">
                                    <a href="">
                                        <i class="fa-brands fa-linkedin-in text-white border border-1 p-1"></i>
                                    </a>
                                </span>
                                <span style="width: 13%;">
                                    <a href="">
                                        <i class="fa-brands fa-whatsapp text-white border border-1 p-1"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Rogina khaled</h5>
                            <p class="card-text">CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mb-3">
                    <div class="card rounded-0">
                        <img src="assets/images/Mohamed Masoud.jpg" class="card-img-top rounded-0" alt="...">
                        <div class="info-social bg-dark w-100 p-3">
                            <div class="d-flex justify-content-start">
                                <span style="width: 13%;">
                                    <a href="">
                                        <i class="fa-brands fa-facebook-f text-white  border border-1 p-1"></i>
                                    </a>
                                </span>
                                <span style="width: 13%;">
                                    <a href="">
                                        <i class="fa-brands fa-instagram text-white  border border-1 p-1"></i>
                                    </a>
                                </span>
                                <span style="width: 13%;">
                                    <a href="">
                                        <i class="fa-brands fa-linkedin-in text-white  border border-1 p-1"></i>
                                    </a>
                                </span>
                                <span style="width: 13%;">
                                    <a href="">
                                        <i class="fa-brands fa-whatsapp  text-white  border border-1 p-1"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mohamad Masood</h5>
                            <p class="card-text">project manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mb-3">
                    <div class="card rounded-0">
                        <img src="assets/images/Afaf.jpg" class="card-img-top rounded-0" alt="...">
                        <div class="info-social bg-dark w-100 p-3">
                            <div class="d-flex justify-content-start">
                                <span style="width: 13%;">
                                    <a href="">
                                        <i class="fa-brands fa-facebook-f text-white  border border-1 p-1"></i>
                                    </a>
                                </span>
                                <span style="width: 13%;">
                                    <a href="">
                                        <i class="fa-brands fa-instagram text-white  border border-1 p-1"></i>
                                    </a>
                                </span>
                                <span style="width: 13%;">
                                    <a href="">
                                        <i class="fa-brands fa-linkedin-in text-white  border border-1 p-1"></i>
                                    </a>
                                </span>
                                <span style="width: 13%;">
                                    <a href="">
                                        <i class="fa-brands fa-whatsapp  text-white  border border-1 p-1"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Afaf Abdelazeem</h5>
                            <p class="card-text">Head Of Business Development</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mb-3">
                    <div class="card rounded-0">
                        <img src="assets/images/Mostafa Morsi.jpg" class="card-img-top rounded-0" alt="...">
                        <div class="info-social bg-dark w-100 p-3">
                            <div class="d-flex justify-content-start">
                                <span style="width: 13%;">
                                    <a href="">
                                        <i class="fa-brands fa-facebook-f text-white  border border-1 p-1"></i>
                                    </a>
                                </span>
                                <span style="width: 13%;">
                                    <a href="">
                                        <i class="fa-brands fa-instagram text-white  border border-1 p-1"></i>
                                    </a>
                                </span>
                                <span style="width: 13%;">
                                    <a href="">
                                        <i class="fa-brands fa-linkedin-in text-white  border border-1 p-1"></i>
                                    </a>
                                </span>
                                <span style="width: 13%;">
                                    <a href="">
                                        <i class="fa-brands fa-whatsapp  text-white  border border-1 p-1"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mustafa Morsi</h5>
                            <p class="card-text">project manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews mb-xl-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-3">
                    <div class="d-flex justify-content-start">
                        <div class="horizontal-line"></div>
                        <h5>
                            Testimonials
                        </h5>
                    </div>
                    <h3>
                        What They’re Talking About Comapany ?
                    </h3>
                    <div class="pc">
                        <div class="carousel slide mt-xl-5">
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon  border border-1 rounded-circle"
                                    aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon  border border-1 rounded-circle"
                                    aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="mob">
                        <div class="carousel slide mt-xl-5">
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon  border border-1 rounded-circle"
                                    aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                <span class="carousel-control-next-icon  border border-1 rounded-circle"
                                    aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 pc">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex justify-content-end">
                                    <div class="sec-review">
                                        <div class="review rounded rounded-1 p-4 me-3">
                                            <img src="assets/images/review.png" class="ms-3 mb-2">
                                            <p>
                                                I am impresed with their orgion, communication and knowldge from the
                                                start to
                                                finish. A
                                                job well done like the replement of the a roof new roof on our home.
                                                Thank you…
                                            </p>
                                            <div class="review-icon">
                                                <i class="fa-solid fa-sort-down text-white fs-3"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start mt-5 ms-3">
                                            <div class="me-3">
                                                <img src="assets/images/testimonial-1.png" class="img-review">
                                            </div>
                                            <div class="mt-3">
                                                <h4>Robert Mick</h4>
                                                <span id="customer">customer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sec-review">
                                        <div class="review rounded rounded-1 p-4">
                                            <img src="assets/images/review.png" class="ms-3 mb-2">
                                            <p>
                                                I am impresed with their orgion, communication and knowldge from the
                                                start to
                                                finish. A
                                                job well done like the replement of the a roof new roof on our home.
                                                Thank you…
                                            </p>
                                            <div class="review-icon">
                                                <i class="fa-solid fa-sort-down text-white fs-3"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start mt-5 ms-3">
                                            <div class="me-3">
                                                <img src="assets/images/testimonial-2.png" class="img-review">
                                            </div>
                                            <div class="mt-3">
                                                <h4>Marry joe</h4>
                                                <span id="customer">customer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex justify-content-end">
                                    <div class="sec-review">
                                        <div class="review rounded rounded-1 p-4 me-3">
                                            <img src="assets/images/review.png" class="ms-3 mb-2">
                                            <p>
                                                I am impresed with their orgion, communication and knowldge from the
                                                start to
                                                finish. A
                                                job well done like the replement of the a roof new roof on our home.
                                                Thank you…
                                            </p>
                                            <div class="review-icon">
                                                <i class="fa-solid fa-sort-down text-white fs-3"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start mt-5 ms-3">
                                            <div class="me-3">
                                                <img src="assets/images/testimonial-1.png" class="img-review">
                                            </div>
                                            <div class="mt-3">
                                                <h4>Robert Mick</h4>
                                                <span id="customer">customer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sec-review">
                                        <div class="review rounded rounded-1 p-4">
                                            <img src="assets/images/review.png" class="ms-3 mb-2">
                                            <p>
                                                I am impresed with their orgion, communication and knowldge from the
                                                start to
                                                finish. A
                                                job well done like the replement of the a roof new roof on our home.
                                                Thank you…
                                            </p>
                                            <div class="review-icon">
                                                <i class="fa-solid fa-sort-down text-white fs-3"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start mt-5 ms-3">
                                            <div class="me-3">
                                                <img src="assets/images/testimonial-2.png" class="img-review">
                                            </div>
                                            <div class="mt-3">
                                                <h4>Marry joe</h4>
                                                <span id="customer">customer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mob">
                    <div class="col-xl-9">
                        <div id="carouselExampleInterval" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-12 mb-5">
                                            <div class="sec-review">
                                                <div class="review rounded rounded-1 p-4 me-3">
                                                    <img src="assets/images/review.png" class="ms-3 mb-2">
                                                    <p>
                                                        I am impresed with their orgion, communication and knowldge from
                                                        the
                                                        start to
                                                        finish. A
                                                        job well done like the replement of the a roof new roof on our
                                                        home.
                                                        Thank you…
                                                    </p>
                                                    <div class="review-icon">
                                                        <i class="fa-solid fa-sort-down text-white fs-3"></i>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-start mt-4 ms-3">
                                                    <div class="me-3">
                                                        <img src="assets/images/testimonial-1.png" class="img-review">
                                                    </div>
                                                    <div class="mt-3">
                                                        <h4>Robert Mick</h4>
                                                        <span id="customer">customer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-5">
                                            <div class="sec-review">
                                                <div class="review rounded rounded-1 p-4">
                                                    <img src="assets/images/review.png" class="ms-3 mb-2">
                                                    <p>
                                                        I am impresed with their orgion, communication and knowldge from
                                                        the
                                                        start to
                                                        finish. A
                                                        job well done like the replement of the a roof new roof on our
                                                        home.
                                                        Thank you…
                                                    </p>
                                                    <div class="review-icon">
                                                        <i class="fa-solid fa-sort-down text-white fs-3"></i>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-start mt-4 ms-3">
                                                    <div class="me-3">
                                                        <img src="assets/images/testimonial-2.png" class="img-review">
                                                    </div>
                                                    <div class="mt-3">
                                                        <h4>Marry joe</h4>
                                                        <span id="customer">customer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-12 mb-5">
                                            <div class="sec-review">
                                                <div class="review rounded rounded-1 p-4 me-3">
                                                    <img src="assets/images/review.png" class="ms-3 mb-2">
                                                    <p>
                                                        I am impresed with their orgion, communication and knowldge from
                                                        the
                                                        start to
                                                        finish. A
                                                        job well done like the replement of the a roof new roof on our
                                                        home.
                                                        Thank you…
                                                    </p>
                                                    <div class="review-icon">
                                                        <i class="fa-solid fa-sort-down text-white fs-3"></i>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-start mt-4 ms-3">
                                                    <div class="me-3">
                                                        <img src="assets/images/testimonial-1.png" class="img-review">
                                                    </div>
                                                    <div class="mt-3">
                                                        <h4>Robert Mick</h4>
                                                        <span id="customer">customer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-5">
                                            <div class="sec-review">
                                                <div class="review rounded rounded-1 p-4">
                                                    <img src="assets/images/review.png" class="ms-3 mb-2">
                                                    <p>
                                                        I am impresed with their orgion, communication and knowldge from
                                                        the
                                                        start to
                                                        finish. A
                                                        job well done like the replement of the a roof new roof on our
                                                        home.
                                                        Thank you…
                                                    </p>
                                                    <div class="review-icon">
                                                        <i class="fa-solid fa-sort-down text-white fs-3"></i>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-start mt-4 ms-3">
                                                    <div class="me-3">
                                                        <img src="assets/images/testimonial-2.png" class="img-review">
                                                    </div>
                                                    <div class="mt-3">
                                                        <h4>Marry joe</h4>
                                                        <span id="customer">customer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blogs">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5">
                    <div class="d-flex justify-content-start">
                        <div class="horizontal-line"></div>
                        <h5>
                            From the blog
                        </h5>
                    </div>
                    <h3>
                        New & Articles
                    </h3>
                </div>
                <div class="col-xl-5 my-auto">
                    <p>
                        Going forward, a new normal that has evolved from generation is on
                        the runway heading towards a streamlined.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center mt-xl-5 mt-lg-5 mt-md-5">
                <div class="col-xl-4 sec-blog">
                    <div class="blog">
                        <img src="assets/images/news-22-370x272.jpg" style="width: 100%;">
                        <div class="sec-date">
                            <p>
                                04
                                Jun
                            </p>
                        </div>
                        <div class="blog-info border border-1 rounded-1">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"
                                            class="text-secondary text-decoration-none">Home</a></li>
                                    <li class="breadcrumb-item active text-secondary" aria-current="page">Library</li>
                                </ol>
                            </nav>
                            <h4>
                                7 Important Tips For Roof Installation
                            </h4>
                            <button type="button" class="btn blog-button rounded-5">
                                continue reading
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 sec-blog">
                    <div class="blog">
                        <img src="assets/images/news-23-370x272.jpg" style="width: 100%;">
                        <div class="sec-date">
                            <p>
                                04
                                Jun
                            </p>
                        </div>
                        <div class="blog-info border border-1 rounded-1">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"
                                            class="text-secondary text-decoration-none">Home</a></li>
                                    <li class="breadcrumb-item active text-secondary" aria-current="page">Library</li>
                                </ol>
                            </nav>
                            <h4>
                                7 Important Tips For Roof Installation
                            </h4>
                            <button type="button" class="btn blog-button rounded-5">
                                continue reading
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 sec-blog">
                    <div class="blog">
                        <img src="assets/images/news-24-370x272.jpg" style="width: 100%;">
                        <div class="sec-date">
                            <p>
                                04
                                Jun
                            </p>
                        </div>
                        <div class="blog-info border border-1 rounded-1">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"
                                            class="text-secondary text-decoration-none">Home</a></li>
                                    <li class="breadcrumb-item active text-secondary" aria-current="page">Library</li>
                                </ol>
                            </nav>
                            <h4>
                                7 Important Tips For Roof Installation
                            </h4>
                            <button type="button" class="btn blog-button rounded-5">
                                continue reading
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="d-flex justify-content-center text-center">
                    <div class="horizontal-line-bg"></div>
                    <h4 class="me-2 ms-1"> Partner </h4>
                    <div class="horizontal-line-bg"></div>
                </div>
                <h3 class="text-center">
                    our partner
                </h3>
                <div class="col-xl-6">
                    <p class="text-center">
                        We don’t just provide roofing services; we also offer you our expertise. If you have a question
                        about roofing or require an inspection, let us know!
                    </p>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-12">
                    <div id="carouselExampleRide" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleRide" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleRide" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex justify-content-center">
                                    <div class="logo-partner">
                                        <img src="assets/images/logo1.png">
                                    </div>
                                    <div class="logo-partner">
                                        <img src="assets/images/logo2.png">
                                    </div>
                                    <div class="logo-partner">
                                        <img src="assets/images/logo3.png">
                                    </div>
                                    <div class="logo-partner">
                                        <img src="assets/images/logo4.png">
                                    </div>
                                    <div class="logo-partner">
                                        <img src="assets/images/logo5.png">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex justify-content-center">
                                    <div class="logo-partner">
                                        <img src="assets/images/logo1.png">

                                    </div>
                                    <div class="logo-partner">
                                        <img src="assets/images/logo2.png">
                                    </div>
                                    <div class="logo-partner">
                                        <img src="assets/images/logo3.png">
                                    </div>
                                    <div class="logo-partner">
                                        <img src="assets/images/logo4.png">
                                    </div>
                                    <div class="logo-partner">
                                        <img src="assets/images/logo5.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-3 mb-4">
                    <h6>about company</h6>
                    <div class="d-flex justify-content-start">
                        <div class="small-square"></div>
                        <div class="horizontal-line-bg"></div>
                    </div>
                    <img src="assets/images/logo-header.png" class="logo-footer">
                    <p class="small-des">
                        Thewebmax ipsum dolor sit amet, interior adipiscing elit, sed diam nonummy nibh is euismod
                        tincidunt ut laoreet dolore agna aliquam erat . wisi enim ad minim veniam, quis tation. sit
                        amet, consec tetuer. ipsum dolor sit amet, consectetuer adipiscing. ipsum dolor sit .
                    </p>
                </div>
                <div class="col-xl-3 mb-4">
                    <h6>resent post</h6>
                    <div class="d-flex justify-content-start">
                        <div class="small-square"></div>
                        <div class="horizontal-line-bg"></div>
                    </div>
                    <div class="d-flex justify-content-start mt-4">
                        <div class="square">
                            <span>
                                <span class="text-secondary">
                                    20
                                </span> Mar
                            </span>
                        </div>
                        <div class="info-posts mt-2">
                            <p>
                                blog title first
                            </p>
                            <span class="text-secondary">
                                <i class="fa-solid fa-user-large me-1"></i>
                                By admin /
                            </span>
                            <span class="text-secondary">
                                <i class="fa-solid fa-comments me-1"></i> 26
                            </span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mt-4">
                        <div class="square">
                            <span>
                                <span class="text-secondary">
                                    31
                                </span> Mar
                            </span>
                        </div>
                        <div class="info-posts mt-2">
                            <p>
                                blog title first
                            </p>
                            <span class="text-secondary">
                                <i class="fa-solid fa-user-large me-1"></i>
                                By admin /
                            </span>
                            <span class="text-secondary">
                                <i class="fa-solid fa-comments me-1"></i> 26
                            </span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mt-4">
                        <div class="square">
                            <span>
                                <span class="text-secondary">
                                    18
                                </span> Mar
                            </span>
                        </div>
                        <div class="info-posts mt-2">
                            <p>
                                blog title first
                            </p>
                            <span class="text-secondary">
                                <i class="fa-solid fa-user-large me-1"></i>
                                By admin /
                            </span>
                            <span class="text-secondary">
                                <i class="fa-solid fa-comments me-1"></i> 26
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mb-4">
                    <h6>useful links</h6>
                    <div class="d-flex justify-content-start">
                        <div class="small-square"></div>
                        <div class="horizontal-line-bg"></div>
                    </div>
                    <div class="mt-4">
                        <ul class="links">
                            <li>
                                <i class="fa-solid fa-angles-right"></i>
                                <a href="{{route('about')}}">about</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-angles-right"></i>
                                <a href="{{route('people')}}">our team</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-angles-right"></i>
                                <a href="{{route('services')}}">services</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-angles-right"></i>
                                <a href="{{route('career')}}">career</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-angles-right"></i>
                                <a href="{{route('contact')}}">contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 mb-4">
                    <h6>newsletter</h6>
                    <div class="d-flex justify-content-start">
                        <div class="small-square"></div>
                        <div class="horizontal-line-bg"></div>
                    </div>
                    <div class="mt-4 mb-5">
                        <div class="input-group mb-3 text-white w-75">
                            <input type="text" class="form-control rounded-0" placeholder="ENTER YOUR EMAIL"
                                aria-label="Username" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa-regular fa-paper-plane text-white"></i>
                            </span>
                        </div>
                    </div>
                    <h6>social links</h6>
                    <div class="d-flex justify-content-start">
                        <div class="small-square"></div>
                        <div class="horizontal-line-bg"></div>
                    </div>
                    <div class="social-icon-footer mt-4">
                        <ul>
                            <li>
                                <a href="https://www.youtube.com/@PrimeConsultingoffice" class="text-decoration-none">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/primeconsulting.office/"
                                    class="text-decoration-none">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/search/results/all/?fetchDeterministicClustersOnly=true&heroEntityKey=urn%3Ali%3Aorganization%3A11870299&keywords=prime%20consulting%20office&origin=RICH_QUERY_SUGGE"
                                    class="text-decoration-none">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/PCO.eg?mibextid=LQQJ4d" class="text-decoration-none">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/201022220287" class="text-decoration-none">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center contact-info mb-5">
                <div class="col-xl-3 mb-3 border border-1 p-4 me-xl-4 me-lg-4 me-md-4">
                    <div class="d-flex justify-content-start">
                        <div class="address-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <h6>
                                Address
                            </h6>
                            <p>
                                Building 13 & 15, chillout petrol station
                                Rehab 2, first settlement, new cairo
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-xl-3 mb-3 border border-1 p-4 me-xl-4 me-lg-4 me-md-4">
                    <div class="d-flex justify-content-start">
                        <div>
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>
                        <div>
                            <h6>
                                Phone
                            </h6>
                            <p>
                                010 22220287,<br>
                                0223685790
                            </p>
                        </div>
                    </div>

                </div>
                <!--
                           <div class="col-xl-2 mb-3 border border-1 p-4 me-xl-4 me-lg-4 me-md-4">

                            <div class="d-flex justify-content-start">
                        <div>
                            <i class="fa-solid fa-fax"></i>
                        </div>
                        <div>
                            <h6>
                                fax
                            </h6>
                            <p>
                                FAX: (123) 123-4567 ,
                                FAX: (123) 123-4567
                            </p>
                        </div>
                    </div>
                </div>
                -->
                <div class="col-xl-3 mb-3 border border-1 p-4 me-xl-4 me-lg-4 me-md-4">
                    <div class="d-flex justify-content-start">
                        <div>
                            <i class="fa-solid fa-envelope-open-text"></i>
                        </div>
                        <div>
                            <h6>
                                email
                            </h6>
                            <p>
                                bd@pco-eg.net,<br>
                                info@demo1234.com
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div>
            <img src="assets/images/line.png" style="width: 100%;" alt="">
        </div>
        <div class="small-footer">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-6">
                        <small class="text-white-50">
                            © 2024 Your Company. All Rights Reserved. Designed By Arena.
                        </small>
                    </div>
                    <div class="col-xl-4 mt-2 info-small-footer">
                        <a href="exchange-return.html" class="text-decoration-none">
                            terms & conditions
                        </a>
                        <span class="text-white-50">/</span>
                        <a href="privacy.html" class="text-decoration-none">
                            privacy policy
                        </a>
                        <span class="text-white-50">/</span>
                        <a href="contact-us.html#suggestions" class="text-decoration-none">
                            contact
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Progress Line -->
    <div class="progress-line">
        <div class="progress-bar" id="progressBar"></div>
    </div>

    <!-- Go to Top Button -->
    <a onclick="scrollToTop()" class="go-top-btn" id="goTopBtn">
        go to top
    </a>

    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/index.js"></script>
</body>

</html>
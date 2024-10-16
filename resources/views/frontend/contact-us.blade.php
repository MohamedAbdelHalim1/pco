<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>
    <link rel="website icon" type="png" href="assets/images/icon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/contact-us.css">
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
                                                                        <i class="fa-solid fa-location-dot"></i>
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
        </div>



        <div class="d-flex justify-content-start header-content">
            <div>
                <h1>
                    contact us
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">contact us</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <img src="assets/images/contact-us.png" class="sub-banner">
            </div>
        </div>
    </header>

    <section class="form">
        <div class="container">
            <div class="row justify-content-start mb-5">
                <div class="col-xl-8">
                    <div class="d-flex justify-content-start">
                        <div class="horizontal-line"></div>
                        <h5>
                            Get In Touch
                        </h5>
                    </div>
                    <h3>
                        Drop a message to us
                    </h3>
                    <p>
                        Our objective at Woodenx is to bring together our visitor's societies and spirits with our
                        own, communicating enthusiasm and liberality in the food we share.
                    </p>
                </div>
            </div>
            <div class="row justify-content-between mb-5">
                <div class="col-xl-6">
                    <form>
                        <div class="d-flex justify-content-between">
                            <div class="mb-3 form-input">
                                <input type="text" class="form-control" placeholder="First Name*"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 form-input">
                                <input type="text" class="form-control" placeholder="Last Name*" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="mb-3 form-input">
                                <input type="email" class="form-control" placeholder="Email*" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 form-input">
                                <input type="text" class="form-control" placeholder="Company Name*"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="">
                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                placeholder="Tell us a little more about your requirements" rows="3"></textarea>
                        </div>
                        <div>
                            <button class="btn button rounded-0">
                                submit<span class="ms-1"></span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-xl-4">
                    <div class="mb-xl-5 mb-lg-5 mb-md-5">
                        <h4>
                            prime consulting office
                        </h4>
                        <div class="horizontal-line w-25"></div>
                        <p>
                            Building 13 & 15, chillout petrol station 
                            Rehab 2, first settlement, new cairo
                        </p>
                        <a href="#">
                            bd@pco-eg.net
                        </a>
                    </div>
                    <div>
                        <h4>
                            Call Us at :
                        </h4>
                        <div class="horizontal-line w-25 mb-3"></div>
                        <span class="fw-bolder fs-4">010 22220287</span>
                        <p>
                            sun - thur.<br>
                            8.00 am to 5.00 pm<br>
                            saturday Close
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row justify-content-start">
            <div class="col-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1726.3127587519664!2d31.503309999999995!3d30.076267!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145819df4cbc0da3%3A0x4abed39a53a8290!2sPRIME%20Consulting%20Office!5e0!3m2!1sen!2seg!4v1727786026090!5m2!1sen!2seg"
                    style="border:0; width: 100%; height: 500px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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
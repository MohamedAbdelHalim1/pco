<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG DETAILS</title>
    <link rel="website icon" type="png" href="assets/images/icon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/blog-details.css">
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
                    7 Important Tips For Roof Installation
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">blogs</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <img src="assets/images/Blogs.png" class="sub-banner">
            </div>
        </div>
    </header>


    <section class="mt-xl-5 blog-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8">
                    <img src="assets/images/news-22-370x272.jpg" style="width: 100%; height: 400px;">
                </div>
                <div class="category col-xl-4 col-lg-4 col-md-4">
                    <h3>
                        categories
                    </h3>
                    <ul>
                        <li>
                            <a>
                                <i class="fa-solid fa-chevron-right fs-6 me-1"></i>
                                General Carpentry
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a>
                                <i class="fa-solid fa-chevron-right fs-6 me-1"></i>
                                Home Renovation
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a>
                                <i class="fa-solid fa-chevron-right fs-6 me-1"></i>
                                General Carpentry
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a>
                                <i class="fa-solid fa-chevron-right fs-6 me-1"></i>
                                Home Renovation
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a>
                                <i class="fa-solid fa-chevron-right fs-6 me-1"></i>
                                General Carpentry
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a>
                                <i class="fa-solid fa-chevron-right fs-6 me-1"></i>
                                General Carpentry
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row justify-content-between mt-5">
                <div class="col-xl-7 col-lg-7">
                    <h2>
                        Positive Attitude Even During Challenging Times
                    </h2>
                    <p>
                        In the hustle and bustle of the workplace, maintaining a positive attitude isn't just a
                        luxury; it's a necessity. Yet, amidst deadlines, meetings, and the daily grind, it can be
                        challenging to sustain that uplifting perspective. However, with the right strategies,
                        cultivating and preserving a positive outlook becomes an achievable goal.
                    </p>
                    <div>
                        <h4>
                            Starting with Interaction
                        </h4>
                        <p>
                            The foundation of a positive workplace culture begins with how we engage with our
                            colleagues, irrespective of their position in the hierarchy. Whether it's acknowledging
                            small victories or offering support during tough times, injecting optimism and encouragement
                            into the workplace benefits everyone.
                            Rachel Sheerin, a prominent speaker on burnout and happiness, emphasizes that positive
                            individuals emit a distinct energy. "Positive people show their attitude through their
                            words, actions, and feelings," she notes. "Their presence alone changes the energy in a
                            room, impacting the world and those around them."
                            Maintaining this positivity isn't just about personal benefit; it's about fostering a
                            supportive environment for all. Empathy and respect for coworkers, even during challenging
                            times, underscore our commitment to their well-being.
                        </p>
                    </div>
                    <div>
                        <h4>
                            Starting with Interaction
                        </h4>
                        <p>
                            The foundation of a positive workplace culture begins with how we engage with our
                            colleagues, irrespective of their position in the hierarchy. Whether it's acknowledging
                            small victories or offering support during tough times, injecting optimism and encouragement
                            into the workplace benefits everyone.
                            Rachel Sheerin, a prominent speaker on burnout and happiness, emphasizes that positive
                            individuals emit a distinct energy. "Positive people show their attitude through their
                            words, actions, and feelings," she notes. "Their presence alone changes the energy in a
                            room, impacting the world and those around them."
                            Maintaining this positivity isn't just about personal benefit; it's about fostering a
                            supportive environment for all. Empathy and respect for coworkers, even during challenging
                            times, underscore our commitment to their well-being.
                        </p>
                    </div>
                </div>
                <div class="category col-xl-4 col-lg-4 col-md-4">
                    <h3>
                        recent news
                    </h3>
                    <div class="d-flex justify-content-between mt-3">
                        <div class="me-3">
                            <img src="assets/images/news-22-370x272.jpg" class="image-new">
                        </div>
                        <div>
                            <h5>
                                july 25,2022
                            </h5>
                            <h4>
                                We Advocate Swapping Screen Time
                            </h4>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mt-3">
                        <div class="me-3">
                            <img src="assets/images/news-23-370x272.jpg" class="image-new">
                        </div>
                        <div>
                            <h5>
                                july 25,2022
                            </h5>
                            <h4>
                                We Advocate Swapping Screen Time
                            </h4>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mt-3">
                        <div class="me-3">
                            <img src="assets/images/news-24-370x272.jpg" class="image-new">
                        </div>
                        <div>
                            <h5>
                                july 25,2022
                            </h5>
                            <h4>
                                We Advocate Swapping Screen Time
                            </h4>
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
                        <div>
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="address-icon">
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
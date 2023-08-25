<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/js/splide.min.js"
        integrity="sha512-4TcjHXQMLM7Y6eqfiasrsnRCc8D/unDeY1UGKGgfwyLUCTsHYMxF7/UHayjItKQKIoP6TTQ6AMamb9w2GMAvNg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/css/themes/splide-default.min.css"
        integrity="sha512-KhFXpe+VJEu5HYbJyKQs9VvwGB+jQepqb4ZnlhUF/jQGxYJcjdxOTf6cr445hOc791FFLs18DKVpfrQnONOB1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css"
        integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.rtl.min.css"
        integrity="sha512-wO8UDakauoJxzvyadv1Fm/9x/9nsaNyoTmtsv7vt3/xGsug25X7fCUWEyBh1kop5fLjlcrK3GMVg8V+unYmrVA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="{{asset('EndUser')}}/styles/pages/main.css">

    <title>Document</title>
</head>

<body>
    <div class="page-wrapper">
        <nav class="navbar navbar-expand-lg navbar-expand-md bg-blue sticky-top">
            <div class="container">
                <div class="navbar-brand">
                    <a class="fw-bold text-white m-0 text-decoration-none h3" href="index">VCare</a>
                </div>
                <button class="navbar-toggler btn-outline-light border-0 shadow-none" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <div class="d-flex gap-3 flex-wrap justify-content-center" role="group">
                        <a type="button" class="btn btn-outline-light navigation--button" href="index">Home</a>
                        <a type="button" class="btn btn-outline-light navigation--button"
                            href="majors">majors</a>
                        <a type="button" class="btn btn-outline-light navigation--button"
                            href="index">Doctors</a>
                        <a type="button" class="btn btn-outline-light navigation--button" href="login">login</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container-fluid bg-blue text-white pt-3">
            <div class="container pb-5">
                <div class="row gap-2">
                    <div class="col-sm order-sm-2">
                        <img src="{{asset('EndUser')}}//images/banner.jpg" class="img-fluid banner-img banner-img" alt="banner-image"
                            height="200">
                    </div>
                    <div class="col-sm order-sm-1">
                        <h1 class="h1">Have a Medical Question?</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nesciunt repellendus itaque,
                            laborum
                            saepe
                            enim maxime, delectus, dicta cumque error cupiditate nobis officia quam perferendis
                            consequatur
                            cum
                            iure
                            quod facere.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="h1 fw-bold text-center my-4">majors</h2>
            <div class="d-flex flex-wrap gap-4 justify-content-center">
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('EndUser')}}//images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Major title</h4>
                        <a href="index" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('EndUser')}}//images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Major title</h4>
                        <a href="index" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('EndUser')}}//images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Major title</h4>
                        <a href="index" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('EndUser')}}//images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Major title</h4>
                        <a href="index" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('EndUser')}}//images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Major title</h4>
                        <a href="index" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('EndUser')}}//images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Major title</h4>
                        <a href="index" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('EndUser')}}//images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Major title</h4>
                        <a href="index" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('EndUser')}}//images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Major title</h4>
                        <a href="index" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
            </div>
            <h2 class="h1 fw-bold text-center my-4">doctors</h2>
            <section class="splide home__slider__doctors mb-5">
                <div class="splide__track ">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="card p-2" style="width: 18rem;">
                                <img src="{{asset('EndUser')}}//images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                                    alt="major">
                                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                    <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                    <h6 class="card-title fw-bold text-center">Major</h6>
                                    <a href="doctors/doctor" class="btn btn-outline-primary card-button">Book an
                                        appointment</a>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card p-2" style="width: 18rem;">
                                <img src="{{asset('EndUser')}}//images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                                    alt="major">
                                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                    <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                    <h6 class="card-title fw-bold text-center">Major</h6>
                                    <a href="doctors/doctor" class="btn btn-outline-primary card-button">Book an
                                        appointment</a>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card p-2" style="width: 18rem;">
                                <img src="{{asset('EndUser')}}//images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                                    alt="major">
                                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                    <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                    <h6 class="card-title fw-bold text-center">Major</h6>
                                    <a href="index" class="btn btn-outline-primary card-button">Browse
                                        Doctors</a>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card p-2" style="width: 18rem;">
                                <img src="{{asset('EndUser')}}//images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                                    alt="major">
                                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                    <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                    <h6 class="card-title fw-bold text-center">Major</h6>
                                    <a href="doctors/doctor" class="btn btn-outline-primary card-button">Book an
                                        appointment</a>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card p-2" style="width: 18rem;">
                                <img src="{{asset('EndUser')}}//images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                                    alt="major">
                                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                    <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                    <h6 class="card-title fw-bold text-center">Major</h6>
                                    <a href="doctors/doctor" class="btn btn-outline-primary card-button">Book an
                                        appointment</a>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card p-2" style="width: 18rem;">
                                <img src="{{asset('EndUser')}}//images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                                    alt="major">
                                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                    <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                    <h6 class="card-title fw-bold text-center">Major</h6>
                                    <a href="doctors/doctor" class="btn btn-outline-primary card-button">Book an
                                        appointment</a>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card p-2" style="width: 18rem;">
                                <img src="{{asset('EndUser')}}//images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                                    alt="major">
                                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                    <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                    <h6 class="card-title fw-bold text-center">Major</h6>
                                    <a href="doctors/doctor" class="btn btn-outline-primary card-button">Book an
                                        appointment</a>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card p-2" style="width: 18rem;">
                                <img src="{{asset('EndUser')}}//images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                                    alt="major">
                                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                    <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                    <h6 class="card-title fw-bold text-center">Major</h6>
                                    <a href="doctors/doctor" class="btn btn-outline-primary card-button">Book an
                                        appointment</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="banner container d-block d-lg-grid d-md-block d-sm-block">
            <div class="info">
                <div class="info__details">
                    <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                        alt="" width="50" height="50">
                    <h4 class="title m-0">
                        everything you need is found at VCare.
                    </h4>
                    <p class="content">
                        search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                        you
                        can also order medicine or book a surgery.
                    </p>
                </div>
            </div>
            <div class="info">
                <div class="info__details">
                    <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                        alt="" width="50" height="50">
                    <h4 class="title m-0">
                        everything you need is found at VCare.
                    </h4>
                    <p class="content">
                        search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                        you
                        can also order medicine or book a surgery.
                    </p>
                </div>
            </div>
            <div class="info">
                <div class="info__details">
                    <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                        alt="" width="50" height="50">
                    <h4 class="title m-0">
                        everything you need is found at VCare.
                    </h4>
                    <p class="content">
                        search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                        you
                        can also order medicine or book a surgery.
                    </p>
                </div>
            </div>
            <div class="info">
                <div class="info__details">
                    <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                        alt="" width="50" height="50">
                    <h4 class="title m-0">
                        everything you need is found at VCare.
                    </h4>
                    <p class="content">
                        search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                        you
                        can also order medicine or book a surgery.
                    </p>
                </div>
            </div>
            <div class="bottom--left bottom--content bg-blue text-white">
                <h4 class="title">download the application now</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus facere eveniet in id, quod
                    explicabo minus ut, sint possimus, fuga voluptas. Eius molestias eveniet labore ullam magnam sequi
                    possimus quaerat!</p>
                <div class="app-group">
                    <div class="app"><img
                            src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/google-play-logo.svg"
                            alt="">Google Play</div>
                    <div class="app"><img
                            src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/apple-logo.svg"
                            alt="">App Store</div>
                </div>
            </div>
            <div class="bottom--right bg-blue text-white">
                <img src="{{asset('EndUser')}}//images/banner.jpg" class="img-fluid banner-img">
            </div>
        </div>
    </div>


    <footer class="container-fluid bg-blue text-white py-3">
        <div class="row gap-2">

            <div class="col-sm order-sm-1">
                <h1 class="h1">About Us</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nesciunt repellendus itaque,
                    laborum
                    saepe
                    enim maxime, delectus, dicta cumque error cupiditate nobis officia quam perferendis consequatur
                    cum
                    iure
                    quod facere.</p>
            </div>
            <div class="col-sm order-sm-2">
                <h1 class="h1">Links</h1>
                <div class="links d-flex gap-2 flex-wrap">
                    <a href="index" class="link text-white">Home</a>
                    <a href="majors" class="link text-white">Majors</a>
                    <a href="index" class="link text-white">Doctors</a>
                    <a href="login" class="link text-white">Login</a>
                    <a href="register" class="link text-white">Register</a>
                    <a href="contact" class="link text-white">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"
        integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('EndUser')}}//scripts/home.js"></script>
</body>

</html>
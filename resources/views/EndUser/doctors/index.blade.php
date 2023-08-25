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
                    <a class="fw-bold text-white m-0 text-decoration-none h3" href="../index" index.html">VCare</a>
                </div>
                <button class="navbar-toggler btn-outline-light border-0 shadow-none" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <div class="d-flex gap-3 flex-wrap justify-content-center" role="group">
                        <a type="button" class="btn btn-outline-light navigation--button" href="../index"
                            index.html">Home</a>
                        <a type="button" class="btn btn-outline-light navigation--button" href="../majors"
                            majors.html">majors</a>
                        <a type="button" class="btn btn-outline-light navigation--button"
                            href="./index">Doctors</a>
                        <a type="button" class="btn btn-outline-light navigation--button" href="../login">login</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="../index"
                            index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">doctors</li>
                </ol>
            </nav>
            <div
                class="filteration d-flex gap-3 mb-3 flex-wrap justify-content-center justify-content-lg-start justify-content-md-start">
                <div class="dropdown">
                    <button class="btn bg-blue btn-primary align-items-center d-flex gap-2 dropdown-toggle"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        governorate
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Cairo</a></li>
                        <li><a class="dropdown-item" href="#">Alexandria</a></li>
                        <li><a class="dropdown-item" href="#">Giza</a></li>
                        <li><a class="dropdown-item" href="#">Shubra El-Kheima</a></li>
                        <li><a class="dropdown-item" href="#">Port Said</a></li>
                        <li><a class="dropdown-item" href="#">Suez</a></li>
                        <li><a class="dropdown-item" href="#">Luxor</a></li>
                        <li><a class="dropdown-item" href="#">Asyut</a></li>
                        <li><a class="dropdown-item" href="#">Ismailia</a></li>
                        <li><a class="dropdown-item" href="#">Fayoum</a></li>
                        <li><a class="dropdown-item" href="#">Zagazig</a></li>
                        <li><a class="dropdown-item" href="#">Aswan</a></li>
                        <li><a class="dropdown-item" href="#">Damietta</a></li>
                        <li><a class="dropdown-item" href="#">Damanhur</a></li>
                        <li><a class="dropdown-item" href="#">Minya</a></li>
                        <li><a class="dropdown-item" href="#">Beni Suef</a></li>
                        <li><a class="dropdown-item" href="#">Qena</a></li>
                        <li><a class="dropdown-item" href="#">Sohag</a></li>
                        <li><a class="dropdown-item" href="#">Hurghada</a></li>
                        <li><a class="dropdown-item" href="#">6th of October</a></li>
                        <li><a class="dropdown-item" href="#">Shibin El Kom</a></li>
                        <li><a class="dropdown-item" href="#">Banha</a></li>
                        <li><a class="dropdown-item" href="#">Kafr el-Sheikh</a></li>
                        <li><a class="dropdown-item" href="#">Arish</a></li>
                        <li><a class="dropdown-item" href="#">Mallawi</a></li>
                        <li><a class="dropdown-item" href="#">10th of Ramadan</a></li>
                        <li><a class="dropdown-item" href="#">Bilbais</a></li>
                        <li><a class="dropdown-item" href="#">Marsa Matruh</a></li>
                        <li><a class="dropdown-item" href="#">Idfu</a></li>
                        <li><a class="dropdown-item" href="#">Mit Ghamr</a></li>
                        <li><a class="dropdown-item" href="#">Al-Hamidiyya</a></li>
                        <li><a class="dropdown-item" href="#">Desouk</a></li>
                        <li><a class="dropdown-item" href="#">Qalyub</a></li>
                        <li><a class="dropdown-item" href="#">Abu Kabir</a></li>
                        <li><a class="dropdown-item" href="#">Kafr el-Dawwar</a></li>
                        <li><a class="dropdown-item" href="#">Girga</a></li>
                        <li><a class="dropdown-item" href="#">Akhmim</a></li>
                        <li><a class="dropdown-item" href="#">Matareya</a></li>
                        <li><a class="dropdown-item" href="#">Qutur</a></li>
                        <li><a class="dropdown-item" href="#">New Cairo</a></li>
                        <li><a class="dropdown-item" href="#">Siwa Oasis</a></li>
                        <li><a class="dropdown-item" href="#">Hurghada</a></li>
                        <li><a class="dropdown-item" href="#">El Alamein</a></li>
                        <li><a class="dropdown-item" href="#">Ras El Bar</a></li>
                        <li><a class="dropdown-item" href="#">Rafah</a></li>
                        <li><a class="dropdown-item" href="#">Dahab</a></li>
                        <li><a class="dropdown-item" href="#">Nuweiba</a></li>
                        <li><a class="dropdown-item" href="#">Saint Catherine</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="btn bg-blue btn-primary align-items-center d-flex gap-2 dropdown-toggle"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        city
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Cairo</a></li>
                        <li><a class="dropdown-item" href="#">Alexandria</a></li>
                        <li><a class="dropdown-item" href="#">Giza</a></li>
                        <li><a class="dropdown-item" href="#">Shubra El-Kheima</a></li>
                        <li><a class="dropdown-item" href="#">Port Said</a></li>
                        <li><a class="dropdown-item" href="#">Suez</a></li>
                        <li><a class="dropdown-item" href="#">Luxor</a></li>
                        <li><a class="dropdown-item" href="#">Asyut</a></li>
                        <li><a class="dropdown-item" href="#">Ismailia</a></li>
                        <li><a class="dropdown-item" href="#">Fayoum</a></li>
                        <li><a class="dropdown-item" href="#">Zagazig</a></li>
                        <li><a class="dropdown-item" href="#">Aswan</a></li>
                        <li><a class="dropdown-item" href="#">Damietta</a></li>
                        <li><a class="dropdown-item" href="#">Damanhur</a></li>
                        <li><a class="dropdown-item" href="#">Minya</a></li>
                        <li><a class="dropdown-item" href="#">Beni Suef</a></li>
                        <li><a class="dropdown-item" href="#">Qena</a></li>
                        <li><a class="dropdown-item" href="#">Sohag</a></li>
                        <li><a class="dropdown-item" href="#">Hurghada</a></li>
                        <li><a class="dropdown-item" href="#">6th of October</a></li>
                        <li><a class="dropdown-item" href="#">Shibin El Kom</a></li>
                        <li><a class="dropdown-item" href="#">Banha</a></li>
                        <li><a class="dropdown-item" href="#">Kafr el-Sheikh</a></li>
                        <li><a class="dropdown-item" href="#">Arish</a></li>
                        <li><a class="dropdown-item" href="#">Mallawi</a></li>
                        <li><a class="dropdown-item" href="#">10th of Ramadan</a></li>
                        <li><a class="dropdown-item" href="#">Bilbais</a></li>
                        <li><a class="dropdown-item" href="#">Marsa Matruh</a></li>
                        <li><a class="dropdown-item" href="#">Idfu</a></li>
                        <li><a class="dropdown-item" href="#">Mit Ghamr</a></li>
                        <li><a class="dropdown-item" href="#">Al-Hamidiyya</a></li>
                        <li><a class="dropdown-item" href="#">Desouk</a></li>
                        <li><a class="dropdown-item" href="#">Qalyub</a></li>
                        <li><a class="dropdown-item" href="#">Abu Kabir</a></li>
                        <li><a class="dropdown-item" href="#">Kafr el-Dawwar</a></li>
                        <li><a class="dropdown-item" href="#">Girga</a></li>
                        <li><a class="dropdown-item" href="#">Akhmim</a></li>
                        <li><a class="dropdown-item" href="#">Matareya</a></li>
                        <li><a class="dropdown-item" href="#">Qutur</a></li>
                        <li><a class="dropdown-item" href="#">New Cairo</a></li>
                        <li><a class="dropdown-item" href="#">Siwa Oasis</a></li>
                        <li><a class="dropdown-item" href="#">Hurghada</a></li>
                        <li><a class="dropdown-item" href="#">El Alamein</a></li>
                        <li><a class="dropdown-item" href="#">Ras El Bar</a></li>
                        <li><a class="dropdown-item" href="#">Rafah</a></li>
                        <li><a class="dropdown-item" href="#">Dahab</a></li>
                        <li><a class="dropdown-item" href="#">Nuweiba</a></li>
                        <li><a class="dropdown-item" href="#">Saint Catherine</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="btn bg-blue btn-primary align-items-center d-flex gap-2 dropdown-toggle"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        major
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
            <div class="doctors-grid">
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('EndUser')}}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="doctor" doctor.html" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('EndUser')}}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="doctor" doctor.html" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('EndUser')}}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="./doctor" doctor.html" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('EndUser')}}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="./doctor" doctor.html" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('EndUser')}}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="doctor" doctor.html" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('EndUser')}}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="doctor" doctor.html" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('EndUser')}}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="doctor" doctor.html" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('EndUser')}}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="doctor" doctor.html" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('EndUser')}}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="doctor" doctor.html" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('EndUser')}}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="doctor" doctor.html" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('EndUser')}}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="doctor" doctor.html" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('EndUser')}}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="doctor" doctor.html" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>


            </div>
            <nav class="mt-5" aria-label="navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link page-prev" href="#" aria-label="Previous">
                            <span aria-hidden="true">
                                < </span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link page-next" href="#" aria-label="Next">
                            <span aria-hidden="true"> > </span>
                        </a>
                    </li>
                </ul>
            </nav>
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
                    <a href="../index" index" class="link text-white">Home</a>
                    <a href="../majors" majors" class="link text-white">Majors</a>
                    <a href="index" doctors/index" class="link text-white">Doctors</a>
                    <a href="../login" login" class="link text-white">Login</a>
                    <a href="../register" register" class="link text-white">Register</a>
                    <a href="../contact" contact" class="link text-white">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
        integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"
        integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
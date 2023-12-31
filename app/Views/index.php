<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Landing Page Smart English">
    <meta name="author" content="Kelompok 4 C2 2020">
    <title>Smart English Jatiuwung - Landing Page</title>
    <link rel="icon" href="pics/Logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap');
    </style>
</head>
<header class="container-fluid bg-white sticky-top border-bottom py-1" id="nav">
    <div class="container-fluid px-5 d-flex flex-wrap align-items-center justify-content-center justify-content-md-between" id="header">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img class="bi me-3" width="81" src="pics/Logo.png">
            <h3 style="color: #06B6D4;">Smart English</h3>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 fw-bold">
            <li>
                <a href="/" class="nav-link px-md-4" style="color: #06B6D4;">
                    Home
                    <div class="container" id="activeNav">
                    </div>
                </a>
            </li>
            <li><a href="/programs" class="nav-link px-md-4 link-dark">Programs</a></li>
            <li><a href="/article" class="nav-link px-md-4 link-dark">Article</a></li>
            <li><a href="/contact" class="nav-link px-md-4 link-dark">Contact</a></li>
            <li><a href="/about" class="nav-link px-md-4 link-dark">About</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <a href="/login" role="button" class="btn btn-light px-md-3 me-2" id="login">Login</a>
            <a href="/register" role="button" class="btn text-white px-md-4" id="register">Register</a>
        </div>
    </div>
</header>

<body>
    <section class="container-fluid justify-content-center carousel slide p-0" id="hero" data-bs-ride="carousel">
        <div class="text-white fw-bold" id="caption">
            <strong class="text-left">Welcome,<br>Student</strong>
            <div class="pt-2 pt-md-4" id="captionReg">
                <a href="/register" class="text-decoration-none text-white rounded px-3 py-2" style="background-color: #06B6D4;"><strong>Register Now</strong></a>
            </div>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2500">
                <img src="pics/Hero1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2500">
                <img src="pics/Hero2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2500">
                <img src="pics/Hero3.png" class="d-block w-100" alt="...">
            </div>
        </div>
    </section>

    <section class="container-md">
        <h1 class="text-center pt-3 pt-md-5">Best Programs</h1>
        <div class="row justify-content-md-between py-3 py-md-5">
            <div class="col-md-4 pb-md-0 pb-5">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card" id="cardPrograms">
                        <img src="pics/Logo.png">
                        <article class="p-3">
                            <h3>Programs 1</h3>
                            <hr>
                            <p class="p-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </article>
                    </div>
                </a>
            </div>


            <div class="col-md-4 pb-md-0 pb-5">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card" id="cardPrograms">
                        <img src="pics/Logo.png">
                        <article class="p-3">
                            <h3>Programs 2</h3>
                            <hr>
                            <p class="p-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </article>
                    </div>
                </a>
            </div>


            <div class="col-md-4 pb-md-0 pb-5">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card" id="cardPrograms">
                        <img src="pics/Logo.png" class="p-3">
                        <article class="p-3">
                            <h3>Programs 3</h3>
                            <hr>
                            <p class="p-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </article>
                    </div>
                </a>
            </div>
        </div>
    </section>
</body>

<footer class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-4 bg-white border py-2">
            <div class="container p-lg-5">
                <a href="#"><img src="pics/Logo.png" class="mt-2 mb-4" style="max-height: 120px;"></a>
                <h3>Smart English</h3>
                <p class="mb-3">Jl. Jalan No.123, Kelurahan, Kecamatan, Kota Tangerang, <br> Jawa Barat 14045 </p>
                <span class="d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="26" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg>
                    <p class="ps-2">+62 12 333 444</p>
                </span>
                <span class="d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="28" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                    </svg>
                    <p class="ps-2">CS@SmartEnglish.id</p>
                </span>
            </div>
        </div>
        <div class="col-sm-12 col-md-8 bg-light py-3">
            <div class="container-md p-lg-5">
                <div class="fs-6 row">
                    <div class="col-sm-6 col-md-3 mb-4 mb-md-0">
                        <div>
                            <b><a href="#" class="text-decoration-none text-dark">Produk Lainnya</a></b> <br> <br>
                            <a href="#" class="text-decoration-none text-dark">Lorem</a> <br>
                            <a href="#" class="text-decoration-none text-dark">Ipsum</a> <br>
                            <a href="#" class="text-decoration-none text-dark">Dolor</a> <br>
                            <a href="#" class="text-decoration-none text-dark">Sit</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-4 mb-md-0">
                        <div>
                            <b><a href="#" class="text-decoration-none text-dark">Panduan</a></b> <br> <br>
                            <a href="#" class="text-decoration-none text-dark">Lorem</a> <br>
                            <a href="#" class="text-decoration-none text-dark">Ipsum</a> <br>
                            <a href="#" class="text-decoration-none text-dark">Dolor</a> <br>
                            <a href="#" class="text-decoration-none text-dark">Sit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</html>
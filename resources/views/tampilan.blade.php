<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- <script defer src="https://use.fontawesome.com/releases/v6.1.1/js/all.js"
        integrity="sha384-xBXmu0dk1bEoiwd71wOonQLyH+VpgR1XcDH3rtxrLww5ajNTuMvBdL5SOiFZnNdp" crossorigin="anonymous">
    </script> --}}

    <link rel="stylesheet" href="./style.css">
    <title>Hello, world!</title>
</head>

<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <img src="img/about.png" alt="">
            <a class="navbar-brand fw-bold" href="#">Singadu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fw-bold" style="padding-right: 70px">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="header">Home</a>
                    </li>
                    <li class="nav-item" style="padding-right: 17rem">
                        <a class="nav-link" href="about">Prosedur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Akhir Navbar --}}


    {{-- header --}}

    <div class="container1">
        <div class="header">
            <div class="row">
                <div class="col-md-6 text-white pt-5 ps-5">
                        <h2 class="fw-bold pb-4">PENGADUAN MASYARAKAT ONLINE</h2>
                        <p class="fw-light pb-4 pe-5 fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            <br>
                            Dolorem, tempora
                            dolorum! Odit quod aliquid dolorum. 
                            <br>
                            Iste exercitationem expedita dolores placeat ullam?
                            Beatae,
                            <br>
                            officia sapiente? Eius amet nam impedit voluptate sapiente!</p>

                        <a href="/pengaduan "><button type="button" class="btn btn-transparent border border-white text-white mt-5">
                                <i class="fa-solid fa-right-to-bracket me-2"></i>Lapor</button>
                        </a>

                    </div>
                <div class="col-md-6">
                    <img src="img/header.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffff" fill-opacity="1"
                d="M0,32L48,74.7C96,117,192,203,288,202.7C384,203,480,117,576,101.3C672,85,768,139,864,170.7C960,203,1056,213,1152,197.3C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg> --}}

    </div>

    {{-- akhir header --}}

    {{-- About Us --}}

    <div class="container2">
        <div class="about-us">
            <h1 class="fw-bold pt-5 pb-2 text-center">Tentang Kami</h1>
            <div class="garis mb-5"></div>
            <p class="fw-light pb-2 pe-5 text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste, nihil magni harum voluptatum consectetur eligendi? 
                <br>
                quibusdam delectus eius alias illum nihil aspernatur? Suscipit, voluptas!</p>
            <div class="row">
                <div class="col-md-6">
                    <img src="img/header.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 pt-5">
                    <p class="fw-light pe-5 pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum perferendis natus corrupti deleniti aliquid, veniam quisquam nesciunt porro. Nostrum animi molestiae omnis et perspiciatis esse quod minima a ex exercitationem, ipsa ipsam ad reiciendis? Error.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum perferendis natus corrupti deleniti aliquid, veniam quisquam nesciunt porro. Nostrum animi molestiae omnis et perspiciatis esse quod minima a ex exercitationem, ipsa ipsam ad reiciendis? Error.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- About Us Akhir --}}

    {{-- prosedur --}}

    <div class="container3">
        <div class="prosedur">
            <h1 class="text-center fw-bold pt-5 text-white">PROSEDUR</h1>
            <div class="garis mb-5"></div>

            <div class="row text-center pe-5 ps-5 text-white">
                <div class="col-md-4">
                    <img src="img/header.png" alt="">
                    <h4>Daftar/Masuk</h4>
                    <p class="fw-light font14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos autem,
                        perferendis ipsum dolore soluta at dolorum libero aperiam molestias voluptate.</p>
                </div>
                <div class="col-md-4">
                    <img src="img/header.png" alt="">
                    <h4>Tulis Pengaduan</h4>
                    <p class="fw-light font14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos autem,
                        perferendis ipsum dolore soluta at dolorum libero aperiam molestias voluptate.</p>
                </div>
                <div class="col-md-4">
                    <img src="img/header.png" alt="">
                    <h4>Verifikasi Pengaduan</h4>
                    <p class="fw-light font14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos autem,
                        perferendis ipsum dolore soluta at dolorum libero aperiam molestias voluptate.</p>
                </div>

                <div class="w-100 d-none d-md-block"></div>

                <div class="col-md-4">
                    <img src="img/header.png" alt="">
                    <h4>Proses Tindak Lanjut</h4>
                    <p class="fw-light font14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos autem,
                        perferendis ipsum dolore soluta at dolorum libero aperiam molestias voluptate.</p>
                </div>
                <div class="col-md-4">
                    <img src="img/header.png" alt="">
                    <h4>Beri Tanggapan</h4>
                    <p class="fw-light font14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos autem,
                        perferendis ipsum dolore soluta at dolorum libero aperiam molestias voluptate.</p>
                </div>
                <div class="col-md-4">
                    <img src="img/header.png" alt="">
                    <h4>Selesai</h4>
                    <p class="fw-light font14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos autem,
                        perferendis ipsum dolore soluta at dolorum libero aperiam molestias voluptate.</p>
                </div>


            </div>
        </div>
    </div>

    {{-- akhir prosedur --}}

    {{-- footer --}}
    <div class="container4">
        <div class="footer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="height: 100%">
                <path fill="#7C8584" fill-opacity="1"
                    d="M0,64L30,58.7C60,53,120,43,180,74.7C240,107,300,181,360,197.3C420,213,480,171,540,138.7C600,107,660,85,720,90.7C780,96,840,128,900,133.3C960,139,1020,117,1080,117.3C1140,117,1200,139,1260,149.3C1320,160,1380,160,1410,160L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
                </path>
            </svg>
        </div>
    </div>














    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
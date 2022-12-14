<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../styles/layout.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.js" integrity="sha512-NMtENEqUQ8zHZWjwLg6/1FmcTWwRS2T5f487CCbQB3pQwouZfbrQfylryimT3XvQnpE7ctEKoZgQOAkWkCW/vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>PAKINTA</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-primary fixed-top">
        <div class="container-fluid">

            <span class="navbar-brand  mb-0 ms-1 h1 nav-title">
                <img src="../assets/logo.png" class="logo">
            </span>

            <div class="text-third">
                <a><i class="bi bi-hammer text-secondary mx-1"></i></a>
                <a><i class="bi bi-bell-fill text-secondary mx-1"></i></a>
            </div>

        </div>
    </nav>

    <div class="container mt-5 mx-auto p-0 border border-top-0 main-view" id="app">
        <!-- Awal Konten (*Isi Disini*) -->
        <div class="content ">

            <!-- Carousel -->
            <div id="carousel" class="carousel slide mb-3 bg-third" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <!-- <div class="carousel-item">
                        <img src="../assets/img/3.jpg" class="d-block w-100" alt="...">
                    </div> -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <!-- Cards -->
            <div class="container d-flex options">
                <div class="m-auto d-flex flex-column justify-content-center">
                    <button class="option border bg-primary p-2 mb-3 text-third d-inline-flex flex-column" onclick="optionClick(this)">
                        <i class="bi bi-card-text text-secondary"></i>
                        <span class="row">Order</span>
                    </button>
                    <button class="option border bg-primary p-2 mb-3 text-third d-inline-flex flex-column" onclick="optionClick(this)">
                        <!-- <i class="bi bi-journals text-secondary"></i> -->
                        <i class="bi bi-clipboard-fill text-secondary"></i>
                        <span class="row">Laporan</span>
                    </button>
                    <button class="option border bg-primary p-2 mb-3 text-third d-inline-flex flex-column" onclick="optionClick(this)">
                        <i class="bi bi-clock-history text-secondary"></i>
                        <span class=" row">Riwayat</span>
                    </button>
                    <button class="option border bg-primary p-2 mb-3 text-third d-inline-flex flex-column" onclick="optionClick(this)">
                        <i class="bi bi-person-fill text-secondary"></i>
                        <span class=" row">Profil</span>
                    </button>
                </div>

                <div class="m-auto d-flex flex-column justify-content-center">
                    <button class="option border bg-primary p-2 mb-3 text-third d-inline-flex flex-column" onclick="optionClick(this)">
                        <!-- <i class="bi bi-three-dots text-secondary"></i> -->
                        <i class="bi bi-hourglass-split text-secondary"></i>
                        <span class="row">Status</span>
                    </button>
                    <button class="option border bg-primary p-2 mb-3 text-third d-inline-flex flex-column" onclick="optionClick(this)">
                        <i class="bi bi-cash text-secondary"></i>
                        <span class="row">Pembayaran</span>
                    </button>
                    <button class="option border bg-primary p-2 mb-3 text-third d-inline-flex flex-column" onclick="optionClick(this)">
                        <i class="bi bi-people-fill text-secondary"></i>
                        <!-- <i class="bi bi-lightning-charge text-secondary"></i> -->
                        <span class="row">Mitra</span>
                    </button>
                    <button class="option border bg-primary p-2 mb-3 text-third d-inline-flex flex-column" onclick="optionClick(this)">
                        <i class="bi bi-info-circle-fill text-secondary"></i>
                        <!-- <i class="bi bi-lightning-charge text-secondary"></i> -->
                        <span class="row">Tentang</span>
                    </button>
                </div>
            </div>
            
            <div class="container bg-third rounded mt-5 pt-2 info">
                <div class="display-6 my-3 mt-3 fw-bold">Perawatan Bangunan</div>

                <div class="card bg-fourth p-0 border-0 mb-4">
                    <img src="assets/cat.png" class="card-img-top" alt="cat">
                    <div class="card-body">
                        <h5 class="card-title text-secondary fw-bold">Pengecatan Rumah</h5>
                        <p class="card-text text-secondary">
                            <span>Rp25k/m&sup2 untuk Indoor</span>
                            <span>Rp35k/m&sup2 untuk Outdoor</span>
                        </p>
                    </div>
                </div>

                <div class="card bg-fourth p-0 border-0 mb-4">
                    <img src="assets/atap.png" class="card-img-top" alt="cat">
                    <div class="card-body">
                        <h5 class="card-title text-secondary fw-bold">Perbaikan Atap</h5>
                        <p class="card-text text-secondary">
                            <span>Rp25k - Rp255k/meter bergantung</span>
                            <span>jenis material atap</span>
                        </p>
                    </div>
                </div>

                <div class="card bg-fourth p-0 border-0 mb-4">
                    <img src="assets/talang_air.png" class="card-img-top" alt="cat">
                    <div class="card-body">
                        <h5 class="card-title text-secondary fw-bold">Perbaikan Talang Air</h5>
                        <p class="card-text text-secondary">
                            <span>Rp40k - Rp50k/meter (dengan penyesuaian)</span>
                        </p>
                    </div>
                </div>

                <div class="card bg-fourth p-0 border-0 mb-4">
                    <img src="assets/lantai.png" class="card-img-top" alt="cat">
                    <div class="card-body">
                        <h5 class="card-title text-secondary fw-bold">Perbaikan Lantai</h5>
                        <p class="card-text text-secondary">
                            <span>Rp50k - Rp100k/meter bergantung kesulitan pekerjaan dan material lantai</span>
                        </p>
                    </div>
                </div>

                <div class="card bg-fourth p-0 border-0 mb-4">
                    <img src="assets/plafon.png" class="card-img-top" alt="cat">
                    <div class="card-body">
                        <h5 class="card-title text-secondary fw-bold">Perbaikan Plafon</h5>
                        <p class="card-text text-secondary">
                            <span>Rp20k - Rp80k/meter bergantung ketinggian dan kesulitan pengerjaan</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Bar -->
    <div class="container bg-secondary to-center floating-bar fixed-bottom">
        <ul class="navbar-nav nav-justified w-100 d-flex flex-row">
            <!-- HOME, PEKERJAAN, LAPORAN, PEMBAYARAN -->
            <li class="nav-item">
                <button class="bg-third border to-center" onclick="navButtonClick(this)">
                    <i class="bi bi-house-fill"></i>
                </button>
            </li>
            <li class="nav-item">
                <button class="bg-third border to-center" onclick="navButtonClick(this)">
                    <i class="fa-solid fa-person-digging"></i>
                </button>
            </li>
            <li class="nav-item">
                <button class="bg-third border to-center" onclick="navButtonClick(this)">
                    <i class="bi bi-clipboard-fill"></i>
                </button>
            </li>
            <li class="nav-item">
                <button class="bg-third border to-center" onclick="navButtonClick(this)">
                    <i class="bi bi-cash"></i>
                </button>
            </li>
        </ul>
    </div>

    <script src="../styles/button.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(".b").click(function() {
                $(this).toggleClass("b");
                $(this).toggleClass("b-selected");
            });
        });

        var elem = document.querySelector('.carousel');
        var flkty = new Flickity(elem, {
            // options
            cellalign: 'right',
            pageDots: false,
            groupCells: '20%',
            selectedAttraction: 0.03,
            friction: 0.15
        });
        var flkty = new Flickity('.carousel', {
            // options
        });
    </script>
</body>

</html>
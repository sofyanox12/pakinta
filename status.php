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
        <div class="content status-content px-2 pt-2">
            <div class="display-6 my-3 ms-2">Pembangunan Rumah<i class="fa-solid fa-hammer ms-3"></i></div>

            <div class="container p-3 mb-3 status-tukang bg-third d-flex">
                <div class="col-2 d-flex flex-column icon-tukang">
                    <i class="bi bi-person-circle"></i>
                </div>
                <div class="col-6 ms-4">
                    <span class="row nama fw-bold">Andi Farhan Dg. Nuntung</span>
                    <span class="row identitas">34 Tahun</span>
                    <span class="row identitas">Kepala Tukang</span>
                </div>
                <div class="col">
                    <button class="btn bg-primary text-white tukang-btn">Konfirmasi</button>
                    <button class="btn bg-secondary text-dark tukang-btn">Lihat <i class="bi bi-eye-fill"></i></button>
                </div>
            </div>

            <div class="container p-3 mb-3 status-tukang bg-third d-flex">
                <div class="col-2 d-flex flex-column icon-tukang">
                    <i class="bi bi-person-circle"></i>
                </div>
                <div class="col-6 ms-4">
                    <span class="row nama fw-bold">Heru Wacana Hidayanto</span>
                    <span class="row identitas">41 Tahun</span>
                    <span class="row identitas">Kepala Tukang</span>
                </div>
                <div class="col">
                    <button class="btn bg-primary text-white tukang-btn">Konfirmasi</button>
                    <button class="btn bg-secondary text-dark tukang-btn">Lihat<i class="bi bi-eye-fill"></i></button>
                </div>
            </div>


        </div>
    </div>
</body>

</html>
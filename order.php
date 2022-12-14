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
        <div class="content px-2 pt-2">
            <div class="display-6 my-3 ms-2 ">Form Pemesanan Tukang<i class="fa-solid fa-person-digging ms-3"></i></div>
            <div class="row px-2 mb-2">
                <div class="col-4">
                    <label class="label-formulir">Nama Pemilik Proyek</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Masukkan Nama">
                </div>
            </div>

            <div class="row px-2 mb-2">
                <div class="col-4">
                    <label class="label-formulir">Alamat Proyek</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Masukkan Alamat">
                </div>
            </div>

            <div class="row px-2 mb-2">
                <div class="col-4">
                    <label class="label-formulir">Jenis Proyek</label>
                </div>
                <div class="col">
                    <select class="form-select w-75">
                        <option selected>-- Pilih Jenis Proyek--</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                    </select>
                </div>
            </div>

            <div class="row px-2 mb-2">
                <div class="col-4">
                    <label class="label-formulir">Jenis Pekerjaan</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Masukkan Jenis Pekerjaan">
                </div>
            </div>

            <div class="row px-2 mb-2">
                <div class="col-4">
                    <label class="label-formulir">Sistem Pekerjaan</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Masukkan Sistem Pekerjaan">
                </div>
            </div>

            <div class="row px-2 mb-2">
                <div class="col-4">
                    <label class="label-formulir">Luas Bangunan</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Masukkan Luas Bangunan (dalam m&sup2)">
                </div>
            </div>

            <div class="row px-2 mb-2">
                <div class="col-4">
                    <label class="label-formulir">Waktu Pekerjaan</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Masukkan Waktu Pekerjaan">
                </div>
            </div>

            <div class="row px-2 mb-2">
                <div class="col-4">
                    <label class="label-formulir">Biaya</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Masukkan Biaya Perkiraan">
                </div>
            </div>

            <div class="row px-2 mb-2">
                <div class="col-4">
                    <label class="label-formulir">Tanggal Mulai</label>
                </div>
                <div class="col">
                    <input type="date" class="form-control">
                </div>
            </div>

            <div class="row px-2 mb-2">
                <label class="label-formulir mb-1">Deskripsi Tambahan</label>
                <textarea type="text" class="form-control ms-3 w-75" placeholder="Deskripsi Tambahan"></textarea>
            </div>

            <div class="row px-2 mb-4">
                    <label class="label-formulir mb-1">Foto</label>
                    <input type="file" class="form-control ms-3 w-75" placeholder="Masukkan Foto">
            </div>

            <div class="row px-2 mb-2">
                <button type="button" class="btn bg-primary px-3 py-2 text-secondary w-75 ms-3">Kirim</button>
            </div>

        </div>
    </div>
</body>

</html>
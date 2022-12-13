<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guestbook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    </style>
</head>

<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h1>Heal.ing</h1>
            </a>

            <ul class="nav nav-pills mb-5 justify-content-end" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" href="#">Beranda</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" href="#">Informasi Wisata</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" href="#">Panduan</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" href="#">Feedback</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" href="#">Contact Us</button>
                </li>

            </ul>
    </nav>

    <div class="container">
        <form method="POST" action="proses-guestbook.php">
            <div class="form-group">
                <div class="col-md-3">
                    <label>Tanggal</label>
                    <input type="date" name="posted" class="form-control">
                </div>
            </div><br>
            <div class="form-group">
                <div class="col-md-3">
                    <label>Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Lengkap Anda">
                </div><br>
            </div>

            <div class="form-group">
                <div class="col-md-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda">
                </div><br>
            </div>

            <div class="d-grid">
                <div class="col-md-3 ">
                    <label>Asal Kota</label>
                    <input type="text" name="city" class="form-control" placeholder="Masukkan Kota Anda">
                </div><br>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <label>No HP</label>
                    <input type="text" name="noHP" class="form-control" placeholder="Masukkan No HP Anda"></input>
                </div><br>
            </div>

            <div class="d-grid">
                <div class="col-md-3 text-center">
                    <button type="submit" name="create" class="btn btn-success btn-create">Pesan Tiket</button>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
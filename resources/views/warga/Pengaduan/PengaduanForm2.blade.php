<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan | Warga</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">


</head>
<body>
    <header class="header">
        {{-- <img src="{{ asset('img/alam1.jpeg') }}" alt="Logo"> --}}
        <div class="kotak">

            <a href="#" class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="Logo"> SIWALANG
            </a>

            <div class="menu-container">
                <a href="#">Beranda</a>
                <a href="#">Menu</a>
                <a href="#">Logout</a>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="form-container">
            <div class="card card-primary">
                <div class="card-header">
                    <h2 class="card-title">FORM PENGADUAN</h2>
                </div>

                <form method="post" action="../submit_pengaduan">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama<span class="required">*</span></label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda">
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal<span class="required">*</span></label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>
                        <div class="form-group">
                            <label for="keluhan">Keluhan<span class="required">*</span></label>
                            <textarea class="form-control" id="keluhan" name="keluhan" rows="3" placeholder="Masukkan Keluhan Anda"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="foto">Upload Foto<span class="required">*</span></label>
                            <label for="upload-button" class="file-upload-btn">
                                Pilih Foto
                                <input type="file" id="upload-button" name="foto" style="display: none;">
                            </label>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="button" class="btn btn-secondary">Batalkan</button>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>@SIWALANG 2024</p>
    </div>

</body>
</html>

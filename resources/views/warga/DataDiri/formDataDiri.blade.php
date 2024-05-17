<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Diri</title>
</head>
<body>
    <h1>Input Data Diri</h1>
    <form action="{{ route('store_data_diri') }}" method="POST">
        @csrf

        <label for="tempat_lahir">Tempat Lahir:</label><br>
        <input type="text" id="tempat_lahir" name="tempat_lahir"><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir"><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <select id="jenis_kelamin" name="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>

        <label for="status_perkawinan">Status Perkawinan:</label><br>
        <input type="text" id="status_perkawinan" name="status_perkawinan"><br>

        <label for="no_telp">No. Telp:</label><br>
        <input type="text" id="no_telp" name="no_telp"><br>

        <label for="no_kk">No. KK:</label><br>
        <input type="text" id="no_kk" name="no_kk"><br>

        <label for="hubungan_kk">Hubungan KK:</label><br>
        <input type="text" id="hubungan_kk" name="hubungan_kk"><br>

        <label for="status_kependudukan">Status Kependudukan:</label><br>
        <input type="text" id="status_kependudukan" name="status_kependudukan"><br>

        <label for="alamat_ktp">Alamat KTP:</label><br>
        <input type="text" id="alamat_ktp" name="alamat_ktp"><br>

        <label for="alamat_tinggal">Alamat Tinggal:</label><br>
        <input type="text" id="alamat_tinggal" name="alamat_tinggal"><br>

<!-- Field for nik -->
<label for="nik">NIK:</label><br>
<input type="text" id="nik" name="nik" value="{{ Auth::user()->nik }}" readonly><br>

<!-- Field for nama -->
<label for="nama">Nama:</label><br>
<input type="text" id="nama" name="nama" value="{{ Auth::user()->nama }}" readonly><br>


        <input type="submit" value="Submit">
    </form>
</body>
</html>

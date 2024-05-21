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
            <option value="" disabled selected>Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>

        <label for="status_perkawinan">Status Perkawinan:</label><br>
        <select id="status_perkawinan" name="status_perkawinan">
            <option value="" disabled selected>Pilih Status Perkawinan</option>
            <option value="Nikah">Nikah</option>
            <option value="Belum Nikah">Belum Nikah</option>
        </select><br>

        <label for="no_telp">No. Telp:</label><br>
        <input type="text" id="no_telp" name="no_telp"><br>

        <label for="no_kk">No. KK:</label><br>
        <input type="text" id="no_kk" name="no_kk"><br>

        <label for="hubungan_kk">Hubungan KK:</label><br>
        <input type="text" id="hubungan_kk" name="hubungan_kk"><br>

        <label for="status_kependudukan">Status Kependudukan:</label><br>
        <select id="status_kependudukan" name="status_kependudukan">
            <option value="" disabled selected>Pilih Status Kependudukan</option>
            <option value="Warga Asli">Warga Asli</option>
            <option value="Pindah">Pindahan</option>
            <option value="Kontrak">Kontrak Rumah</option>
            <option value="Kost">Kost</option>
        </select><br>

        <label for="alamat_ktp">Alamat KTP:</label><br>
        <input type="text" id="alamat_ktp" name="alamat_ktp"><br>

        <label for="alamat_tinggal">Alamat Tinggal:</label><br>
        <input type="text" id="alamat_tinggal" name="alamat_tinggal"><br>

        <label for="kewarganegaraan">Kewarganegaraan:</label><br>
        <input type="text" id="kewarganegaraan" name="kewarganegaraan"><br>

        <label for="kota">Kota:</label><br>
        <input type="text" id="kota" name="kota"><br>

        <label for="kecamatan">Kecamatan:</label><br>
        <input type="text" id="kecamatan" name="kecamatan"><br>

        <label for="kelurahan">Kelurahan:</label><br>
        <input type="text" id="kelurahan" name="kelurahan"><br>

        <label for="RT">RT:</label><br>
        <input type="number" id="RT" name="RT"><br>

        <label for="RW">RW:</label><br>
        <input type="number" id="RW" name="RW"><br>

                <!-- Input gambar untuk foto_ktp -->
        <label for="foto_ktp">Foto KTP:</label><br>
        <input type="file" id="foto_ktp" name="foto_ktp"><br>

        <!-- Input gambar untuk foto_kk -->
        <label for="foto_kk">Foto KK:</label><br>
        <input type="file" id="foto_kk" name="foto_kk"><br>

        <!-- Input gambar untuk surat_nikah -->
        <label for="surat_nikah">Surat Nikah:</label><br>
        <input type="file" id="surat_nikah" name="surat_nikah"><br>

        <!-- Input gambar untuk foto_profil -->
        <label for="foto_profil">Foto Profil:</label><br>
        <input type="file" id="foto_profil" name="foto_profil"><br>

        <label for="nik">NIK:</label><br>
        <input type="text" id="nik" name="nik" value="{{ Auth::user()->nik }}" readonly><br>

        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="{{ Auth::user()->nama }}" readonly><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

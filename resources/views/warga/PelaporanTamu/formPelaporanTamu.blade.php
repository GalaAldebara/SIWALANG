<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pelaporan Tamu</title>
</head>
<body>
    <h1>Form Pelaporan Tamu</h1>
    <form action="{{ route('store_pelaporan_tamu') }}" method="POST">
        @csrf
        <label for="nama_tuan_rumah">Nama Tuan Rumah:</label><br>
        <input type="text" id="nama_tuan_rumah" name="nama_tuan_rumah"><br>

        <label for="no_ktp_tamu">No. KTP Tamu:</label><br>
        <input type="text" id="no_ktp_tamu" name="no_ktp_tamu"><br>

        <label for="nama_tamu">Nama Tamu:</label><br>
        <input type="text" id="nama_tamu" name="nama_tamu"><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <select id="jenis_kelamin" name="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat"></textarea><br>

        <label for="tanggal_bertamu">Tanggal Bertamu:</label><br>
        <input type="date" id="tanggal_bertamu" name="tanggal_bertamu" value="{{ date('Y-m-d') }}"><br>

        <label for="keterangan_keperluan">Keterangan Keperluan Izin:</label><br>
        <textarea id="keterangan_keperluan" name="keterangan_keperluan"></textarea><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

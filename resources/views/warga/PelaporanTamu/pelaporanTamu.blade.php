<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelaporan Tamu</title>
</head>
<body>
    <h1>Daftar Pelaporan Tamu</h1>

    @if(session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
    @endif

    <table border="1">
        <tr>
            <th>No Tamu</th>
            <th>Nama Tuan Rumah</th>
            <th>No KTP Tamu</th>
            <th>Nama Tamu</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Tanggal Bertamu</th>
            <th>Keterangan Keperluan</th>
            <th>NIK</th>
        </tr>
        @foreach ($pelaporanTamu as $tamu)
        <tr>
            <td>{{ $tamu->noTamu }}</td>
            <td>{{ $tamu->nama_tuan_rumah }}</td>
            <td>{{ $tamu->no_ktp_tamu }}</td>
            <td>{{ $tamu->nama_tamu }}</td>
            <td>{{ $tamu->jenis_kelamin }}</td>
            <td>{{ $tamu->alamat }}</td>
            <td>{{ $tamu->tanggal_bertamu }}</td>
            <td>{{ $tamu->keterangan_keperluan }}</td>
            <td>{{ $tamu->nik }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri</title>
</head>
<body>
    <h1>Data Diri</h1>
    <table border="1">
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Status Perkawinan</th>
                <th>No. Telepon</th>
                <th>No. KK</th>
                <th>Hubungan KK</th>
                <th>Status Kependudukan</th>
                <th>Alamat KTP</th>
                <th>Alamat Tinggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataDiri as $data)
            <tr>
                <td>{{ $data->nik }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->tempat_lahir }}</td>
                <td>{{ $data->tanggal_lahir }}</td>
                <td>{{ $data->jenis_kelamin }}</td>
                <td>{{ $data->status_perkawinan }}</td>
                <td>{{ $data->no_telp }}</td>
                <td>{{ $data->no_kk }}</td>
                <td>{{ $data->hubungan_kk }}</td>
                <td>{{ $data->status_kependudukan }}</td>
                <td>{{ $data->alamat_ktp }}</td>
                <td>{{ $data->alamat_tinggal }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

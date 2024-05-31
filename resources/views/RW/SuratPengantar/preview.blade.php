@extends('layouts.template')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Preview Surat Pengantar</title>
    <style>
        .big-box {
            width: 80%;
            margin: auto;
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="big-box">
        <div class="header">
            <p>RUKUN WARGA 01 RUKUN TETANGGA 01<br>
            KELURAHAN LANG-LANG,<br>
            KECAMATAN SINGOSARI, KABUPATEN MALANG</p>
            <hr>
        </div>
        <div class="title">
            <p>SURAT PENGANTAR</p>
            <p>No. 01/2024/03/12/001</p>
        </div>
        <div class="content">
            <p>Yang bertanda tangan dibawah ini ketua RT 01 RW 001 Desa Lang-Lang Kecamatan Singosari Kabupaten Malang, dengan ini memberikan pengantar/ keterangan kepada :</p>
            <p>Nama :<br>
            NIK/ No.KTP :<br>
            Tempat, Tgl.Lahir :<br>
            Jenis Kelamin :<br>
            Kewarganegaraan :<br>
            Status Perkawinan :<br>
            Pekerjaan :<br>
            Alamat :<br>
            Keperluan :</p>
            <p>Demikian surat ini dibuat dengan sebenarnya untuk dipergunakan sebagaimana mestinya.</p>
        </div>
        <div class="signature">
            <table>
                <tr>
                    <td class="left">Lang-Lang, 12 Maret 2024<br>Mengetahui</td>
                    <td class="right"></td>
                </tr>
                <tr>
                    <td class="left">Ketua RW 01<br><br><br><br>SUDIONO</td>
                    <td class="right">Ketua RT 01<br><br><br><br>WAHYU</td>
                </tr>
            </table>
        </div>

        <div class="container">
            <a href="{{ route('download-pdf') }}" class="btn">Download PDF</a>
        </div>
    </div>
</body>
</html>
@endsection

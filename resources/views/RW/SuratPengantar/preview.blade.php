@extends('layouts.template')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Preview Surat Pengantar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4 flex justify-center">
        <div class="w-full lg:w-4/6">
            <div class="bg-primary p-3 text-white rounded-t-xl border-2 font-bold flex flex-row min-w-[320px] md:min-w-[490px]">
                <a class="bg-white rounded-full size-7 flex justify-center items-center" href="{{ url('RW') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
                    </svg>
                </a>
                <p style="font-family: Inter" class="px-4 w-full">Rincian Surat Pengantar</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg min-w-[320px] md:min-w-[490px]">
                <div class="text-center mb-4">
                    <p>RUKUN WARGA 01 RUKUN TETANGGA 01<br>
                    KELURAHAN LANG-LANG,<br>
                    KECAMATAN SINGOSARI, KABUPATEN MALANG</p>
                    <hr class="my-2">
                </div>
                <div class="text-center font-bold text-xl mb-2">
                    <p>SURAT PENGANTAR</p>
                    <p>No. 01/2024/03/12/001</p>
                </div>
                <div class="text-left mb-4 ml-4 md:ml-10">
                    <p>Yang bertanda tangan dibawah ini ketua RT 01 RW 001 Desa Lang-Lang Kecamatan Singosari Kabupaten Malang, dengan ini memberikan pengantar/ keterangan kepada :</p>
                    <br>
                    <div class="space-y-1">
                        <p><span class="inline-block w-48">Nama</span>:<br></p>
                        <p><span class="inline-block w-48">NIK/ No.KTP</span>:<br></p>
                        <p><span class="inline-block w-48">Tempat, Tgl.Lahir</span>:<br></p>
                        <p><span class="inline-block w-48">Jenis Kelamin</span>:<br></p>
                        <p><span class="inline-block w-48">Kewarganegaraan</span>:<br></p>
                        <p><span class="inline-block w-48">Status Perkawinan</span>:<br></p>
                        <p><span class="inline-block w-48">Pekerjaan</span>:<br></p>
                        <p><span class="inline-block w-48">Alamat Tinggal</span>:<br></p>
                        <p><span class="inline-block w-48">Keperluan</span>:<br></p>
                    </div>
                    <br>
                    <p>Demikian surat ini dibuat dengan sebenarnya untuk dipergunakan sebagaimana mestinya.</p>
                </div>
                <div class="flex flex-col md:flex-row justify-between mt-8 space-x-0 md:space-x-10 ml-4 md:ml-10">
                    <div class="text-center">
                        <p>Lang-Lang, 12 Maret 2024<br>Mengetahui</p>
                        <p class="mt-8">Ketua RW 01<br><br><br><br>SUDIONO</p>
                    </div>
                    <div class="text-center md:text-left mt-8 md:mt-0 space-y-4">
                        <p>Mengetahui</p>
                        <p class="mt-8">Ketua RT 01<br><br><br><br>SUDIONO</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-between mt-4 space-x-0 md:space-x-10">
                <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mt-4 w-full" role="alert">
                    <p class="font-bold">Perhatian</p>
                    <p>Cetak dan hubungi pihak terkait untuk membuat janji temu terkait legalitas surat ini.</p>
                    <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4 mt-4">
                        <div class="text-center mt-2">
                            <a href="{{ route('download-pdf') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Download PDF</a>
                        </div>
                        <a href="https://wa.me/628516178961" class="flex items-center justify-center bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                            </svg>
                             <span class="ml-2">RT</span>
                        </a>
                        <a href="https://wa.me/6282139516524" class="flex items-center justify-center bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                            </svg>
                            <span class="ml-2">RW</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 h-screen bg-gray-800 text-white flex flex-col">
            <div class="p-4 text-center text-2xl font-bold">SIWALANG</div>
            <nav class="mt-5">
                <a href="#" class="block py-2.5 px-4 bg-gray-700 rounded">Beranda</a>
                <a href="{{ url('admin/formRT') }}" class="block py-2.5 px-4 hover:bg-gray-700 rounded">Data RT</a>
                <a href="#" class="block py-2.5 px-4 hover:bg-gray-700 rounded">Data RW</a>

            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <div class="grid grid-cols-4 gap-6 mb-6">
                <div class="bg-blue-500 text-white p-4 rounded-lg flex items-center">
                    <div class="flex-1">
                        <p class="text-2xl font-bold">{{ $lakiLakiCount }}</p>
                        <p>Laki-laki</p>
                    </div>
                </div>
                <div class="bg-green-500 text-white p-4 rounded-lg flex items-center">
                    <div class="flex-1">
                        <p class="text-2xl font-bold">{{ $perempuanCount }}</p>
                        <p>Perempuan</p>
                    </div>
                </div>
                <div class="bg-yellow-500 text-white p-4 rounded-lg flex items-center">
                    <div class="flex-1">
                        <p class="text-2xl font-bold">{{ $keluargaCount }}</p>
                        <p>Keluarga</p>
                    </div>
                </div>
                <div class="bg-red-500 text-white p-4 rounded-lg flex items-center">
                    <div class="flex-1">
                        <p class="text-2xl font-bold">{{ $pendudukCount }}</p>
                        <p>Penduduk</p>
                    </div>
                </div>
            </div>

            <div class="w-full mt-3 flex flex-col justify-center items-center pb-14 bg-gray-100">
                <h6 class="text-center pt-8 text-blue-600 font-bold text-lg">Pemimpin</h6>
                <h1 class="text-center font-bold text-3xl">Struktur Kepemimpinan RW 01 beserta RT</h1>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6 mt-6">
                    <a href="{{ route('struktur.rt') }}" class="bg-center bg-cover flex flex-col justify-end rounded-xl">
                        <img src="{{ isset($dataDiri) && $dataDiri->foto_profil ? asset($dataDiri->foto_profil) : asset('images/fotoProfil.jpeg') }}" alt="" class="object-cover w-full h-64 rounded-t-xl">
                        <div class="py-4 pl-6 bg-blue-600 text-white rounded-b-xl">
                            <p class="text-xl font-bold">Rukun Tangga</p>
                        </div>
                    </a>
                    <a href="{{ route('struktur.rw') }}" class="bg-center bg-cover flex flex-col justify-end rounded-xl">
                        <img src="{{ isset($dataDiri) && $dataDiri->foto_profil ? asset($dataDiri->foto_profil) : asset('images/fotoProfil.jpeg') }}" alt="" class="object-cover w-full h-64 rounded-t-xl">
                        <div class="py-4 pl-6 bg-blue-600 text-white rounded-b-xl">
                            <p class="text-xl font-bold">Rukun Warga</p>
                        </div>
                    </a>
                </div>

                <div class="flex justify-center mt-6">
                    <button class="rounded-full bg-blue-600 h-10 w-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <button class="ml-3 rounded-full bg-blue-600 h-10 w-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

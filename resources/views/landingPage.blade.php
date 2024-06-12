<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #rtData {
            display: none;
            width: 50%;
            margin: 20px auto;
            padding: 10px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="min-h-screen">
        <div class="relative flex flex-col md:flex-row justify-center bg-cover bg-center bg-desa-langlang bg-black/50 bg-blend-multiply" style="height: 26rem">
            <div class="absolute w-full px-4 md:w-5/6">
                <div class="flex flex-row justify-end text-white text-sm py-2 mt-1 font-thin" style="font-family: Asap">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-4 h-4 mr-1">
                        <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                    </svg>
                    <a href="https://maps.app.goo.gl/8FUyPuXjaErjHRZp9" target="_blank" class="hover:underline text-xs md:text-sm lg:text-base">
                        Kec. Singosari, Kab. Malang, Jawa Timur
                    </a>
                </div>
                <nav class="bg-white w-full rounded-lg flex flex-col md:flex-row justify-between items-center min-w-max px-4">
                    <div class="flex flex-row items-center pl-2 md:pl-8">
                        <img src="{{ asset('img/logo-lang2.png') }}" alt="lang-lang" class="max-h-20 pr-3 py-2">
                        <h1 class="text-si text-3xl font-black" style="font-family: Inter">SI</h1>
                        <h1 class="text-walang text-3xl font-black" style="font-family: Inter">WALANG</h1>
                    </div>
                    <div class="flex flex-row items-center py-2 md:py-0">
                        <a class="group font-bold px-3 md:px-7 text-walang transition-all duration-300 ease-in-out" href="{{ route('login') }}">
                            <span class="bg-gradient-to-r from-black to-black bg-[length:0%_2px] bg-left-bottom bg-no-repeat transition-all duration-500 ease-out group-hover:bg-[length:100%_2px]" style="font-family: Asap">
                                LOGIN
                            </span>
                        </a>
                    </div>
                </nav>
                <header class="text-white/80 flex flex-col items-center mt-7 text-center px-4">
                    <h1 class="text-white font-bold text-3xl md:text-5xl leading-tight" style="max-width: 550px">Selamat Datang di Desa Lang-Lang RW. 01 </h1>
                    <a class="tracking-wide text-white font-bold py-3 px-8 mt-12 bg-primary rounded-3xl" style="font-family: Asap" href="{{ route('login') }}">LOGIN</a>
                </header>
            </div>
        </div>

        <div class="w-full flex justify-center mt-6">
            <div class="w-4/6 p-5 flex flex-row">
                <div>
                    <h6 class="text-primary italic font-bold" style="font-family: Asap">Sejarah singkat</h6>
                    <h1 class="text-3xl font-bold underline underline-offset-[14px] decoration-[#2a6c12]    ">Tentang Desa Lang-Lang</h1>
                    <p class="mt-5 text-gray-400" style="font-family: Asap">Berasal dari kata 'Alang-Alang' atau 'Ilalang', nama desa ini terbentuk. Berawal dari hamparan tanah yang memiliki banyak rumput liar, ilalang dan alang-alang inilah, terbentuk salah satu dari 17 Desa yang berada di Kecamatan Singosari Kabupaten Malang. Desa Langlang terbagi menjadi 4 pedusunan dan 4 RW dan 48 RT. Desa Langlang terletak di 112,4 BT dan 7,52 LU dan berada pada ketinggian 466 mdpl. Luas wilayah Desa Langlang ± 498.398 ha.</p>
                </div>
                <div>
                    <img src="{{ asset('img/logo-lang2.png') }}" alt="lang-lang" class="max-h-96 max-w-96 pr-3 py-2">
                </div>
            </div>
        </div>

        <div class="w-full flex justify-center py-3">
            <div class="w-5/6 grid grid-cols-4 bg-primary text-center text-white rounded-xl">
                <div class="my-6 px-6 border-r-[1px]">
                    <h1 class="text-2xl font-black tracking-wide">{{ $maleCount }}</h1>
                    <p class="text-gray-300 text-sm" style="font-family: Asap">Laki-laki</p>
                </div>
                <div class="my-6 px-6 border-r-[1px]">
                    <h1 class="text-2xl font-black tracking-wide">{{ $femaleCount }}</h1>
                    <p class="text-gray-300 text-sm" style="font-family: Asap">Perempuan</p>
                </div>
                <div class="my-6 px-6 border-r-[1px]">
                    <h1 class="text-2xl font-black tracking-wide">{{ $familyCount }}</h1>
                    <p class="text-gray-300 text-sm" style="font-family: Asap">Keluarga</p>
                </div>
                <div class="my-6 px-6 border-r-[1px]">
                    <h1 class="text-2xl font-black tracking-wide">{{ $totalCount }}</h1>
                    <p class="text-gray-300 text-sm" style="font-family: Asap">Penduduk</p>
                </div>
            </div>
        </div>

        <div style="width: 50%; margin: auto;">
            <canvas id="dataChart"></canvas>
        </div>

        <div id="rtData">
            <h3>Data Warga Berdasarkan RT</h3>
            <canvas id="rtChart"></canvas>
        </div>

        <div class="w-full mt-3 flex flex-col justify-center items-center pb-14 bg-gray-100">
            <h6 class="text-center pt-8 text-primary font-bold text-lg">Pemimpin</h6>
            <h1 class="text-center font-bold text-3xl">Struktur Kepemimpinan RW 01 beserta RT</h1>
            <div class="grid grid-cols-2 md:grid-cols-2 justify-items-center gap-1 w-full pt-5">
                <a href="{{ route('struktur.rt') }}" class="bg-center bg-cover flex flex-col justify-end rounded-xl w-64">
                    <img src="{{ isset($dataDiri) && $dataDiri->foto_profil ? asset($dataDiri->foto_profil) : asset('images/fotoProfil.jpeg') }}" alt="" class="object-cover w-full h-64 rounded-t-xl">
                    <div class="py-4 pl-6 bg-primary text-white rounded-b-xl">
                        <h1>RT</h1>
                        <p class="text-xl font-bold">
                            @php
                                $rtUser = DB::table('m_user')
                                          ->where('level_id', 2) // Sesuaikan dengan level_id RT
                                          ->first();
                                if ($rtUser) {
                                    echo $rtUser->nama;
                                } else {
                                    echo 'Nama RT Tidak Tersedia';
                                }
                            @endphp
                        </p>
                    </div>
                </a>
                <a href="{{ route('struktur.rw') }}" class="bg-center bg-cover flex flex-col justify-end rounded-xl w-64">
                    <img src="{{ isset($dataDiri) && $dataDiri->foto_profil ? asset($dataDiri->foto_profil) : asset('images/fotoProfil.jpeg') }}" alt="" class="object-cover w-full h-64 rounded-t-xl">
                    <div class="py-4 pl-6 bg-primary text-white rounded-b-xl">
                        <h1>RW</h1>
                        <p class="text-xl font-bold">
                            @php
                                $rtUser = DB::table('m_user')
                                          ->where('level_id', 3)
                                          ->first();
                                if ($rtUser) {
                                    echo $rtUser->nama;
                                } else {
                                    echo 'Nama RT Tidak Tersedia';
                                }
                            @endphp
                        </p>
                    </div>
                </a>
            </div>
        </div>
s



        <div class="bg-white py-3">
            <main class="w-full flex flex-col justify-center items-center my-8">
                <div class="w-5/6 py-4 border-b-[3px] border-walang">
                  <h1 class="font-bold text-4xl" style="font-family: poppins">Agenda Kegiatan Warga RW.01 Mendatang</h1>
                  <p class="text-gray-400 text-lg" style="font-family: Asap">Jangan lewatkan kegiatan mendatang</p>
                </div>

                <div class="grid grid-cols-3 w-5/6 gap-y-4 gap-x-10 my-6">
                    @php
                        use App\Models\KegiatanModel;
                        $kegiatan = KegiatanModel::where('status_kegiatan', 'belum selesai')->get();
                    @endphp
                    @foreach ($kegiatan as $item)
                        @php
                        $date = \Carbon\Carbon::parse($item->tanggal_kegiatan);
                        @endphp
                        <a class="flex flex-col gap-3 cursor-pointer border-2 rounded-lg p-3" href="{{ url('kegiatan/agenda/' . $item->id_kegiatan) }}">
                        <div class="flex flex-row text-white font-light" style="font-family: Asap">
                            <p class="bg-black px-3 rounded-l-md">{{ $date->format('d') }}</p>
                            <p class="bg-primary px-2 rounded-r-md">{{ $date->format('F Y') }}</p>
                        </div>
                        <h1 class="font-bold text-lg" style="font-family: Poppins">{{ $item->nama_kegiatan }}</h1>
                        <div class="flex flex-row items-center gap-3 text-gray-400" style="font-family: Asap">
                            <p>{{$item->jam_mulai}} - {{$item->jam_selesai}}</p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#00562f" class="size-2">
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm0 8.625a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25ZM15.375 12a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0ZM7.5 10.875a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25Z" clip-rule="evenodd" />
                            </svg>
                            <p>{{$item->lokasi}}</p>
                        </div>
                        </a>
                    @endforeach
                </div>
              </main>
        </div>
        <div class="py-3" style="background-color:#f5f5f5">
            <main class="w-full flex flex-col justify-center items-center my-8">
                <div class="w-5/6 flex flex-col items-center py-4 border-walang">
                  <p class="text-primary font-bold text-lg" style="font-family: Poppins">Dokumentasi</p>
                  <h1 class="font-bold text-4xl" style="font-family: Poppins">Arsip Kegiatan Warga RW.01</h1>
                </div>

                <div class="grid grid-cols-3 w-5/6 gap-y-10 gap-x-4 my-6">
                    @php
                        $kegiatan2 = KegiatanModel::where('status_kegiatan', 'selesai')->get();
                    @endphp
                    @foreach ($kegiatan2 as $item)
                        @php
                        $date = \Carbon\Carbon::parse($item->tanggal_kegiatan);
                        @endphp
                        <section class="relative flex flex-col cursor-pointer">
                        <div class="popup-container">
                            <img src="../img/arsip-kegiatan/{{ $item->dokumentasi }}" alt="" class="w-full h-60 rounded-t-xl object-cover">
                            <div class="popup-image">
                            <img src="../img/arsip-kegiatan/{{ $item->dokumentasi }}" alt="Popup Image">
                            </div>
                        </div>
                        <div class="bg-gray-200 text-gray-200 h-16 rounded-b-xl">0</div>
                        <div class="w-full absolute bottom-6 flex flex-col items-center">
                            <div class="w-5/6 bg-white rounded-b-xl flex flex-col items-start">
                            <div class="py-3 px-6">
                                <span class="font-bold text-sm" style="font-family: Poppins">{{ $item->nama_kegiatan }}</span>
                                <div class="flex">
                                <div class="flex items-center pr-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2a6c12" class="size-2">
                                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm0 8.625a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25ZM15.375 12a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0ZM7.5 10.875a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25Z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <span class="flex gap-1" style="font-family: Asap">
                                    <p>{{ $date->format('d') }}</p>
                                    <p>{{ $date->translatedFormat('F Y') }}</p>
                                </span>
                                </div>
                            </div>
                            </div>
                        </div>
                        </section>
                    @endforeach
                </div>
              </main>
              <style>
                .popup-container {
                  position: relative;
                  display: inline-block;
                }

                .popup-image {
                  display: none;
                  position: absolute;
                  bottom: 0;
                  left: 50%;
                  transform: translateX(-50%);
                  border: 1px solid #ccc;
                  z-index: 10;
                }

                .popup-container:hover .popup-image {
                  display: block;
                }

                .popup-image img {
                  max-width: 600px; /* Sesuaikan ukuran popup */
                  max-height: 600px;
                }
              </style>
        </div>

        <footer>
            <div class="bg-secondary w-full flex flex-col items-center">
                <div class="w-full md:w-4/6 text-white my-8 px-4 md:px-0">
                    <p class="underline underline-offset-[13px] decoration-[#2a6c12] font-bold">Tentang</p>
                    <p class="mt-5 text-xs text-white/60">SIWALANG, Portal kependudukan warga RW 001, Desa Lang-Lang Singosari Malang</p>
                </div>
            </div>
            <div class="w-full flex items-center flex-col bg-primary">
                <div class="w-full md:w-5/6 flex-row flex justify-between py-2 px-4 md:px-0">
                    <p class="text-white/60 text-xs">SIWALANG 2024</p>
                    <p class="text-white/60 text-xs cursor-pointer">Kembali ke atas</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        var ctx = document.getElementById('dataChart').getContext('2d');
        var rtChart = null; // Variable to store the RT chart instance
        var lastClickedLabel = null; // Variable to store the last clicked label

        var dataChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Male', 'Female', 'Kepala Keluarga', 'Jumlah Warga'],
                datasets: [{
                    label: 'Count',
                    data: [{{ $maleCount }}, {{ $femaleCount }}, {{ $familyCount }}, {{ $totalCount }}],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 500 // Set maximum y-axis value to 300 for the main chart
                    }
                },
                onClick: function(evt, elements) {
                    if (elements.length > 0) {
                        var dataIndex = elements[0].index;
                        var label = dataChart.data.labels[dataIndex];

                        var gender = null;
                        var relationship = null;

                        if (label === 'Male') {
                            gender = 'Laki-laki';
                        } else if (label === 'Female') {
                            gender = 'Perempuan';
                        } else if (label === 'Kepala Keluarga') {
                            relationship = 'kepala keluarga';
                        }

                        if (label === 'Jumlah Warga' || gender || relationship) {
                            if ($('#rtData').is(':visible') && lastClickedLabel === label) {
                                $('#rtData').hide();
                                lastClickedLabel = null;
                            } else {
                                $.ajax({
                                    url: '/data_diri/chart/rt',
                                    method: 'GET',
                                    data: {
                                        gender: gender,
                                        relationship: relationship
                                    },
                                    success: function(response) {
                                        showRtData(response, label);
                                    }
                                });
                                lastClickedLabel = label;
                            }
                        }
                    }
                }
            }
        });

        function showRtData(data, label) {
            var rtCtx = document.getElementById('rtChart').getContext('2d');
            if (rtChart) {
                rtChart.destroy();
            }
            rtChart = new Chart(rtCtx, {
                type: 'bar',
                data: {
                    labels: ['RT 1', 'RT 2', 'RT 3', 'RT 4', 'RT 5'],
                    datasets: [{
                        label: label + ' per RT',
                        data: [data.rt1, data.rt2, data.rt3, data.rt4, data.rt5],
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        borderColor: 'rgba(153, 102, 255, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100 // Set maximum y-axis value to 50 for the RT chart
                        }
                    }
                }
            });

            $('#rtData').show();
        }
    </script>
</body>
</html>

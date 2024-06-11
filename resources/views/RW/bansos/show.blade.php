@extends('layouts.template')

@section('content')
<main class="w-full h-full">
    <div class="flex flex-col items-center py-10 min-w-fit">
        <div class="w-5/6 bg-primary p-3 text-white rounded-t-xl border-2 border-b-0 font-bold flex flex-row min-w-[490px]">
            <a class="bg-white rounded-full size-7 flex justify-center items-center" href="{{ url('penerima_bansos/semua') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
                    </svg>
            </a>
            <p style="font-family: Inter" class="px-4">Rincian Data Warga</p>
        </div>
        <div class="w-5/6 flex flex-col items-center rounded-b-xl border-2 border-t-0">
            <div class="w-full grid grid-cols-2 mt-8 mb-16 pl-8 pr-6 gap-x-24 gap-y-5">
                @if ($dataDiri)
                <div class="grid grid-cols-[30px_230px_30px_1fr] divide-y-2" style="font-family: Asap;">
                    <div class="font-extrabold text-lg">1.</div><div class="font-extrabold text-lg col-span-3 border-t-transparent">Identitas</div>
                    <span class="py-1 col-start-2 flex items-center">Nama</span><div class="py-1 flex items-center">:</div><span class="py-1 flex items-center">{{ $user->nama }}</span>
                    <span class="py-1 col-start-2 flex items-center">NIK</span><div class="py-1 flex items-center">:</div><span class="py-1 flex items-center">{{ $user->nik }}</span>
                    <span class="py-1 col-start-2 flex items-center">Hubungan KK</span><div class="py-1 flex items-center">:</div><span class="py-1 flex items-center">{{ $dataDiri->hubungan_kk }}</span>
                    <span class="py-1 col-start-2 flex items-center">Pekerjaan</span><div class="py-1 flex items-center">:</div><span class="py-1 flex items-center">{{ $dataDiri->pekerjaan }}</span>
                    <span class="py-1 col-start-2 flex items-center">Status Kawin</span><div class="py-1 flex items-center">:</div><span class="py-1 flex items-center">{{ $dataDiri->status_perkawinan }}</span>
                    <span class="py-1 col-start-2 flex items-center">Jumlah Anggota Keluarga</span><div class="py-1 flex items-center">:</div><span class="py-1 flex items-center">{{ $bansos->jumlah_tanggungan }}</span>
                    <span class="py-1 col-start-2 flex items-center">Jumlah Orang yang Ditanggung</span><div class="py-1 flex items-center">:</div><span class="py-1 flex items-center">{{ $bansos->jumlah_tanggungan }}</span>
                </div>
                <div class="grid grid-cols-[30px_1fr] gap-y-2" style="font-family: Asap">
                    <h1 class="font-extrabold text-lg">3.</h1><h1 class="font-extrabold text-lg">Lampiran Data</h1>
                    <span class="col-start-2 font-extrabold text-lg">a. Slip Gaji</span>
                    <img src="{{ asset('img/pengajuan-bansos/' . $bansos->foto_gaji) }}" alt="foto_profil" class="object-cover col-start-2 w-11/12">
                </div>
                <div class="grid grid-cols-[30px_230px_30px_1fr] divide-y-2" style="font-family: Asap;">
                    <div class="font-extrabold text-lg border-t-transparent">2.</div><div class="font-extrabold text-lg col-span-3 border-t-transparent">Kondisi Ekonomi</div>
                    <span class="py-1 col-start-2 flex items-center">Status Kepemilikan Rumah</span><div class="py-1 flex items-center">:</div><span class="py-1 flex items-center">
                        <?php echo ($bansos->status_rumah == 1) ? "Pribadi" : "Sewa"; ?>
                    </span>
                    <span class="py-1 col-start-2 flex items-center">Luas Rumah</span><div class="py-1 flex items-center">:</div><span class="py-1 flex items-center">
                        <?php echo ($bansos->luas_rumah == 1) ? "Lebih dari 80m2" : (($bansos->luas_rumah == 2) ? "Antara 60m2 - 80m2" : (($bansos->luas_rumah == 3) ? "Antara 40m2 - 60m2" : (($bansos->luas_rumah == 4) ? "Antara 25m2 - 40m2" : "Kurang dari 25m2"))); ?>
                    </span>
                    <span class="py-1 col-start-2 flex items-center">Besar Daya Listrik (VA)</span><div class="py-1 flex items-center">:</div><span class="py-1 flex items-center">
                        <?php echo ($bansos->besaran_listrik == 1) ? "Lebih dari 900 VA" : (($bansos->besaran_listrik == 2) ? "900 VA" : (($bansos->besaran_listrik == 3) ? "450 VA" : "Tidak Berlangganan")); ?>
                    </span>
                    <span class="py-1 col-start-2 flex items-center">Jumlah Kendaraan</span><div class="py-1 flex items-center">:</div><span class="py-1 flex items-center">
                        <?php echo ($bansos->jumlah_kendaraan == 1) ? "0" : (($bansos->jumlah_kendaraan == 2) ? "1" : (($bansos->jumlah_kendaraan == 3) ? "2" : (($bansos->jumlah_kendaraan == 4) ? "3" : "Lebih dari 3"))); ?>
                    </span>
                    <span class="py-1 col-start-2 flex items-center">Pendapatan per Bulan</span><div class="py-1 flex items-center">:</div><span class="py-1 flex items-center">
                        <?php echo ($bansos->pendapatan == 1) ? "Lebih dari 1.000.000" : (($bansos->pendapatan == 2) ? "1.000.000 - 1.500.000" : (($bansos->pendapatan == 3) ? "500.000 - 1.000.000" : "dibawah 500.000")); ?>
                    </span>
                    <span class="py-1 col-start-2 flex items-center">Fasilitas WC</span><div class="py-1 flex items-center">:</div><span class="py-1 flex items-center">
                        <?php echo ($bansos->fasilitas_wc == 1) ? "Pribadi" : "Umum"; ?>
                    </span>
                </div>
                <div class="grid grid-cols-[30px_1fr] gap-y-2" style="font-family: Asap">
                    <span class="col-start-2 font-extrabold text-lg">c. Kartu Keluarga</span>
                    <img src="{{ asset('img/kk/' . $dataDiri->foto_kk) }}" alt="foto_profil" class="object-cover col-start-2 w-11/12">
                </div>
                <div class="grid grid-cols-[30px_1fr] gap-y-2 col-start-2" style="font-family: Asap">
                    <span class="col-start-2 font-extrabold text-lg">b. SKTM</span>
                    <img src="{{ asset('img/pengajuan-bansos/' . $bansos->foto_sktm) }}" alt="foto_profil" class="object-cover col-start-2 w-11/12">
                </div>
                @else    
                    <div class="fixed font-black text-3xl w-full" style="font-family: Asap">
                        DATA BELUM LENGKAP
                    </div>
                @endif
            </div>
        </div>
    </div>
</main>
@endsection

@push('css')
@endpush

@push('js')
@endpush


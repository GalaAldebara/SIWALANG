@extends('layouts.template')

@section('content')
  <main class="w-full flex flex-col justify-center items-center my-8">
    <div class="w-5/6 flex flex-col items-center py-4 border-walang">
      <p class="text-primary font-bold text-lg" style="font-family: Poppins">Dokumentasi</p>
      <h1 class="font-bold text-4xl" style="font-family: Poppins">Arsip Kegiatan Warga RW.01</h1>
    </div>

    <div class="grid grid-cols-3 w-5/6 gap-y-10 gap-x-4 my-6">
      @foreach ($kegiatan as $item) 
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

    <div class="w-5/6 flex flex-row items-center justify-center gap-3 my-3" style="font-family: Asap">
      <a class="px-3 bg-gray-400 rounded-lg text-white flex gap-1 py-2" href="{{ url('warga') }}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="size-6">
          <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-4.28 9.22a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72h5.69a.75.75 0 0 0 0-1.5h-5.69l1.72-1.72a.75.75 0 0 0-1.06-1.06l-3 3Z" clip-rule="evenodd" />
        </svg>        
        BACK
      </a>
    </div>
  </main>
@endsection

@push('css')
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

@endpush

@push('js')
@endpush

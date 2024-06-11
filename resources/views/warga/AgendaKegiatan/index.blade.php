@extends('layouts.template')

@section('content')
  <main class="w-full flex flex-col justify-center items-center my-8">
    <div class="w-5/6 py-4 border-b-[3px] border-walang">
      <h1 class="font-bold text-4xl" style="font-family: poppins">Agenda Kegiatan Warga RW.01 Mendatang</h1>
      <p class="text-gray-400 text-lg" style="font-family: Asap">Jangan lewatkan kegiatan mendatang</p>
    </div>

    <div class="grid grid-cols-3 w-5/6 gap-y-4 gap-x-10 my-6">
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

    <div class="w-5/6 flex flex-row items-center justify-center gap-3 my-3" style="font-family: Asap">
      {{-- <p class="px-3 py-1 bg-primary text-white rounded-lg">1</p>
      <p class="px-3 py-1 bg-gray-400 rounded-lg">2</p>
      <p class="px-3 py-1 bg-gray-400 rounded-lg">Berikutnya ></p> --}}
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
@endpush

@push('js')
  <script>
    $(document).ready(function() {
      var dataPengaduan = $('#table_pelaporan').DataTable({
        "lengthMenu": [[10], [10]],
        "searching": false,
        "processing": true,
        "serverSide": true,
        "info" : false,
        "paging": false,
        "lengthChange": false,
        "language": {
          "emptyTable": "",
          "zeroRecords": ""
        },
        ajax: {
          url: "{{ route('pelaporan_list') }}",
          dataType: 'json',
          type: 'POST',
        },
        columns: [
          { data: 'tanggal_bertamu', orderable: true, searchable: true, className: "text-center py-3" },
          { data: 'nama_tamu', orderable: false, searchable: false, className: "text-center py-3" },
          {
            data: null,
            orderable: false,
            searchable: false,
            className: "text-center",
            render: function(data, type, row) {
              var url = "{{ route('rincian', 'id') }}";
              url = url.replace('id', row.noTamu);
              return '<button onclick="window.location.href=\'' + url + '\'" class="underline underline-offset-2">Rincian</button>';
            }
          }
        ]
      });
    });
  </script>
@endpush
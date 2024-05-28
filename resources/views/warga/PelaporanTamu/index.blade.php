@extends('layouts.template')

@section('content')
<main class="w-full h-full">
    <div class="flex flex-col items-center py-10 min-w-fit">
        <div class="w-4/6 bg-primary p-3 text-white rounded-t-xl border-2 font-bold flex flex-row min-w-[490px]">
            <a class="bg-white rounded-full size-7 flex justify-center items-center" href="{{ url('warga') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
                  </svg>
            </a>
            <p style="font-family: Inter" class="px-4">Riwayat pelaporan tamu</p>
        </div>
        <div class="w-4/6 flex flex-col items-center rounded-b-xl border-2 min-w-[490px] px-6">
            <div class="pb-6 mx-6 w-full">
                <div class="w-full flex flex-row justify-between py-3">
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="gray" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z" clip-rule="evenodd" />
                              </svg>
                        </span>
                        <input class="rounded-3xl pl-10 pr-14 py-2 w-full border border-gray-300" placeholder="Search">
                    </div>
                    <a class="bg-button text-white rounded-md px-2 py-1 my-1 flex flex-row items-center cursor-pointer" href="{{ url('pelaporan-tamu/form') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="size-5">
                            <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                          </svg>
                          Buat Pelaporan
                    </a>
                </div>
                <table class="table-auto border-separate border border-gray-300 w-full" id="table_pelaporan">
                    <thead class="bg-primary-form">
                        <tr class="tracking-wide">
                            <th class="p-3 border border-gray-300" style="font-family: Asap">TANGGAL MELAPOR</th>
                            <th class="p-3 border border-gray-300" style="font-family: Asap">NAMA TAMU</th>
                            <th class="p-3 border border-gray-300" style="font-family: Asap">KETERANGAN</th>
                        </tr>
                    </thead>
                </table>

            </div>
        </div>
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
              return `
        <button onclick="window.location.href='${url}'"
                style="background-color: #2a6c12; color: white; border: 1px solid #1d4b0a; padding: 0.5rem; border-radius: 0.375rem; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);"
                class="hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
          Rincian
        </button>`;
            }
          }
        ]
      });
    });
  </script>
@endpush

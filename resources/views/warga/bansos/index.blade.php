@extends('layouts.template')

@section('content')
<main class="w-full h-full">
    <div class="flex flex-col items-center py-10 min-w-fit">
        <div id="info" class="bg-[#d1ecf1] w-4/6 text-[#0c5460] p-5 pl-8 rounded-lg mb-8" style="font-family: Asap">
            <h1 class="font-bold">Data Kosong.</h1>
            <p>Anda bukan bagian dari daftar penerima bansos. lakukan pengajuan agar nama anda diajukan ke daftar calon penerima bansos.</p>
        </div>
        <div class="w-4/6 bg-primary p-3 text-white rounded-t-xl border-2 font-bold flex flex-row min-w-[490px]">
            <a class="bg-white rounded-full size-7 flex justify-center items-center" href="{{ url('warga') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
                  </svg>
            </a>
            <p style="font-family: Inter" class="px-4">Riwayat Pengajuan Bansos</p>
        </div>
        <div class="w-4/6 flex flex-col items-center rounded-b-xl border-2 min-w-[490px] px-6">
            <div class="pb-6 mx-6 w-full">
                <div class="w-full flex flex-row justify-end py-3">
                    <a class="bg-button text-white rounded-md px-2 py-1 my-1 flex flex-row items-center cursor-pointer" href="{{ url('pengajuan_bansos/form') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="size-5">
                            <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                          </svg>
                          Ajukan Bansos
                    </a>
                </div>
                <table class="table-auto border-separate border border-gray-300 w-full" id="table_bansos" style="width: 100%">
                    <thead class="bg-primary-form">
                        <tr class="tracking-wide">
                            <th class="p-3 border border-gray-300" style="font-family: Asap">TANGGAL PENGAJUAN</th>
                            <th class="p-3 border border-gray-300" style="font-family: Asap">STATUS</th>
                        </tr>
                    </thead>
                </table>

            </div>
        </div>
    </div>
</main>
@endsection

@push('css')
<style>
    .dataTables_empty{
       
    }
</style>
@endpush

@push('js')
  <script>
    $(document).ready(function() {
      var dataPengaduan = $('#table_bansos').DataTable({
        "lengthMenu": false,
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
          url: "{{ route('list.pengajuan_bansos') }}",
          dataType: 'json',
          type: 'POST',
        },
        columns: [
          { data: 'tanggal_pengajuan', orderable: false, searchable: false, className: "text-center py-3" },
          { data: 'status_pengajuan', orderable: false, searchable: false, className: "text-center py-3" },
        ],
        "drawCallback": function(settings) {
                var api = this.api();
                var rows = api.rows({ page: 'current' }).data().length;
                if (rows === 0) {
                    $('#info').show();
                } else {
                    $('#info').hide();;
                }
            }
      });
    });
  </script>
@endpush


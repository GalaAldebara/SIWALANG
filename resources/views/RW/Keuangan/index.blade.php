@extends('layouts.template')

@section('content')
<main class="w-full h-full">
    <div class="flex flex-col items-center py-10 min-w-fit">
        <div class="w-full md:w-4/6 bg-primary p-3 text-white rounded-t-xl border-2 font-bold flex flex-row min-w-[490px]">
            <a class="bg-white rounded-full size-7 flex justify-center items-center" href="{{ url('RW') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
                  </svg>
            </a>
            <p style="font-family: Inter" class="px-4">List Keuangan</p>
        </div>
        <div class="w-full md:w-4/6 flex flex-col items-center rounded-b-xl border-2 min-w-[490px] px-6">
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
                    <div class="flex flex-row space-x-2">
                        <a class="bg-button text-white rounded-md px-2 py-1 my-1 flex flex-row items-center cursor-pointer" href="{{ url('RW-Keuangan/diagram') }}">
                              Diagram Keuangan
                        </a>
                        <a class="bg-button text-white rounded-md px-2 py-1 my-1 flex flex-row items-center cursor-pointer" href="{{ url('RW-Keuangan/form') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="size-5">
                                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                              </svg>
                              Tambah
                        </a>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="table-auto border-separate border border-gray-300 min-w-full" id="table_keuangan">
                        <thead class="bg-primary-form">
                            <tr class="tracking-wide">
                                <th class="p-3 border border-gray-300 whitespace-nowrap" style="font-family: Asap">TANGGAL KEGIATAN</th>
                                <th class="p-3 border border-gray-300 whitespace-nowrap" style="font-family: Asap">KATEGORI</th>
                                <th class="p-3 border border-gray-300 whitespace-nowrap" style="font-family: Asap">KETERANGAN</th>
                                <th class="p-3 border border-gray-300 whitespace-nowrap" style="font-family: Asap">JUMLAH</th>
                                <th class="p-3 border border-gray-300 whitespace-nowrap" style="font-family: Asap">TOTAL</th>
                                <th class="p-3 border border-gray-300 whitespace-nowrap" style="font-family: Asap">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data will be populated by DataTables -->
                        </tbody>
                    </table>
                </div>
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
        var dataKeuangan = $('#table_keuangan').DataTable({
            "lengthMenu": [[10], [10]],
            "searching": false,
            "processing": true,
            "serverSide": true,
            "info" : false,
            "paging": false,
            "lengthChange": false,
            ajax: {
                url: "{{ route('keuangan_list') }}",
                dataType: 'json',
                type: 'POST',
            },
            columns: [
                { data: 'tanggal_kegiatan', orderable: true, searchable: true, className: "text-center py-3" },
                { data: 'kategori', orderable: false, searchable: false, className: "text-center py-3" },
                { data: 'keterangan', orderable: false, searchable: false, className: "text-center py-3" },
                { data: 'jumlah', orderable: false, searchable: false, className: "text-center py-3" },
                { data: 'total', orderable: false, searchable: false, className: "text-center py-3" },
                {
                    data: 'keuangan_id',
                    orderable: false,
                    searchable: false,
                    className: "text-center py-3",
                    render: function(data, type, row, meta) {
                        return `
                            <div class="flex justify-center space-x-2">
                                <form action="/RW-Keuangan/${data}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white rounded px-2 py-1">Hapus</button>
                                </form>
                                <a href="/RW-Keuangan/${data}/edit" class="bg-blue-500 text-white rounded px-2 py-1">Ubah</a>
                            </div>
                        `;
                    }
                }
            ],
            "drawCallback": function(settings) {
                var api = this.api();
                var total = api.column(4).data().sum();
                $('#total_saldo').text(total);
            }
        });
    });
</script>
@endpush

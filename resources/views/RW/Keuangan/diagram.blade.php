@extends('layouts.template')

@section('content')
    <main class="w-full h-full">
        <div class="flex flex-col items-center py-5 min-w-fit">
            <div class="w-full md:w-4/6 flex flex-col items-center rounded-b-xl border-2 min-w-[290px] px-4 md:px-6">
                <div class="pb-2 mx-4 md:mx-6 w-full flex flex-col justify-center items-center">
                    <!-- Tambahkan Div untuk Canvas Chart -->
                    <div class="w-full mt-2 flex justify-center">
                        <canvas id="keuanganChart" class="max-w-full max-h-full"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('css')
@endpush

@push('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('keuanganChart').getContext('2d');
        var labels = @json($labels);
        var pemasukanData = @json($pemasukanData);
        var pengeluaranData = @json($pengeluaranData);

        var data = {
            labels: labels,
            datasets: [
                {
                    label: 'Pemasukan',
                    data: pemasukanData,
                    borderColor: '#007bff',
                    fill: false,
                },
                {
                    label: 'Pengeluaran',
                    data: pengeluaranData,
                    borderColor: '#dc3545',
                    fill: false,
                }
            ]
        };

        var options = {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.dataset.label + ': Rp ' + Number(tooltipItem.raw).toLocaleString();
                        }
                    }
                }
            },
            scales: {
                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Kategori'
                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Jumlah'
                    }
                }
            }
        };

        var keuanganChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });
    });
</script>
@endpush

@extends('layouts.template')

@section('content')
    <main class="w-full h-full">
        <div class="flex flex-col items-center py-5 min-w-fit">
            <div class="w-4/6 flex flex-col items-center rounded-b-xl border-2 min-w-[490px] px-6">
                <div class="pb-2 mx-6 w-full flex flex-row justify-center items-center">
                    <!-- Tambahkan Div untuk Canvas Chart -->
                    <div class="w-1/2 mt-2">
                        <canvas id="keuanganChart" style="max-width: 600px; max-height: 400px;"></canvas>
                    </div>
                    <!-- Tambahkan Teks di Samping Chart -->
                    <div class="w-1/2 mt-2 text-left">
                        <h3 class="text-lg font-bold">Total Pemasukan: Rp {{ number_format($pemasukan, 2, ',', '.') }}</h3>
                        <h3 class="text-lg font-bold">Total Pengeluaran: Rp {{ number_format($pengeluaran, 2, ',', '.') }}</h3>
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
        var pemasukan = @json($pemasukan);
        var pengeluaran = @json($pengeluaran);

        var total = pemasukan + pengeluaran;
        var pemasukanPercent = (pemasukan / total) * 100;
        var pengeluaranPercent = (pengeluaran / total) * 100;

        var data = {
            labels: ['Pemasukan', 'Pengeluaran'],
            datasets: [{
                data: [pemasukanPercent, pengeluaranPercent],
                backgroundColor: ['#007bff', '#dc3545'],
            }]
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
                            return tooltipItem.label + ': ' + tooltipItem.raw.toFixed(2) + '%';
                        }
                    }
                }
            }
        };

        var keuanganChart = new Chart(ctx, {
            type: 'pie',
            data: data,
            options: options
        });
    });
</script>
@endpush

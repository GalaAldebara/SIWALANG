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

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('keuanganChart').getContext('2d');
        const dataPoints = @json($dataPoints);

        // Ensure that labels and data are formatted correctly
        const labels = dataPoints.map(dp => new Date(dp.tanggal));
        const pemasukanData = dataPoints.filter(dp => dp.kategori === 'Pemasukan').map(dp => dp.jumlah);
        const pengeluaranData = dataPoints.filter(dp => dp.kategori === 'Pengeluaran').map(dp => dp.jumlah);

        const chartData = {
            labels: labels,
            datasets: [
                {
                    label: 'Pemasukan',
                    data: pemasukanData,
                    borderColor: 'green',
                    fill: false
                },
                {
                    label: 'Pengeluaran',
                    data: pengeluaranData,
                    borderColor: 'red',
                    fill: false
                }
            ]
        };

        const config = {
            type: 'line',
            data: chartData,
            options: {
                responsive: true,
                scales: {
                    x: {
                        type: 'time',
                        time: {
                            unit: 'day'
                        },
                        title: {
                            display: true,
                            text: 'Tanggal'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Jumlah'
                        }
                    }
                }
            }
        };

        const keuanganChart = new Chart(ctx, config);
    });
</script>
@endsection

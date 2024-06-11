<!-- resources/views/diagrambatang.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Data Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="width: 50%; margin: auto;">
        <canvas id="dataChart"></canvas>
    </div>

    <script>
        var ctx = document.getElementById('dataChart').getContext('2d');
        var dataChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Male', 'Female', 'Head of Family', 'Jumlah Warga'],
                datasets: [{
                    label: 'Count',
                    data: [{{ $male }}, {{ $female }}, {{ $headOfFamily }}, {{ $jumlahWarga }}],
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
                        max: 300
                    }
                }
            }
        });
    </script>
</body>
</html>

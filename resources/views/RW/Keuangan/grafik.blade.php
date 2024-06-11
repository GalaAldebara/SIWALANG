<!DOCTYPE html>
<html>
<head>
    <title>Data Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div style="width: 50%; margin: auto;">
        <canvas id="dataChart"></canvas>
    </div>

    <div id="rtData" style="width: 50%; margin: auto; display: none;">
        <h3>Data Warga Berdasarkan RT</h3>
        <canvas id="rtChart"></canvas>
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
                },
                onClick: function(evt, elements) {
                    if (elements.length > 0) {
                        var datasetIndex = elements[0].datasetIndex;
                        var dataIndex = elements[0].index;

                        if (dataChart.data.labels[dataIndex] === 'Jumlah Warga') {
                            $.ajax({
                                url: '/data_diri/chart/rt',
                                method: 'GET',
                                success: function(response) {
                                    showRtData(response);
                                }
                            });
                        }
                    }
                }
            }
        });

        function showRtData(data) {
            $('#rtData').show();
            var rtCtx = document.getElementById('rtChart').getContext('2d');
            new Chart(rtCtx, {
                type: 'bar',
                data: {
                    labels: ['RT 1', 'RT 2', 'RT 3', 'RT 4', 'RT 5'],
                    datasets: [{
                        label: 'Jumlah Warga',
                        data: [data.rt1, data.rt2, data.rt3, data.rt4, data.rt5],
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        borderColor: 'rgba(153, 102, 255, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
    </script>
</body>
</html>

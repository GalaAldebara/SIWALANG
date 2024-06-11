<!DOCTYPE html>
<html>
<head>
    <title>Data Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #rtData {
            display: none;
            width: 50%;
            margin: 20px auto;
            padding: 10px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div style="width: 50%; margin: auto;">
        <canvas id="dataChart"></canvas>
    </div>

    <div id="rtData">
        <h3>Data Warga Berdasarkan RT</h3>
        <canvas id="rtChart"></canvas>
    </div>

    <script>
        var ctx = document.getElementById('dataChart').getContext('2d');
        var rtChart = null; // Variable to store the RT chart instance
        var lastClickedLabel = null; // Variable to store the last clicked label

        var dataChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Male', 'Female', 'Kepala Keluarga', 'Jumlah Warga'],
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
                        max: 300 // Set maximum y-axis value to 300 for the main chart
                    }
                },
                onClick: function(evt, elements) {
                    if (elements.length > 0) {
                        var dataIndex = elements[0].index;
                        var label = dataChart.data.labels[dataIndex];

                        var gender = null;
                        var relationship = null;

                        if (label === 'Male') {
                            gender = 'Laki-laki';
                        } else if (label === 'Female') {
                            gender = 'Perempuan';
                        } else if (label === 'Kepala Keluarga') {
                            relationship = 'kepala keluarga';
                        }

                        if (label === 'Jumlah Warga' || gender || relationship) {
                            if ($('#rtData').is(':visible') && lastClickedLabel === label) {
                                $('#rtData').hide();
                                lastClickedLabel = null;
                            } else {
                                $.ajax({
                                    url: '/data_diri/chart/rt',
                                    method: 'GET',
                                    data: {
                                        gender: gender,
                                        relationship: relationship
                                    },
                                    success: function(response) {
                                        showRtData(response, label);
                                    }
                                });
                                lastClickedLabel = label;
                            }
                        }
                    }
                }
            }
        });

        function showRtData(data, label) {
            var rtCtx = document.getElementById('rtChart').getContext('2d');
            if (rtChart) {
                rtChart.destroy();
            }
            rtChart = new Chart(rtCtx, {
                type: 'bar',
                data: {
                    labels: ['RT 1', 'RT 2', 'RT 3', 'RT 4', 'RT 5'],
                    datasets: [{
                        label: label + ' per RT',
                        data: [data.rt1, data.rt2, data.rt3, data.rt4, data.rt5],
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        borderColor: 'rgba(153, 102, 255, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 50 // Set maximum y-axis value to 50 for the RT chart
                        }
                    }
                }
            });

            $('#rtData').show();
        }
    </script>
</body>
</html>

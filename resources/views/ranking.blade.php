@extends('layouts.app')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <div id="chart-wrapper">
        <canvas id="myChart" ></canvas>
    </div>
    <script>
        let names = [];
        @foreach($usuarios['names'] as $names)
            names.push("{{$names}}")
        @endforeach


        const ctx = document.getElementById('myChart').getContext('2d');

        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: names
                ,
                datasets: [{
                    label: 'Pontos',
                    data:{{json_encode($usuarios['score'])}},
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>
    <style>
        #chart-wrapper {
            display: inline-block;
            position: relative;
            width: 100%;
        }
    </style>

@endsection

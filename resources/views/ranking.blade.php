@extends('layouts.app')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <div id="chart-wrapper">
        <canvas id="myChart" ></canvas>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exchangeWorkoutModal">
                    Ranking Geral
                </button>
            </div>
        </div>
    </div>
    <!-- Modal Proposito do meu treino não esteja alinhado com o meu objetivo com a academia -->
    <div class="modal fade" id="exchangeWorkoutModal" tabindex="-1" aria-labelledby="exchangeWorkoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="card-title text-center dislay-1">Ranking Geral</h1>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <div>
                                <?php
                                $count = 1;
                                ?>
                                @foreach($rakingGeral as $rakingUsuarios)
                                    <h6> {{$count++}}° Lugar: {{$rakingUsuarios->name}} -> {{$rakingUsuarios->nr_score}} Gym Points </h6>
                                @endforeach
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
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

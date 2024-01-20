<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Grafik Bidang') }}
        </h2>
    </x-slot>

    <div class="p-6">
        <div class="max-w-md mx-auto bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-4">
                <div>
                    <canvas id="myChart" style="max-width: 100%;"></canvas>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <script>
                    const ctx = document.getElementById('myChart');

                    new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: <?= $labelsString ?>,
                            datasets: [{
                                label: '# of Votes',
                                data: <?= $dataPointsString ?>,
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                </script>
            </div>
        </div>
    </div>
</x-app-layout>

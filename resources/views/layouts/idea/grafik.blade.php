<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Grafik Bidang') }}
        </h2>
    </x-slot>

    <div class="p-6">
        <div class="container-fluid">
            <div class="row">
                <!-- Chart Column -->
                <div class="col-md-6">
                    <div class="max-w-md mx-auto bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-4">
                            <div class="mb-3">
                                <label for="school" class="form-label">Sekolah</label>
                                <select name="school_id" id="school" class="form-control">
                                    @foreach ($school as $item)
                                        <option value="{{ $item->id }}" 
                                        {{ request('school_id') == $item->id ? 'selected' : '' }}>{{ $item->school }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div style="position: relative; height:40vh; width:100%">
                                <canvas id="myChart"></canvas>
                            </div>

                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

                            <script>
                                const ctx = document.getElementById('myChart');
                                new Chart(ctx, {
                                    type: 'pie',
                                    data: {
                                        labels: {!! $labelsString !!},
                                        datasets: [{
                                            label: 'Jumlah Pilihan',
                                            data: {!! $dataPointsString !!},
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.7)',
                                                'rgba(54, 162, 235, 0.7)',
                                                'rgba(255, 206, 86, 0.7)',
                                                'rgba(75, 192, 192, 0.7)',
                                                'rgba(153, 102, 255, 0.7)',
                                                'rgba(255, 159, 64, 0.7)'
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        responsive: true,
                                        maintainAspectRatio: false,
                                        plugins: {
                                            legend: {
                                                position: 'bottom',
                                            }
                                        }
                                    }
                                });

                                $(document).ready(function() {
                                    $('#school').change(function() {
                                        var schoolId = $(this).val();
                                        window.location.href = '?school_id=' + schoolId; 
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>

                         <!-- Table Column -->
                         <div class="col-md-6">
                    <div class="max-w-md mx-auto bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-4">
                            <h2>Bordered Table</h2>
                            <p>The .table-bordered class adds borders to a table:</p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>john@example.com</td>
                                    </tr>
                                    <tr>
                                        <td>Mary</td>
                                        <td>Moe</td>
                                        <td>mary@example.com</td>
                                    </tr>
                                    <tr>
                                        <td>July</td>
                                        <td>Dooley</td>
                                        <td>july@example.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Grafik Bidang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Chart Column -->
                <div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-4">
                            <div class="mb-3">
                                <label for="school" class="form-label font-bold">Pilih Sekolah</label>
                                <select name="school_id" id="school" class="form-control rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <option value="0">Semua Sekolah</option>
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
                <div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-4">
                            <h2 class="font-bold text-lg mb-2">Daftar User & Pilihan Bidang</h2>
                            <p class="text-sm text-gray-600 mb-4">Berikut adalah daftar user berdasarkan sekolah yang dipilih:</p>
                            <div class="bg-white shadow-sm border border-gray-200 sm:rounded-lg overflow-x-auto">
                                <table class="w-full text-sm text-left text-gray-500">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b border-gray-200">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 tracking-wider">No</th>
                                            <th scope="col" class="px-6 py-3 tracking-wider">Nama</th>
                                            <th scope="col" class="px-6 py-3 tracking-wider">Email</th>
                                            <th scope="col" class="px-6 py-3 tracking-wider">Bidang</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                        @forelse ($users as $key => $user)
                                            <tr class="bg-white hover:bg-gray-50 transition-colors">
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $key + 1 }}</td>
                                                <td class="px-6 py-4">{{ $user->name }}</td>
                                                <td class="px-6 py-4">{{ $user->email }}</td>
                                                <td class="px-6 py-4">
                                                    <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-semibold">
                                                        {{ $user->community }}
                                                    </span>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                                                    Tidak ada data user untuk sekolah ini.
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

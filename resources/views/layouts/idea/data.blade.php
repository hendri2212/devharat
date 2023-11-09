<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="/idea/create" class="btn btn-primary">Tambahkan Ide</a>
                    {{-- You're logged in! --}}
                    <div class="table-responsive">
                        <table class="table table-striped mt-3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Aplikasi</th>
                                    <th colspan="2">Deskripsi Aplikasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($ide ?? '' as $key => $data) --}}
                                @foreach ($ide as $key => $data)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $data->app_name }}</td>
                                    <td>{{ $data->description }}</td>
                                    <td><a href="#" class="btn btn-success btn-sm">Lihat</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

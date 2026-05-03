<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Ide') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (Auth::user()->phone == '0')
                        <div class="bg-orange-500 mb-3 p-2 rounded-lg text-white">
                            Whatsapp Anda {{ Auth::user()->phone }}. Silahkan update nomor Whatsapp di menu Data User atau klik tombol berikut <a href="/user/{{ Auth::user()->id }}" class='bg-white px-2.5 py-0.5 rounded text-gray-800'>Data User</a>
                        </div>
                    @endif
                    <a href="/idea/create" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-none transition duration-150 ease-in-out inline-block">Tambahkan Ide</a>
                    {{-- You're logged in! --}}
                    <div class="bg-white shadow-sm border border-gray-200 sm:rounded-lg overflow-x-auto mt-4">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b border-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3 tracking-wider">No</th>
                                    <th scope="col" class="px-6 py-3 tracking-wider">Nama Aplikasi</th>
                                    <th scope="col" class="px-6 py-3 tracking-wider" colspan="2">Deskripsi Aplikasi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                {{-- @foreach ($ide ?? '' as $key => $data) --}}
                                @foreach ($ide as $key => $data)
                                <tr class="bg-white hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $key+1 }}</td>
                                    <td class="px-6 py-4">{{ $data->app_name }}</td>
                                    <td class="px-6 py-4">{{ Str::limit($data->description, 150, '...') }}</td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="inline-flex rounded-none shadow-sm" role="group">
                                            <a href="idea/{{ $data->id }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-1.5 rounded-none text-sm font-semibold transition duration-150 ease-in-out inline-block flex items-center">Lihat</a>
                                        </div>
                                    </td>
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

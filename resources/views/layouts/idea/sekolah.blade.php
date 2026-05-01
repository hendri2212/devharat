<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Ide') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="/school" class="mb-5">
                        @csrf
                        <div class="mb-3">
                            <label for="school_input" class="form-label">Tambahkan Sekolah Baru</label>
                            <input type="text" name="school" id="school_input" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary bg-primary">Tambah Sekolah</button>
                    </form>

                    <div class="mb-3">
                        <label for="school" class="form-label">Daftar Sekolah</label>
                        <table class="table-fixed">
                            <thead>
                                <tr class="whitespace-nowrap ...">
                                    <th class="border p-2">No</th>
                                    <th class="border p-2">Nama Sekolah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($school as $key => $item)
                                <tr>
                                    <td class="border p-2">{{ $key+1 }}</td>
                                    <td class="border p-2">{{ $item->school }}</td>
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

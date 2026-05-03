<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-2">
            {{ __('Sekolah') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form id="schoolForm" method="post" action="/school" class="mb-5">
                        @csrf
                        <div id="methodContainer"></div>
                        <div class="mb-4">
                            <label for="school_input" id="formLabel" class="block font-medium text-gray-700">Tambahkan Sekolah Baru</label>
                            <input type="text" name="school" id="school_input" class="border border-black rounded-none mt-1 block w-full px-3 py-2 focus:outline-none focus:ring-0 focus:border-black" required>
                        </div>
                        <button type="submit" id="submitBtn" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-none transition duration-150 ease-in-out">Tambah Sekolah</button>
                        <button type="button" id="cancelBtn" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-none ml-2 transition duration-150 ease-in-out" onclick="cancelEdit()" style="display: none;">Batal</button>
                    </form>

                    <div class="mb-4">
                        <label for="school" class="block font-medium text-gray-700 mb-2">Daftar Sekolah</label>
                        <div class="bg-white shadow-sm border border-gray-200 sm:rounded-lg overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b border-gray-200">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 tracking-wider">No</th>
                                        <th scope="col" class="px-6 py-3 tracking-wider">Nama Sekolah</th>
                                        <th scope="col" class="px-6 py-3 tracking-wider text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    @foreach ($schools as $key => $item)
                                    <tr class="bg-white hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $key+1 }}</td>
                                        <td class="px-6 py-4">{{ $item->school }}</td>
                                        <td class="px-6 py-4 text-center">
                                            <div class="inline-flex rounded-none shadow-sm" role="group">
                                                <button type="button" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-none text-sm font-semibold transition duration-150 ease-in-out" data-name="{{ $item->school }}" onclick="editSchool({{ $item->id }}, this.getAttribute('data-name'))">Edit</button>
                                                <form action="{{ route('school.destroy', $item->id) }}" method="POST" class="m-0" onsubmit="return confirm('Apakah Anda yakin ingin menghapus sekolah ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-none text-sm font-semibold transition duration-150 ease-in-out">Hapus</button>
                                                </form>
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
    </div>
</x-app-layout>

<script>
    function editSchool(id, name) {
        // Isi form dengan data yang dipilih
        document.getElementById('school_input').value = name;
        
        // Ubah tampilan dan aksi form untuk Mode Update
        document.getElementById('formLabel').innerText = 'Edit Sekolah';
        document.getElementById('submitBtn').innerText = 'Simpan Perubahan';
        document.getElementById('cancelBtn').style.display = 'inline-block';
        
        const form = document.getElementById('schoolForm');
        form.action = `/school/${id}`;
        
        // Tambahkan @method('PUT') agar terbaca sebagai request UPDATE oleh Laravel
        document.getElementById('methodContainer').innerHTML = '<input type="hidden" name="_method" value="PUT">';
        
        // Fokuskan layar ke form atas
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function cancelEdit() {
        // Kosongkan form
        document.getElementById('school_input').value = '';
        
        // Kembalikan form ke Mode Tambah Baru
        document.getElementById('formLabel').innerText = 'Tambahkan Sekolah Baru';
        document.getElementById('submitBtn').innerText = 'Tambah Sekolah';
        document.getElementById('cancelBtn').style.display = 'none';
        
        const form = document.getElementById('schoolForm');
        form.action = '/school';
        
        // Hapus input method PUT
        document.getElementById('methodContainer').innerHTML = '';
    }
</script>
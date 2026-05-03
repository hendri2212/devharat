<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambahkan Ide') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/idea" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 w-full">
                            <!-- Kolom Kiri -->
                            <div>
                                <div class="mb-4">
                                    <label for="app_name" class="block font-medium text-gray-700 mb-1">Judul / Nama Aplikasi</label>
                                    <input type="text" class="border border-black rounded-none mt-1 block w-full px-3 py-2 focus:outline-none focus:ring-0 focus:border-black" name="app_name" id="app_name" placeholder="Nama aplikasi kamu" required>
                                </div>
                                <div class="mb-4">
                                    <label for="app_user" class="block font-medium text-gray-700 mb-1">Pengguna Aplikasi</label>
                                    <input type="text" class="border border-black rounded-none mt-1 block w-full px-3 py-2 focus:outline-none focus:ring-0 focus:border-black" id="app_user" name="app_user" placeholder="Siapa yang menggunakan aplikasi" required>
                                    <div class="text-sm text-gray-500 mt-1">Contoh: Dinas Pariwisata, pedagang pasar.</div>
                                </div>
                                <div class="mb-4">
                                    <label for="description" class="block font-medium text-gray-700 mb-1">Deskripsi Aplikasi</label>
                                    <textarea name="description" id="description" class="border border-black rounded-none mt-1 block w-full px-3 py-2 focus:outline-none focus:ring-0 focus:border-black" cols="30" rows="6" placeholder="Tuliskan deskripsi dengan detail" required></textarea>
                                </div>
                            </div>

                            <!-- Kolom Kanan -->
                            <div>
                                <div class="mb-4">
                                    <label for="excellence" class="block font-medium text-gray-700 mb-1">Kelebihan / Manfa'at Aplikasi</label>
                                    <textarea name="excellence" id="excellence" class="border border-black rounded-none mt-1 block w-full px-3 py-2 focus:outline-none focus:ring-0 focus:border-black" cols="30" rows="5" placeholder="Tuliskan detail manfaat ide aplikasi" required></textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="feature" class="block font-medium text-gray-700 mb-1">Fitur - Fitur Aplikasi</label>
                                    <textarea name="feature" id="feature" class="border border-black rounded-none mt-1 block w-full px-3 py-2 focus:outline-none focus:ring-0 focus:border-black" cols="30" rows="5" placeholder="Tuliskan fitur apa aja yang bisa dibuat" required></textarea>
                                </div>
                                
                                <div class="flex justify-end space-x-2 mt-8">
                                    <a href="/idea" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-6 rounded-none transition duration-150 ease-in-out">Batal</a>
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-none transition duration-150 ease-in-out">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

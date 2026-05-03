<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Ide') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6 flex justify-between items-center border-b border-gray-200 bg-gray-50">
                    <div>
                        <h3 class="text-lg leading-6 font-bold text-gray-900">Informasi Detail Ide</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Rincian spesifik aplikasi yang diajukan.</p>
                    </div>
                    <a href="javascript:history.back()" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded-none font-semibold text-sm transition duration-150 ease-in-out">Kembali</a>
                </div>
                <div class="border-t border-gray-200">
                    <dl class="divide-y divide-gray-200">
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-semibold text-gray-700">Judul / Nama Aplikasi</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $ide->app_name }}</dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-semibold text-gray-700">Deskripsi Aplikasi</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 whitespace-pre-line">{{ $ide->description }}</dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-semibold text-gray-700">Kelebihan / Manfa'at Aplikasi</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 whitespace-pre-line">{{ $ide->excellence }}</dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-semibold text-gray-700">Pengguna Aplikasi</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $ide->app_user }}</dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-semibold text-gray-700">Fitur - Fitur Aplikasi</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 whitespace-pre-line">{{ $ide->feature }}</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

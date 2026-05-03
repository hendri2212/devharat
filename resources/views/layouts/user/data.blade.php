<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6 border-b border-gray-200 bg-gray-50 flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <div>
                        <h3 class="text-lg leading-6 font-bold text-gray-900">Profil Pengguna</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Perbarui informasi kontak Anda di sini.</p>
                    </div>
                </div>
                <div class="p-6 bg-white">
                    <form action="/user/{{ $user->id }}" method="POST">
                        @method('PUT')
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Name Field (Read Only) -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                                <div class="bg-gray-50 border border-gray-200 text-gray-600 rounded-none px-4 py-2 w-full cursor-not-allowed">
                                    {{ $user->name }}
                                </div>
                            </div>
                            
                            <!-- Email Field (Read Only) -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Alamat Email</label>
                                <div class="bg-gray-50 border border-gray-200 text-gray-600 rounded-none px-4 py-2 w-full cursor-not-allowed">
                                    {{ $user->email }}
                                </div>
                            </div>
                        </div>

                        <!-- Whatsapp Field (Editable) -->
                        <div class="mb-6">
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Nomor Whatsapp</label>
                            <div class="relative rounded-none shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                                        <path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.553 4.122 1.54 5.867L.25 23.75l6.046-1.196C7.942 23.554 9.914 24 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.98c-1.84 0-3.642-.472-5.244-1.365l-.376-.21-3.896.77.785-3.69-.24-.366A9.957 9.957 0 012.02 12C2.02 6.486 6.486 2.02 12 2.02c5.513 0 9.98 4.466 9.98 9.98s-4.467 9.98-9.98 9.98z"/>
                                    </svg>
                                </div>
                                <input type="text" id="phone" name="phone" value="{{ $user->phone }}" class="border border-black rounded-none block w-full pl-10 pr-3 py-3 focus:outline-none focus:ring-0 focus:border-black transition duration-150 ease-in-out" placeholder="Contoh: 081234567890">
                            </div>
                        </div>

                        <div class="flex justify-end pt-4 border-t border-gray-200 mt-6">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-8 rounded-none transition duration-150 ease-in-out cursor-pointer shadow-sm flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

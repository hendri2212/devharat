<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('event-manage.store') }}" method="POST">
                @csrf
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="mb-4">
                            <label for="name" class="block font-medium text-gray-700 mb-1">Event Name</label>
                            <input type="text" class="border border-black rounded-none mt-1 block w-full px-3 py-2 focus:outline-none focus:ring-0 focus:border-black" name="name" id="name" placeholder="Nama event" required>
                        </div>
                        <div class="mb-4">
                            <label for="event_date" class="block font-medium text-gray-700 mb-1">Event Date</label>
                            <input type="date" class="border border-black rounded-none mt-1 block w-full px-3 py-2 focus:outline-none focus:ring-0 focus:border-black" name="event_date" id="event_date" required>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block font-medium text-gray-700 mb-1">Description</label>
                            <textarea name="description" id="description" class="border border-black rounded-none mt-1 block w-full px-3 py-2 focus:outline-none focus:ring-0 focus:border-black" rows="4" placeholder="Deskripsi event"></textarea>
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex justify-end space-x-2">
                    <a href="{{ route('event-manage.index') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-6 rounded-none transition duration-150 ease-in-out">Batal</a>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-none transition duration-150 ease-in-out">Simpan Event</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

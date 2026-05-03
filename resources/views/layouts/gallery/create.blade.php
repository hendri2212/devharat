<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Gallery Item') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('gallery-manage.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="mb-4">
                            <label for="event_id" class="block font-medium text-gray-700 mb-1">Event</label>
                            <select class="border border-black rounded-none mt-1 block w-full px-3 py-2 focus:outline-none focus:ring-0 focus:border-black" id="event_id" name="event_id" required>
                                <option value="">Select Event</option>
                                @foreach ($events as $event)
                                    <option value="{{ $event->id }}">{{ $event->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="title" class="block font-medium text-gray-700 mb-1">Title</label>
                            <input type="text" class="border border-black rounded-none mt-1 block w-full px-3 py-2 focus:outline-none focus:ring-0 focus:border-black" id="title" name="title" placeholder="Judul foto" required>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block font-medium text-gray-700 mb-1">Description</label>
                            <textarea name="description" id="description" class="border border-black rounded-none mt-1 block w-full px-3 py-2 focus:outline-none focus:ring-0 focus:border-black" rows="3" placeholder="Keterangan foto"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="image" class="block font-medium text-gray-700 mb-1">Image</label>
                            <input type="file" class="mt-1 block w-full" id="image" name="image" required>
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex justify-end space-x-2">
                    <a href="{{ route('gallery-manage.index') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-6 rounded-none transition duration-150 ease-in-out">Batal</a>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-none transition duration-150 ease-in-out">Simpan Gallery</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

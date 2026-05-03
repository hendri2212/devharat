<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Gallery Item') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('gallery-manage.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 grid grid-cols-1 lg:grid-cols-2 gap-8">
                        
                        <!-- Left Column: Form Fields -->
                        <div>
                            <div class="mb-4">
                                <label for="event_id" class="block font-medium text-gray-700 mb-1">Event</label>
                                <select class="border border-black rounded-none mt-1 block w-full px-3 py-2 focus:outline-none focus:ring-0 focus:border-black" id="event_id" name="event_id" required>
                                    @foreach ($events as $event)
                                        <option value="{{ $event->id }}" {{ $gallery->event_id == $event->id ? 'selected' : '' }}>{{ $event->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="title" class="block font-medium text-gray-700 mb-1">Title</label>
                                <input type="text" class="border border-black rounded-none mt-1 block w-full px-3 py-2 focus:outline-none focus:ring-0 focus:border-black" id="title" name="title" value="{{ $gallery->title }}" required>
                            </div>
                            <div class="mb-4">
                                <label for="description" class="block font-medium text-gray-700 mb-1">Description</label>
                                <textarea name="description" id="description" class="border border-black rounded-none mt-1 block w-full px-3 py-2 focus:outline-none focus:ring-0 focus:border-black" rows="4">{{ $gallery->description }}</textarea>
                            </div>
                            <div class="mb-4">
                                <label for="image" class="block font-medium text-gray-700 mb-1">Upload New Image (leave blank to keep current)</label>
                                <input type="file" class="mt-1 block w-full text-gray-700" id="image" name="image">
                            </div>
                        </div>

                        <!-- Right Column: Image Preview -->
                        <div class="flex flex-col items-center justify-center bg-gray-50 border-2 border-dashed border-gray-300 rounded-lg p-4 min-h-[300px]">
                            <p class="text-sm text-gray-500 font-semibold mb-3">Current Image</p>
                            @if($gallery->image)
                                <img src="{{ asset('storage/'.$gallery->image) }}" alt="{{ $gallery->title }}" class="max-w-full max-h-80 object-contain shadow-sm border border-gray-200">
                            @else
                                <p class="text-sm text-gray-400 italic">No image uploaded</p>
                            @endif
                        </div>

                    </div>
                </div>
                <div class="mt-6 flex justify-end space-x-2">
                    <a href="{{ route('gallery-manage.index') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-6 rounded-none transition duration-150 ease-in-out">Batal</a>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-none transition duration-150 ease-in-out">Update Gallery</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

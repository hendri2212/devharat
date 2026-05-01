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
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="mb-3">
                            <label for="event_id" class="form-label">Event</label>
                            <select class="form-control border-secondary rounded-0" id="event_id" name="event_id" required>
                                @foreach ($events as $event)
                                    <option value="{{ $event->id }}" {{ $gallery->event_id == $event->id ? 'selected' : '' }}>{{ $event->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $gallery->title }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control border-secondary rounded-0" rows="3">{{ $gallery->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image (leave blank to keep current)</label>
                            <input type="file" class="form-control" id="image" name="image">
                            <div class="mt-2">
                                <img src="{{ asset('storage/'.$gallery->image) }}" alt="{{ $gallery->title }}" class="h-20 w-20 object-cover rounded shadow-sm">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 flex justify-end">
                    <div class="btn-group">
                        <a href="{{ route('gallery-manage.index') }}" class="btn btn-warning">Batal</a>
                        <button type="submit" class="btn btn-primary bg-primary">Update Gallery</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

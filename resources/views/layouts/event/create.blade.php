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
                        <div class="mb-3">
                            <label for="name" class="form-label">Event Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nama event" required>
                        </div>
                        <div class="mb-3">
                            <label for="event_date" class="form-label">Event Date</label>
                            <input type="date" class="form-control" name="event_date" id="event_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control border-secondary rounded-0" rows="4" placeholder="Deskripsi event"></textarea>
                        </div>
                    </div>
                </div>
                <div class="mt-4 flex justify-end">
                    <div class="btn-group">
                        <a href="{{ route('event-manage.index') }}" class="btn btn-warning">Batal</a>
                        <button type="submit" class="btn btn-primary bg-primary">Simpan Event</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

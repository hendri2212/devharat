<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Management Gallery') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('gallery-manage.create') }}" class="rounded-md text-white px-3 py-1.5 bg-blue-600">
                        Add Gallery Item
                    </a>
                    @if (session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 my-4" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped mt-3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Event</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleries as $key => $gallery)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $gallery->title }}</td>
                                    <td>{{ $gallery->event->name ?? 'N/A' }}</td>
                                    <td>
                                        <img src="{{ asset('storage/'.$gallery->image) }}" alt="{{ $gallery->title }}" class="h-10 w-10 object-cover rounded shadow-sm">
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('gallery-manage.edit', $gallery->id) }}" class="rounded-md text-white px-3 py-1.5 bg-green-600 me-2 text-decoration-none">Edit</a>
                                            <form action="{{ route('gallery-manage.destroy', $gallery->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="rounded-md text-white px-3 py-1.5 bg-red-600 border-0" onclick="return confirm('Are you sure?')">Delete</button>
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
</x-app-layout>

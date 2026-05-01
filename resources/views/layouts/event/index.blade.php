<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Management Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('event-manage.create') }}" class="rounded-md text-white px-3 py-1.5 bg-blue-600">
                        Add Event
                    </a>
                    @if (session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 my-4" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table-fixed mt-3">
                            <thead>
                                <tr class="whitespace-nowrap ...">
                                    <th class="border p-2">No</th>
                                    <th class="border p-2">Name</th>
                                    <th class="border p-2">Date</th>
                                    <th class="border p-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $key => $event)
                                <tr>
                                    <td class="border p-2">{{ $key+1 }}</td>
                                    <td class="border p-2">{{ $event->name }}</td>
                                    <td class="border p-2">{{ $event->event_date }}</td>
                                    <td class="border p-2">
                                        <div class="flex">
                                            <a href="{{ route('event-manage.edit', $event->id) }}" class="rounded-md text-white px-3 py-1.5 bg-green-600 mr-2">Edit</a>
                                            <form action="{{ route('event-manage.destroy', $event->id) }}" method="POST" class="inline">
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

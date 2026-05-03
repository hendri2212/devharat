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
                    <a href="{{ route('event-manage.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-none transition duration-150 ease-in-out inline-block">
                        Add Event
                    </a>
                    @if (session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 my-4" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="bg-white shadow-sm border border-gray-200 sm:rounded-lg overflow-x-auto mt-3">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b border-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3 tracking-wider">No</th>
                                    <th scope="col" class="px-6 py-3 tracking-wider">Name</th>
                                    <th scope="col" class="px-6 py-3 tracking-wider">Date</th>
                                    <th scope="col" class="px-6 py-3 tracking-wider text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($events as $key => $event)
                                <tr class="bg-white hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $key+1 }}</td>
                                    <td class="px-6 py-4">{{ $event->name }}</td>
                                    <td class="px-6 py-4">{{ $event->event_date }}</td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="inline-flex rounded-none shadow-sm" role="group">
                                            <a href="{{ route('event-manage.edit', $event->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-none text-sm font-semibold transition duration-150 ease-in-out flex items-center">Edit</a>
                                            <form action="{{ route('event-manage.destroy', $event->id) }}" method="POST" class="m-0" onsubmit="return confirm('Are you sure?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-none text-sm font-semibold transition duration-150 ease-in-out h-full">Delete</button>
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

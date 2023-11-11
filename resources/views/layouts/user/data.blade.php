<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/user/{{ $user->id }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                            <div class="col-sm-10">
                                <p class="form-control-plaintext">{{ $user->name }}</p>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <p class="form-control-plaintext">{{ $user->email }}</p>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="phone" class="col-sm-2 col-form-label">Whatsapp</label>
                            <div class="col-sm-10">
                                <input type="phone" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <input type="submit" value="Update" class="rounded-md text-white px-3 py-1.5 bg-blue-600">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <div class="justify-between d-flex">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ $title ?? '' }}
            </h2>
            <a href="{{ route('admin.news.create') }}" class="btn btn-outline-success">Tambah Berita</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-auto">
                        <thead>
                            <tr class="bg-slate-50">
                                <th class="p-2 border">No</th>
                                <th class="p-2 border">Judul</th>
                                <th class="p-2 border">Slug</th>
                                <th class="p-2 border">Konten Berita</th>
                                <th class="p-2 border">Gambar</th>
                                <th class="p-2 border">User</th>
                                <th class="p-2 border">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $news)
                            <tr>
                                <td class="p-2 text-center border">{{ $key + 1 }}</td>
                                <td class="p-2 border">{{ $news->title }}</td>
                                <td class="p-2 border">{{ $news->slug }}</td>
                                <td class="p-2 border">{{ $news->content }}</td>
                                <td class="p-2 border">
                                    <img src="{{ $news->image_url }}" alt="img {{ $news->slug }}" class='img-thumbnails' />
                                </td>
                                <td class="p-2 border">
                                    {{ $news->user->name ?? '' }}
                                </td>
                                <td class="p-2 text-center border">
                                    <a href="{{ route('admin.news.edit', $news) }}" class="m-1 btn btn-success btn-sm">Edit</a>

                                    <form action="{{ route('admin.news.destroy', $news) }}" method="post">
                                        @method('DELETE')
                                        @csrf

                                        <button type="submit" class="m-1 btn btn-danger bg-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {!! $data->links() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

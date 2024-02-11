<x-app-layout>

    <x-slot name="header" class="flex justify-center">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ $title ?? '' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('admin.news.update', $data) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-4 col-12">
                            <div class='form-group'>
                                <label for='title'>Judul Berita</label>
                                <input type='text' name="title" id="title" class='form-control' placeholder='judul berita' value="{{ $data->title ?? '' }}" onkeydown="generateSlug()" />
                            </div>
                        </div>

                        <div class="mb-4 col-12">
                            <div class='form-group'>
                                <label for='slug'>Slug</label>
                                <input type='text' name="slug" id="slug" class='form-control' placeholder='' value="{{ $data->slug ?? '' }}" readonly />
                            </div>
                        </div>

                        <div class="mb-4 col-12">
                            <div class='form-group'>
                                <label for='title'>Judul Berita</label>
                                <textarea name="content" id="content" class="form-control" cols="30" rows="10">{{ $data->content ?? '' }}</textarea>
                            </div>
                        </div>

                        <div class="mb-4 col-12">
                            <div class="form-group">
                                <img src="{{ $data->image_url ?? '' }}" alt="" class="mb-4 img-thumbnail" id="file-preview">
                                <input type="file" name="image" id="image" onchange="previewImage()">
                                <label for="image">Upload Image</label>
                            </div>
                        </div>

                        <div class="mb-4 col-12">
                            <button type="submit" class="btn btn-primary text-dark">Simpan</button>
                            <a href="{{ route('admin.news.index') }}" class="btn btn-outline-secondary text-dark">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    @endpush

    @push('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                height: 250
            });
        });
        function previewImage() {
            const file = document.getElementById('image').files;
            if (file) {
                const fileReader = new FileReader();
                const preview = document.getElementById('file-preview');
                fileReader.onload = function (event) {
                    preview.setAttribute('src', event.target.result);
                }
                fileReader.readAsDataURL(file[0]);
            }
        }

        function generateSlug () {
            let title = document.getElementById('title').value;

            document.getElementById('slug').value = slug(title);
        }

        function slug (string) {
            return string.toLowerCase()
                    .replace(/ /g, "-")
                    .replace(/[^\w-]+/g, "");
        }
    </script>
    @endpush

    </x-app-layout>

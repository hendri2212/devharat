<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'DevHarat') }}</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('gambar/monitor.png') }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body style="background: url({{ asset('gambar/background.jpg') }})">
        {{-- <div class="font-sans text-gray-900 antialiased"> --}}
            {{-- {{ $slot }} --}}
        {{-- </div> --}}
        <div class="container py-5">
            <div class="row">
                <div class="col-4 text-center">
                    <a href="#" class="text-decoration-none text-reset">
                        <h1 class="fw-bold text-left mb-0">Dev<span class="text-success">Harat</span></h1>
                        <p class="mb-0 fw-bold text-left fs-5">Developer Harat Kotabaru</p>
                    </a>
                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="app_name" class="form-label">Judul / Nama Aplikasi</label>
                                            <input type="text" class="form-control" id="app_name" placeholder="Nama aplikasi kamu">
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Deskripsi Aplikasi</label>
                                            <textarea name="description" id="description" class="form-control" cols="30" rows="5" placeholder="Tuliskan deskripsi dengan detail"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="excellence" class="form-label">Kelebihan / Manfa'at Aplikasi</label>
                                            <textarea name="excellence" id="excellence" class="form-control" cols="30" rows="5" placeholder="Tuliskan detail manfaat ide aplikasi"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="app_user" class="form-label">Pengguna Aplikasi</label>
                                            <input type="email" class="form-control" id="app_user" placeholder="Siapa yang menggunakan aplikasi">
                                            <div id="app_user" class="form-text">Contoh: Dinas Pariwisata, pedagang pasar.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="feature" class="form-label">Fitur - Fitur Aplikasi</label>
                                            <textarea name="feature" id="feature" class="form-control" cols="30" rows="5" placeholder="Tuliskan fitur apa aja yang bisa dibuat"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary float-end">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
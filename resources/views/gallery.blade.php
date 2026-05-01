<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Gallery - Developer Harat Kotabaru</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('gambar/monitor.png') }}">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            #main {
                padding-top: 120px;
            }
            .gallery-item {
                position: relative;
                overflow: hidden;
                border-radius: 15px;
                cursor: pointer;
                aspect-ratio: 1 / 1;
            }
            .gallery-item img {
                transition: transform 0.5s;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .gallery-overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(25, 135, 84, 0.8);
                display: flex;
                align-items: center;
                justify-content: center;
                opacity: 0;
                transition: opacity 0.3s;
                color: white;
                text-align: center;
                padding: 20px;
            }
            .gallery-item:hover img {
                transform: scale(1.1);
            }
            .gallery-item:hover .gallery-overlay {
                opacity: 1;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top bg-white" id="fixTop">
            <div class="container px-4">
                <a href="{{ url('/') }}" class="text-decoration-none text-reset">
                    <h1 class="fw-bold mb-0">Dev<span class="text-success">Harat</span></h1>
                    <p class="mb-0 fw-bold">Developer Harat Kotabaru</p>
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-row-reverse bg-white" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/event') }}">Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/gallery') }}">Gallery</a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                            </li>
@else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Log in</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endif
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <main id="main">
            <section class="container px-4">
                <div class="text-center mb-5">
                    <h1 class="fw-bold">Galeri Kegiatan</h1>
                    <p class="text-muted">Momen-momen berharga dari kegiatan DevHarat Kotabaru</p>
                </div>

                <div class="row g-4">
                    @forelse ($galleries as $gallery)
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="gallery-item">
                                <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}">
                                <div class="gallery-overlay">
                                    <div>
                                        <h6 class="fw-bold mb-0">{{ $gallery->title }}</h6>
                                        <small>{{ $gallery->description }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5">
                            <p class="text-muted">Belum ada foto galeri.</p>
                        </div>
                    @endforelse
                </div>
            </section>
        </main>

        <footer class="py-5 mt-5 bg-light">
            <div class="container text-center">
                <p class="text-muted mb-0">&copy; 2024 Developer Harat Kotabaru. All rights reserved.</p>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script>
            // When the user scrolls the page, execute myFunction
            window.onscroll = function() {myFunction()};

            // Get the header
            var header = document.getElementById("fixTop");

            // Get the offset position of the navbar
            var sticky = header.offsetTop;

            // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
            function myFunction() {
                if (window.pageYOffset > sticky) {
                    header.classList.add("bg-white", "shadow");
                } else {
                    header.classList.remove("bg-white", "shadow");
                }
            };
        </script>
    </body>
</html>

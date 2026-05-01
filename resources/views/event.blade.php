<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Event - Developer Harat Kotabaru</title>
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
            .event-card {
                transition: transform 0.3s;
                border: none;
                border-radius: 15px;
                overflow: hidden;
                box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            }
            .event-card:hover {
                transform: translateY(-10px);
            }
            .event-date {
                background: #198754;
                color: white;
                padding: 5px 15px;
                border-radius: 0 0 15px 0;
                position: absolute;
                top: 0;
                left: 0;
                z-index: 1;
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
                            <a class="nav-link active" href="{{ url('/event') }}">Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/gallery') }}">Gallery</a>
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
                    <h1 class="fw-bold">Event Mendatang</h1>
                    <p class="text-muted">Ikuti berbagai kegiatan seru bersama komunitas DevHarat Kotabaru</p>
                </div>

                <div class="row g-4">
                    @forelse ($events as $event)
                        <div class="col-md-4">
                            <div class="card event-card h-100">
                                <div class="event-date">{{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}</div>
                                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="{{ $event->name }}">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-success">{{ $event->name }}</h5>
                                    <p class="card-text text-muted">{{ $event->description }}</p>
                                    {{-- <div class="d-flex align-items-center text-muted small mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill me-2" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                        </svg>
                                        Gedung Abdi Negara, Kotabaru
                                    </div> --}}
                                    <a href="#" class="btn btn-outline-success w-100 rounded-pill">Detail Event</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5">
                            <p class="text-muted">Belum ada event mendatang.</p>
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

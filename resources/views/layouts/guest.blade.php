<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Developer Harat Kotabaru</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('gambar/monitor.png') }}">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .navbar-expand-lg {
                flex: 1;
                margin: auto !important;
                display: flex;
                justify-content: space-between;
            }
            #main {
                padding-top: 100px;
            }
            #progDepan {
                border-radius: 2rem 0 0 2rem;
            }
            #progBelakang {
                border-radius: 0 2rem 2rem 0;
            }
            @media only screen and (max-width: 700px) {
                #progDepan {
                    border-radius: 2rem 2rem 0 0;
                }
                #progBelakang {
                    border-radius: 0 0 2rem 2rem;
                }
            }
            @media only screen and (min-width: 700px) {
                .haratTitle {
                    font-size: 3.5em;
                }
            }
        </style>
    </head>
    <body>
        <nav class="bg-white navbar navbar-expand-lg fixed-top" id="fixTop">
            <div class="container px-4">
                <a href="#" class="text-decoration-none text-reset">
                    <h1 class="mb-0 fw-bold">Dev<span class="text-success">Harat</span></h1>
                    <p class="mb-0 fw-bold">Developer Harat Kotabaru</p>
                </a>
                <button class="border-0 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @if (Route::has('login'))
                <div class="flex-row-reverse bg-white collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        @auth
                            <li class="nav-item">
                                {{-- <a class="nav-link active" aria-current="page" href="{{ url('/dashboard') }}">Dashboard</a> --}}
                                <a class="nav-link active" aria-current="page" href="{{ url('/idea') }}">Dashboard</a>
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
                @endif
            </div>
        </nav>
        <main id="main">
            <section class="container p-4">
                <div class="row justify-content-between">
                    <div class="my-auto col-lg-6">
                        <h1 class="title fw-bold haratTitle">Bangun Masa Depan bersama Developer <span class="text-success">Harat Kotabaru</span></h1>
                        <p class="text-muted">Kirimkan ide kreatif Anda di bidang Teknologi Digital / Aplikasi untuk kemajuan Kabupaten Kotabaru di bidang Teknologi. </p>
                        {{-- <p class="fw-bolder">Batas Pendaftaran: <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="my-auto ms-2 me-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z"></path></svg>08 Nov 2023 s/d 14 Nov 2023</p> --}}
                        <div class="gap-2 d-grid d-md-flex gap-md-3">
                            <a class="btn btn-lg btn-danger rounded-1" target="_blank" rel="noopener noreferrer" href="/idea/create">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="mb-1 me-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"></path>
                                </svg>
                                Tuliskan Ide Mu
                            </a>
                        </div>
                    </div>
                    <div class="my-auto col-md-6">
                        <img alt="kotabaru" fetchpriority="high" width="1000" height="1000" decoding="async" data-nimg="1" class="mt-2 img-fluid rounded-5" src="{{ asset('gambar/kotabaru.png') }}">
                    </div>
                </div>
            </section>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script>
            window.addEventListener('resize', function() {
                if (window.innerWidth < 700) {
                    document.getElementById('progDepan').classList.add('rounded-top-5');
                    document.getElementById('progDepan').classList.remove('rounded-start-5');
                } else {
                    document.getElementById('progDepan').classList.add('rounded-start-5');
                    document.getElementById('progDepan').classList.remove('rounded-top-5');
                }

                if (window.innerWidth < 700) {
                    document.getElementById('progBelakang').classList.add('rounded-bottom-5');
                    document.getElementById('progBelakang').classList.remove('rounded-end-5');
                } else {
                    document.getElementById('progBelakang').classList.add('rounded-end-5');
                    document.getElementById('progBelakang').classList.remove('rounded-bottom-5');
                }
            });

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

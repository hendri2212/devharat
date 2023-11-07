<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Developer Harat Kotabaru</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}

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
            @media only screen and (min-width: 700px) {
                .haratTitle {
                    font-size: 3.5em;
                }
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top" id="fixTop">
            <div class="container px-4">
                <a href="#" class="text-decoration-none text-reset">
                    <h1 class="fw-bold mb-0">Dev<span class="text-success">Harat</span></h1>
                    <p class="mb-0 fw-bold">Developer Harat Kotabaru</p>
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @if (Route::has('login'))
                <div class="collapse navbar-collapse flex-row-reverse bg-white" id="navbarNav">
                    <ul class="navbar-nav">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/dashboard') }}">Dashboard</a>
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
                    <div class="col-lg-6 my-auto">
                        <h1 class="title fw-bold haratTitle">Bangun Masa Depan bersama Developer <span class="text-success">Harat Kotabaru</span></h1>
                        <p class="text-muted">Kirimkan ide kreatif Anda di bidang Teknologi Digital / Aplikasi untuk kemajuan Kabupaten Kotabaru di bidang Teknologi. </p>
                        <p class="fw-bolder">Batas Pendaftaran: <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="my-auto ms-2 me-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z"></path></svg>06 Nov 2023 s/d 13 Nov 2023</p>
                        <div class="d-grid d-md-flex gap-2 gap-md-3">
                            <a class="btn btn-lg btn-primary rounded-1" target="_blank" rel="noopener noreferrer" href="/register">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="me-1 mb-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"></path>
                                </svg>
                                Isi Form Sekarang
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 my-auto">
                        <img alt="kotabaru" fetchpriority="high" width="1000" height="1000" decoding="async" data-nimg="1" class="img-fluid rounded-5 mt-2" src="/gambar/kotabaru.jpeg" style="color: transparent;">
                    </div>
                </div>
            </section>
            <section class="container p-4">
                <div class="row shadow align-items-center rounded-5">
                    <div class="col-lg-3 py-5 text-center">
                        <h1 class="display-3 fw-bold text-primary"><span>13,655</span></h1>
                        <span>Total Pendaftar</span>
                    </div>
                    <div class="col-lg-9 bg-primary rounded-5">
                        <div class="row py-5 text-white align-items-center">
                            <div class="col-lg-4 text-center">
                                <h1 class="display-3 fw-bold"><span>1,054</span></h1>
                                <span>Kuota Tersisa</span>
                            </div>
                            <div class="col-lg-8 px-5 py-3 border-start border-4 d-none d-lg-block">
                                <p class="m-0 lh-lg">Informasi: Jumlah kuota akan terus berkurang sesuai dengan jumlah peserta yang telah menuntaskan misi dan klaim beasiswa</p>
                            </div>
                            <div class="col-lg-8 px-5 py-3 d-block d-lg-none">
                                <p class="m-0 lh-lg">Informasi: Jumlah kuota akan terus berkurang sesuai dengan jumlah peserta yang telah menuntaskan misi dan klaim beasiswa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container p-4">
                <div class="row rounded-5">
                    <div class="col-lg-5 d-flex flex-column align-items-center justify-content-center p-0 rounded-start-5 SectionAbout_border_radius_start__Gy2Mq" style="background: url(https://www.devhandal.id/assets/img/img-programming.png)">
                        {{-- <button type="button" class="btn text-white border-0 SectionAbout_btn_play__kLkFM" data-bs-toggle="modal" data-bs-target="#aboutModal">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="50" width="50" xmlns="http://www.w3.org/2000/svg">
                                <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"></path>
                            </svg>
                        </button> --}}
                    </div>
                    {{-- <div class="col-lg-7 text-white py-5 px-auto px-md-5 d-flex flex-column align-items-start justify-content-center SectionAbout_bg_right__CxvLx SectionAbout_border_radius_end__g_y_Y"> --}}
                    <div class="col-lg-7 text-white py-5 px-auto px-md-5 d-flex flex-column align-items-start justify-content-center bg-success rounded-end-5">
                        <h2 class="title fw-bolder mb-3">Apa itu DeveloperHarat?</h2>
                        <p class="lh-lg"><strong class="badge text-bg-light">Developer Harat</strong> adalah sebuah komunitas developer aplikasi atau kumpulan para programmer yang berada di Kabupaten Kotabaru. Diharapkan dengan adanya komunitas ini akan meningkatkan kemajuan Teknologi Digital di Kabupaten Kotabaru yang kemudian juga akan berdampak pada perkembangan ekonomi daerah.</p>
                        <p class="lh-lg">Pada ajang kali ini <span class="badge text-bg-light">#DevHarat</span> mencari dan mengumpulkan informasi atau ide-ide kreatif dari masyarakat di bidang Teknologi Aplikasi untuk kemudian di realisasikan dan dapat digunakan masyarakat dengan baik dan sesuai kebutuhan.</p>
                    </div>
                </div>
            </section>
            <section class="container py-5 px-4"><div class="row justify-content-between"><div class="col-lg-6 my-5 my-lg-auto"><h2 class="title fw-bolder">Menjadi JavaScript Developer Expert</h2><p class="lh-lg">Dalam program DeveloperHandal, kamu akan mendapatkan kesempatan emas untuk belajar teknologi Full Stack JavaScript. Keahlian ini tidak hanya menawarkan pengetahuan teknis, tetapi juga beragam keuntungan yang berdampak luas pada karir dan masa depanmu, antara lain:</p><div class="d-flex mb-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-primary me-2 mt-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg><p class="my-auto">Keterampilan Komprehensif</p></div><div class="d-flex mb-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-primary me-2 mt-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg><p class="my-auto">Permintaan Tinggi</p></div><div class="d-flex mb-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-primary me-2 mt-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg><p class="my-auto">Peluang Karir Luas</p></div><div class="d-flex mb-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-primary me-2 mt-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg><p class="my-auto">Penghasilan Tinggi</p></div><div class="d-flex"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-primary me-2 mt-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg><p class="my-auto">Investasi Masa Depan</p></div></div><div class="col-lg-5 my-auto"><img alt="facilities" fetchpriority="high" width="1000" height="100" decoding="async" data-nimg="1" class="img-fluid rounded-5" style="color:transparent" src="/assets/img/img-js.png"></div></div></section>
        </main>
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
            }
        </script>
    </body>
</html>

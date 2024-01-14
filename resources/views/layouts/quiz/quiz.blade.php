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
        <nav class="navbar navbar-expand-lg fixed-top bg-white" id="fixTop">
            <div class="container px-4">
                <a href="#" class="text-decoration-none text-reset">
                    <h1 class="fw-bold mb-0">Dev<span class="text-success">Harat</span></h1>
                    <p class="mb-0 fw-bold">Developer Harat Kotabaru</p>
                </a>
            </div>
        </nav>
        <main id="main">
            <section class="container p-4">
                <div class="row justify-content-between">
                    <div class="col-lg-6 my-auto">
                        <h2 class="title fw-bold haratTitle mb-0"><span class="text-success">GEKRAFS</span> KOTABARU</h2>
                        <h6 class="text-secondary fw-bold">17 Subsektor Ekonomi Kreatif</h6>
                        <p class="text-muted">Gerakan Ekonomi Kreatif Kotabaru akan mengajak adik - adik untuk ikut berpartisipasi membangun dan meningkatkan ekonomi di kota tercinta kita yaitu Kotabaru</p>
                        <p class="fw-bolder">Adik - adik dapat menjadi anggota dari salah satu subsektor yang ada dalam naungan GEKRAFS KOTABARU</p>
                        <div class="d-grid d-md-flex gap-2 gap-md-3">
                            <a class="btn btn-lg btn-danger rounded-1" rel="noopener noreferrer" href="/quiz/create">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="me-1 mb-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"></path>
                                </svg>
                                Yuks Gabung
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 my-auto mt-5">
                        <img alt="kotabaru" fetchpriority="high" width="1000" height="1000" decoding="async" data-nimg="1" class="img-fluid rounded-2 mt-2" src="https://gekrafs.com/wp-content/uploads/2022/08/Profile-Gekrafs-IV.png">
                    </div>
                </div>
            </section>
        </main>
        <footer class="main-footer">
            <div class="container px-4">
                <p class="text-secondary small fst-italic">* aplikasi ini salah satu produk dari subsektor Aplikasi lho.</p>
            </div>
        </footer>
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

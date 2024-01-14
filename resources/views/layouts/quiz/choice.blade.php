<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Developer Harat Kotabaru</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('gambar/monitor.png') }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
                <div class="row center-content-between">
                    <div class="col-lg-6 my-auto">
                        <p class="text-muted">Untuk memilih silahkan adik - adik klik subsektor yang paling diminati yaa...</p>
                        <p class="fw-bolder mb-0">17 Subsektor Ekonomi Kreatif</p>
                        <div class="table-responsive" style="max-height: 300px">
                            <table class="table table-hover table-bordered" id="tableDivisi">
                                @foreach ($communities as $key => $data)
                                    <tr data-id="{{ $data->id }}" class="selectable-row">
                                        <td onclick="selectData(this)">{{ $data->community }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <p class="fw-bolder mb-0">Subsektor pilihan Anda</p>
                        <table class="table table-bordered" id="tablePilihan" onclick="removeData(event)">
                            <tr></tr>
                            @foreach ($choice as $item)
                                <tr data-id="{{ $item->community_id }}" class="selectable-row selected-row">
                                    <td onclick="selectData(this)">{{ $item->community_id }}</td>
                                    <td onclick="removeData(this)"><span class="badge text-bg-danger">Delete</span></td>
                                </tr>
                            @endforeach
                        </table>
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

            // Select choice
            function selectData(cell) {
                var selectedTable = document.getElementById('tablePilihan');
                var selectedRows = selectedTable.getElementsByTagName('tr');

                const element = document.querySelector('.selectable-row');
                const id = element.dataset.id; // id will be "1"

                // Memeriksa apakah data sudah ada di tabel Pilihan
                var isAlreadySelected = Array.from(selectedRows).some(function (row) {
                    return row.dataset.id === cell.parentNode.dataset.id;
                });

                if (selectedRows.length <= 3 && !isAlreadySelected) {
                    axios.post('/quiz', {
                        community_id: id,
                    })

                    var selectedRow = cell.parentNode;
                    selectedRow.classList.add('selected-row');

                    var clonedRow = selectedRow.cloneNode(true);
                    clonedRow.innerHTML += '<td onclick="removeData(this)"><span class="badge text-bg-danger">Delete</span></td>';

                    selectedTable.querySelector('tbody').appendChild(clonedRow);

                    selectedRow.classList.remove('selectable-row');
                }
            }

            function removeData(element) {
                var selectedRow = element.parentNode;
                var selectedTable = document.getElementById('tableDivisi');

                var originalRow = selectedTable.querySelector('tr[data-id="' + selectedRow.dataset.id + '"]');
                originalRow.classList.add('selectable-row');

                selectedRow.parentNode.removeChild(selectedRow);
            }
        </script>
    </body>
</html>

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
                <div class="row center-content-between">
                    <div class="col-lg-6 my-auto">
                        <h2 class="title fw-bold haratTitle">lorem ipsum</h2>
                        <p class="text-muted">Kirimkan ide kreatif Anda di bidang Teknologi Digital / Aplikasi untuk kemajuan Kabupaten Kotabaru di bidang Teknologi. </p>
                        
                        <!DOCTYPE html>
                    <html lang="en">
                    <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
                    <style>
                        body {
                        font-family: 'Arial', sans-serif;
                        }

                        h2 {
                        margin-top: 20px;
                        }

                        .table-container {
                        max-height: 300px;
                        overflow-y: auto;
                        }

                        .selectable-row:hover {
                        cursor: pointer;
                        background-color: #f2f2f2;
                        }

                        .selected-row {
                        background-color: #aaffaa !important;
                        box-shadow: none; /* Menghilangkan efek cahaya */
                        }

                        .remove-btn {
                        cursor: pointer;
                        color: red;
                        font-weight: bold;
                        }

                        .remove-btn:hover {
                        color: darkred;
                        }

                        .rounded-pill {
                        border-radius: 50px;
                        }
                    </style>
                    </head>
                    <body>

                    <div class="container">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="table-container">
                            <table class="table table-hover" id="tableDivisi">
                                <thead>
                                <tr>
                                    <th>Divisi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr data-id="1" class="selectable-row">
                                    <td class="rounded-pill" onclick="selectData(this)">Divisi A</td>
                                </tr>
                                <tr data-id="2" class="selectable-row">
                                    <td class="rounded-pill" onclick="selectData(this)">Divisi B</td>
                                </tr>
                                <tr data-id="3" class="selectable-row">
                                    <td class="rounded-pill" onclick="selectData(this)">Divisi C</td>
                                </tr>
                                <tr data-id="4" class="selectable-row">
                                    <td class="rounded-pill" onclick="selectData(this)">Divisi D</td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Pilihan Anda</h2>
                                <div class="table-container">
                                <table class="table" id="tablePilihan" onclick="removeData(event)">
                                    <thead>
                                    <tr>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>      
                        </div>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                    <script>
                        function selectData(cell) {
                        var selectedTable = document.getElementById('tablePilihan');
                        var selectedRows = selectedTable.getElementsByTagName('tr');

                        if (selectedRows.length <= 3) {
                            var selectedRow = cell.parentNode;
                            selectedRow.classList.add('selected-row');

                            var clonedRow = selectedRow.cloneNode(true);
                            clonedRow.innerHTML += '<td class="remove-btn rounded-pill" onclick="removeData(this)">X</td>';

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


                        
                        <div class="d-grid d-md-flex gap-2 gap-md-3">
                            <a class="btn btn-lg btn-danger rounded-1" target="_blank" rel="noopener noreferrer" href="verification">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="me-1 mb-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"></path>
                                </svg>
                                Kirim
                            </a>
                        </div>
                    </div>
                </div>
            </selection>    
        </main>
    </body>
</html>

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

            <h2 class="title fw-bold haratTitle">Anda yakin?</h2>
                        <p class="text-muted">drag pilihan apabila anda kurang yakin</p>

                        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draggable Table</title>
    <!-- Include jQuery and jQuery UI libraries -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<table id="draggableTable">
    <thead>
        <tr>
            <th>Header 1</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Data 1</td>
        </tr>
        <tr>
            <td>Data 2</td>
        </tr>
        <!-- Add more rows as needed -->
    </tbody>
</table>

<script>
    // Make the table draggable using jQuery UI
    $(function() {
        $("#draggableTable tbody").sortable({
            axis: "y",  // Allow only vertical dragging
            containment: "parent",  // Keep the table within its parent
            cursor: "move",  // Set the cursor to indicate draggable items
            opacity: 0.6,  // Set the opacity of the dragged items
            tolerance: "pointer",  // Specify where the cursor should be to start dragging
            update: function(event, ui) {
                // Function to execute when the sorting is updated (drag-and-drop is complete)
                console.log("Table updated!");
            }
        });
    });
</script>

</body>
</html>

            <br>
                <div class="row center-content-between">
                    <div class="col-lg-6 my-auto">
                        <div class="d-grid d-md-flex gap-2 gap-md-3">
                            <a class="btn btn-lg btn-danger rounded-1" target="_blank" rel="noopener noreferrer" href="/idea/create">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="me-1 mb-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"></path>
                                </svg>
                                Ya, Saya yakin
                            </a>
                        </div>
                    </div>
                </div>
            </br>
            </selection>    
        </main>
    </body>
</html>

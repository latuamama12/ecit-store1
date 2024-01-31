<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<style>
    body {
        padding-top: 56px;
    }

    .navbar {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand svg {
        margin-right: 99px;/* Rimuove il margine a destra */

    }
    .container .link {
        color: #343a40;
        text-decoration: none; /* Rimuove il trattino sottolineato */
    }

    .navbar-toggler-icon {
        background-color: #343a40;
    }

    .container .link {
        color: #343a40;
    }

    .container:hover {
        color: #000000;
    }

    .container {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        padding: 20px;
        background-color: #fff;
    }
</style>


<body>


        <div class="container">
            <a class="navbar-brand" href="/books">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house"
                    viewBox="0 0 16 16">
                    <path
                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
                </svg>
            </a>
          
                
            <a class="navbar-brand" href="/admin/create">
                Aggiungi Libri
            </a>

          
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  
                </ul>
            </div>
        </div>
  

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-eMNtkQI3VyjFzW7+Ib5ojOp/QqT0QyAf8YT0BEvPIFXDezeDL/Ht7akBqIbbfPhc"
        crossorigin="anonymous"></script>

</body>

</html>
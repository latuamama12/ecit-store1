<!-- resources/views/movies.blade.php -->
@extends('layouts.app')
 
 @section('titolo', 'Lista dei Libri')
  
 @section('content')
 
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica {{$book->titolo}}</title>
    <style>
        body {
            font-family: 'Baskerville ', serif;        
            background-color: #5fa2c2;
            color: #333;
            margin: 0;
            padding: 0;
        }
 
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
 
        h2,
        h3 {
            color: #333;
        }
 
        ul {
            list-style-type: none;
            padding: 0;
        }
 
        li {
            margin-bottom: 5px;
        }
 
        label {
            display: block;
            margin-bottom: 5px;
        }
 
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
 
        button {
            background-color: #4b4b4b;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
 
        button:hover {
            background-color: #b2b2b2;
        }
 
        p {
            margin-top: 10px;
        }
    </style>
</head>
 
<body>

 
        <h2>Modifica {{ $book->titolo }}</h2>

        <form id="form-modifica" action="{{ route('admin.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="titolo">Titolo</label>
            <input name="titolo" id='titolo' type="text" value="{{ $book->titolo }}" />
            <label for="descrizione">Descrizione</label>
            <input name="descrizione" id='descrizione' type="text" value="{{ $book->descrizione }}" />
            <label for="prezzo">Prezzo</label>
            <input name="prezzo" id='prezzo' type="number" value="{{ $book->prezzo }}" />
            <label for="categoria">Categoria</label>
            <input name="categoria" id='categoria' type="text" value="{{ $book->categoria }}" />
            <button type="button" onclick="confermaModifica()">Conferma</button>
        </form>
  
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function confermaModifica() {
            Swal.fire({
                title: "Conferma Modifica",
                text: "Sei sicuro di voler modificare questo libro?",
                icon: "info",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sì, modifica!"
            }).then((result) => {
                if (result.isConfirmed) {
                    // If the user clicks "Yes," submit the form for modification
                    document.getElementById('form-modifica').submit();
                }
            });
        }
    </script>

</body>

</html>
@endsection

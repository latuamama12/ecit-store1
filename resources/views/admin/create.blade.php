<!-- resources/views/movies.blade.php -->


@extends('layouts.app')
 
@section('titolo', 'Lista dei Libri')
 
@section('content')
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea nuovo film</title>
    <style>
        body {
            background-color: #5fa2c2;
            font-family: 'Baskerville ', serif;
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
            background-color: #454545;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }


        button:hover {
            background-color: #454545;
        }


        p {
            margin-top: 10px;
        }
    </style>
</head>


<body>


 
        <h2>Aggiungi nuovo libro</h2>
        <form action="{{ route('admin.store') }}" method="POST">
          @csrf
            <label for="titolo">Titolo</label>
            <input name="titolo" id='titolo' type="text"  required/>
            
            <label for="descrizione">descrizione</label>
            <input name="descrizione" id='descrizione' type="text"  required/>

            <label for="prezzo">prezzo</label>
            <input name="prezzo" id='prezzo' type="number"  required/>
            
            <label for="categoria">categoria</label>
            <input name="categoria" id='categoria' type="text"  required/>
            <button>Invia</button>
        </form>
  



</body>


</html>


@endsection

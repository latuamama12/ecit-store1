@extends('layouts.app')
 
@section('titolo', 'Lista dei Libri')
 
@section('content')
 
<!-- resources/views/movies.blade.php -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$book->titolo}}</title>
    <style>
        body {
            font-family: 'Baskerville ',serif;
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
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        p {
            margin-top: 10px;
        }
    </style>
</head>

<body>



        <h2>{{ $book->titolo }}</h2>


        <h4>Descrizione: </h4>
      <h6>  {{ $book->descrizione }}</h6>
      <h4>Prezzo: </h4>
      <h6>  {{ $book->prezzo }} €</h6>
      <h4>Categoria: </h4>
      <h6>  {{ $book->categoria}} </h6>
        

   


</body>

</html>
@endsection

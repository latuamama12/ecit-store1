@extends('layouts.app')
 
@section('titolo', 'Lista dei Libri')
 
@section('content')
<style>
        body {
            background-color: #5fa2c2;
            font-family: 'Baskerville ',serif;
        }
 
        .container-lg {
            background-color: #fff;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            margin-top: 50px;
        }
 
        .movie-card {

            border-radius: 10px;
            margin-bottom: 20px;
            background-color: #dedede;
        }
 
        .movie-card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 0, 0, 5);
        }
 
        .movie-title {
            font-size: 24px;
            font-weight: bold;
            color: #000000;
            text-decoration: none;
        }
 
        .movie-text {
            color: #a020ff;
        }
 
        .btn-edit {
            margin-right: 10px;
        }
 
        .btn-delete {
            background-color: #ff9c8a;
            border-color: #FF6347;
        }

</style>


<h2 class="text-center text-dark mb-4">Lista dei Libri</h2>

<!-- Mostra la lista dei film -->

    <div class="row">
        @foreach ($books as $book)
        <div class="col-md-4">
            <div class="card movie-card">
                <div class="card-body">
                    <a href="{{ route('admin.show', $book->id) }}" class="movie-title">
                        {{ $book->titolo }}
                    </a>
                 
                    <div class="testo">
                    z<h6>
                        {{ $book->descrizione }}
                    </h6>
                    
                    <h6>
                         {{ $book->prezzo }} €
                    </h6>

                    <h6>
                         {{ $book->categoria }} 
                    </h6>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.edit', $book->id) }}" class="btn btn-outline-primary btn-edit">Modifica</a>
                        <form action="{{ route('admin.destroy', $book->id) }}" method="POST" id="form-eliminazione-{{ $book->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-delete" onclick="confermaEliminazione('{{ $book->id }}')">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function confermaEliminazione(id) {
        Swal.fire({
            title: "Sei sicuro?",
            text: "Sei sicuro di voler eliminare questo elemento?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sì, elimina!"
        }).then((result) => {
            if (result.isConfirmed) {
                // If the user clicks "Yes," submit the form with the bookId
                document.getElementById('form-eliminazione-' + id).submit();
            }
        });
    }
</script>
@endsection
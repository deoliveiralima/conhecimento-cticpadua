@extends('layout')

@section('links')

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection
@section('conteudo')
        <form method="POST" action="/tutorial">
            @csrf

            <div >
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo">
                

            <div class="mt-3">

                <textarea id="summernote" name="texto"></textarea>

            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>





<script>
    $(document).ready(function() {
      $('#summernote').summernote();
    });
     </script>
    
@endsection


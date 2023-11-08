<!-- Heredamos el contenido base de layout -->
@extends('app.layout')

@section('title', 'Argo Setting')

@section('content')

<form action="{{ url('setting') }}" method="post">
    
    @method('put')    
    @csrf
    
    <div>
        Behaviour after inserting new movie
    </div>
    
    <!--<input class="form-check-input" type="radio" id="showMovie" name="afterInsert" 
        value="show movies" @if(session('afterInsert', 'show movies') == 'show movies') checked @endif/>
    <label class="form-check-label" for="showMovie">
        Show all movies list
    </label>
    <br>
    <input class="form-check-input" type="radio" id="createMovie" name="afterInsert" 
        value="show create form" @if(session('afterInsert', 'show movies') == 'show create form') checked @endif/>
    <label class="form-check-label" for="createMovie">
        Show create movies form
    </label>
    
    <br><br>-->
    
    <input class="form-check-input" type="radio" id="showMovie2" name="afterInsert" value="show movies" {{ $checkedList }}/>
    <label class="form-check-label" for="showMovie2">
        Show all movies list
    </label>
    <br>
    <input class="form-check-input" type="radio" id="createMovie2" name="afterInsert" value="show create form" {{ $checkedCreate }}/>
    <label class="form-check-label" for="createMovie2">
        Show create movies form
    </label>
    
    <br><br>
    
    <label for="editMovie">Behaviour after editing new movie</label>
    <select name="editMovie" id="editMovie" class="form-select" aria-label="Default select example">
        <option selected hidden>Select one</option>
        <option value="showAllMovies" {{ $afterEditMovie['showAllMovies'] }}>Show all movies list</option>
        <option value="showMovie" {{ $afterEditMovie['showMovie'] }}>Show movie</option>
        <option value="showEditForm" {{ $afterEditMovie['showEditForm'] }}>Show edit movies form</option>
    </select>
    <br>
    <button type="submit" class="btn btn-primary">Save setting</button>
</form>
@endsection
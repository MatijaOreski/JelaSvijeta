@extends('layouts.mainApp')

@section('content')

    <div><br>
        <h1><strong>Available Ingredients</strong></h1>
        <p>Results per page: {{$counter}}</p>
    </div>

    <div>

        @if(count($ingredients) > 0)
            <ul class="list-group">
                @foreach($ingredients as $ingredient)
                    <li class="list-group-item">{{$ingredient->title}}</li>
                @endforeach
                <br>
                {{$ingredients->links()}}
            </ul>
        @endif

    </div>
    <br>
    <div>
        <a href="../public" class="btn btn-success pull-left">Back</a>
    </div>

@endsection
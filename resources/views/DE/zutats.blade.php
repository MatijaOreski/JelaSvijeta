@extends('layouts.de_layout')

@section('content_DE')

    <div><br>
        <h1><strong>Verfügbare Zutaten</strong></h1>
    </div>

    <div>

        @if(count($zutats) > 0)
            <ul class="list-group">
                @foreach($zutats as $zutat)
                    <li class="list-group-item">{{$zutat->title}}</li>
                @endforeach
                <br>
                {{$zutats->links()}}
            </ul>
        @endif

    </div>
    <br>
    <div>
        <a href="index_de" class="btn btn-success pull-left">Zurück</a>
    </div>

@endsection
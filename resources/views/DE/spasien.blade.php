@extends('layouts.de_layout')

@section('content_DE')

    <div><br>
        <h1><strong>Verfügbare Mahlzeiten</strong></h1>
    </div>

    <div>

        @if(count($mahlzeit) > 0)
            <ul class="list-group">
                @foreach($mahlzeit as $spasien)
                    <li class="list-group-item"><a href="de_details/{{$spasien->id}}">{{$spasien->title}}</a></li>
                @endforeach
                <br>
                {{$mahlzeit->links()}}
            </ul>
        @endif

    </div>
    <br>
    <div>
        <a href="index_de" class="btn btn-success pull-left">Zurück</a>
    </div>

@endsection
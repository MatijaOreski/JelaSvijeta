@extends('layouts.de_layout')

@section('content_DE')

    <div><br>
        <h1><strong>Verfügbare Getränke</strong></h1>
    </div>

    <div>

        @if(count($trinken) > 0)
            <ul class="list-group">
                @foreach($trinken as $trink)
                    <li class="list-group-item"><a href="de_drinksDetails/{{$trink->id}}">{{$trink->title}}</a></li>
                @endforeach
                <br>
                {{$trinken->links()}}
            </ul>
        @endif

    </div>
    <br>
    <div>
        <a href="index_de" class="btn btn-success pull-left">Zurück</a>
    </div>

@endsection
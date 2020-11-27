@extends('layouts.it_layout')

@section('content_IT')

    <div><br>
        <h1><strong>Bevande disponibili</strong></h1>
    </div>

    <div>

        @if(count($bevandi) > 0)
            <ul class="list-group">
                @foreach($bevandi as $bevanda)
                    <li class="list-group-item"><a href="it_drinksDetails/{{$bevanda->id}}">{{$bevanda->title}}</a></li>
                @endforeach
                <br>
                {{$bevandi->links()}}
            </ul>
        @endif

    </div>
    <br>
    <div>
        <a href="index_it" class="btn btn-success pull-left">Indietro</a>
    </div>

@endsection
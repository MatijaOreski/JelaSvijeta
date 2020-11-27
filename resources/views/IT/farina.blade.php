@extends('layouts.it_layout')

@section('content_IT')

    <div><br>
        <h1><strong>Cibi disponibili</strong></h1>
    </div>

    <div>

        @if(count($farina) > 0)
            <ul class="list-group">
                @foreach($farina as $cibo)
                    <li class="list-group-item"><a href="it_details/{{$cibo->id}}">{{$cibo->title}}</a></li>
                @endforeach
                <br>
                {{$farina->links()}}
            </ul>
        @endif

    </div>
    <br>
    <div>
        <a href="index_it" class="btn btn-success pull-left">Indietro</a>
    </div>

@endsection
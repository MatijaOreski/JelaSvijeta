@extends('layouts.it_layout')

@section('content_IT')

    <div><br>
        <h1><strong>Ingrediente disponibile</strong></h1>
    </div>

    <div>

        @if(count($ingredis) > 0)
            <ul class="list-group">
                @foreach($ingredis as $ingredi)
                    <li class="list-group-item">{{$ingredi->title}}</li>
                @endforeach
                <br>
                {{$ingredis->links()}}
            </ul>
        @endif

    </div>
    <br>
    <div>
        <a href="index_it" class="btn btn-success pull-left">Indietro</a>
    </div>
    
@endsection
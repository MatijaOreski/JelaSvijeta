@extends('layouts.it_layout')

@section('content_IT')

    <div><br>
        <h1><strong>Categorie</strong></h1>
    </div>

    <div>

        @if(count($categos) > 0)
            <ul class="list-group">
                @foreach($categos as $catego)
                    <li class="list-group-item">{{$catego->title}}</li>
                @endforeach
                <br>
                {{$categos->links()}}
            </ul>
        @endif

    </div>
    <br>
    <div>
        <a href="index_it" class="btn btn-success pull-left">Indietro</a>
    </div>

@endsection

@extends('layouts.de_layout')

@section('content_DE')

    <div><br>
        <h1><strong>Kategorien</strong></h1>
    </div>

    <div>

        @if(count($kategories) > 0)
            <ul class="list-group">
                @foreach($kategories as $kategori)
                    <li class="list-group-item">{{$kategori->title}}</li>
                @endforeach
                <br>
                {{$kategories->links()}}
            </ul>
        @endif

    </div>
    <br>
    <div>
        <a href="index_de" class="btn btn-success pull-left">Zurück</a>
    </div>

@endsection
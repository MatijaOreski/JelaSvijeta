@extends('layouts.app')

@section('content')

    <div><br>

            @if(count($drinkTitle) > 0)
                @foreach($drinkTitle as $drink)
                    <h2>{{$drink->title}}</h2>
                @endforeach

                <p>Questa bevanda è in pacchetto bonus con:</p>
                <ul>
                    @foreach ($bonus as $item)
                        <li>{{$item->title}}</li>
                    @endforeach
                </ul>

            @else
                <h2>Questa bevanda non è nel pacchetto bonus!</h2>
            @endif
            
    <br>
    <div>
        <a href="../bevanda" class="btn btn-success pull-left">Indietro</a>
    </div>

@endsection
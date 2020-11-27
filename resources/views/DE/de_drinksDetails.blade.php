@extends('layouts.app')

@section('content')

    <div><br>

            @if(count($drinkTitle) > 0)
                @foreach($drinkTitle as $drink)
                    <h2>{{$drink->title}}</h2>
                @endforeach

                <p>Dieses Getränk ist im Bonuspaket mit:</p>
                <ul>
                    @foreach ($bonus as $item)
                        <li>{{$item->title}}</li>
                    @endforeach
                </ul>

            @else
                <h2>Dieses Getränk ist nicht im Bonuspaket enthalten!</h2>
            @endif
            
    <br>
    <div>
        <a href="../trinken" class="btn btn-success pull-left">Zurück</a>
    </div>

@endsection
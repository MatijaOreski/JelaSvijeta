@extends('layouts.app')

@section('content')

    <div><br>

            @if(count($mealTitle) > 0)
                @foreach($mealTitle as $title)
                    <h2>{{$title->title}}</h2>
                @endforeach
            @endif
            <br>
            <div style="padding: 15px; margin:5px;">
                <p><strong>Servito con:</strong></p>
                    <hr>
                    <ul>
                        @if(count($inTitle) > 0)
                            @foreach($inTitle as $in)
                                <li>{{$in->title}}</li>
                            @endforeach
                        @endif
                    </ul>
                    <br>
                <p>Bonus bevande:</p>
                    <hr>
                    <ul>
                        @if(count($drinkTitle) > 0)
                            @foreach($drinkTitle as $drink)
                                <li>{{$drink->title}}</li>
                            @endforeach
                        @else
                            <p>Nessun bonus per le bevande.</p>
                        @endif
                    </ul>

                <p>Categoria:</p>
                <ul>
                    @if(count($categoryTitle) > 0)
                        @foreach($categoryTitle as $title)
                            <li>{{$title->title}}</li>
                        @endforeach
                    @endif
                </ul>

            </div>
            
    </div>
    <br>
    <div>
        <a href="../farina" class="btn btn-success pull-left">Indietro</a>
    </div>

@endsection
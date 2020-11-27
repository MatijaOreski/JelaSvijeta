@extends('layouts.app')

@section('content')

    <div><br>

            @if(count($drinkTitle) > 0)
                @foreach($drinkTitle as $drink)
                    <h2>{{$drink->title}}</h2>
                @endforeach

                <p>This drink is in bonus packet with:</p>
                <ul>
                    @foreach ($bonus as $item)
                        <li>{{$item->title}}</li>
                    @endforeach
                </ul>

            @else
                <h2>This drink is not in bonus packet!</h2>
            @endif
            
    <br>
    <div>
        <a href="../drinks" class="btn btn-success pull-left">Back</a>
    </div>

@endsection
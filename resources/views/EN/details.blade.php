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
                <p><strong>Served with:</strong></p>
                    <hr>
                    <ul>
                        @if(count($inTitle) > 0)
                            @foreach($inTitle as $in)
                                <li>{{$in->title}}</li>
                            @endforeach
                        @endif
                    </ul>
                    <br>
                <p>Drinks bonus:</p>
                    <hr>
                    <ul>
                        @if(count($drinkTitle) > 0)
                            @foreach($drinkTitle as $drink)
                                <li>{{$drink->title}}</li>
                            @endforeach
                        @else
                            <p>No drinks bonus.</p>
                        @endif
                    </ul>

                <p>Category:</p>
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
        <a href="../meals" class="btn btn-success pull-left">Back</a>
    </div>

@endsection
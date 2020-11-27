@extends('layouts.mainApp')

@section('content')

    <div><br>
        <h1><strong>Available Meals</strong></h1>
        <p>Results per page: {{$counter}}</p>
    </div>

    <div>

        @if(count($meals) > 0)
            <ul class="list-group">
                @foreach($meals as $meal)
                    <li class="list-group-item"><a href='details/{{$meal->id}}'>{{$meal->title}}</a></li>
                @endforeach
                <br>
                {{$meals->links()}}
            </ul>
        @endif

    </div>
    <br>
    <div>
        <a href="../public" class="btn btn-success pull-left">Back</a>
    </div>

@endsection
@extends('layouts.mainApp')

@section('content')

    <div><br>
        <h1><strong>Available Drinks</strong></h1>
        <p>Results per page: {{$counter}}</p>
    </div>

    <div>

        @if(count($drinks) > 0)
            <ul class="list-group">
                @foreach($drinks as $drink)
                    <li class="list-group-item"><a href='drinksDetails/{{$drink->id}}'>{{$drink->title}}</a></li>
                @endforeach
                <br>
                {{$drinks->links()}}
            </ul>
        @endif

    </div>
    <br>
    <div>
        <a href="../public" class="btn btn-success pull-left">Back</a>
    </div>

@endsection
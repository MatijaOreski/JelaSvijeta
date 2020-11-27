@extends('layouts.mainApp')

@section('content')

    <div><br>
        <h1><strong>Categories</strong></h1>
        <p>Results per page: {{$counter}}</p>
    </div>

    <div>

        @if(count($categories) > 0)
            <ul class="list-group">
                @foreach($categories as $category)
                    <li class="list-group-item">{{$category->title}}</li>
                @endforeach
                <br>
                {{$categories->links()}}
            </ul>
        @endif

    </div>
    <br>
    <div>
        <a href="../public" class="btn btn-success pull-left">Back</a>
    </div>

@endsection
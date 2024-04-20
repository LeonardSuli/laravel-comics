@extends('layouts.app')

@section('content')

<div class="container-single">
    <h1>Single page</h1>
    <img src="{{ $comics[0]['thumb'] }}" alt="">
    
</div>



















{{-- @foreach ($comics as $comic)

        <div class="col-2">

            <div class="card">

                <img src="{{ $comic['thumb'] }}" alt="">
                <h4>{{ $comic['series'] }}</h4>
                <span>{{ $comic['price'] }}</span>
        
            </div>
            
        </div>
        
        @endforeach --}}
@endsection
@extends('layouts.app')

@section('content')

<div class="main_top">

    <div class="container">

      <button class="current_series">CURRENT SERIES</button>

      <div class="row">

        @foreach ($comics as $comic)

        <div class="col-2">

            <div class="card">

                <img src="{{ $comic['thumb'] }}" alt="">
                <h4>{{ $comic['series'] }}</h4>
                <span>{{ $comic['price'] }}</span>
        
            </div>
            
        </div>
        
        @endforeach
        
      </div>

      <button class="load">LOAD MORE</button>

    </div>

  </div>

<div class="main_bottom">

    <div class="container">
      
      <div class="icons d-flex">

        <div class="icon">
          <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}">
          <span>DIGITAL COMICS</span>
        </div>

        <div class="icon">
          <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}">
          <span>DC MERCHANDISE</span>
        </div>

        <div class="icon">
          <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}">
          <span>SUBSCRIPTIONS</span>
        </div>

        <div class="icon">
          <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}">
          <span>COMIC SHOP LOCATOR</span>
        </div>

        <div class="icon">
          <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}">
          <span>DC POWER VISA</span>
        </div>

      </div>

    </div>

  </div>

@endsection
@extends('layouts.app')

@section('content')

<div class="main_top">

    <div class="container">

      <button class="current_series">CURRENT SERIES</button>

      <div class="row">

        <div class="col-2" v-for="card in cards">

          <ProductCard 
            :card="card" 
            :thumb="card.thumb" 
            :series="card.series"
            :price="card.price">
          </ProductCard>

        </div>

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
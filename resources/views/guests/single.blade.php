@extends('layouts.app')

@section('content')

<section>

    <div class="comic-1">
    
        <div class="container-single relative">
    
            <img src="{{ $comics[0]['thumb'] }}" alt="">
    
        </div>
    
    </div>

    <div class="comic-details">

        <div class="comic-details-top">

            <div class="container-single">
    
                <div class="row">
    
                    <div class="col-8">
    
                        <h2>{{ $comics[0]['title'] }}</h2>
    
                        <div class="comic-details-green d-flex">
                            
                            <div class="col-8 d-flex justify-content-between">
    
                                <div>
        
                                    <span class="us-price">U.S. Price:</span>
                                    <span class="price">{{ $comics[0]['price'] }}</span>
        
                                </div>
        
                                <span class="available">AVAILABLE</span>
    
                            </div>
    
                            <div class="col-4 check">
                                <span>Check Availability</span>
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
    
                        </div>
    
                        <p class="description">{{ $comics[0]['description'] }}</p>
    
                    </div>
    
                    <div class="col-4">
    
                        <span class="advertisement">ADVERTISEMENT</span>
    
                        <img src="{{ Vite::asset('resources/images/adv.jpg') }}">
    
                    </div>
    
                </div>
    
            </div>

        </div>

        <div class="comic-details-bottom">

            <div class="container-single">

                <div class="row">

                    <div class="col-6">

                        <h3>Talent</h3>

                        <div class="row">

                            <div class="col-4">Art by:</div>
    
                            <div class="col-8 primary">Josè Luis Garcìa-Lòpez, Clay Mann, Rafael Albuquerque, Patrick Gleason, Dan Jurgens, Joe Shuster, Neal Adams, Curt Swan, John Cassaday, Olivier Coipel, Jim Lee</div>

                        </div>

                        <div class="row">

                            <div class="col-4">Written by:</div>
    
                            <div class="col-8 primary">Brad Meltzer, Tom King, Scott Snyder, Geoff Johns, Brian Michael Bendis, Paul Dini, Louise Simonson, Richard Donner, Marv Wolfman, Peter J. Tomasi, Dan Jurgens, Jerry Siegel, Paul Levitz</div>

                        </div>

                    </div>

                    <div class="col-6">
                        
                        <h3>Specs</h3>

                        <div class="row">

                            <div class="col-4">Series:</div>
    
                            <div class="col-8 primary">{{ $comics[0]['series'] }}</div>

                        </div>

                        <div class="row">

                            <div class="col-4">U.S. Price</div>
    
                            <div class="col-8">{{ $comics[0]['price'] }}</div>

                        </div>

                        <div class="row">

                            <div class="col-4">On Sale Date:</div>
    
                            <div class="col-8">{{ $comics[0]['sale_date'] }}</div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="merchandise">

            <div class="container-single">

                <div class="row">
                    <div class="col-3">
                        <span>DIGITAL COMICS</span>
                        <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}">
                    </div>
                    <div class="col-3">
                        <span>SHOP DC</span>
                        <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}">
                    </div>
                    <div class="col-3">
                        <span>COMIC SHOP LOCATOR</span>
                        <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}">
                    </div>
                    <div class="col-3">
                        <span>SUBSCRIPTIONS</span>
                        <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}">
                    </div>
                </div>
                
            </div>
        </div>

    </div>

</section>
    








@endsection
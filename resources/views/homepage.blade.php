{{-- --------------------------------------------------------------- --}}
{{-- | LAYOUT EXTENSION | --}}
{{-- --------------------------------------------------------------- --}}

@extends('layouts.app')

{{-- --------------------------------------------------------------- --}}
{{-- | TITLE TAG SECTION | --}}
{{-- --------------------------------------------------------------- --}}

@section('title_tag', 'Homepage')

{{-- --------------------------------------------------------------- --}}
{{-- | MAIN CONTENT SECTION | --}}
{{-- --------------------------------------------------------------- --}}

@section('main_content')

    <div class="comics-list">
        
        <div class="container">

            <div class="section-title">
                Current Series
            </div>
    
            <ul>
                @foreach ($comics_array as $comic)
                    <li>
                        <div class="comic-thumb">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        </div>
    
                        <div class="comic-title">
                            {{ $comic['series'] }}
                        </div>
                    </li>
                @endforeach
            </ul>
    
            <div class="center">
                <a class="button" href="#">Load More</a>
            </div>

        </div>

    </div>

    <div class="comics-shop">
        
        <div class="container">

            <ul>

                <li>
                    <div class="flex">
                        <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="Digital Comics">
                        <div>Digital Comics</div>
                    </div>
                </li>
    
                <li>
                    <div class="flex">
                        <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="Digital Comics">
                        <div>DC Merchandise</div>
                    </div>
                </li>
    
                <li>
                    <div class="flex">
                        <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="Digital Comics">
                        <div>Subscription</div>
                    </div>
                </li>
    
                <li>
                    <div class="flex">
                        <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="Digital Comics">
                        <div>Comic Shop Locator</div>
                    </div>
                </li>
    
                <li>
                    <div class="flex">
                        <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="Digital Comics">
                        <div>DC Power Visa</div>
                    </div>
                </li>
    
            </ul>

        </div>

    </div>

@endsection
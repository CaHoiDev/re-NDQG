@extends('portfolio.components.layout')

@section('title')<title>museum</title>@endsection

@section('id')id="museum"@endsection

@section('main')
<main class="main museum">

    <div class="museum-title">
        The Museum
    </div>

    <div class="museum-tool">
        <div class="search">
            <input type="text" name="search" id="search" placeholder="search what you want">
            <i class="ri-close-line" onclick="removeKeyword()"></i>
            <i class="ri-search-line"></i>
        </div>
        <div class="filter">
            <div class="filter-title">
                Filter
            </div>
            <i class="ri-sound-module-line"></i>
        </div>
    </div>
    <div class="line--main"></div>

    <div class="museum-container">
        @foreach($arts as $art)
            <div class="museum__item">
                <img src="{{ strpos($art->artImage, 'museum') ? asset($art->artImage) : base64_decode($art->artImage) }}" alt="">
                <div class="museum__item__des">
                    <div class="art__date">
                        {{ $art->publicationDate }}
                    </div>
                    <div class="art__name">
                        {{ $art->artName }}
                    </div>
                    <a href="/museum/{{ $art->artId }}" class="discover-btn">
                        discover
                    </a>
                </div>
            </div>
        @endforeach
    </div>

</main>

<script src="{{ asset('javascript/museum.js') }}"></script>

@endsection



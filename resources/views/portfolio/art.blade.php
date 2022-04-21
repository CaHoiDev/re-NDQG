@extends('portfolio.components.layout')

@section('title')<title>art</title>@endsection

@section('id')id="art"@endsection

@section('main')

<main class="main">
    <div class="art">
        <div class="art__image">
            <img src="{{ asset($artDetail["artImage"]) }}" alt="">
            <div class="art__time">
                <span>{{ $artDetail['publicationDate'] }}</span>
            </div>
            <a id="down" href="#down" class="icon">
                <i class="ri-arrow-down-line"></i>
            </a>
            <ul class="art__tool__list">
                <li class="art__tool__item">
                    <div class="amount" id="love-amount">{{ $artDetail['loveAmount'] === 0 ? '' : $artDetail['loveAmount']}}</div>
{{--                    <i class="ri-heart-line"></i>--}}
                    @if(!$userLove)
                        <div class="tool-icon tool-icon-love" onclick="crLove(id = {{ $artDetail['artInfo']->artId }})"><i class="ri-heart-line"></i></div>
                    @else
                        <div class="tool-icon tool-icon-love" onclick="crLove(id = {{ $artDetail['artInfo']->artId }}, 'delete')"><i class="ri-heart-fill"></i></div>
                    @endif
                </li>
                <li class="art__tool__item">
                    <div class="amount" id="comment-amount">{{ $artDetail['commentAmount'] === 0 ? '' : $artDetail['commentAmount']}}</div>
                    <a class="tool-icon" href="#down"><i class="ri-chat-2-line"></i></a>
                </li>
                <li class="art__tool__item">
                    <div class="amount" id="download-amount">{{ $artDetail['downloadAmount'] === 0 ? '' : $artDetail['downloadAmount']}}</div>
                    <div class="tool-icon">
                        <i class="ri-download-cloud-2-line"></i>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="art__name">
        {{ $artDetail['artName'] }}
    </div>
    <div class="line--main"></div>
    <div class="comment-session">
        <div class="comment-typer">
            <div class="user-name">
                <i class="ri-user-line"></i>
                <input name="userName" id="userName" type="text" placeholder="anonymous" value="anonymous">
            </div>
            <div class="user-comment">
                <input name="comment" id="comment" type="text" placeholder="what do you think about my art?">
                <i class="ri-send-plane-line" onclick="sendComment({{ $artDetail['artInfo']->artId }})"></i>
            </div>
        </div>
        <div class="line--main"></div>
        <div class="comment-shower">
            @if( count($artDetail['comments'] ) === 0)
                <div id="cmt-notify" style="margin: auto">there are no comments yet!</div>
            @else
                @foreach($artDetail['comments'] as $cmt)
                    <div class="comment-item">
                        <div class="comment-info">
                            <div class="userName">{{ $cmt->userName }}</div>
                            |
                            <div class="time">{{ $cmt->time }}</div>
                        </div>
                        <div class="comment-content">
                            {{ $cmt->commentContent }}
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <div class="line--main"></div>
    <div class="art-suggestion">
        <div class="art-suggestion-row">
            <img src="{{ asset('images/museum/vangoghmuseum-s0019V1962-800.jpg') }}" alt="">
        </div>
        <div class="art-suggestion-row">
            <img src="{{ asset('images/museum/vangoghmuseum-s0005V1962-800.jpg') }}" alt="">
        </div>
        <div class="art-suggestion-row">
            <img src="{{ asset('images/museum/vangoghmuseum-s0520S2010-800.jpg') }}" alt="">
        </div>
        <div class="art-suggestion-row">
            <img src="{{ asset('images/museum/vangoghmuseum-s0424M1991-800.jpg') }}" alt="">
        </div>
    </div>
</main>

<script src="{{ asset('javascript/art.js') }}"></script>

<script>

</script>

@endsection

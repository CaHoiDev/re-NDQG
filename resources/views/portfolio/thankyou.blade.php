@extends('portfolio.components.layout')

@section('title')<title>thankyou</title>@endsection

@section('id')id="art"@endsection

@section('main')

    <main class="thank you">
        <h1>Thank You For Contacting Me</h1>
        <div>we are happy to see you!</div>
        <a href="/">go back home</a>
    </main>
    <script src="{{ asset('javascript/gamejs/script.js') }}" type="module"></script>

@endsection

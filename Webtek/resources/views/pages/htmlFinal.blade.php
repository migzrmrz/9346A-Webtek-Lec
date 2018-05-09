@extends('layouts.pageLayout')
@section('content')
    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(bootstrap/images/big_image_1.jpg);">
    </section>

    <section class ="site-section bg-light">
        <div class="container">
            <h2>You're Done</h2>
            <p>Congratulations! You have completed the test</p>
            <p>Final Score: </p>
            <a href="{{ route('quiz') }}">Done</a>
        </div>
    </section>
@endsection
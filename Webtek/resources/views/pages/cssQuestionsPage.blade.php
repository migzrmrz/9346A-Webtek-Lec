@extends('layouts.pageLayout')
@section('content')
    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(bootstrap/images/big_image_1.jpg);">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="mb-5 element-animate">
                        <h1>CSS Quiz</h1>
                    </div>  
                </div>
            </div>
        </div> 
    </section>

    <section class ="site-section bg-light">
        <div class="container">
            <form action="#" method="POST">
            @foreach($questions as $question)
                <br>
                <div class="current">Question {{$question->css_question_number}} of 5</div>
                <p>{{$question->text}}</p>
                <ol type="A">
                @foreach($choices as $choice)
                    @if($question->css_question_number == $choice->css_question_number)
                        <li>{{$choice->choice}}</li>
                    @endif
                @endforeach
                </ol>
                <div class="form">
                    <select class="form-control">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                </div>
            @endforeach
            </form>
        </div>
    </section>
@endsection
@extends('layouts.pageLayout')
@section('content')
    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(bootstrap/images/big_image_1.jpg);">
        
    </section>

    <section class ="site-section bg-light">
        <div class="container">
            @foreach($questions as $question)
                <div class="current">Question {{$question->html_question_number}} of 5</div>
                <p>{{$question->text}}</p>
                <ol type="A">
                @foreach($choices as $choice)
                    @if($question->html_question_number == $choice->html_question_number)
                        <li>{{$choice->choice}}</li>
                    @endif
                @endforeach
                </ol>
                <div class="form-group">
                    <select class="form">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                </div>
            @endforeach
        </div>
    </section>
@endsection
@extends('layouts.pageLayout')

@section('content')

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(bootstrap/images/big_image_1.jpg);">
        <div class="container">
          <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-8 text-center">
  
              <div class="mb-5 element-animate">
                <h1>HTML Quiz</h1>
                <p class="lead">Test your HTML Knowledge</p>
                <p>This is a multiple choice quiz to test your knowledge of HTML</p>
                <p><strong>Number of questions: </strong> 5</p>
                <p><strong>Type: </strong>Multiple Choice</p>
                <p><strong>Estimated Time: </strong>4 Minutes</p>
                <p><a href="{{ route('htmlQuestions')}}" class="btn btn-primary">Start Quiz</a></p>

              </div>
  
              
            </div>
          </div>
        </div>
      </section>
@endsection

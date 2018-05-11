@extends('layouts.pageLayout')

@section('content')

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(bootstrap/images/big_image_1.jpg);">
        <div class="container">
          <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-8 text-center">
  
              <div class="mb-5 element-animate">
                <h1>Node JS</h1>
              </div>
            </div>
          </div>
        </div>
      </section>

        <div class="row mb-5 align-items-center">
          
          <div class="col-md-6 overflow order-1">
            <img src="{{ asset('bootstrap/images/nodejs2.png') }}" alt="" class="img-fluid">
          </div>
          <div class="col-md-1 order-2"></div>
          <div class="col-md-5 order-3">
            <h2 class="mb-4">What is Node.JS?</h2>
            <p>is a JavaScript runtime built on Chrome's V8 JavaScript engine. </p>
            <p>Node.js uses an event-driven, non-blocking I/O model that makes it lightweight and efficient. </p>
            <p>Node.js' package ecosystem, npm, is the largest ecosystem of open source libraries in the world.</p>
          </div>

        </div>

        <div class="row align-items-center">
          
          <div class="col-md-6 overflow order-3">
            <img src="{{ asset('bootstrap/images/nodejs1.png') }}" alt="" class="img-fluid">
          </div>
          <div class="col-md-1 order-2"></div>
          <div class="col-md-5 order-1">
            <h2 class="mb-4">About Node.js</h2>
            <p>As an asynchronous event driven JavaScript runtime, Node is designed to build scalable network applications. In the following "hello world" example, many connections can be handled concurrently. Upon each connection the callback is fired, but if there is no work to be done, Node will sleep.</p>
            <p>This is in contrast to today's more common concurrency model where OS threads are employed. Thread-based networking is relatively inefficient and very difficult to use. Furthermore, users of Node are free from worries of dead-locking the process, since there are no locks. Almost no function in Node directly performs I/O, so the process never blocks. Because nothing blocks, scalable systems are very reasonable to develop in Node. </p>
           
          </div>

        </div>

      </div>
    </section>
@endsection

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

    <section class ="">
        <div class="media d-block feature">

        <h3> Node.js </h3>
        <p> Node.js is a server-side platform built on Google Chrome's JavaScript Engine
        Node.js was developed by Ryan Dahl in 2009 and its latest version is v0.10.36. </p>
        <p> Node.js is a platform built on Chrome's JavaScript runtime for easily building fast and scalable network applications.
        Node.js uses an event-driven, non-blocking I/O model that makes it lightweight and efficient, perfect for data-intensive real-time applications that run across distributed devices.
        </p>
      
      <div> <h3> Features of Node.js </h3>
        <p><h5> Asynchronous and Event Driven </h5> All APIs of Node.js library are asynchronous, that is, non-blocking. It essentially means a Node.js based server never waits for an API to return data. </p>
        <p><h5>Very Fast</h5>Being built on Google Chrome's V8 JavaScript Engine, Node.js library is very fast in code execution.</p>
        <p><h5>Single Threaded but Highly Scalable</h5>Node.js uses a single threaded model with event looping. Event mechanism helps the server to respond in a non-blocking way and makes the server highly scalable as opposed to traditional servers which create limited threads to handle requests.</p>
        <p><h5>No Buffering</h5>Node.js applications never buffer any data. These applications simply output the data in chunks.</p>
        <p><h5>License</h5>Node.js is released under the MIT license.</p>     
      </div>

        </div>
    </section>

      
@endsection

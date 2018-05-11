@extends('layouts.pageLayout')

@section('content')

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(bootstrap/images/big_image_1.jpg);">
        <div class="container">
          <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-8 text-center">
  
              <div class="mb-5 element-animate">
                <h1>JavaScript</h1>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class ="">
        <div class="media d-block feature">

        <h3> JavaScript </h3>
            <ul>
              <li>Developer: Brendan Eich</li>
              <li>Browser: Netscape Navigator</li>
              <li>Year: 1995</li>
              <li>Company: Netscape</li>
              <li>Programming language of HTML and the Web.</li>
            </ul>
        
        <h3> Web Standards Project (WaSP): </h3>
            <ul>
              <li>A group of professional web developers dedicated to disseminating and encouraging the use of the web standards influenced by W3C.</li>
            </ul>

        <h3> JavaScript Frameworks </h3>
            <ul>
              <li>jQuery</li>
              <li>MooTools</li>
              <li>Prototype</li>
              <li>YUI Library</li>
              <li>Dojo Toolkit</li>
            </ul>

          <h3> DOM Objects </h3>
            <ul>
              <li>Document</li>
              <li>Object</li>
              <li>Event</li>
              <li>Element</li>
              <li>Attr</li>
              <li>Text</li>
              <li>Entity</li>
            </ul>


         <h3>Document Object Model (DOM) </h3>
          <ul>
            <li>API that allows access to the HTML document from within scripts 
                associated with the web page</li>
            <li>a parsed HTML document is represented by a 'DOM tree', which contains 
               'nodes' representing elements, element attributes, textual content, 
                and other HTML document components (e.g., DOCTYPE, comments, etc.) </li>
            <li>the API is accessed via the 'Document' object property of the global 
                'Window' object</li>
          </ul>

          <h5>WHY STUDY JAVASCRIPT?</h5>
          <p>JavaScript is one of the 3 languages all web developers must learn: </p>
<ul> <li>HTML to define the content of web pages</li>
     <li>CSS to specify the layout of web pages</li>
     <li>JavaScript to program the behavior of web pages</li>
</ul>    
 
          

        </div>
      </section>
@endsection
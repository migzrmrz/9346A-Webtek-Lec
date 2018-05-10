@extends('layouts.pageLayout')

@section('content')

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(bootstrap/images/big_image_1.jpg);">
        <div class="container">
          <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-8 text-center">
  
              <div class="mb-5 element-animate">
                <h1>CSS</h1>
                  
                </div>
            </div>
          </div>
        </div>
      </section>
    <section>
        <div>
            <p>A style sheet language used for designing the presentation of a document written in markup language. One of the most used in creating styles of web pages and user interfaces in HTML and XML.</p>
            <p>Describes how HTML elements are to be dispayed on screen, paper, or in other media.</p>
            <p>Saves a lot of work. It can control the layout of multiple web pages all at once.</p>
            <h1>Versions</h1>
            <h4>CSS 1</h4>
            <p>The first CSS specification to become an official W3C Recommendation, published on December 17, 1996.</p>
            <h4>CSS 2</h4>
            <p>CSS level 2 specification was developed by the W3C and published as a recommendation in May 1998. A superset of CSS 1, CSS 2 includes a content of new features or capabilities like absolute, relative, and fixed positioning of elements and z-index, the concept of media types, support for aural style sheets (which were later replaced by the CSS 3 speech modules) and bidirectional text, and new font properties.</p>
            <h4>CSS 2.1</h4>
            <p>CSS level 2 revision 1, often referred to as "CSS 2.1", The fixed version of CSS 2, removes poorly supported or not fully interoperable features and adds already implemented browser extensions to the specification.</p>
            <h4>CSS 3</h4>
            <p>CSS 3 is a larger specification than CSS 2 defining various features and is divided into many separate documents called "modules". Each module extends features that are present in CSS 2.</p>
            <h1>Syntax and Selectors</h1>
            <p>A CSS rule set consists of a selector and a declaration block.</p>
            <p><b>Selector</b> -- h1 <b>Declaration</b> -- {color;blue; font-size:12px;}</p>
            <p>The selector points to the HTML element you want to style.</p>
            <p>The declaration block contains one or more declarations seperated by semicolons.</p>
            <p>Each declaration includes a CSS property name and value, seperated by a colon.</p>
            <p>A CSS declaration always ends with a semicolon, and declaration blocks are surrounded by curly braces.</p>
            <h5>Example:</h5>
            <p>p {<br>color: red;<br>text-align: center;<br>}</p>
            <h1>Comments</h1>
            <p>Comments are used to explain the code and may help when you edit the source code at a later date.</p>
            <p>Comments are ignored by browsers. A CSS comment starts with /* and ends with */.</p>
            <p>Comments are ignored by browsers. A CSS comment starts with /* and ends with */. Comments can also span multiple lines.</p>
        </div>

    </section>
@endsection

@extends('layouts.pageLayout')

@section('content')

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(bootstrap/images/big_image_1.jpg);">
        <div class="container">
          <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-8 text-center">
  
              <div class="mb-5 element-animate">
                <h1>JSP</h1>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="site-section">
        <div class="container">
            <div class="media d-block feature">
                <center><h1>JSP</h1></center><br>
                  <p>Java Server Pages (JSP) is a server-side programming technology that enables the creation of dynamic, platform-independent method for building Web-based applications. JSP have access to the entire family of Java APIs, including the JDBC API to access enterprise databases. </p>
                  <p>JavaServer Pages (JSP) is a technology for developing Webpages that supports dynamic content. This helps developers insert java code in HTML pages by making use of special JSP tags, most of which start with <% and end with %>.</p>
                  <p>A JavaServer Pages component is a type of Java servlet that is designed to fulfill the role of a user interface for a Java web application. Web developers write JSPs as text files that combine HTML or XHTML code, XML elements, and embedded JSP actions and commands.</p>
                  <p>JSP tags can be used for a variety of purposes, such as retrieving information from a database or registering user preferences, accessing JavaBeans components, passing control between pages, and sharing information between requests, pages etc.</p><br>
                <h3>Why use JSP?</h3><br>
                <p>Performance is significantly better because JSP allows embedding Dynamic Elements in HTML Pages itself instead of having separate CGI files.</p>
                <p>JSP are always compiled before they are processed by the server unlike CGI/Perl which requires the server to load an interpreter and the target script each time the page is requested.</p>
                <p>JavaServer Pages are built on top of the Java Servlets API, so like Servlets, JSP also has access to all the powerful Enterprise Java APIs, including JDBC, JNDI, EJB, JAXP, etc.</p>
                <p>JSP pages can be used in combination with servlets that handle the business logic, the model supported by Java servlet template engines</p>
                <br>
                <center><h1>JSP Standard Actions</h1></center><br>
                <h3>Syntax	Purpose</h3><br>

                
                <p>jsp:include	Includes a file at the time the page is requested.</p>
                <p>jsp:useBean	Finds or instantiates a JavaBean.</p>
                <p>jsp:setProperty	Sets the property of a JavaBean.</p>
                <p>jsp:getProperty	Inserts the property of a JavaBean into the output.</p>
                <p>jsp:forward	Forwards the requester to a new page</p>
                <p>jsp:plugin	Generates browser-specific code that makes an OBJECT or EMBED tag for the Java plugin.</p>
                <p>jsp:element	jsp:attribute</p>
                <p>jsp:body	Defines dynamically-defined XML element's body.</p>
                <p>jsp:text	Used to write template text in JSP pages and documents.</p>
                <h3>JSTL</h3><br>
                <p>JSTL has support for common, structural tasks such as iteration and conditionals, tags for manipulating XML documents, internationalization tags, and SQL tags. It also provides a framework for integrating the existing custom tags with the JSTL tags.</p>
                <br>
                <h3>Classificication of JSTL Tags</h3><br>
                <ul>
                  <li>Core Tags</li>
                  <li>Formatting Tags</li>
                  <li>SQL Tags</li>
                  <li>XML Tags</li>
                </ul>
                <br>
                <center><h1>JSTL Functions</h1></center><br>
                <h3>Motivation</h3><br>
                
                <p>business logic from presentation concern</p>
                <p>Allows modern web development teams to be divided up into programmers and web page authors / designers</p>
                <p>Fosters component reuse (e.g. the same data object can be consumed by user agents of varying capabilities and needs)
                Servlets can be very powerful for programming business logic, but are very awkward to use when generating static (i.e. template) content.
                (X)HTML marked-up documents are very convenient for static content generation but cannot be used to program business logic (or generate dynamic content arising from data produced by the business logic).</p>
                <br>
                <h3>Features</h3><br>
                <p>Text-based document capable of generating both static and dynamic content (typically intermixed)</p>
                <p>Mark-up based document syntax (JSP-style or XML-style), combining (X) HTML elements as well as standard and custom JSP elements; thus, web page authors can feel right “at home” with the mark-up syntax.</p>
                <p>Embedded Java Coding support via “scriptlets”</p>
                <p>"<% %>"</p>
                <p>Template text are converted into JSPWriter</p>
                <br>
                <h3>Components</h3><br>
                <p>Template (i.e. static) text</p>
                <p>JSP elements</p>
                <p>Directives</p>
                <p>" <%@ page ContentType=”text/html” pageEncoding=”UTF-8” %> "</p>
                <p>"<%@ page import=”java.util.Random” %> "</p>
                <p>autoFlush</p>
                <p>buffer</p>
                <p>contentType</p>
                <p>errorPage</p>
                <p>extends</p>
                <p>import</p>
                <p>info</p>
                <p>isELIgnored</p>
                <p>isErrorPage</p>
                <p>isThreadSafe</p>
                <p>language</p>
                <p>pageEncoding o session</p>
                <p>"<%@ taglib uri=”http://java.sun.com/jsp/jstl/core” prefix=”c” %> "</p>
                <p>prefix</p>
                <p>taglib</p>
                <p>uri</p>
                <p>Scripting Elements</p>
                <p>Declarations</p>
                <p>"<%! int a = 100; %>"</p>
                <p>"<%! int square(int n) { return n*n ; } %>"</p>
                <p>Expressions</p>
                <p>"<% for(int i = 0; i < 10 ; i++) { out.println(i); } %> "</p>
            </div>
        </div>
    </section>
@endsection

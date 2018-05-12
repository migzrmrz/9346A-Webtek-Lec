@extends('layouts.pageLayout')

@section('content')

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(bootstrap/images/big_image_1.jpg);">
        <div class="container">
          <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-8 text-center">
  
              <div class="mb-5 element-animate">
                <h1>Java Servlet</h1>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="site-section">
        <div class="container">
            <section class ="site-section bg-light">
              <div class="media d-block feature">
                  <h3>What are Servlets?</h3><br>
                  <p>Servlets are Java Programs that sits in a server and when a request comes, it will come into play. Servlets are mapped into the a URL. 
                  The term Servlets was coined from the word Java Applet which is a program that is usually sent as a separate file with an HTML page. 
                  Java Applets are usually used by running a client that can perform calculation for the client or user or it is used to position images based on the interaction of the user.
                  Java Servlets runs inside a container, it is an object that responds to an HTTP Request.</p><br>
                  
                  <h3>Servlets Advantages to Common Gateway Interface</h3><br>
                  <p>Performance is significantly better.</p>
                  <p>Servlets execute within the address space of a Web server. It is not necessary to create a separate process to handle each client request.</p>
                  <p>Servlets are platform-independent because they are written in Java.</p>
                  <p>Java security manager on the server enforces a set of restrictions to protect the resources on a server machine. So servlets are trusted.</p>
                  <p>The full functionality of the Java class libraries is available to a servlet. It can communicate with applets, databases, or other software via the sockets and RMI mechanisms that you have seen already.</p><br>
                  <h3>Servlet Packages</h3><br>
                  <p>Servlets can be created using the javax.servlet and javax.servlet.http packages , which are a standard part of the Java's enterprise edition, an expanded version of the Java class library that supports large-scale development projects.</p>
                  
                  <p>javax.servlet</p>
                  <p>Servlet, GenericServlet</p>
                  <p>ServletRequest, ServletResponse</p>
                  <p>ServletConfig, ServletContext</p>
                  <p>RequestDispatcher</p>
                  <p>javax.servlet.http</p>
                  <p>HttpServlet</p>
                  <p>HttpServletRequest</p>
                  <p>HttpServletResponse</p>
                  <p>HttpSession</p>
                  <p>Cookie</p><br>     
              </div>

              <div class="media d-block feature">
                <center><h1>Servlet Tasks</h1></center><br>
                <h3>Servlets can perform the following major tasks:</h3><br>
                <p>Send the implicit HTTP response to the clients (browsers).</p>
                <p>Send the explicit data (i.e., the document) to the clients (browsers).</p>
                <p>Read the explicit data sent by the clients (browsers).</p>
                <p>Read the implicit HTTP request data sent by the clients (browsers).</p>
                <p>Process the data and generate the results.</p><br>

              </div>
              <div class="media d-block feature">
                <h3>Typical uses for HTTP Servlets:</h3><br>
                
                <p>Processing and/or storing data submitted by an HTML form.</p>
                <p>Providing dynamic content, e.g. returning the results of a database query to the client.</p>
                <p>Managing state information on top of the stateless HTTP, e.g. for an online shopping cart system which manages shopping carts for many 
                concurrent customers and maps every request to the right customer</p><br>
              </div>
              <div class="media d-block feature">
                <h3>Servlet Life Cycle</h3><br>
                <ol type=I>
                  <li>Load Servlet Class</li>
                  <li>Create Instance of Servlet</li>
                  <li>Call the servlets init() method</li>
                  <li>Call the servlets service() method</li>
                  <li>Call the servlets destroy() method</li>
                </ol><br>
              </div>
              <div class="media d-block feature">
                <h3>HTTP Servlet Class Method:</h3><br>
                <ul style="list-style: none">
                  <li>doGet()</li>
                  <li>doPost()</li>
                  <li>doHead()</li>
                  <li>doPut()</li>
                  <li>doDelete()</li>
                  <li>doOptions()</li>
                  <li>doTrace()</li>
                </ul><br>   
              </div>

              <div class="media d-block feature">
                <center><h1>Servlet Processing</h1></center><br>
                <p>Client sends a request to a web server URL that is mapped to a servlet. Web server passes on the request to the servlet container</p>
                <p>Servlet container checks if servlet is already loaded</p>
                <p>If it is not yet loaded, servlet container loads the servlet class and instantiates the servlet, and calls its init method.</p>
                <p>Servlet container invokes the servlet?s service method, passing request and response objects as arguments</p>
                <p>Servlet processes the request using the response object to create the response, which is returned by the servlet container to the web server, which in turn sends the response to the client</p>
                <p>Subsequent request to the servlet will not require servlet re-instantiation, unless the servlet has been unloaded; before a servlet is unloaded, the servlet container invokes its destroy method.</p>
                <p>init(config)</p>
                <p>Invoked once on the servlet by the servlet container when the servlet is instantiated; can be used by the servlet for one-time startup initialization</p>
                <p>service(request, response)</p>
                <p>Invoked each time the servlet is called upon to process a request (typically on a separate thread for each call)</p>
                <p>In HttpServlet, the default Service implementation maps the call to a specific doXXX() method (e.g. doGet, doPost) which is typically overridden to affect the servlet?s functionality</p>
              
              </div>
            </section>
            <section class="school-features text-dark d-flex">
              <div class="inner">
                <div class="media d-block feature">
                  <div class="media-body">
                    <h3 class="mt-0">Destroy()</h3>
                    <p>Invoked on the servlet by the servlet container when the servlet is to be unloaded (e.g. when the application is stopped or undeployed); can be used by the servlet for clean-up processing (e.g. resource deallocation)</p>
                  </div>
                </div>
                <div class="media d-block feature">
                  <div class="media-body">
                    <h3 class="mt-0">Servlet Request Processing (HttpServletRequest)</h3>
                    <p>Retrieving user-supplied request parameters</p>
                    <p>Retrieving request header values</p>
                  </div>
                </div>
                <div class="media d-block feature">
                  <div class="media-body">
                    <h3 class="mt-0">Servlet Response Processing (HttpServletResponse)</h3>
                    <p>Setting response status code</p>
                    <p>Setting response headers</p>
                    <p>Obtaining output object for sending the response</p>
                  </div>
                </div>
                <div class="media d-block feature">
                  <div class="media-body">
                    <h3 class="mt-0">Servlet Request Dispatching (RequestDispatcher)</h3>
                    <p>Obtain a RequestDispatcher to a resource (static or dynamic) from the request object
                        RequestDispatcher rqstDsp;</p>
                    <p>rqstDsp = request.getRequestDispatcher(res);</p>
                  </div>
                </div>
                <div class="media d-block feature">
                  <div class="media-body">
                    <h3 class="mt-0">rqstDsp.include(request, response);</h3>
                    <p>Include the dispatcher resource (or its output) in the current response; one or more resources can be included (e.g. use for banners, footers, etc.)</p>
                  </div>
                </div>
                <div class="media d-block feature">
                  <div class="media-body">
                    <h3 class="mt-0">rqstDsp.forward(request, response);</h3>
                    <p>Forwards the processing of the current request to the dispatcher resource; the servlet processing the current request must not generate a response ( e.g. use in MVC “controller” servlets)</p>
                  </div>
                </div>
                <div class="media d-block feature">
                  <div class="media-body">
                    <h3 class="mt-0">Session Tracking(HttpSession)</h3>
                    <p>Session tracking support is implemented either cookies or URL-rewriting</p>
                    <p>Obtaining session object from the current request</p>
                    <p>HttpSession session; </p>
                    <p>session = request.getSession(createNew);</p>
                  </div>
                </div>
                <div class="media d-block feature">
                  <div class="media-body">
                    <h3 class="mt-0">Obtaining session information (HttpSession)</h3>
                    <p>getCreationTime(), getLastAccessedTime(), getMaxInactiveInternal(), getId(), isNew(), setMaxInactiveInterval(int val)</p>
                  </div>
                </div>
                <div class="media d-block feature">
                  <div class="media-body">
                    <h3 class="mt-0">destroying sessions</h3>
                    <p>invalidate()</p>
                  </div>
                </div>
                <div class="media d-block feature">
                  <div class="media-body">
                    <h3 class="mt-0">URL-rewriting(HttpServletResponse)</h3>
                    <p></p>
                  </div>
                </div>
                <div class="media d-block feature">
                  <div class="media-body">
                    <h3 class="mt-0">URL-rewriting(HttpServletResponse)</h3>
                    <p></p>
                  </div>
                </div>
                <div class="media d-block feature">
                  <div class="media-body">
                    <h3 class="mt-0">Cookies in Servlets</h3>
                    <p>Cookies are small pieces of informations that is persisted between multiple clients.</p>
                  </div>
                </div>
              </div>
            </section>
            <section class ="site-section bg-light">
                <div class="media d-block feature">
                    <center><h1>Cookies</h1><center><br>
                </div>
                <div class="media d-block feature">
                    <h3>A cookie has the following:</h3><br>
                    <ul style="list-style: none">
                      <li>Name</li>
                      <li>Single Value</li>
                      <li>Comment(optional)</li>
                      <li>Path(optional)</li>
                      <li>domain qualifiers(optional)</li>
                      <li>Maximum Age</li>
                      <li>Version Number</li>
                    </ul><br>
                </div>
                <div class="media d-block feature">
                    <h3>Types of Cookies</h3><br>
                    <h5>Persistent Cookie</h5>
                    <p>it is valid for multiple sessions, the cookie will only be removed once the user will logout or signout.</p>
                    <h5>Non-Persistent Cookie</h5>
                    <p>it is valid for only a single session, the cookie will be removed everytime the browser will be closed.</p><br>
                </div>
                <div class="media d-block feature">
                    <h3>Advantages of Cookies</h3><br>
                    <p>It is a simple way to maintain the state of a website.</p>
                    <p>It is maintained in the Client Side.</p><br>
                    <h3>Disadvantages of Cookies</h3><br>
                    <p>If the cookie is disabled in the browser, it will not work.</p>
                    <p>Textual Infromations are the once only that can be set in the object of the cookie.</p>
                </div>
            </section>
        </div>
    </section>
@endsection

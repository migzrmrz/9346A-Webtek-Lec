@extends('layouts.pageLayout')

@section('content')

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(bootstrap/images/big_image_1.jpg);">
        <div class="container">
          <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-8 text-center">
  
              <div class="mb-5 element-animate">
                <h1>OWASP</h1>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="site-section">
        <div class="container">
            <div class="media d-block feature">
                <center><h1>A1:INJECTION</h1></center><br>
                  <p>Injection attacks is a type of attack that involves obtaining of sensitive data (passwords, usernames, credit card numbers, etc.). Injection attacks has been 1st in the Top 10 OWASP web application vulnerabilities for many years and considered as the most dangerous among the vulnerabilities. Confidentiality, Authentication, Authorization and Integrity are the main consequences of injections. Generally, when attackers use injection, they target clients and insert malicious codes into the input fields to trick the database into sending back sensitive data and gives the attacker the ability to read and manipulate the sensitive data in the database. </p>
                  <p>Injection also gives the attacker administrative control over the database (such as inserting, deleting and shutting down the database). There are multiple types of injections such as Code Injection, Carriage Return and Line Feed Injection (CRLF), Cross-site Scripting (XSS), Email (Mail Command/STMP) injection, Host header injection, Lightweight Directory Access Protocol (LDAP) injection, OS Command Injection, XPath injection, SQL Injection (SQLi) and many more. SQL injection is the most common talked about type of injection which uses SQL commands in an input type to change the execution of programmed SQL commands in the web application.</p>
                  <br>
                
                <br>
                <center><h1>A2:BROKEN AUTHENTICATION</h1></center><br>

                
                <p>Broken authentication is a vulnerability that involves the attacker being able to access the web application through the use of a user’s account. Attackers use different methods in getting pass through authentication. One of them is through the exploitation of the session ID which involves….</p>
                <p>Credential stuffing is a method where the attacker makes use of username and passwords that were obtained from an old exploitation and continuously trying them in the authentication process until the attacker gains access. Automated Attacks is similar to credential stuffing but there is no pre-gathered data used and the attacker keeps using random usernames and passwords.</p>
                <p>Lastly, default password is a method where the attacker makes use of the default username and passwords provided when the web application is set up. </p>
                
            
                <br>
                <center><h1>A3:SENSITIVE DATA EXPOSURE</h1></center><br>
               
                
                <p>When sensitive data such as credit card details, customer details, usernames, passwords, etc. are stored into a database, the data can be obtained and read directly by attackers. Attackers are able to obtain data even if the database is not accessible through a web application. </p>
                <p>All data transferred from and to the web application can also lead to the exposure of sensitive data. Once sensitive data is exposed, the data will be available to everyone and can lead to different kinds of crimes such as theft, false identity, etc. </p>
                
                <br>
                
                <center><h1>A4:XML External Entities</h1></center><br>
               
                
                <p>When sensitive data such as credit card details, customer details, usernames, passwords, etc. are stored into a database, the data can be obtained and read directly by attackers. Attackers are able to obtain data even if the database is not accessible through a web application. </p>
                <p>All data transferred from and to the web application can also lead to the exposure of sensitive data. Once sensitive data is exposed, the data will be available to everyone and can lead to different kinds of crimes such as theft, false identity, etc. </p>

<center><h1>A5:BROKEN ACCESS CONTROLS</h1></center><br>
               
                
                <p>When these measures/restrictions are not properly configured and added to the web application this can lead to attackers being able to penetrate through the web application.  </p>
                <p>A common mistake is when an admin side of a web application utilizes javascript on the functions particularly creating an admin account. Most programmers remove the javascript code that requests for the API and this can lead to an attacker being able to access the admin panel without proper authentication.</p>

<center><h1>A6:SECURITY MISCONFIGURATION</h1></center><br>
               
                
                <p>Security Misconfiguration talks about the errors and mistakes done by the administrator when creating the web application which leads to the web application being vulnerable and exposed to attackers. Keep in mind that with every code, server, software and features used there are possible risks and vulnerabilities. </p>
                <p>There are many factors that contribute to security misconfiguration such as enabling unnecessary features can add potential risks and exposure to attackers. Default accounts is another factor which leaves the accounts easily accessible to attackers. Giving too much information to the user can allow the attacker to learn and easily find vulnerabilities of the web application. Lastly, a server responding to the client without security headers.  </p>

<center><h1>A7:CROSS - SITE SCRIPTING (XSS)</h1></center><br>
               
                
                <p>Attackers usually target the client side script of a web application by inserting a malicious script and tricking the user into executing the script. This attack can lead to access controls being bypassed and attackers using the victim’s account. Victims are not only limited to the users but the administrator’s account is also vulnerable to this attack.</p>

<center><h1>A8:INSECURE DESERIALIZATION</h1></center><br>
               
                
                <p>A vulnerability where attackers target Java and PHP applications.  This attack occurs when untrusted data is used to change the logic of a code or application. Deserialization is the changing serialized data into an object. The attack usually occurs when deserializing untrusted input.</p>

<center><h1>A9:USING COMPONENTS WITH KNOWN VULNERABILITIES</h1></center><br>
               
                
                <p>Attackers usually tries to find the vulnerabilities of each software. Whether the version of the software is old or new the hackers will always find vulnerabilities and exploit it.</p>
                <p>For example, if a web application is using an older version and fails to update it for years, then the attacker would have an easier time breaking through the security measures and exploit each vulnerability. </p>

<center><h1>A10:INSUFFICIENT LOGGING AND MONITORING</h1></center><br>
               
                
                <p>Monitoring hacking attempts and detecting breaches takes too much time to do. This is why most organizations are no longer doing this as often as possible. </p>
                <p>Without the proper logs of both the admin and user activities in the web application, there is no possible way an admin can detect who is doing the attack. </p>


                
            </div>
        </div>
    </section>
@endsection

<?php include('head.php'); ?>
<?php include('nav.php'); ?>

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
        <div class="container">
          <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-8 text-center">
  
              <div class="mb-5 element-animate">
                <h1>PHP Course</h1>
              </div>            
            </div>
          </div>
        </div>
    </section>

    <section class="site-section">
        <div class="container">
            
            <div class="media d-block feature">
    
            <center><h1>Terminology overview</h1></center><br>
            <p> <h5>What is an API?</h5> An Application Programming Interface, or API, defines the classes, methods, functions and variables that your application will need to call in order to carry out its desired task. In the case of PHP applications that need to communicate with databases the necessary APIs are usually exposed via PHP extensions.</p>
    
            <p>APIs can be procedural or object-oriented. With a procedural API you call functions to carry out tasks, with the object-oriented API you instantiate classes and then call methods on the resulting objects. Of the two the latter is usually the preferred interface, as it is more modern and leads to better organized code.</p>
            
            <p><h5>What is a Connector?</h5> In the MySQL documentation, the term connector refers to a piece of software that allows your application to connect to the MySQL database server. MySQL provides connectors for a variety of languages, including PHP.
            PHP application needs to communicate with a database server you will need to write PHP code to perform such activities as connecting to the database server, querying the database and other database-related functions. Software is required to provide the API that your PHP application will use, and also handle the communication between your application and the database server, possibly using other intermediate libraries where necessary. This software is known generically as a connector, as it allows your application to connect to a database server.
            </p>
    
            <p><h5>What is a Driver?</h5> A driver is a piece of software designed to communicate with a specific type of database server. The driver may also call a library, such as the MySQL Client Library or the MySQL Native Driver. These libraries implement the low-level protocol used to communicate with the MySQL database server.
            </p>
    
            <p><h5>What is an Extension?</h5>An extension typically exposes an API to the PHP programmer, to allow its facilities to be used programmatically. However, some extensions which use the PHP extension framework do not expose an API to the PHP programmer.</p>
            
            </div><br>
            
    
        
            <div class="media d-block feature">
    
                <center><h1> PHP BASICS </h1></center><br>
                
                <div> <h5> CLASS </h5>
                <p> Basic class definitions begin with the keyword class, followed by a class name, followed by a pair of curly braces which enclose the definitions of the properties and methods belonging to the class. </p>
                <p> The class name can be any valid label, provided it is not a PHP reserved word. A valid class name starts with a letter or underscore, followed by any number of letters, numbers, or underscores.</p>
                </div>
    
                <div> <h5> NEW </h5>
                <p> To create an instance of a class, the new keyword must be used. An object will always be created unless the object has a constructor defined that throws an exception on error. 
                Classes should be defined before instantiation </p> 
                <p> If a string containing the name of a class is used with new, a new instance of that class will be created. If the class is in a namespace, its fully qualified name must be used when doing this.</p>
                </div>
    
                <div> <h5> PROPERTIES AND METHODS </h5> 
                <p> Class properties and methods live in separate "namespaces", so it is possible to have a property and a method with the same name. Referring to both a property and a method has the same notation, and whether a property will be accessed or a method will be called, solely depends on the context, i.e. whether the usage is a variable access or a function call. </p>
                </div>
    
                <div> <h5> EXTENDS </h5> 
                <p> A class can inherit the methods and properties of another class by using the keyword extends in the class declaration. It is not possible to extend multiple classes; a class can only inherit from one base class. </p>
                <p> The inherited methods and properties can be overridden by redeclaring them with the same name defined in the parent class. However, if the parent class has defined a method as final, that method may not be overridden. It is possible to access the overridden methods or static properties by referencing them with parent::.</p>
                </div>
            
                <div> <h5> ::class </h5> 
                <p> Since PHP 5.5, the class keyword is also used for class name resolution. You can get a string containing the fully qualified name of the ClassName class by using ClassName::class. This is particularly useful with namespaced classes.</p><br>
                </div> 
    
            </div>
        
            <div class="media d-block feature">
                <div>
                <center><h1>List of Keywords</h1></center><br>
                <p>These words have special meaning in PHP. Some of them represent things which look like functions, some look like constants, and so on - but they're not, really: they are language constructs. You cannot use any of the following words as constants, class names, function or method names. Using them as variable names is generally OK, but could lead to confusion.</p>
                </div>

                <table style="width:100%">
                    <tr>
                    <td>__halt_compiler()</td>
                    <td>break</td>
                    <td>clone</td>
                    <td>die()()</td>
                    <td>empty()</td>
                    <td>endswitch</td>
                    <td>final()</td>
                    <td>global</td>
                    <td>include_once</td>
                    <td>list()</td>
                    <td>private</td>
                    <td>return</td>
                    <td>try</td>
                    <td>xor</td>
                    </tr>
                    <tr>
                    <td>abstract</td>
                    <td>callable</td>
                    <td>const</td>
                    <td>do</td>
                    <td>enddeclare</td>
                    <td>endwhile</td>
                    <td>finally</td>
                    <td>goto</td>
                    <td>instanceof</td>
                    <td>namespace</td>
                    <td>protected</td>
                    <td>static</td>
                    <td>unset()</td>
                    <td>yield</td>
                    </tr>
                    <tr>
                    <td>and</td>
                    <td>case</td>
                    <td>continue</td>
                    <td>echo</td>
                    <td>endfor</td>
                    <td>eval()</td>
                    <td>for</td>
                    <td>if</td>
                    <td>insteadof</td>
                    <td>new</td>
                    <td>public</td>
                    <td>switch</td>
                    <td>use</td>
                    </tr>
                    <tr>
                    <td>array()</td>
                    <td>	catch</td>
                    <td>declare</td>
                    <td>else</td>
                    <td>	endforeach	</td>
                    <td>exit()</td>
                    <td>foreach</td>
                    <td>implements</td>
                    <td>interface</td>
                    <td>or</td>
                    <td>require</td>
                    <td>throw</td>
                    <td>var</td>
                    </tr>
                    <tr>
                    <td>as</td>
                    <td>class</td>
                    <td>default</td>
                    <td>elseif</td>
                    <td>endif</td>
                    <td>extends</td>
                    <td>function</td>
                    <td>include</td>
                    <td>isset()</td>
                    <td>print</td>
                    <td>require_once</td>
                    <td>trait</td>
                    <td>while</td>
                    </tr>
                </table>
            </div>

        </section>  

<?php include('footer.php'); ?>
<?php include('footerScript.php'); ?>
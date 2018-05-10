@extends('layouts.pageLayout')

@section('content')

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(bootstrap/images/big_image_1.jpg);">
        <div class="container">
          <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-8 text-center">
  
              <div class="mb-5 element-animate">
                <h1>HTML</h1>
                <p> HTML stands for "Hypertext Markup Language" which is a language used to markup documents. </p>
              </div>

              

            </div>
          </div>
        </div>
    </section>
    <section class ="">
      <div class="media d-block feature">
      
              <h3> HTML VERSIONS </h3>
              <div><h5> HTML 1.0 </h5>
              <p> HTML 1.0 was the first release of HTML to the world. Not many people were involved in website creation at the time, 
              and the language was very limiting. There really wasn’t much you could do with it bar getting some simple text onto the web. But then, just that got the beardos a-foamin’ back in the day. </p>
              </div>
              
              <div><h5> HTML 2.0 </h5>
              <p> HTML 2.0 included everything from the original 1.0 specifications but added a few new features to the mix.
              HTML 2.0 was the standard for website design until January 1997 and defined many core HTML features for the first time.</p>
              </div>

              <div><h5> HTML 3.0 </h5>
              <p> More and more people were getting into the HTML game around now, and while the previous standards offered some decent abilities to webmasters (as they became known), they thirsted for more abilities and tags. They wanted to enhance the look of their sites. </p>
              <p> This is where trouble started. A company called Netscape was the clear leader in the browser market at the time, with a browser called Netscape Navigator. To appease the cries of the HTML authors, they introduced new proprietary tags and attributes into their Netscape Navigator browser. These new abilities were called Netscape extension tags. This caused big problems as other browsers tried to replicate the effects of these tags so as not to be left behind but could not get their browsers to display things the same way. This meant that if you designed a page with Netscape ETs, the page would look bad in other browsers. This caused confusion and irritation for the markup pioneers. </p>
              <p> Dave RaggettAt this time, a HTML working group, led by a man named » Dave Raggett introduced a new HTML draft, HTML 3.0. It included many new and improved abilities for HTML, and promised far more powerful opportunities for webmasters to design their pages. Sadly, the browsers were awfully slow in implementing any of the new improvements, only adding in a few and leaving out the rest. Partly, this failure can be attributed to the size of the overhaul; and so the HTML 3.0 spec was abandoned.</p>
              </div>

              <div><h5> HTML 3.2 </h5>
              <p> The browser-specific tags kept coming, and it became increasingly apparent that a standard needed to be found. To this end, the » World Wide Web Consortium (abbreviated to the W3C) was founded in 1994 to standardise the language and keep it evolving in the right direction. Their first work was code-named WILBUR, and later became known as » HTML 3.2. This was a toned-down change to the existing standards, leaving many of the big steps forward for later versions. Most of the extensions tags that had been introduced by Netscape (and to a lesser-extent, Microsoft) did not make it into these new standards. It soon caught on and became the official standard in January ’97, and today practically all browsers support it fully.</p>
              </div>
              
             <div> <h5> HTML 4.0 </h5>
              <p> HTML 4.0 was a large evolution of the HTML standards, and the last iteration of classic HTML. Early in development it had the code-name COUGAR. Most of the new functionality brought in this time is from the ill-fated HTML 3.0 spec, as well as a host of trimmings on old tags, a focus on internationalisation, and support for HTML’s new supporting presentational language, cascading stylesheets.</p>
              <p> HTML 4.0 was recommended by the W3C in December ’97 and became the official standard in April 1998. Browser support was undertaken surprisingly earnestly by Microsoft in their Internet Explorer browser, and the market-leading IE5 (and current successor IE6) have excellent support for almost all of the new tags and attributes. In comparison, Netscape’s terribly flawed Navigator 4.7 was inept when it came to HTML 4.0 and even basic CSS. Modern browsers however, are a vast improvement. </p>
             </div>

              <div><h5> XHTML 1.0 </h5>
              <p> Close to the beginning of the 21st century the W3C issued their specifications of XHTML 1.0 as a recommendation. Since January 26, 2000 it stands as the joint-standard with HTML 4.01. XHTML marks a departure from the way new specs have worked it is an entirely new branch of HTML, incorporating the rigours of  XML, so that code must be properly written if it is to work once it reaches the reader’s browser. There weren’t many new or deprecated tags and attributes in XHTML, but some things changed with a view of increased accessibility and functionality. It’s mainly just a new set of coding rules.  </p>
              </div>

              <div><h5> HTML 5 </h5>
              <p> After HTML 4.01 and XHTML 1.0, the guys who were in control of HTML’s direction got sidetracked working on a new proposal for XHTML 2. At the same time, clever web developers were innovating constantly, hacking new functionality into websites and browsers. The path that XHTML 2 was taking started to look both boring and unrealistic, and it became pretty clear that a new approach was needed.<p>
              <p> It was around this time that a bunch of pragmatic web technology fans, browser programmers and specification writers started building something of their own, outside of the usual W3C procedures. They called themselves the Web Hypertext Application Technology Working Group (WHATWG), and developed a new spec. After some soul-searching, the W3C decided that HTML was still the future of the web. XHTML 2 was discontinued and HTML5 became the new specification that everyone’s effort should be poured into.</p>
              <p> HTML5 is designed for the web, both now and in the future. This is the specification that we will be working with for the next decade at least, so the process of its development is relatively slow and considered. Many parts will be familiar, but there’s also plenty of new elements, attributes and abilities to get excited about. You can check the latest version of the spec if you want all the detail. A full tutorial on HTML Source about the changes in HTML5 is forthcoming.</p>
              </div>
      </div>
    </section>
@endsection

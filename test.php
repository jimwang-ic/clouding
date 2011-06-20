<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
    <title>foodbook</title>
    <meta name="description" content="Food" />
    <meta name="keywords" content="Food" />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
</head>

<body id="www-url-cz">

<!-- Main -->
<div id="main" class="box">

    <!-- Header -->
    <div id="header">

        <!-- Logotyp -->
        <h1 id="logo"><a href="./" title="foodbook [Go to homepage]">foodbook<span></span></a></h1>
        <hr class="noscreen" />          

        <!-- Quick links--> 
        <div class="noscreen noprint">
            <p><em>Quick links: <a href="#content">content</a>, <a href="#tabs">navigation</a>, <a href="#search">search</a>.</em></p>
            <hr />
        </div>

        <!-- Search -->
        <div id="search" class="noprint">
            <form action="" method="get">
                <fieldset><legend>Search</legend>
                    <label><span class="noscreen">Find:</span>
                    <span id="search-input-out"><input type="text" name="" id="search-input" size="30" /></span></label>
                    <input type="image" src="design/search_submit.gif" id="search-submit" value="OK" />
                </fieldset>
            </form>
        </div> <!-- /search -->

    </div> <!-- /header -->

     <!-- Main menu (tabs) -->
     <div id="tabs" class="noprint">

            <h3 class="noscreen">Navigation</h3>
            <ul class="box">
                <li><a href="./index.php">Home<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li id="active"><a href="">Weblog<span class="tab-l"></span><span class="tab-r"></span></a></li> <!-- Active -->
                <li><a href="#">Hot<span class="tab-l"></span><span class="tab-r"></span></a></li>
            </ul>

        <hr class="noscreen" />
     </div> <!-- /tabs -->

    <!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

      

        <!-- Content -->
        <div id="content">

            <!-- Article -->
            <div class="article">
                <h2><span><a href="#">This is my best article</a></span></h2>
                
				<p class="info noprint">
                    <span class="date">2007-01-01 @ 00:01</span><span class="noscreen">,</span>
                </p>

                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam pellentesque enim blandit enim bibendum blandit.
                Integer eu leo ac est aliquet imperdiet. Quisque nec justo id augue posuere malesuada. Nullam ac metus. Cras non leo
                ut est placerat condimentum. Aliquam ut enim. Quisque non sapien in enim eleifend faucibus. Pellentesque sodales. Mauris
                auctor arcu sit amet felis. Donec eget enim ut lacus pharetra condimentum. Nulla in felis vel tortor imperdiet consectetuer.
                Sed id ante.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam pellentesque enim blandit enim bibendum blandit.
                Integer eu leo ac est aliquet imperdiet. Quisque nec justo id augue posuere malesuada. Nullam ac metus. Cras non leo
                ut est placerat condimentum. Aliquam ut enim. Quisque non sapien in enim eleifend faucibus. Pellentesque sodales. Mauris
                auctor arcu sit amet felis. Donec eget enim ut lacus pharetra condimentum. Nulla in felis vel tortor imperdiet consectetuer.
                Sed id ante.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam pellentesque enim blandit enim bibendum blandit.
                Integer eu leo ac est aliquet imperdiet. Quisque nec justo id augue posuere malesuada. Nullam ac metus. Cras non leo
                ut est placerat condimentum. Aliquam ut enim. Quisque non sapien in enim eleifend faucibus. Pellentesque sodales. Mauris
                auctor arcu sit amet felis. Donec eget enim ut lacus pharetra condimentum. Nulla in felis vel tortor imperdiet consectetuer.
                Sed id ante.</p>

          
            </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->
        <!-- Right column -->
        <div id="col" class="noprint">
            <div id="col-in">

                <!-- About Me -->
                <h3><span><a href="#">About Me</a></span></h3>

                <div id="about-me">
                    <p><img src="design/tmp_photo.gif" id="me" alt="Yeah, it��s me!" />
                    <strong>John Doe</strong><br />
                    Age: 26<br />
                    Dallas, TX<br />
                    <a href="#">Profile on MySpace</a></p>
                </div> <!-- /about-me -->

                <hr class="noscreen" />

                <!-- Category -->
                <h3 ><span>Category</span></h3>

                <ul id="category">
                    <li id="category-active"><a href="#">Selected category</a></li> <!-- Active -->
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                </ul>

                <hr class="noscreen" />

                <!-- Archive -->
                <h3><span>Archive</span></h3>

                <ul id="archive">
                   <li><a href="#">January 2007</a></li>
                    <li><a href="#">December 2006</a></li>
                    <li><a href="#">November 2006</a></li>
                    <li><a href="#">October 2006</a></li>
                    <li><a href="#">September 2006</a></li>
                    <li id="archive-active"><a href="#">August 2006</a></li> <!-- Active -->
                    <li><a href="#">July 2006</a></li>
                    <li><a href="#">June 2006</a></li>
                    <li><a href="#">May 2006</a></li>
                    <li><a href="#">April 2006</a></li>
                    <li><a href="#">March 2006</a></li>
                    <li><a href="#">February 2006</a></li>
                    <li><a href="#">January 2006</a></li>
                </ul>

                <hr class="noscreen" />

                <!-- Links -->
                <h3><span>Links</span></h3>

                <ul id="links">
                    <li><a href="#">Something</a></li>
                    <li><a href="#">Something</a></li>
                    <li><a href="#">Something</a></li>
                    <li><a href="#">Something</a></li>
                    <li><a href="#">Something</a></li>
                </ul>

                <hr class="noscreen" />
            
            </div> <!-- /col-in -->
        </div> <!-- /col -->

    </div> <!-- /page-in -->
    </div> <!-- /page -->

    <!-- Footer -->
    <div id="footer">
        <div id="top" class="noprint"><p><span class="noscreen">Back on top</span> <a href="#header" title="Back on top ^">^<span></span></a></p></div>
        <hr class="noscreen" />
        
        <p id="createdby">created by <a href="http://www.nuvio.cz">Nuvio | Webdesign</a> <!-- DON��T REMOVE, PLEASE! --></p>
        <p id="copyright">&copy; 2007 <a href="mailto:my@mail.com">My Name</a></p>
    </div> <!-- /footer -->
</div> <!-- /main -->
</body>
</html>
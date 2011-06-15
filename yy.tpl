<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
    <title>Foodbook</title>
    <meta name="description" content="Food" />
    <meta name="keywords" content="Food" />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
</head>

<body id="www-url-cz">


<div id="main" class="box">


    <div id="header">

 
        <h1 id="logo"><a href="./" title="foodbook [Go to homepage]">Foodbook<span></span></a></h1>
        <hr class="noscreen" />          


        <div class="noscreen noprint">
            <p><em>Quick links: <a href="#content">content</a>, <a href="#tabs">navigation</a>, <a href="#search">search</a>.</em></p>
            <hr />
        </div>

       
        <div id="search" class="noprint">
            <form action="" method="get">
                <fieldset><legend>Search</legend>
                    <label><span class="noscreen">Find:</span>
                    <span id="search-input-out"><input type="text" name="" id="search-input" size="30" /></span></label>
                    <input type="image" src="design/search_submit.gif" id="search-submit" value="OK" />
                </fieldset>
            </form>
        </div> 

    </div> 

 
     <div id="tabs" class="noprint">
            <h3 class="noscreen">Navigation</h3>
            <ul class="box">
                <li id="active"><a href="./index.html">Home<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="./test.html">Weblog<span class="tab-l"></span><span class="tab-r"></span></a></li> <!-- Active -->
                <li><a href="#">Hot<span class="tab-l"></span><span class="tab-r"></span></a></li>
            </ul>

        <hr class="noscreen" />
     </div> 


    <div id="page" class="box">
    <div id="page-in" class="box">


        <div id="content">

            <div class="article">
                <h2><span><a href="#">{$title1}</a></span></h2>
                <p class="info noprint">
                    <span class="date">{$time1}</span><span class="noscreen">,</span>
                </p>

                <p>{$content1}</p>

                <p class="btn-more box noprint"><strong><a href="./test.html">Continue</a></strong></p>
            </div> 

            <hr class="noscreen" />

     
            <div class="article">
                <h2><span><a href="#">{$title2}</a></span></h2>
                <p class="info noprint">
                    <span class="date">{$time2}</span><span class="noscreen">,</span>
                </p>

                <p>{$content2}</p>

                <p class="btn-more box noprint"><strong><a href="./test.html">Continue</a></strong></p>
            </div>

            <hr class="noscreen" />
            
           
            <div class="article">
              <h2><span><a href="#">{$title3}</a></span></h2>
                <p class="info noprint">
                    <span class="date">{$time3}</span><span class="noscreen">,</span>
                </p>

                <p>{$content3}</p>

                <p class="btn-more box noprint"><strong><a href="./test.html">Continue</a></strong></p>
            </div> 

            <hr class="noscreen" />

          
            <div class="article">
               <h2><span><a href="#">{$title4}</a></span></h2>
                <p class="info noprint">
                    <span class="date">{$time4}</span><span class="noscreen">,</span>
                </p>

                <p>{$content4}</p>

                <p class="btn-more box noprint"><strong><a href="./test.html">Continue</a></strong></p>
            </div>

            <hr class="noscreen" />
            
        </div> 

       
        <div id="col" class="noprint">
            <div id="col-in">

              
                <h3><span><a href="#">About Me</a></span></h3>

                <div id="about-me">
                    <p><img src="design/tmp_photo.gif" id="me" alt="Yeah, its me!" />
                    <strong>klj</strong><br />
					<?phpecho 'dadasd';?>
                    Age: 26<br />
                    Dallas, TX<br />
                    <a href="#">Profile on MySpace</a></p>
                </div>

                <hr class="noscreen" />

              
                <h3 ><span>Category</span></h3>

                <ul id="category">
                    <li id="category-active"><a href="#">Selected category</a></li> <!-- Active -->
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                </ul>

                <hr class="noscreen" />

              
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
            </div>
        </div>

    </div>
    </div> 

  
    <div id="footer">
        <div id="top" class="noprint"><p><span class="noscreen">Back on top</span> <a href="#header" title="Back on top ^">^<span></span></a></p></div>
        <hr class="noscreen" />
        
        <p id="createdby">created by <a href="http://www.nuvio.cz">Nuvio | Webdesign</a> <!-- DONT REMOVE, PLEASE! --></p>
        <p id="copyright">&copy; 2007 <a href="mailto:my@mail.com">My Name</a></p>
    </div> 

</div> 

</body>
</html>

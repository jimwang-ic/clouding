<?php
if (!isset($_SESSION)) {
    session_start();
}
include("function.php");
include("mysql.inc.php");


?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
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
    
    <link rel="index" href="./index.php" title="Home" />
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

        <h1 id="logo"><a href="./index.php" title="foodbook [Go to homepage]">Foodbook<span></span></a></h1>
        <hr class="noscreen" />          

		 <!-- WHAT TO EAT TODAY -->
        <div id="search">
              <label>
                    <a href="./WhatTOeatToday.php"><input type="image" src="image/WhatToeat.jpg"  width="80" height="60" /></a>
              </label>
        </div> <!-- WHAT TO EAT TODAY -->

		
        <!-- Quick links--> 
        <div class="noscreen noprint">
            <p><em>Quick links: <a href="#content">content</a>, <a href="#tabs">navigation</a>, <a href="#search">search</a>.</em></p>
            <hr />
        </div>

    </div> <!-- /header -->

     <!-- Main menu (tabs) -->
     <div id="tabs" class="noprint">
            <h3 class="noscreen">Navigation</h3>
            <ul class="box">
                <li><a href="./index.php">Home<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li id="active"><a href="./hot.php">Hot<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="./PostBLog.html">PostBlog<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="./AddGroup.html">Group<span class="tab-l"></span><span class="tab-r"></span></a></li>
				<li><a href="./logout.php">Logout<span class="tab-l"></span><span class="tab-r"></span></a></li>
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
				<h2>TOP 1</h2>
                <h2><span><a href="./hotblog.php?number=0"><?php echo $hot[0]['title']; ?></a></span></h2>             
                <p class="info noprint">
                    <span class="date"><?php echo $hot[0]['date']; ?></span><span class="noscreen">,</span>
                </p>
				<p class="info noprint">
					<img src="<?php echo ShowAuthor($hot[0]['author']); ?>" id="me" alt="Yeah, it’s me!" />
					Author:<?php echo $hot[0]['author']; ?>
				</p>
                <p><?php echo $HPOC[0];?></p>

                <p class="btn-more box noprint"><strong><a href="./hotblog.php?number=0">Continue</a></strong></p>
            </div> <!-- /article -->

            <hr class="noscreen" />

            <!-- Article -->
            <div class="article">
			
				<h2>TOP 2</h2>
                <h2><span><a href="./hotblog.php?number=1"><?php echo $hot[1]['title']; ?></a></span></h2>
                <p class="info noprint">
                    <span class="date"><?php echo $hot[1]['date']; ?></span><span class="noscreen">,</span>   
                </p>
				<p class="info noprint">
					<img src="<?php echo ShowAuthor($hot[1]['author']); ?>" id="me" alt="Yeah, it’s me!" />
					Author:<?php echo $hot[1]['author']; ?>
				</p>
				
                 <p><?php echo $HPOC[1];?></p>

                <p class="btn-more box noprint"><strong><a href="./hotblog.php?number=1">Continue</a></strong></p>
            </div> <!-- /article -->

            <hr class="noscreen" />
            
            <!-- Article -->
            <div class="article">
			
				<h2>TOP 3</h2>
                <h2><span><a href="./hotblog.php?number=2"><?php echo $hot[2]['title']; ?></a></span></h2>
                <p class="info noprint">
                    <span class="date"><?php echo $hot[2]['date']; ?></span><span class="noscreen">,</span>
                   
                </p>

				<p class="info noprint">
					<img src="<?php echo ShowAuthor($hot[2]['author']); ?>" id="me" alt="Yeah, it’s me!" />
					Author:<?php echo $hot[2]['author']; ?>
				</p>
                 <p><?php echo $HPOC[2];?></p>

                <p class="btn-more box noprint"><strong><a href="./hotblog.php?number=2">Continue</a></strong></p>
            </div> <!-- /article -->

            <hr class="noscreen" />

            <!-- Article -->
            <div class="article">
			
				<h2>TOP 4</h2>
                <h2><span><a href="./hotblog.php?number=3"><?php echo $hot[3]['title']; ?></a></span></h2>
                <p class="info noprint">
                    <span class="date"><?php echo $hot[3]['date']; ?></span><span class="noscreen">,</span>
                  
                </p>

				<p class="info noprint">
					<img src="<?php echo ShowAuthor($hot[3]['author']); ?>" id="me" alt="Yeah, it’s me!" />
					Author:<?php echo $hot[3]['author']; ?>
				</p>
                <p><?php echo $HPOC[3];?></p>

                <p class="btn-more box noprint"><strong><a href="./hotblog.php?number=3">>Continue</a></strong></p>
            </div> <!-- /article -->

            <hr class="noscreen" />
			
			 <!-- Article -->
            <div class="article">
			
				<h2>TOP 5</h2>
                <h2><span><a href="./hotblog.php?number=4"><?php echo $hot[4]['title']; ?></a></span></h2>
                <p class="info noprint">
                    <span class="date"><?php echo $hot[4]['date']; ?></span><span class="noscreen">,</span>
                  
                </p>
				<p class="info noprint">
					<img src="<?php echo ShowAuthor($hot[4]['author']); ?>" id="me" alt="Yeah, it’s me!" />
					Author:<?php echo $hot[4]['author']; ?>
				</p>

                <p><?php echo $HPOC[4];?></p>

                <p class="btn-more box noprint"><strong><a href="./hotblog.php?number=4">Continue</a></strong></p>
            </div> <!-- /article -->

            <hr class="noscreen" />
			
			
            
        </div> <!-- /content -->

        <!-- Right column -->
        <div id="col" class="noprint">
            <div id="col-in">

                <!-- About Me -->
                <h3><span>About Me</a></span></h3>

                <div id="about-me">
                    <p><img src="<? echo $photo_route; ?>" id="me" alt="Yeah, it’s me!" />
                    <strong><? echo $id; ?></strong><br />
					<? 
						echo 'Gender:'.$gender.'<br/>';
						echo 'region:'.$region.'<br/>';		
					?>
                  
                    <a href="upimage.php">Upload Myphoto</a></p>
                    <br/>
                    <div id="add_friend">
                    <form method="post" action="addFriend.php" name="addFriend">
                    	Add Friend : <input name="FriendID"><br />
                    </form>
                    </div>
                </div> <!-- /about-me -->

                <hr class="noscreen" />


                <!-- Category -->
                <h3 ><span>My Friends</span></h3>

                <ul id="category">
                    <!--<li id="category-active"><a href="#">Selected category</a></li> >--><!-- Active -->			
					<li><img src="<? echo $friend[0]['picture']; ?>" id="me" alt="my friend!" /><? echo " ".$friend[0]['id']; ?> </li>
					<li><img src="<? echo $friend[1]['picture']; ?>" id="me" alt="my friend!" /><? echo " ".$friend[1]['id']; ?> </li>
					<li><img src="<? echo $friend[2]['picture']; ?>" id="me" alt="my friend!" /><? echo " ".$friend[2]['id']; ?> </li>
                    <li><img src="<? echo $friend[3]['picture']; ?>" id="me" alt="my friend!" /><? echo " ".$friend[3]['id']; ?> </li>
                    <li><img src="<? echo $friend[4]['picture']; ?>" id="me" alt="my friend!" /><? echo " ".$friend[4]['id']; ?> </li>
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


            
            </div> <!-- /col-in -->
        </div> <!-- /col -->

    </div> <!-- /page-in -->
    </div> <!-- /page -->

    <!-- Footer -->
    <div id="footer">
        <div id="top" class="noprint"><p><span class="noscreen">Back on top</span> <a href="#header" title="Back on top ^">^<span></span></a></p></div>
        <hr class="noscreen" />
        
        <p id="createdby">created by <a href="http://www.nuvio.cz">Nuvio | Webdesign</a> <!-- DON’T REMOVE, PLEASE! --></p>
        <p id="copyright">&copy; 2007 <a href="mailto:my@mail.com">My Name</a></p>
    </div> <!-- /footer -->

</div> <!-- /main -->

</body>
</html>
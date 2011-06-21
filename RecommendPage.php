<?php
session_start();
include("mysql.inc.Recommend.php");
include("function.php");
?>

<script type="text/javascript">
function LikeAction(ID)
{
	xmlhttp=new XMLHttpRequest();
	//document.getElementById("people_number").innerHTML = ID;
	xmlhttp.onreadystatechange=function()
  	{
  		if (xmlhttp.readyState==4 && xmlhttp.status==200)
    	{
    		document.getElementById("people_number").innerHTML = xmlhttp.responseText;
    		document.getElementById("people_number1").innerHTML = xmlhttp.responseText;
    	}
  	}
	xmlhttp.open("GET","LikeAction.php?q=" + ID ,true);
	xmlhttp.send();

	
}
</script>



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
<!-- Main -->


<div id="main" class="box">

    <!-- Header -->
    <div id="header">

        <!-- Logotyp -->
        <h1 id="logo"><a href="./" title="foodbook [Go to homepage]">Foodbook<span></span></a></h1>
        <hr class="noscreen" />          

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
                <li id="active"><a href="./index.php">Home<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="#">Hot<span class="tab-l"></span><span class="tab-r"></span></a></li>
				<li><a href="./PostBLog.html">PostBlog<span class="tab-l"></span><span class="tab-r"></span></a></li>
				<li><a href="./AddGroup.html">Group<span class="tab-l"></span><span class="tab-r"></span></a></li>
				<li><a href="./login.php">Logout<span class="tab-l"></span><span class="tab-r"></span></a></li>
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
                <h2><span><?php echo $record[0]['title']." "; ?></span></h2>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
				<p class="info noprint">
                    <span class="date"><?php echo $record[0]['date']; ?></span><span class="noscreen">,</span>
                </p>
				<p class="info noprint">
					<img src="<?php echo ShowAuthor($record[1]['author']); ?>" id="me" alt="Yeah, it´s me!" />
					Author:<?php echo $record[0]['author']; ?>
				</p>
                <?php
						$aritcleID=$record[0]['id'];
						print "<input type='button' name='Like' value='Like' onClick=LikeAction('$aritcleID')>";
				?>
                <span><div id="people_number"><?php echo $record[0]['like_count'];?> 個人都說讚</div></span>
				
				<p>
				<?php echo $content[0]; ?>
				</p>

				<p>
				
 
			</div> <!-- /article -->
            <hr class="noscreen" />
            
        </div> <!-- /content -->
        <!-- Right column -->
        <div id="col" class="noprint">
            <div id="col-in">

                <!-- About Me -->
                <h3><span><a href="#">About Me</a></span></h3>

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
                <!--<h3 ><span>Category</span></h3>

                <ul id="category">
                    <li id="category-active"><a href="#">Selected category</a></li> --><!-- Active -->
                    <!--<li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                </ul>

                <hr class="noscreen" />-->
                <!-- Archive -->
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
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<meta name="author" content="Ansar Uddin Emon"/>
	<meta name="description" content="TO-LET System"/>
	<meta name="keywords" content="MESS,HOSTELS,BACHELOR HOUSES RAJSHAHI"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
	<title>TO-LET MANAGEMENT SYSTEM</title>
	<!-Ading CSS Here->
	
	<!-Resource File for Slider->
	<!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="search.css">
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="Slider/engine1/jquery.js"></script>
     <!-- End WOWSlider.com HEAD section -->

</head>

<body>
	<!-Header starts here->
    <header class="header">
    	<div class="wrapper">
    		<h1>TO-LETs RAJSHAHI</h1>
            <div class="wrap">
            <div class="search">
            <form action="search.php" method="POST">
            <input type="text" class="searchTerm" name="search" placeholder="Search Location">
            <button type="submit" class="searchButton" name="submit-search">GO</button>
            </form>
            <h3>Search Location Here</h3>
    	    </div> 
            </div>
 
    </header>
    
   
            </div>
    <!-Header Ends here->

    <!-Menu starts here->
    <nav class="menu">
    	<div class="Link">
    		<ul>
    			<a href="#"><li>Home</li></a>
    			<a href="#"><li>About</li></a>
    			<a href="#"><li>Houses</li></a>
    			<a href="#"><li>Contact</li></a>
    			<a href="#"><li>Sign In</li></a>
                <a href="admin.php"><li>Go to Admin Pannel</li></a>
    		</ul>
    	</div>
    </nav>
    <!-Menu Ends here->

    <!-Slider starts here->
    	<div class="slider">
    	<div class="wrapper"> 
    	  
    	  <!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="Slider/data1/images/3602apollobachelorpad1.jpg" alt="RH Chatrabas" title="RH Chatrabas" id="wows1_0"/></li>
		<li><img src="Slider/data1/images/hollywoodshouseoftheyear1.jpg" alt="Darul Bosir Chatrabas" title="Darul Bosir Chatrabas" id="wows1_1"/></li>
		<li><img src="Slider/data1/images/bachelorpadideas001.jpg" alt="Ryans Chatrabas" title="Ryans Chatrabas" id="wows1_2"/></li>
		<li><img src="Slider/data1/images/7319uniladimageoptimmansion.jpg" alt="Ryans Extension Chatrabas" title="Ryans Extension Chatrabas" id="wows1_3"/></li>
		<li><a href="http://wowslider.net"><img src="Slider/data1/images/bachelorpad1.jpg" alt="jquery carousel" title="Rose Tower Chatrabas" id="wows1_4"/></a></li>
		<li><img src="Slider/data1/images/maxresdefault.jpg" alt="Chistia Chatrabas" title="Chistia Chatrabas" id="wows1_5"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="RH Chatrabas"><span><img src="Slider/data1/tooltips/3602apollobachelorpad1.jpg" alt="RH Chatrabas"/>1</span></a>
		<a href="#" title="Darul Bosir Chatrabas"><span><img src="Slider/data1/tooltips/hollywoodshouseoftheyear1.jpg" alt="Darul Bosir Chatrabas"/>2</span></a>
		<a href="#" title="Ryans Chatrabas"><span><img src="Slider/data1/tooltips/bachelorpadideas001.jpg" alt="Ryans Chatrabas"/>3</span></a>
		<a href="#" title="Ryans Extension Chatrabas"><span><img src="Slider/data1/tooltips/7319uniladimageoptimmansion.jpg" alt="Ryans Extension Chatrabas"/>4</span></a>
		<a href="#" title="Rose Tower Chatrabas"><span><img src="Slider/data1/tooltips/bachelorpad1.jpg" alt="Rose Tower Chatrabas"/>5</span></a>
		<a href="#" title="Chistia Chatrabas"><span><img src="Slider/data1/tooltips/maxresdefault.jpg" alt="Chistia Chatrabas"/>6</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"></div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="Slider/engine1/wowslider.js"></script>
<script type="text/javascript" src="Slider/engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
    	  </div>
    	</div>

    <!-Slider Ends here->
    <!-Main Body starts here->
       


    <div class="main">
    	<div class="animation">
    	<marquee>We are now in <span style="color:blue;font-weight:bold">RAJSHAHI. </span>
    	Contact with us.Mobile:<span style="color:blue;font-weight:bold">+8801521325943. </span> 
    	Email: <span style="color:blue;font-weight:bold">aansaremon@gmail.com. </span>
    	Please sign in to chat with us.We are always here to reach you!</marquee>
        </div>
    	<div class="wrapper">
    		<h3>Recently Added</h3>
    		<!-Displaying Recently Added Houses in->
    		<!-- <div class="clearfix">
    		<div class="houses"> -->
            <style type="text/css">
                td{
                    padding: 15px;
                }
            </style>
                        <?php
                       mysql_connect("localhost", "root", "");
                        mysql_select_db("login");
                       $res=mysql_query("select * from display_images");
                        echo "<table>";
                       while ($row=mysql_fetch_array($res)) {
    

                echo"<tr>";
                echo "<td>";
              
                ?>
    			<img src="<?php echo $row["images"]; ?>" height="300" width="500"/><?php echo "</td>";
                
    			echo "<td>"; ?> <span class="house-title"><?php echo $row["Name"] ?></span><?php echo "</td>";
                echo "<td>"; ?> <span class="house-added">Added: <?php echo $row["time"] ?></span><?php echo "</td>";
    			/*echo "<td>"; ?> <span class="house-added">Added: 01-01-18</span><?php echo "</td>";*/
                echo "<td>"; ?> <span class="house-title"><?php echo $row["description"] ?></span><?php echo "</td>";
    			echo "<td>"; ?> <span class="house-Location"><?php echo $row["location"] ?></span><?php echo "</td>";
    			echo "<td>"; ?> <a href="book.php" ><button type="button" class="btn-book">Book House</button> </a>
                <?php echo "<td> <a href='delete_image.php?iid=$row[Name]' >DELETE</a> "?>
    	        <?php echo "<td> <a href='update_photo.php?nm=$row[Name]&lc=$row[location]&dc=$row[description]&im=$row[images]'>UPDATE</a> "?>
                <?php echo "</td>";echo"</tr>";
                                                         }
                        echo "</table>";
                       ?>


    		<!-- <div class="houses">
    			<img src="to-let.jpg"/>
    			<span class="house-title">RH Chatrabash</span><br/>
    			<span class="house-added">Added Date: 01-01-18</span><br/>
    			<span class="house-Location">Location: Islampur</span><br/>
    					<a href="book.php" >
    			<button type="button" class="btn-book">Book House</button>
    		</a>
    		</div>

    		<div class="houses">
    			<img src="to-let.jpg"/>
    			<span class="house-title">Chistia Chatrabash</span><br/>
    			<span class="house-added">Added Date: 01-01-18</span><br/>
    			<span class="house-Location">Location: Islampur</span><br/>
    					<a href="book.php" >
    			<button type="button" class="btn-book">Book House</button>
    		</a>
    		</div>

    		<div class="houses">
    			<img src="to-let.jpg"/>
    			<span class="house-title">Rose Tower Chatrabash</span><br/>
    			<span class="house-added">Added Date: 01-01-18</span><br/>
    			<span class="house-Location">Location: Vodra</span><br/>
    					<a href="book.php" >
    			<button type="button" class="btn-book">Book House</button>
    		</a>
    		</div>
    		<div class="houses">
    			<img src="to-let.jpg"/>
    			<span class="house-title">Ryans Tower Chatrabash</span><br/>
    			<span class="house-added">Added Date: 01-01-18</span><br/>
    			<span class="house-Location">Location: Vodra</span><br/>
    					<a href="book.php" >
    			<button type="button" class="btn-book">Book House</button>
    		</a> 
    		</div>
			</div>-->
    			<h3>Bachelor Houses</h3>
    		<!-Displaying Bachelor Houses in->
    		<div class="clearfix">
    		<div class="houses">
    			<img src="to-let.jpg"/>
    			<span class="house-title">Darul Basir Chatrabash</span><br/>
    			<span class="house-added">Added Date: 01-01-18</span><br/>
    			<span class="house-Location">Location: Islampur</span><br/>
    					<a href="book.php" >
    			<button type="button" class="btn-book">Book House</button>
    		</a>
    		</div>

    		<div class="houses">
    			<img src="to-let.jpg"/>
    			<span class="house-title">RH Chatrabash</span><br/>
    			<span class="house-added">Added Date: 01-01-18</span><br/>
    			<span class="house-Location">Location: Islampur</span><br/>
    					<a href="book.php" >
    			<button type="button" class="btn-book">Book House</button>
    		</a>
    		</div>

    		<div class="houses">
    			<img src="to-let.jpg"/>
    			<span class="house-title">Chistia Chatrabash</span><br/>
    			<span class="house-added">Added Date: 01-01-18</span><br/>
    			<span class="house-Location">Location: Islampur</span><br/>
    					<a href="book.php" >
    			<button type="button" class="btn-book">Book House</button>
    		</a>
    		</div>

    		<div class="houses">
    			<img src="to-let.jpg"/>
    			<span class="house-title">Rose Tower Chatrabash</span><br/>
    			<span class="house-added">Added Date: 01-01-18</span><br/>
    			<span class="house-Location">Location: Vodra</span><br/>
    					<a href="book.php" >
    			<button type="button" class="btn-book">Book House</button>
    		</a>
    		</div>
    		<div class="houses">
    			<img src="to-let.jpg"/>
    			<span class="house-title">Ryans Tower Chatrabash</span><br/>
    			<span class="house-added">Added Date: 01-01-18</span><br/>
    			<span class="house-Location">Location: Vodra</span><br/>
    					<a href="book.php" >
    			<button type="button" class="btn-book">Book House</button>
    		</a>
    		</div>
			</div>
    	    
    	</div>
    </div>
    <!-Main Body ends here->

    <!-Footer starts here->
    <footer class="footer">
    	<div class="wrapper">
    		<p>&copy;<a href="#">House rental system</a>.All rights reserved 2018</p>
    	</div>
    </footer>
    <!-Footer ends here->

</body>
</html>
<html>
    <head>
        <meta name= "viewport" content = "width = device-width, initial-scale = 1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>SafeKart</title>
		<meta charset="utf-8">

		<link href="bootstrap.css" type="text/css" rel="stylesheet"
		<link rel="stylesheet" href="bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Slabo+27px" rel="stylesheet">
        <style>
            .btn-lg:focus {
                outline: none !important;
            }
            .btn-lg:active {
                outline: none !important;
            }
        </style>
    </head>
    <body>
        <?php
    //establishes connection with the database and also selects the default database
    $mysqli = new mysqli("localhost", "shawank", "zrrJ8zNEdpuTwuty", "ODS_DB");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Print host information


    
    $sqlquery = "SELECT * FROM Sheet1";
    
    if($result = $mysqli->query($sqlquery))
    { ?>
        <div class="fixed">
            <h1 class="SafeKart" style="margin-left: 10%; display: inline-block;">SafeKart</h1>
            <p style="float: right; margin-right: 10%; display: inline-block; color: blue; font-size: 14px; margin-top: 40px;">Go to <a href="http://road-safety.co.in" style="color: blue;">IRSC</a> Home</p>
            <nav class="navbar navbar-default" style="width: 80%; margin: auto; border-radius: 5px;border-color: white">
            <div class="container-fluid" style="border-radius: 5px; ">
                <div class="topbar">
                <ul class="nav navbar-nav center">
                    <li style = "font-size: 1.3vw;" class="active"><a href="/">Home</a></li>
                    <li style = "font-size: 1.3vw;"><a href="#">About Us</a></li>
                    <li style = "font-size: 1.3vw;" class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Category</a>
                        <ul class="dropdown-menu multi-level">
                          <li class="dropdown-submenu">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">Road-related Products</a>
                            <ul class="dropdown-menu single">
                                <?php
                            while($row = $result->fetch_array())
                            {
                            $url = "index.php?ITEM_NAME=".$row["ITEM_NAME"];
                            
                            ?>

                            
                            <li><a href="<?php echo $url; ?>"><?php echo $row["ITEM_NAME"]; ?></a></li>
                            <?php
                            }
                            }
                            
                           ?>
                           
                
                               <!-- <li ><a href="product_temp.html">Traffic Cone connecting rod</a></li>
                                <li><a href="#">Chain</a></li>
                                <li><a href="#">Solar Studs</a></li>
                                <li><a href="#">Epoxy Filled Road Stud</a></li>
                                <li><a href="#">Barricades</a></li>
                                <li><a href="#">Solar Delineator</a></li>
                                <li><a href="#">Lane control signals lights</a></li>
                                <li><a href="#">Parking Dividers</a></li>
                                <li><a href="#">Traffic Sensors</a></li>
                                <li><a href="#">Road Blocker</a></li>
                                <li><a href="#">Car Stopper</a></li>    
                                <li><a href="#">Road Signs</a></li>
                                <li><a href="#">Traffic Warning Flasher</a></li>
                                <li><a href="#">Traffic Mirror</a></li>
                                <li><a href="#">Antiskid Coating</a></li>
                                <li><a href="#">LED Solar</a></li>
                                <li><a href="#">Solar Street Light</a></li>
                                <li><a href="#">Solar cat eye</a></li>
                                <li><a href="#">Speed retarders</a></li>
                                <li><a href="#">Traffic Cone</a></li>
                                <li><a href="#">Crash barrier</a></li>  
                                <li><a href="#">Traffic median marker</a></li>
                                <li><a href="#">Retractable traffic cone topper</a></li>
                                <li><a href="#">Reflective traffic cone</a></li>    
                                <li><a href="#">Truck wheel stopper</a></li>
                                <li><a href="#">Rumbler</a></li>
                                <li><a href="#">Thermo Plastic Road Marking Paint</a></li>
                                <li><a href="#">Boom Barriers</a></li>
                                <li><a href="#">Traffic Delineator Posts</a></li>
                                <li><a href="#">Traffic Batons</a></li>
                                <li><a href="#">Road Lamps</a></li>
                                <li><a href="#">Rubber Corner Guard</a></li>
                                <li><a href="#">Traffic Cone Highly Flexible</a></li>
                                <li><a href="#">crash Barrier</a></li>
                                <li><a href="#">Barricading Tape</a></li>
                                <li><a href="#">Caution Floor Stand</a></li>
                                <li><a href="#">Spring Post</a></li>
                                <li><a href="#">Telescopic Barricading Bar</a></li>
                                <li><a href="#">Center Verge</a></li>
                                <li><a href="#">Road Signs</a></li>
                                <li><a href="#">Flexible Delineators</a></li>
                                <li><a href="#">Flap Delineators</a></li>
                                <li><a href="#">Safety Bollard</a></li>
                                <li><a href="#">Lane Control Signal Light / OHLS</a></li>
                                <li><a href="#">Cone Message Plate</li>
                                <li><a href="#">Enforcement System</a></li>
                            </ul>
                          </li>
                          <li class="dropdown-submenu">
                            <a role="dropdown-toggle" tabindex="-1" href="#">Vehicle-related Products</a>
                            <ul class="dropdown-menu single">
                                <li><a href="#">Dome mirror</a></li>
                                <li><a href="#">Convex Mirror</a></li>
                                <li><a href="#">Wheel block system</a></li>
                                <li><a href="#">Reflectors</a></li>
                                <li><a href="#">Truck wheel chocks</a></li>
                                <li><a href="#">Dominator plus traffic advisor</a></li>
                                <li><a href="#">Rubber Corner Guard</a></li>
                                <li><a href="#">Wheel Chocks</a></li>
                                <li><a href="#">Parking Stud</a></li>
                                <li><a href="#">S Type Plastic Chain</a></li>
                                <li><a href="#">Triangular Type Wheel Chock</a></li>
                                <li><a href="#">Security Checking Mirrors</a></li>
                                <li><a href="#">Dominator Plus Traffic Advisor</a></li>
                                <li><a href="#">parking dividers</a></li>
                                <li><a href="#">Fire extinguishers</a></li>
                                <li><a href="#">Flashing beacons</a></li>
                                <li><a href="#">Fog Lights</a></li>
                                <li><a href="#">Signage:max no. of passengers</a></li>
                                <li><a href="#">Blind spot Mirror</a></li>
                                <li><a href="#">Fresnel lens</a></li>
                                <li><a href="#">Rear warning signs for vehicles</a></li>
                                <li><a href="#">Side under run guards</a></li>
                                <li><a href="#">reflective warning triangle </a></li>
                                <li><a href="#">reversing sensors/cameras/alarms</a></li>
                                <li><a href="#">ABS/Brakes</a></li>
                            </ul>   
                          </li>
                          <li class="dropdown-submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" tabindex="-1" href="#">Person-related Products</a>
                            <ul class="dropdown-menu single">
                                <li><a href="#">safety jackets</a></li>
                                <li><a href="#">Live Fall Arrester System</a></li>
                                <li><a href="#">STAINLESS STEEL QUE MANAGER </a></li>
                                <li><a href="#">VELVET ROPE </a></li>
                                <li><a href="#">Breath analyzer Machine</a></li>
                                <li><a href="#">Safety light bar</a></li>
                                <li><a href="#">LED Search lights</a></li>
                                <li><a href="#">Xenon HID search Light</a></li>
                                <li><a href="#">Reflective Gloves</a></li>
                                <li><a href="#">Industrial Safety Helmets</a></li>
                                <li><a href="#">Safety Cross Belts</a></li>
                                <li><a href="#">PVC / HDPE INDUSTRIAL SAFETY HELMET</a></li>
                                <li><a href="#">HELMET WITH HEAD LAMP</a></li>
                                <li><a href="#">Fireman Helmet Is 2745</a></li>
                                <li><a href="#">PVC HAND GLOVES</a></li>
                                <li><a href="#">Cold Storage Hand Gloves</a></li>
                                <li><a href="#">DUST / FUME RESPIRATOR</a></li>
                                <li><a href="#">Fume Mask</a></li>
                                <li><a href="#">Hand Held Metal Detectors</a></li>
                                <li><a href="#">Reflectors</a></li>
                                <li><a href="#">traffic light baton</a></li>
                                <li><a href="#">First-Aid box</a></li> -->
                            </ul>
                          </li>
                        </ul>
                    </li>
                    <li style = "font-size: 1.3vw;"><a href="#">Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li style = "font-size: 1.3vw;"><a href="#">My Account</a></li>
                    <li style = "font-size: 1.3vw;"><a href="#">My cart</a></li>
                    <li style = "font-size: 1.3vw;"><a href="#">Log Out</a></li>
                </ul>
                </div>
            </div>
            </nav>

        </div>

    
    <!--<div id="myCarousel" class="carousel slide">-->
        <!-- Indicators -->
        <!--<ol class="carousel-indicators">
            <li class="item1 active"></li>
            <li class="item2"></li>
            <li class="item3"></li>
            <li class="item4"></li>
        </ol>-->

        <!-- Wrapper for slides -->
        <!--<div class="carousel-inner" role="listbox">

        <div class="item active">
            <img src="srf1.jpg" alt="Chania" width="460" height="345">
            <div class="carousel-caption">
              <h3>Chania</h3>
              <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>

        <div class="item">
            <img src="srf2.jpg" alt="Chania" width="460" height="345">
            <div class="carousel-caption">
              <h3>Chania</h3>
              <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
            </div>
        </div>
    
        <div class="item">
            <img src="srf4.jpg" alt="Flower" width="460" height="345">
            <div class="carousel-caption">
              <h3>Flowers</h3>
              <p>Beautiful flowers in Kolymbari, Crete.</p>
            </div>
        </div>

        <div class="item">
            <img src="srf5.jpg" alt="Flower" width="460" height="345">
            <div class="carousel-caption">
              <h3>Flowers</h3>
              <p>Beautiful flowers in Kolymbari, Crete.</p>
            </div>
        </div>
  
        </div>-->

        <!-- Left and right controls -->
        <!--<a class="left carousel-control" href="#myCarousel" role="button">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>-->
       
        <?php
       	if(isset($_REQUEST["ITEM_NAME"]))
       	 { 
       	     $ITEM_NAME = $_REQUEST["ITEM_NAME"];
       	 	$quer = "SELECT * FROM Sheet1 WHERE ITEM_NAME ='".$ITEM_NAME."'";
       	 	$reply = $mysqli->query($quer);
       	 	
       	 	$result = $reply->fetch_assoc();
       	 	$newpageval = $result["pageview"] + 1;
       	 	$itemname = $result["ITEM_NAME"];
       	 	$pageupdate = "UPDATE Sheet1 SET pageview = '$newpageval' WHERE ITEM_NAME = '$itemname'";
       	 	?>
       	 
       	     <div style = "max-width: 1000px; margin: auto; margin-top: 20px;">
            <div class = "container-fluid">
                <div class = "row">
                    <div class = "col-md-6  ">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>   
                            <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class = "img-responsive" width = "100%" src="sample1.jpg" alt="First Slide">
                                </div>
                                <div class="item">
                                    <img class = "img-responsive" width = "100%" src="sample2.jpg" alt="Second Slide">
                                </div>
                                <div class="item">
                                    <img class = "img-responsive" width = "100%" src="sample3.jpg" alt="Third Slide">
                                </div>
                            </div>
                            
                            <!-- Carousel controls -->
                            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <div style = "text-align: center">
                            <img style = "margin-top: 2px;" width = "32.75%" src="sample1.jpg" alt="First Slide">
                            <img style = "margin-top: 2px;" width = "32.75%" src="sample1.jpg" alt="First Slide">
                            <img style = "margin-top: 2px;" width = "32.75%" src="sample1.jpg" alt="First Slide">
                        </div>
                    </div>
                    <div class = "col-md-6 ">
                        <h1 style = "margin-top: 2px;"><?php echo $result["ITEM_NAME"]; ?></h1>
                        <hr/>
                        <div class = "row " style = "margin: auto;">
                            <p class ="text-center"> STANDARDS</p>
                            <table class="table table-bordered table-striped">
                                    <tbody>    
                                        <tr>
                                            <td><?php echo $result["BIS_STANDARDS_APPROVED_LINK"]; ?></td>
                                            <td><?php echo $result["BIS_STANDARD"]; ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Weight</td>
                                            <td> 2.4kg</td>                                        
                                        </tr>
                                        <tr>
                                            <td>General Price</td>
                                            <td> <?php echo $result["GENERAL_PRICE"] ;?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Common Application</td>
                                            <td>nascetur ridiculus mus. Donec quam felis</td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                        </div>

                        <div class = "row">
                        <p class ="text-center"> Best Prices</p>
                        <?php if(isset($result["LEAST_PRICE_AVAILABLE1"]))
                        { ?>
                        <div class = "col-sm-4">
                        <img class = "img-responsive" src= "sample1.jpg" >
                        <p class = "text-center"> <?php echo $result["LEAST_PRICE_AVAILABLE1"]; ?> </p>
                        </div>

                        <?php }
                            if(isset($result["LEAST_PRICE_AVAILABLE2"]))
                        { ?>
                        <div class = "col-sm-4">
                        <img class = "img-responsive" src= "sample2.jpg" >
                        <p class = "text-center"> <?php echo $result["LEAST_PRICE_AVAILABLE2"]; ?> </p>
                        </div>

                        <?php }
                            if(isset($result["LEAST_PRICE_AVAILABLE3"]))
                        { ?>
                        <div class = "col-sm-4">
                        <img class = "img-responsive" src= "sample3.jpg" >
                        <p class = "text-center"> <?php echo $result["LEAST_PRICE_AVAILABLE3"]; ?> </p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <hr/>
                    <div class = "row">
                        <div class = "col-xs-12">
                            <div class="btn btn-group">
                                <button class = "specificationmenu btn btn-lg btn-default" type="button">specification</button>
                                <button class = "featuremenu btn btn-lg btn-default" type="button">Feature</button>
                                <button class = "standardmenu btn btn-lg btn-default" type="button">Standards</button>
                            </div>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col-xs-12">
                            <div class = "Specification">
                                <h2> Overview </h2> 
                                <div class = "jumbotron">
                                <blockquote class="pull-left">
                                     <p><?php echo $result["SPECIFICATIONS"]; ?></p>
                                </blockquote>
                                </div>
                                <p> commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur  ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget co</p>
                            
                                <table class="table table-bordered table-striped">
                                    <tbody>    
                                        <?php if(isset($result["SIZE"]))
                                        {
                                            ?>
                                        <tr>
                                            <td>Size</td>
                                            <td><?php echo $result["SIZE"]; ?></td>
                                            
                                        </tr>
                                        <?php 
                                        }
                                        if(isset($result[""]))
                                        {
                                        ?>
                                        <tr>
                                            <td>Height</td>
                                            <td><?php echo $result["HEIGHT"]; ?></td>                                        
                                        </tr>
                                        <?php 
                                        }
                                        if(isset($result[""]))
                                        {
                                        ?>
                                        <tr>
                                            <td>Base length/diameter</td>
                                            <td> <?php echo $result["BASE_LENGTH/DIAMETER"]; ?></td>
                                            
                                        </tr>
                                        <?php 
                                        }
                                        if(isset($result[""]))
                                        {
                                            ?>
                                        <tr>
                                            <td>Top width</td>
                                            <td><?php echo $result["TOPWIDTH"]; ?></td>
                                            
                                        </tr>
                                        <?php 
                                        }
                                        if(isset($result[""]))
                                        {
                                            ?>
                                        <tr>
                                            <td>Weight</td>
                                            <td><?php echo $result["WEIGHT"]; ?></td>
                                            
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>                          
                            </div>
                            <div class = "features">
                               
                                <p> <?php echo $result["FEATURES"]; ?></p>
                                <hr/>
                                <p> <?php echo $result["COMMON_APPLICATIONS"]; ?></p>
                            </div>
                            <div class = "standard">
                                <table class = " coltable table-bordered table-striped" style = "text-align: center;">
                                    <tbody>
                                        <div class = "row">
                                        <tr class = "col-md-3">
                                            <div class = "row">
                                            <td class = "col-md-2"> 
                                                <img src = "sample1.jpg">
                                            </td>
                                            <td class = "col-md-1">
                                                <p>ISI standards</p>
                                            </td>
                                            </div>
                                        </tr>
                                        </div>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                    <hr/>
                    <div class="text-center">
                        <p> An <a href="www.road-safety.co.in">IRSC</a> initiative</p>
                        <a href="/">HOME</a>
                    </div>
                     
                </div>
            </div>
       	 
	
	<?php
       } 
 	else {?>
 	<div class="intro-container">
 	    <div class = "row">
 	        <h2 class = "text-center">WELCOME TO THE ONE STOP SOLUTION FOR ALL ROAD SAFETY PRODUCTS</h2>
 	    </div>
 	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="srf1.jpg" />
      </div>

      <div class="item">
        <img src="srf2.jpg" />
      </div>
    
      <div class="item">
        <img src="srf5.jpg" />
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
   
		</div>
			
		</div>
		<div class = "row">
		<div class = "col-md-offset-1 col-md-10  jumbotron" style = "background-color: f8f8f8 !important;">Automobile safety is the study and practice of design, construction, equipment and regulation to minimize the occurrence and consequences of traffic collisions. Road traffic safety more broadly includes roadway design.
One of the first formal academic studies into improving vehicle safety was by Cornell Aeronautical Laboratory of Buffalo, New York. The main conclusion of their extensive report is the crucial importance of seat belts and padded dashboards. However, the primary vector of traffic-related deaths and injuries is the disproportionate mass and velocity of an automobile compared to that of the predominant victim, the pedestrian.
In the United States a pedestrian is injured by an automobile every 8 minutes, and are 1.5 times more likely than a vehicle's occupants to be killed in an automobile crash per outing.
Improvements in roadway and automobile designs have steadily reduced injury and death rates in all first world countries. Nevertheless, auto collisions are the leading cause of injury-related deaths, an estimated total of 1.2 million in 2004, or 25% of the total from all causes. Of those killed by autos, nearly two-thirds are pedestrians. Risk compensation theory has been used in arguments against safety devices, regulations and modifications of vehicles despite the efficacy of saving lives.
Coalitions to promote road and automobile safety, such as Together for Safer Roads (TSR), brings together global private sector companies, across industries, to collaborate on improving road safety. TSR brings together members knowledge, data, technology, and global networks to focus on five road safety areas that will make the greatest impact globally and within local communities.<br />
		</div>
		</div>
		<div class = "container-fluid product-grid" style = "max-width: 1000px; margin: 0 auto;">
		<h2> Products</h2>
		<hr/>
		<div class = "row">
		   
		   <div class ="col-md-4">
		       <img class = "img-responsive img-rounded " src = "sample1.jpg" width ="100%">
		       <p class = "text-center"> name of the product</p>
		   </div>
		   <div class ="col-md-4">
		       <img class = "img-responsive img-rounded " src = "sample1.jpg" width ="100%">
		       <p class = "text-center"> name of the product</p>
		   </div>
		   <div class ="col-md-4">
		       <img class = "img-responsive img-rounded " src = "sample1.jpg" width ="100%">
		       <p class = "text-center"> name of the product</p>
		   </div>
        </div>	
        <div class = "row">
		   
		   <div class ="col-md-4">
		       <img class = "img-responsive img-rounded "src = "sample1.jpg" width ="100%">
		       <p class = "text-center"> name of the product</p>
		   </div>
		   <div class ="col-md-4">
		       <img class = "img-responsive img-rounded " src = "sample1.jpg" width ="100%">
		       <p class = "text-center"> name of the product</p>
		   </div>
		   <div class ="col-md-4">
		       <img class = "img-responsive img-rounded " src = "sample1.jpg" width ="100%">
		       <p class = "text-center"> name of the product</p>
		   </div>
        </div>	
       <div class = "row">
		   
		   <div class ="col-md-4">
		       <img class = "img-responsive img-rounded "src = "sample1.jpg" width ="100%">
		       <p class = "text-center"> name of the product</p>
		   </div>
		   <div class ="col-md-4">
		       <img class = "img-responsive img-rounded " src = "sample1.jpg" width ="100%">
		       <p class = "text-center"> name of the product</p>
		   </div>
		   <div class ="col-md-4">
		       <img class = "img-responsive img-rounded " src = "sample1.jpg" width ="100%">
		       <p class = "text-center"> name of the product</p>
		   </div>
        </div>	
        
		</div>   
		</div>
		<?php 
        }
        ?>
 
    <script>
        $(document).ready(function(){
            $(".features, .standard").hide();
            $(".specificationmenu").removeClass("btn-default").addClass("btn-primary");
        });

        $(".featuremenu").click(function(){
            $(".features, .standard, .specification").hide();
            $(".standardmenu, .specificationmenu").removeClass("btn-primary").addClass("btn-default");
            $(".features").show();
            $(this).removeClass("btn-default").addClass("btn-primary");
        });
        $(".standardmenu").click(function(){
            $(".features, .standard, .specification").hide();
            $(".featuremenu, .specificationmenu").removeClass("btn-primary").addClass("btn-default");
            $(".standard").show();
            $(this).removeClass("btn-default").addClass("btn-primary");
        });
        $(".specificationmenu").click(function(){
            $(".features, .standard, .specification").hide();
            $(".featuremenu, .standardmenu").removeClass("btn-primary").addClass("btn-default");
            $(".specification").show();
            $(this).removeClass("btn-default").addClass("btn-primary");
        });
    </script>



    </body>
</html>
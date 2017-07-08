<! DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
    </head>
    <body>
<?php
    #establishes connection with the database and also selects the default database
    include "connection.inc.php";
    
    $sqlquery = "SELECT * FROM Sheet1";
    
    if($result = $mysqli->query($sqlquery))
    {?>
           <div class="fixed">
			<!--<ul class="firstlist">
				<li>Back to IRSC</li>
			</ul>-->

			<h1 class="SafeKart" style="margin-left: 10%; display: inline-block;">SafeKart</h1>
			<p style="float: right; margin-right: 10%; display: inline-block; color: #fff; font-size: 14px; margin-top: 40px;">Go to <a href="http://road-safety.co.in" style="color: #fff;">IRSC</a> Home</p>
			<nav class="navbar navbar-default" style="width: 80%; margin: auto; border-radius: 5px;border-color: #bb4430">
			<div class="container-fluid" style="border-radius: 5px; ">
				<div class="topbar">
				<ul class="nav navbar-nav center">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Category</a>
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
    $mysqli->close();
    ?>
                            ?>
        
    
    
    
    
            
    </body>
</html>

<?php
                           if(isset($_REQUEST["ITEM_NAME"]))
                            {
                            	$ITEM_NAME = $_REQUEST["ITEM_NAME"];
                            	$quer = "SELECT * FROM Sheet1 WHERE ITEM_NAME ='".$ITEM_NAME."'";
                            	$result = $mysqli->query($quer)
                            	?>
                            	
        <div class="product">
		<div class="product-image">
			<img src="sample.jpg" />
		</div>
		
		<div class="product-details">
			<h2 class="title"><?php echo $result["ITEM_NAME"]; ?></h2>
			<div class = "SIZE">
				<h3 >SIZE</h3>
				<p>
					<?php echo $result["SIZE"]; ?>
				</p>
			</div>
			<div class = "HEIGHT">
				<h3 >HEIGHT</h3>
				<p>
					<?php echo $result["HEIGHT"]; ?>
				</p>
			</div>
			<div class = "LENGTHDIAMETER">
				<h3 >BASE LENGTH/DIAMETER</h3>
				<p>
					<?php echo $result["BASE_LENGHT/DIAMETER"]; ?>
				</p>
			</div>
			<div class = "TOPWIDTH">
				<h3 >TOP WIDTH</h3>
				<p>
					<?php echo $result["TOP WIDTH"]; ?>
				</p>
			</div>
			<div class = "WEIGHT">
				<h3 >WEIGHT</h3>
				<p>
					<?php echo $result["WEIGHT"]; ?>
				</p>
			</div>
			<div class = "FEATURES">
				<h3 >FEATURES</h3>
				<p>
					<?php echo $result["FEATURES"]; ?>
				</p>
			</div>
			<div class = "SPECIFICATIONS">
				<h3 >SPECIFICATIONS</h3>
				<p>
					<?php echo $result["SPECIFICATIONS"]; ?>
				</p>
			</div>
			<div class = "COMMON_APPLICATIONS">
				<h3 >COMMON APPLICATIONS</h3>
				<p>
					<?php echo $result["COMMON_APPLICATIONS"]; ?>
				</p>
			</div>
			<div class = "GENERAL_PRICE">
				<h3 >GENERAL PRICE</h3>
				<p>
					<?php echo $result["GENERAL_PRICE"]; ?>
				</p>
			</div>
			<div class = "BIS_STANDARD">
				<h3 >BIS STANDARD</h3>
				<p>
					<?php echo $result["BIS_STANDARD"]; ?>
				</p>
			</div>
			<div class = "BIS_STANDARDS_APPROVED_LINK">
				<h3 >BIS STANDARDS APPROVED LINK</h3>
				<p>
					<?php echo $result["BIS_STANDARDS_APPROVED_LINK"]; ?>
				</p>
			</div>
			<div class = "LEAST_PRICE_AVAILABLE1">
				<h3 >LEAST PRICE AVAILABLE 1</h3>
				<p>
					<?php echo $result["LEAST_PRICE_AVAILABLE1"]; ?>
				</p>
			</div>
			<div class = "LEAST_PRICE_AVAILABLE2">
				<h3 >LEAST PRICE AVAILABLE 2</h3>
				<p>
					<?php echo $result["LEAST_PRICE_AVAILABLE2"]; ?>
				</p>
			</div>
			<div class = "LEAST_PRICE_AVAILABLE3">
				<h3 >LEAST PRICE AVAILABLE 3</h3>
				<p>
					<?php echo $result["LEAST_PRICE_AVAILABLE3"]; ?>
				</p>
			</div>
		<?php
             } 
		   else {?>
		   
		<div class="intro-container">
			<p class="intro">WELCOME TO THE ONE STOP SOLUTION FOR ALL ROAD SAFETY PRODUCTS</p>
		</div>
		
		<div class="content">
		<p>
		*********************Some Useless Content************************<br />
		Automobile safety is the study and practice of design, construction, equipment and regulation to minimize the occurrence and consequences of traffic collisions. Road traffic safety more broadly includes roadway design.
One of the first formal academic studies into improving vehicle safety was by Cornell Aeronautical Laboratory of Buffalo, New York. The main conclusion of their extensive report is the crucial importance of seat belts and padded dashboards. However, the primary vector of traffic-related deaths and injuries is the disproportionate mass and velocity of an automobile compared to that of the predominant victim, the pedestrian.
In the United States a pedestrian is injured by an automobile every 8 minutes, and are 1.5 times more likely than a vehicle's occupants to be killed in an automobile crash per outing.
Improvements in roadway and automobile designs have steadily reduced injury and death rates in all first world countries. Nevertheless, auto collisions are the leading cause of injury-related deaths, an estimated total of 1.2 million in 2004, or 25% of the total from all causes. Of those killed by autos, nearly two-thirds are pedestrians. Risk compensation theory has been used in arguments against safety devices, regulations and modifications of vehicles despite the efficacy of saving lives.
Coalitions to promote road and automobile safety, such as Together for Safer Roads (TSR), brings together global private sector companies, across industries, to collaborate on improving road safety. TSR brings together members knowledge, data, technology, and global networks to focus on five road safety areas that will make the greatest impact globally and within local communities.<br />
		*********************Some Useless Content************************
		</p>		

		<div class="products">
			
		</div>
		<div class="offers">
			
		</div>
		</div>
		<?php 
        }
        ?>

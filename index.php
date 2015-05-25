<!--
 * Written by dostap
 * Date: 2015/05/18
-->
	
	<?php
	$header_title = "Welcome to Travel Experts";
	?>

	<?php
	include "indexheader.php";
	?>


	<script>
	function redirect(value)
{
    if (value == '1')
    {
        window.location = 'packages.php?packageID=1';
    }
    else if (value == '2')
    {
        window.location = 'packages.php?packageID=2';
    }
     else if (value == '3')
    {
        window.location = 'packages.php?packageID=3';
    }
     else if (value == '4')
    {
        window.location = 'packages.php?packageID=4';
    }
	}
	</script>




	<body>

	<div id="wrapper1">
	<section>
	<h3>Let's find YOUR perfect vacation!</h3>
	<img src="img/beach.jpg" /><br / >
			<form id="list" method="get" action="">

				<label for="location">Where would you lie to go?</label>


				<select name="selectLocation" onchange="redirect(this.value)">
				<option value="0" disabled selected>Choose by Destination</option>
				<option value="1">Caribbean</option>
				<option value="2">Polynesia</option>
				<option value="3">Asia</option>
				<option value="4">Europe</option>
			
				</select><br / >

				<label for="date">When would you like to travel?</label>
				<select name="selectMonth" onchange="redirect(this.value)">
				<option value="" disabled selected>Choose by Month</option>
				<option value="4">May</option>
				<option value="2">June</option>
				<option value="3">November</option>
				<option value="1">December</option>
	
				</select><br / >

				<label for="vacationType">What type of vacation would you prefer?</label>
				<select name="selectType" onchange="redirect(this.value)">
				<option value="" disabled selected>Choose by Type</option>
				<option value="1">Cruise</option>
				<option value="2">All inclusive resort</option>
				<option value="3">Eco tour</option>
				<option value="4">Rail tour</option>
	
				</select><br / >

				<label for="vacationType">What is your vacation budget?</label>
				<select name="selectBudget" onchange="redirect(this.value)">
				<option value="" disabled selected>Choose by Price Range</option>
				<option value="3">2000-3000</option>
				<option value="4">3000-4000</option>
				<option value="1">4000-5000</option>
			

				</select>		
	
			</form>
	</section>
	</div>
		<!-- Wrapper for the carousel-->
		
		<div id="wrapper2">
		<aside>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
	
 		 		<!-- Indicators -->
  				<ol class="carousel-indicators">
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				    <li data-target="#myCarousel" data-slide-to="2"></li>
				    <li data-target="#myCarousel" data-slide-to="3"></li>
				    <li data-target="#myCarousel" data-slide-to="4"></li>    
  				</ol>

  
				<div class="carousel-inner" role="listbox">
					<div class="item active">
					    <img src="img/Italy.jpg" alt="Italy">
					       <div class="carousel-caption">
      					 		<h3>Italy Awaits!</h3>
					        	<p><span style="font-size: 2.5em"> Limited Time Offer</span></p>
					        	<p><a class="carButton" href="contact.php" role="carButton">Contact Us for Details</a></p>
					      </div> <!--close carousel-caption class div-->
					</div><!--close item class div-->

					<div class="item">
					    <img src="img/cabin.jpg" alt="Cabin in the Rockies">
					    	<div class="carousel-caption">
      							<h3>Your Weekend Getaway</h3>
					     	   <p><span style="font-size: 2.5em">4th Night FREE</span></p>
					     	   <p><a class="carButton" href="contact.php" role="carButton">Contact Us for Details</a></p>
					     	</div><!--close carousel-caption class div-->
					</div><!--close item class div-->

					<div class="item">
					    <img src="img/japan.jpg" alt="Japan">
					     	<div class="carousel-caption">
      					 		<h3>Culinary Adventure in Japan</h3>
					     	   <p><span style="font-size: 2.5em">Coming SOON</span></p>
					     	   <p><a class="carButton" href="contact.php" role="carButton">Contact Us for Details</a></p>
					     	</div><!--close carousel-caption class div-->
					</div><!--close item class div-->

					<div class="item">
						<img src="img/train.jpg" alt="Rail tour">
					    	<div class="carousel-caption">
      							<h3>Canadian Railway Tour</h3>
					        	<p><span style="font-size: 2.5em">Save 15% by booking TODAY</span></p>
					        	<p><a class="carButton" href="contact.php" role="carButton">Contact Us for Details</a></p>
								</div><!--close carousel-caption class div-->
					</div><!--close item class div-->

					<div class="item">
						<img src="img/kenya.jpg" alt="Kenya">
					    	<div class="carousel-caption">
      							<h3>Kenya and Tanzania Safari</h3>
					        	<p><span style="font-size: 2.5em">The Ultimate Safari Tour</span></p>
					        	<p><a class="carButton" href="contact.php" role="carButton">Contact Us for Details</a></p>
								</div><!--close carousel-caption class div-->
					</div><!--close item class div-->

   				</div> <!-- div for carousel-inner -->

			 <!-- Left and right controls -->
		
			  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div><!-- div for myCarousel -->
		</aside> 		
		</div> <!--close wrapper2 div-->
	
		
		<?php
		include "indexfooter.php";
		?>

	</body>
	

</html>
<?php

/*
You will need to use the following tables to enhance the web pages you developed earlier:
1.	Packages
2.	Products
3.	Packages_products
4.	Agencies
5.	Agents
6.	Customers
7.	Bookings
*/

	// Move this to variables.php or db
	$packageText = array(
		"",
		"Exchange the winter cold for the warm, sandy shores of the Caribbean - an excellent way to start off the New Year on a relaxed and cheerful note.",
		"In Hawaii, your vacation can be whatever you want it to be. From relaxed to adventurous, from beautiful beaches to breathtaking views.",
		"Travel to Asia and experience a rich tapestry of fascinating cultures, exotic landscapes, and age-old traditions.",
		"A European vacation is like no other. Experience a variety of cultures and famous sites as you see what this charming Old World continent has to offer."
	);
	
	$packageImage = array(
		"Asian" => "img/pack_asian.jpg", 
		"Caribbean" => "img/pack_caribbean.jpg", 
		"European" => "img/pack_european.jpg", 
		"Polynesian" => "img/pack_polynesian.jpg"
	);
	
	// move to functions.php
	// Takes date() and formats it to our standard 
	function formatDate($date)
	{
		$rawDate = date_create($date);
		$myDate = date_format($rawDate, 'M d, Y');
		return ($myDate);
	}
	
	// 
	function selectPackagesMini()
	{
		$dbh = @mysqli_connect("localhost","root","","travelexperts") or die("SQL Error: " . mysqli_connect_error()); 
		$sql = "SELECT * FROM Packages";
		$result = mysqli_query($dbh, $sql) or die("Error: " . mysqli_error($dbh)); 
		
		// gets result w assoc key
		while($row = mysqli_fetch_assoc($result)) 
		{ 
			// Get first word in string
			$myPkgName = strtok($row["PkgName"], " ");
			
			$totalPrice = $row["PkgBasePrice"] + $row["PkgAgencyCommission"];
			
			// MySQL store date in PHP equivalent of: date("Y-m-d H:i:s"); 
			$myDateStart = formatDate($row["PkgStartDate"]);
			$myDateEnd = formatDate($row["PkgEndDate"]);
			
			// Compare package date to current date; only show valid packages >= current date
			if (strtotime($row['PkgEndDate']) < time() )
			{
				print("
					<img src='img/pack_" . $myPkgName . ".jpg'>
					<h2 align='left'>" . $row["PkgName"] . " $" . number_format($totalPrice, 0) . "</h2>
					<div class='pack-date-start'>Start Date: " . $myDateStart . "</div>
					<div id='pack-date-end'>End Date: " . $myDateEnd . "</div>
					<button><a href='packages.php?packageID=" . $row["PackageId"] . "'>Details</a></button>
					<button><a href='register.php?packageID=" . $row["PackageId"] . "'>Book Now</a></button>
					<br/><br/>
				");	
			}
			
			// If package start date < current date, use CSS to make start date bold and red
			if (strtotime($row['PkgStartDate']) < time() )
			{
				print("<script>setColorRed('pack-date-start');</script>");
			}
		} 
		
		mysqli_close($dbh);
	}
	
	
	// 
	function selectPackages($packageID)
	{
		//$packageID = $_GET['packageID'];
		
		global $packageText;
		global $packageImage;
		
		$dbh = @mysqli_connect("localhost","root","","travelexperts") or die("SQL Error: " . mysqli_connect_error()); 
	
		if ($packageID == 0) 
		{
			$sql = "SELECT * FROM Packages";
		}
		else 
		{
			$sql = "SELECT * FROM Packages WHERE Packages.PackageId = $packageID";
		}
		
		$result = mysqli_query($dbh, $sql) or die("Error: " . mysqli_error($dbh)); 
		
		// gets result w assoc key
		while($row = mysqli_fetch_assoc($result)) 
		{ 
			$i = $row["PackageId"];
			
			$myPkgName = strtok($row["PkgName"], " ");
			
			
			$totalPrice = $row["PkgBasePrice"] + $row["PkgAgencyCommission"];
			
			// MySQL store date in PHP equivalent of: date("Y-m-d H:i:s"); 
			$myDateStart = formatDate($row["PkgStartDate"]);
			$myDateEnd = formatDate($row["PkgEndDate"]);
				
			// Compare package date to current date; only show valid packages >= current date
			if (strtotime($row['PkgEndDate']) < time() )
			{
				print("
					<div class='package-main'>
						<table>
							<tr><td>
								<h1>" . $row["PkgName"] . " $" . number_format($totalPrice, 0) . "</h1>
								<p align='left'>" . $packageText[$i] . "</p>
								<div class='pack-date-start'>Start Date: " . $myDateStart . "</div>
								<div class='pack-date-end'>End Date: " . $myDateEnd . "</div>
								<div>Package Includes:" . $row["PkgDesc"] . "</div>
							</td></tr>
							<tr><td>
								<img src='img/pack_" . $myPkgName . ".jpg'></td></tr>
							<tr><td>
								<img id='img-pack-micro' src='img/pack_" . $myPkgName . $i . ".jpg' >
								<img id='img-pack-micro' src='img/pack_" . $myPkgName . $i . ".jpg' >
								<img id='img-pack-micro' src='img/pack_" . $myPkgName . $i . ".jpg' >
								<img id='img-pack-micro' src='img/pack_" . $myPkgName . $i . ".jpg' >
							</td></tr>
						</table>
					</div>
				");	
			}
			
			// If package start date < current date, use CSS to make start date bold and red
			if (strtotime($row['PkgStartDate']) < time() )
			{
				print("<script>setColorRed('pack-date-start');</script>");
			}
		} 
		
		mysqli_close($dbh);
	}


?>

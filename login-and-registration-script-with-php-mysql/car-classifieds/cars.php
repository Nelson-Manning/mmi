<?php
error_reporting(0);
include("options.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Car flip cards</title>
<link href='cars.css' rel='stylesheet' />

</head>

<body>
<?php
	$sql = "SELECT * FROM ".$SETTINGS["CARS"]."";
    $result = $mysqli->query ($sql) or die ('request "Could not execute SQL query" '.$sql);


?>
	
<div class="container">
	<?php while ($row = $result->fetch_assoc()) { ?>
    <div class="card-container">
        <div class="card">
            <div class="front">
                <div class="cover">
					<img src="images/<?php echo $row['photo'] ?>">
				</div>
				<div class="content">
                    <div class="main">
                        <h3 class="name"><?php echo $row['title'] ?></h3>
                       
                       <!-- <div class="first float_left">
                        	<span class="icon_mileage"></span><?php echo $row['mileage'] ?>&nbsp;km
                        </div>
                        <div class="first">
                        	<span class="icon_power"></span><?php echo $row['top_speed'] ?>&nbsp;km/h
                        </div>
                        <div class="second float_left">
                        	<span class="icon_fuel"></span><?php echo $row['fuel'] ?>
                        </div>
                        
                        <div class="second">
                        	<span class="icon_gearbox"></span><?php echo $row['gearbox'] ?>
                        </div> -->
                    </div>
                    <div class="price">
                    	&euro;<?php echo $row['price'] ?>
                    </div> 
                </div>
            </div> <!-- end front panel -->
            <div class="back">
                <p>
                	<label class="title">Keys Type</label>
                	<span class="value"><?php echo $row['car_type'] == 'new' ? 'New car' : 'Used car'?></span>
                </p>
                <p>
                	<label class="title">Dimension</label>
                	<span class="value"><?php echo stripcslashes($row['make']) ?></span>
                </p>
                <p>
                	<label class="title">Model No</label>
                	<span class="value"><?php echo stripcslashes($row['model']) ?></span>
                </p>
                 <p>
                	<label class="title">Model Size</label>
                	<span class="value"><?php echo stripcslashes($row['year']) ?></span>
                </p>
                <p>
                	<label class="title">Item Weight</label>
                	<span class="value"><?php echo stripcslashes($row['mileage']) ?></span>
                </p>
                <p>
                	<label class="title">Power Supply</label>
                	<span class="value"><?php echo stripcslashes($row['power']) ?> hp</span>
                </p>
                <p>
                	<label class="title">USB Port</label>
                	<span class="value"><?php echo stripcslashes($row['emission_class']) ?></span>
                </p>
                <p>
                	<label class="title">Aux</label>
                	<span class="value"><?php echo stripcslashes($row['color']) ?></span>
                </p>
                <p>
                	<label class="title">MIDI Support</label>
                	<span class="value"><?php echo stripcslashes($row['doors']) ?></span>
                </p>
                <p>
                	<label class="title">Manufacturer</label>
                	<span class="value"><?php echo stripcslashes($row['fuel']) ?></span>
                </p>
               <!-- <p>
                	<label class="title">Gearbox</label>
                	<span class="value"><?php echo stripcslashes($row['gearbox']) ?></span>
                </p>
                <p>
                	<label class="title">Number of seats</label>
                	<span class="value"><?php echo stripcslashes($row['number_of_seats']) ?></span>
                </p>
                <p>
                	<label class="title">Vehicle Type</label>
                	<span class="value"><?php echo stripcslashes($row['vehicle']) ?></span>
                </p> -->
                
                
            </div> <!-- end back panel -->
        </div> <!-- end card -->
    </div> <!-- end card-container -->
    <?php } ?>
</div>
</body>
</html>
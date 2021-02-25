<?php 
session_start();
//include('header.php');
include_once("db_connect.php");
?>
<title>Mordern Musical Instruments</title>
<script type="text/javascript" src="script/ajax.js"></script>
 <?php ;?>

<div style="align-content: center; text-align: center; ">
	<h2>Mordern Musical Instruments</h2>	
		
		<br>
		<br>
		<div class="collapse navbar-collapse" id="navbar1" style="text-align: right;">
			<p class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['user_id'])) { ?>
				<p class="navbar-text"><strong>Welcome!</strong> You're signed in as <strong><?php echo $_SESSION['user_name']; ?></strong></p>
				<a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				<a href="login.php">Login</a></li>
				<a href="register.php">Sign Up</a></li>
				<?php } ?>
			</p>
		</div>
		
		
		
		<!--<div style="margin:50px 0px 0px 0px;">
			<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://webdamn.com/login-and-registration-script-with-php-mysql" title="">Back to Tutorial</a> -->			
		</div>	
</div>	
<style type="text/css">
	#grad1 {
    background-color: #1fc8db;
     background-image: linear-gradient(45deg, #114357, #f29492);
    color: white;
    opacity: 0.95;
}
</style>
<body style="background-image: linear-gradient(45deg, #114357, #f29492);" >

	<?php if (isset($_SESSION['user_id'])) { ?>
				<p class="navbar-text"><?php include('menu.php');?> </p>
				
				<?php } else { ?>
				<p>Not logged in</p>
				<img src="bg.jpg" style="background-position: center; background-repeat: no-repeat;background-size: cover; height: 111%; vertical-align: middle; "></a>
				<?php } ?>
	
	

<?php include('footer.php');?> 

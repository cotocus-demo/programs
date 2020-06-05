<?php
$message = '';
if (isset($_POST['num'])) {
	if (!empty($_POST['num'])) {
	$num = $_POST['num'];
	$rev=0;
	$temp =$num;
	while ($temp>1) {
		$rem = $temp%10;
		$rev =($rev * 10) + $rem;
		$temp =($temp / 10);
	}
	//echo "<h3> Reverse number of $num is: $rev </h3>";  
	$message = "Reverse number of $num is: $rev";
}else{
	echo "<h4>No number has been ebtered</h4>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reverse program</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel ="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
	<style>
	  body{
	      font-size: 25px;
          font-family: 'Balsamiq Sans', cursive;
          background-color: #46C7C7;
          }
       .container{
			width: 50%;
			margin: 0 auto;
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
		}
		input[type=text], textarea{
			width: 150%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			resize: vertical;
			color: #2B3856;
		}
		input[type=submit]{
			color: white;
			padding: 15px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			float: right;
		}
		label{
			color:  #2B547E;
		}
		.col-6{
			float: left;
			width: 25%;
			margin-top: 6px;
			align: right;
		}
		.row:after{
			content: " ";
			display: table;
			clear: both;
		}
		h2,h3,h4{
			text-align: center;
		}
		
	</style>
</head>
<body>
      <div class="container">
      	<?php
    		if (!empty($message)) {
    		?>
    		<div class="row">
    			<h3> <?php echo $message; ?></h3> 
    		</div>
    		<?php 
    	 } ?>
      	<form action="reverse.php" method="POST">
      		<div>
      			<label>Enter the number :</label>
      		</div>
      		<div class="row">
    				<div class="col-6">
    					<textarea name="num" rows="5" cols="40"></textarea>
    				</div>
    				<div class="col-6">
    					<input type="submit" class="btn btn-primary btn-lg" name="submit" value="Submit">
    				</div>
    			</div>
      	</form>
      </div>
</body>
</html>
<?php
// Program to find n numbers of Fibonacci series
extract($_REQUEST);
if (isset($submit)) {
	$firstNumber  = 0;
	$secondNumber = 1;
	$nextNumber ;
	echo "<h3>Fibonacci series for first $number numbers: </h3>";  
    echo "</br>";  
	for ($i=0; $i < $number; $i++) { 
		if ($i<=1) {
			$nextNumber=$i;
		}else{
			$nextNumber =$firstNumber+$secondNumber;
			
			$firstNumber=$secondNumber;
			$secondNumber=$nextNumber;
		}
		echo "<h2> $nextNumber &nbsp </h2>" ;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fibonacci Series</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel ="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400&display=swap" rel="stylesheet">
	<style>
		body{
			background-color:lightblue;
			font-family: 'Comfortaa', cursive;
		}
		input[type=text], select, textarea{
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			resize: vertical;
		}
		h3{
          text-align: center;
		}
		h2{
			
			display: inline;
            margin-left: 200px;
         }
		label{
			padding: 12px 12px 12px 0;
			display: inline-block;
		}
		input[type=submit]{
			background-color: #4caf50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			float: right;
		}
		.container{
			width: 40%;
			margin: 0 auto;
			border-radius: 5px;
			background-color: #CED8DD;
			padding: 20px;
		}
		.col-25{
			float: left;
			width: 25%;
			margin-top: 6px;
		}
		.col-75{
			float: left;
			width: 75%;
			margin-top: 6px;
		}
		.row:after{
			content: " ";
			display: table;
			clear: both;
		}
	</style>
</head>
<body>
    <section>
    	<div class="container">
    		<form action="fib.php" method="POST">
    			<div class="row">
    				<label>Please enter Number here</label>
    			</div>
    			<div class="row">
    				<div class="col-75">
    					<input type="text" name="number" placeholder="Please enter number here" 
    					
    					id="number" autocomplete="off">
    				</div>
    				<div class="col-25">
    					<input type="submit" name="submit" value="Submit">
    				</div>
    			</div>
    		</form>
    	</div>
    </section>
</body>
</html>
<?php
$message = '';
if(isset($_POST['submit']))
{
$num=$_POST['num'];
define('NUM',$num);
for($i=1 ; $i<=10 ; $i++)
{
echo $i*NUM;
echo '<br>';
$message = $i*NUM;
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Table of a Number</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel ="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Tenali+Ramakrishna&display=swap" rel="stylesheet">
	<style>
        body{
        	font-family: 'Tenali Ramakrishna', sans-serif;
        	font-size: 25px;
        }
		.container{
			width: 50%;
			margin: 0 auto;
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 40px;
			font-size: 20px;

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
		.col-25{
			float: left;
			width: 25%;
			margin-top: 6px;
			align: right;
			
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
    		<?php
    		if (!empty($message)) {
    		?>
    		<div class="row">
    			<h3>Table of this number is: <?php echo $message; ?></h3> 
    		</div>
    	<?php 
    	 } ?>
    		<form action="tableofnumber.php" method="POST">
    			<div class="row">
    				<label>Please enter Number here</label>
    			</div>
    			<div class="row">
    				<div class="col-75">
    					<input type="text" name="num" placeholder="Please enter number here" 
    					
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>MULSEMEDIA BOOKS</title>
	  <!-- Bootstrap CSS File -->
	  <link href="bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			background-color: #f9f9f9;
			font-family: Arial, sans-serif;
			color: #333;
			margin: 0;
			padding: 0;
		}
		header {
			background-color: #555;
			color: #fff;
			padding: 20px;
			text-align: center;
			font-size: 36px;
			font-weight: bold;
		}

		.book {
		
			align: center;
			margin: 20px;
			padding: 10px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			transition: transform 0.2s;
			cursor: pointer;
			width: 300px;
			max-width: 80%;
			text-align: center;
		}
		.book:hover {
			transform: translateY(-5px);
		}
		.book img {
			max-width: 100%;
			min-height:200px;
		}

		.book p {
			font-size: 16px;
			margin: 10px 0;
		}



.hero {
    position: relative; 
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.hero::before {    
      content: "";
      background-image: url('giphy.gif');
      background-size: cover;
      position: absolute;
      top: 0px;
      right: 0px;
      bottom: 0px;
      left: 0px;
      opacity: 0.75;
}
.mtm
{
margin-top:-10%;
}
	</style>
</head>
<body>
	<header>Technology Enhanced Mulsemedia Learning</header>
	<div class="hero container-fluid">
		<div class="row text-center mtm">

		<div class="col-md-6" onclick="location.href='pre.php?id=rose';">
		<div class="book">
			<img src="biology.jpg" alt="Biology">
			<br /><br />
			<h5>Biology</h5>
			<button class="mt-2 btn btn-secondary">Click to open</button>
		</div>
		</div>


		<div class="col-md-6" onclick="location.href='pre.php?id=thunder';">
		<div class="book">
			<img src="physics.jpg" alt="Physics">
			<br /><br />
			<h5>Physics</h5>
			<button class="mt-2 btn btn-secondary">Click to open</button>
		</div>
		</div>	

	

		</div>

	</div>

</body>
</html>


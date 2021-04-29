<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Panther Air </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>

<body class = "col-sm-8 col-sm-offset-2" style = "background-color: #0039A6";>
<div class = "jumbotron jumbotron-fluid text-white text-center" style = "background-color: #0039A6">
	<div class = "container"> 
    <h1 class = "display-3"> Panther Air </h1>

<?php
	include "navbar1.php";
?>
	</div>

<div class = "page-header">
</div>

<div class = "" style = "background: #0039A6">
<div class = "col" style = "">

<br>
        
<nav class = "nav justify-content-center nav-pills nav-fill flex-column flex-sm-row ">
	<a class = "flex-lg-fill text-lg-center nav-link active" href = "inventory.php" > Inventory </a>
	<a class = "flex-lg-fill text-lg-center nav-link active" href = "viewcart.php"> View Cart </a>
	<a class = "flex-lg-fill text-lg-center nav-link active" href = "profile.php"> My Profile </a>
</nav>
</div>
</div>

<br>

<div class = "container">
<div class = "row justify-content-center">
<div class = "col-md-6 col-lg-3 ">
<div class = "card">
<img src = "agent.jpg" class = "card-im-top img-fluid" style = "background-color: #0039A6"/>
<div class = "card-block" style = "background-color: #0039A6">
<h3 class = "card-title"> Travel Agent </h3>
<p> Life is stressful. Planning your vacation shouldn’t be. Let one of our travel agents help you out! </p>
</div>
</div>
</div>
          
<div class = "col-md-6 col-lg-3">
<div class = "card">
<img src = "beach.jpeg" class = "card-im-top img-fluid"/>
<div class = "card-block" style = "background-color: #0039A6">
<h3 class = "card-title"> Travel </h3>
<p> Every traveler is unique, your vacation should be too. Book now with Panther Air for a unique vacation! </p>
</div>
</div>
</div>
          
<div class = "col-md-6 col-lg-3">
<div class = "card">
<img src = "parking.jpg" class = "card-im-top img-fluid"/>
<div class = "card-block" style = "background-color: #0039A6">
<h3 class = "card-title"> Parking </h3>
<p> Airport parking doesn’t have to be a tedious task. Let us take the hassle out of your parking experience! </p>
</div>
</div>
</div>
</div>
</div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
   
</body>

<?php
	include "footer.php";
?>
</body>
</html>

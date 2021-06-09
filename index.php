<!DOCTYPE html>
<html>

<head>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyelam</title>
	
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #4287f5;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #b8cff5;
  padding: 20px;
  height: 1000px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 1000px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>

<body>
<header>
  <h2>Penyelam Handal</h2>
</header>
    <section>
  <nav>            
                 <form  method="GET" action="#">
				 <center>
				 <div class="login100-pic js-tilt" data-tilt>
                        <img src="images/img-07.png" alt="IMG" height="70%" width="70%">
                    </div>
					</center>
                        <span class="login100-form-title"><br>
                            Selam Disini
                        </span>
                        <div class="wrap-input100 validate-input" data-validate="ID Is Required">
                            <input class="input100" type="text" name="id" placeholder="ID 1-10">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>
						<input class="login100-form-btn" type="submit" name="Submit" value="Submit">
                 </form>
				 <hr>
				 
				 <p> Kata Dorry Temannya Nemo</p><br>
				 <h6> Terus Menyelam</h6>
				 <h5> Terus Menyelam</h5>
				 <h4> Terus Menyelam</h4>
				 <h3> Terus Menyelam</h3>
				 <h2> Terus Menyelam</h2>
				 <h1> Terus Menyelam</h1>
             </nav>
		


	<article>
	<h3> Outputnya Disini : </h3>
	<br>

<?php
require('db.php');
if( isset( $_REQUEST[ 'Submit' ] ) ) {
   //
    $id = $_REQUEST[ 'id' ];

    // Check database
    $query    = "SELECT * FROM `kunci` WHERE id='$id' ";
    $result = mysqli_query($con, $query) or die($mysqli);

    // Get results
    while( $row = mysqli_fetch_assoc( $result ) ) {
        // Get values
        $id = $row["id"];
        $text  = $row["teks"];

        // Feedback for end user
        echo "<h4>ID: {$id}<br />Pesan: {$text} </h4>";
    }
}

?>
	
  </article>
</section>


     

</body>
<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
</html>
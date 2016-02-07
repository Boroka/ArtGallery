<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- MATERIALIZE -->
  <link rel="stylesheet" type="text/css" href="../css/materialize-css/materialize.min.css">
  <script type="text/javascript" href="./js/materialize-js/materialize.min.js"></script>
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap-css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>  
  <!-- FAVICON -->
  <link rel="icon" href="../img/favicon.ico" type="image/x-icon"/>
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon"/>
  <!-- MY STYLE -->
  <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
      	<img src="../img/tool.png">
      </a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="../index.php">Home</a></li>
      <li><a href="../index.php#gallery">Gallery</a></li>
      <li><a href="../index.php#about-artist">About</a></li>
      <li><a href="../index.php#contact">Contact</a></li>
      <li><a href="#">Guest Book</a></li>
    </ul>
  </div>
</nav>

<section class="guestbook-content">
	<?php
		include("db.php");
		//sql
		$sql = "SELECT * FROM entries ORDER BY id DESC";
		$stmt = $db -> query($sql);
		$stmt -> execute();
		$stmt -> setFetchMode(PDO::FETCH_ASSOC);
			if ($stmt -> rowCount() > 0)
			{
				while ($row = $stmt -> fetch())
				{
					//echo "<b>Name: </b>".$row['name']; 
					echo 
					"
						Posted by <b>".$row['name']."</b><br>
						(".$row['email'].")<br>
						<br>	
						<p>".$row['message']."</p>
						<br>
						<span class='entry-date'>".$row['date']."</span>
						<hr>
					";
				}
			}
		
	?>
</section>

<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <div class="col-sm-3">
                  <a href="https://www.facebook.com/"><img src="../img/social media/facebook-icon.png"></a>   
                </div>
                <div class="col-sm-3">
                  <a href="https://www.linkedin.com/"><img src="../img/social media/linkedin-icon.png"></a> 
                </div>
                <div class="col-sm-3">
                  <a href="https://twitter.com/"><img src="../img/social media/twitter-icon.png"></a>   
                </div>                       
                <div class="col-sm-3">
                  <a href="https://plus.google.com/"><img src="../img/social media/google-icon.png"></a> 
                </div> 
              </div>  
            </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
</footer>




</body>
</html>



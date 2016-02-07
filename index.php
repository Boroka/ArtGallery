<!DOCTYPE html>
<html lang="en">
<head>
  <title>Art Gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script href="js/jquery/jquery-1.12.0.min.js"></script>
  <!-- MATERIALIZE -->
  <link rel="stylesheet" type="text/css" href="css/materialize-css/materialize.min.css">
  <script type="text/javascript" href="js/materialize-js/materialize.min.js"></script>
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap-css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
  
  <!-- CUSTOM JS FILES -->
  <script src="js/slideshow.js"></script>
  <script src="js/addentry.js"></script>
  <!-- FAVICON -->
  <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
  <!-- MY STYLE -->
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
      	<img src="img/tool.png">
      </a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="#gallery">Gallery</a></li>
      <li><a href="#about-artist">About</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="php/guestbook.php">Guest Book</a></li>
    </ul>
  </div>
</nav>

<!-- BRUSHES IMG -->
<div id="brushes">
	<img src="img/brushes1.jpg">
</div>

<div id="quote">
	<h1>"Art is the most intense mode of individualism that the world has known."</h1>
	<h6> - Oscar Wilde</h6>
</div>

<hr>
<!-- THUMBNAILS -->
<div class="row">
  <div class="col-sm-4">
    <figure  class="figcaption-style">  
      <img class="img-thumbnail" src="img/gallery/gallery-item8.jpg" alt="Gallery Item 8">
      <figcaption>
        <p>Gallery Item No.8</p>
        <hr>
        <h3>Lorem Ipsum</h3>
      </figcaption>
    </figure>  
  </div>  
  <div class="col-sm-4">   
    <figure class="figcaption-style">
      <img class="img-thumbnail" src="img/gallery/gallery-item9.jpg" alt="Gallery Item 9">
      <figcaption>
        <p>Gallery Item No.9</p>
        <hr>
        <h3>Lorem Ipsum</h3>
      </figcaption>
    </figure>  
  </div> 
  <div class="col-sm-4">
    <figure  class="figcaption-style">
      <img class="img-thumbnail" src="img/gallery/gallery-item10.jpg" alt="Gallery Item 10">
      <figcaption>
        <p>Gallery Item No.10</p>
        <hr>
        <h3>Lorem Ipsum</h3>
      </figcaption>
    </figure>  
  </div> 
</div>

<hr>

<h2 id="gallery">Gallery</h2>

<!-- GALLERY -->
<div id="myCarousel" class="carousel slide">
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item">
        <img src="img/gallery/gallery-item-small1.jpg" />
    </div>
    <div class="item">
        <img src="img/gallery/gallery-item-small2.jpg" />
    </div>
    <div class="item">
        <img src="img/gallery/gallery-item-small3.jpg" />
    </div>
    <div class="item">
        <img src="img/gallery/gallery-item-small4.jpg" />
    </div>
    <div class="item">
        <img src="img/gallery/gallery-item-small5.jpg" />
    </div>
    <div class="item">
        <img src="img/gallery/gallery-item-small6.jpg" />
    </div>
    <div class="item">
        <img src="img/gallery/gallery-item-small7.jpg" />
    </div>
    <div class="item">
        <img src="img/gallery/gallery-item-small8.jpg" />
    </div>
    <div class="item">
        <img src="img/gallery/gallery-item-small9.jpg" />
    </div>
    <div class="item">
        <img src="img/gallery/gallery-item-small10.jpg" />
    </div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

<!-- ABOUT THE ARTIST -->
<div id="about-artist">
	<h3>About the artist:</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
</div>

<div>
	<img class="artist-photo" src="img/artist1.jpg">
</div>

<!-- CONTACT -->
<div class="row" id="contact">  
  <div class="col-sm-6" id="contact-data">
    <h2>Contact</h2>       
    <hr>
    <h4>John Johnson</h4> 
    <br>
    <h5>Phone no: </h5>
    <p>+1-202-555-0146</p>
    <h5>Gallery Address:</h5>
    <p>9841 Circle Drive</p> 	
    <p>Manchester, NH 03102</p>
  </div>
  <div class="col-sm-6">
    <form>
      <div class="form-group">
        <input type="name" class="form-control" id="name" name="name" placeholder="Name">
      </div>

      <div class="form-group">
        <input type="name" class="form-control" id="email" name="email" placeholder="Email address">
      </div>

      <div class="form-group">
        <textarea class="form-control" rows="10" cols="30" id="message" name="message" placeholder="Type your message here... "></textarea>
      </div>      
    </form>
    <button id="submit" class="btn btn-default">Submit</button>
    <a id="entries" class="btn btn-default" href="php/guestbook.php">Show entries</a>
  </div>
 </div> 

<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Lorem ipsum</h5>
                <p class="grey-text text-lighten-4">Morbi finibus nunc enim, sed mattis neque mattis sit amet.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <div class="col-sm-3">
                  <a href="https://www.facebook.com/" target="_blank"><img src="img/social media/facebook-icon.png"></a>   
                </div>
                <div class="col-sm-3">
                  <a href="https://www.linkedin.com/" target="_blank"><img src="img/social media/linkedin-icon.png"></a> 
                </div>
                <div class="col-sm-3">
                  <a href="https://twitter.com/" target="_blank"><img src="img/social media/twitter-icon.png"></a>   
                </div>                       
                <div class="col-sm-3">
                  <a href="https://plus.google.com/" target="_blank"><img src="img/social media/google-icon.png"></a> 
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
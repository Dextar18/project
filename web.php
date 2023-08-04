<html lang="en">
<head>
  <title>welcome to meerakh doorlock</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #abc;
  }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-warning text-black navbar-dark">
  <div class="container-fluid">
  <ul class="text-black">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/files/paiges/smart%20product.php">Smart Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/files/paiges/Dijitalpage.php">Dijital Safe</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/files/paiges/mechanicalproduct.php">Machanical Product</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="http://localhost/files/paiges/ElectromechanicalProducts.php">Electromechanical Product</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="http://localhost/files/paiges/offers.php">Offers</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="http://localhost/files/paiges/ContactUs.php">Contact Us</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">news</a>
      </li>
      <div class="header">
        <a href="../login/LOGIN.php">
          <img src="http://localhost/files/photos/login.png" alt="" srcset="" style="position: relative; left: 486px; height: 41px; width: auto; ">
      </a>
      </div>
      <div class="header">
        <a href="../login/LOGIN.php">
          <img src="http://localhost/files/photos/download-removebg-preview.png" alt="" srcset="" style="position: relative; left: 391px; height: 37px; width: 35px; ">
      </a>
      </div>
      <div class="header">
        <a href="../login/LOGIN.php">
          <img src="http://localhost/files/photos/download__1___1_-removebg-preview.png" alt="" srcset="" style="position: relative; left: 300px; height: 45px; width: auto; ">
      </a>
      </div>
      <div class="header">
        <a href="../tall free/countus.php">
          <img src="http://localhost/files/photos/download__2_-removebg-preview.png" alt="" srcset="" style="position: relative; 
          left: 200px; height: 45px; width: auto; ">
      </a>
      </div>
     
    </div>
    </ul>
  </div>
</nav>
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 10000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 30s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="http://localhost/files/photos/Yale_Online_Banner_new.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="http://localhost/files/photos/Rim_Lock_copy.jpg"style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="http://localhost/files/photos/main_banner_76a30da6-8de5-40db-b8b2-f83c38e798b4.webp"style="width: 100%">
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) 
{
  showSlides(slideIndex += n);
}

function currentSlide(n) 
{
  showSlides(slideIndex = n);
}

function showSlides(n) 
{
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) 
  {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) 
  {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<style>
{
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 20%;
  text-align center;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 10;
  top: 0;
  width: 80%;
  height: 80%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 10px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img 
{
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
main-col-list {
    display: flex;
    justify-content: space-evenly;
    position: relative;
    align-items: center;
    background: #FFF;
    margin-top: -100px;
    z-index: 1;
}
</style>


<h2 style="text-align:center">Our Products</h2>

<div class="row">
  <div class="column">
    <img src="http://localhost/files/photos/1.jpg"  style="width:80%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
	<h2>Smart Product</h2>
  </div>
  <div class="column">
    <img src="C:\Users\Lenovo\Downloads\Image_95.avif" style="width:80%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
	<h2>Dijital Safe</h2>
  </div>
  <div class="column">
    <img src="C:\Users\Lenovo\Downloads\Image_96.avif" style="width:80%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
	<h2>Door Lock</h2>
  </div>
  <div class="column">
    <img src="C:\Users\Lenovo\Downloads\doorcheck.webp" style="width:80%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
	<h2>Door Closer</h2>
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="C:\xampp\htdocs\files\photos\1.jpg"  style="width:80%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="C:\Users\Lenovo\Downloads\Image_95.avif" style="width:80%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="C:\Users\Lenovo\Downloads\Image_96.avif" style="width:80%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="C:\Users\Lenovo\Downloads\doorcheck.webp" style="width:80%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src=<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="C:\xampp\htdocs\files\photos\1.jpg"  style="width:80%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="C:\Users\Lenovo\Downloads\Image_95.avif" style="width:80%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="C:\Users\Lenovo\Downloads\Image_96.avif" style="width:80%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="C:\Users\Lenovo\Downloads\doorcheck.webp" style="width:80%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="C:\xampp\htdocs\files\photos\1.jpg"  style="width:80%" onclick="currentSlide(1)">
    </div>
    <div class="column">
      <img class="demo cursor" src="C:\Users\Lenovo\Downloads\Image_95.avif" style="width:80%" onclick="currentSlide(2)" alt="Snow">
    </div>
    <div class="column">
      <img class="demo cursor" src="C:\Users\Lenovo\Downloads\Image_96.avif" style="width:80%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="C:\Users\Lenovo\Downloads\doorcheck.webp" style="width:80%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
  </div>
</div> style="width:80%" onclick="currentSlide(1)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="1.jpg" style="width:80%" onclick="currentSlide(2)" alt="Snow">
    </div>
    <div class="column">
      <img class="demo cursor" src="C:\Users\Lenovo\Downloads\Image_96.avif" style="width:80%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="C:\Users\Lenovo\Downloads\doorcheck.webp" style="width:80%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
  </div>
</div>

</body>
</html>


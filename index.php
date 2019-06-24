<!DOCTYPE html>
<!-- saved from url=(0078)https://www.w3schools.com/w3css/tryw3css_templates_interior_design.htm#contact -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title></title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="image/w3.css">
<link rel="stylesheet" href="image/css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
</head><body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index: 3; width: 300px; font-weight: bold; display: none;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>ATN<br>ToyStore</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="viewdata.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Database View</a> 
    <a href="insertdata.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Database Insert</a> 
    <a href="updatedata.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Database Update</a> 
    <a href="deletedata.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Database Delete</a> 
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>ATN toyStore</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor: pointer; display: none;" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>ATN toySTORE</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Showcase</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="image/toy1.jpg" style="width:100%" onclick="onClick(this)" alt="Concrete meets bricks">
      <img src="image/toy3.jpg" style="width:100%" onclick="onClick(this)" alt="Light, white and tight scandinavian design">
      
    </div>

    <div class="w3-half">
      <img src="image/toy2.jpg" style="width:100%" onclick="onClick(this)" alt="Windows for the atrium">
      <img src="image/toy4.jpg" style="width:100%" onclick="onClick(this)" alt="Bedroom and office in one space">
      
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display=&#39;none&#39;">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Services</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Update soon!</p>
    <p>
    </p>
  </div>
  
  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Designers</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Update soon!</p>
    <p>
    </p>
    <p><b>Our designers</b>:</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="image/team0.jpg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>Mr. Châu</h3>
          <p class="w3-opacity">CEO &amp; Founder</p>
          <p>Interface's designer</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="image/team0.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Mr. Khánh</h3>
          <p class="w3-opacity">Designer</p>
          <p>Database's creator</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="image/team0.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Mr. Sad</h3>
          <p class="w3-opacity">No role</p>
          <p>Always sad and don't have any role </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Packages / Pricing Tables -->
  <div class="w3-container" id="packages" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Packages.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Update soon!</p>
  </div>
<!--
  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16">Floorplanning</li>
        <li class="w3-padding-16">10 hours support</li>
        <li class="w3-padding-16">Photography</li>
        <li class="w3-padding-16">20% furniture discount</li>
        <li class="w3-padding-16">Good deals</li>
        <li class="w3-padding-16">
          <h2>$ 199</h2>
          <span class="w3-opacity">per room</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
        </li>
      </ul>
    </div>
        
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-red w3-xlarge w3-padding-32">Pro</li>
        <li class="w3-padding-16">Floorplanning</li>
        <li class="w3-padding-16">50 hours support</li>
        <li class="w3-padding-16">Photography</li>
        <li class="w3-padding-16">50% furniture discount</li>
        <li class="w3-padding-16">GREAT deals</li>
        <li class="w3-padding-16">
          <h2>$ 249</h2>
          <span class="w3-opacity">per room</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-red w3-padding-large w3-hover-black">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>
-->  
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Fill out the form and fill me in with the details!</p>
    <form action="#">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required="">
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required="">
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required="">
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>  
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Create by <a href="#" title="Toàn đẹp trai" target="_blank" class="w3-hover-opacity">Toàn</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>


</body></html>
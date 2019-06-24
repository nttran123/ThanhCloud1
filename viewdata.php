<!DOCTYPE html>
<!-- saved from url=(0060)https://www.w3schools.com/w3css/tryw3css_templates_photo.htm -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>View Data</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="image/w3.css">
<link rel="stylesheet" href="image/css">
<link rel="stylesheet" href="image/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1 {font-family: "Montserrat", sans-serif}
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}

</style>
</head><body>

<!-- Sidebar -->
<nav class="w3-sidebar w3-black w3-animate-top w3-xxlarge" style="display:none;padding-top:150px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-black w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
    <a href="index.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Home</a>
    <a href="insertdata.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Insert Data</a>
    <a href="updatedata.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Update Data</a>
    <a href="deletedata.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Delete Data</a>
  </div>
</nav>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<div class="w3-opacity">
<span class="w3-button w3-xxlarge w3-white w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></span> 
<div class="w3-clear"></div>
<header class="w3-center w3-margin-bottom">
  <h1><b>View Data</b></h1>
  <br>
  <br>
  <hr style="width:1490px;border:5px solid black" class="w3-round">
</header>
</div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:200px;margin-right:200px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>ATN Toystore</b></h1>  
    <h1 class="w3-xxxlarge w3-text-black"><b>View Database</b></h1>
    <hr style="width:50px">
  </div>
  


  <?php
    if (empty(getenv("DATABASE_URL"))){
      $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb', 'postgres', '123456');
    }  
    else{
      echo getenv("dbname");
      $db = parse_url(getenv("DATABASE_URL"));
      $pdo = new PDO("pgsql:" . sprintf(
        "host=ec2-54-83-9-36.compute-1.amazonaws.com;port=5432;user=bonvtjijpvzvew;password=ef9c86916d20d77ea762ada38a32c6716ea083d1b4e6cbb1e6e237fe57c053fd
        ;dbname=d6klb5to6ute49",
      $db["host"],
      $db["port"],
      $db["user"],
      $db["pass"],
      ltrim($db["path"], "/")
      ));
    }  

    $sql = "SELECT * FROM thanhcloud ORDER BY storeid";
    $stmt = $pdo->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $resultSet = $stmt->fetchAll();
    ?>

  <div class="w3-responsive w3-container">
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable" border="1">
      <thead>
        <tr>
          <th>Store ID</th>
          <th>Accountant</th>
          <th>Revenue</th>
          <th>Last Time Check</th>
        </tr>
      </thead>
      <tbody>

        <?php
        foreach ($resultSet as $row) {
        ?>

        <tr>
          <td scope="row"><?php echo $row['storeid'] ?></td>
          <td><?php echo $row['accountant'] ?></td>
          <td><?php echo $row['revenue'] ?></td>
          <td><?php echo $row['timecheck'] ?></td>
        </tr>

        <?php
        }
        ?>

      </tbody>
    </table>
  </div>
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:128px"> 
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="https://www.facebook.com/profile.php?id=100007840690337" target="_blank" class="w3-hover-text-green">Thanh Tran</a></p>
</footer>
 
<script>
// Toggle grid padding
function myFunction() {
  var x = document.getElementById("myGrid");
  if (x.className === "w3-row") {
    x.className = "w3-row-padding";
  } else { 
    x.className = x.className.replace("w3-row-padding", "w3-row");
  }
}

// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.width = "100%";
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>


</body></html>
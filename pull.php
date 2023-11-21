<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `pull` ";
$result = $conn->query($sql);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Shop</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <!-- bootstrap links -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- bootstrap links -->
        <!-- fonts links -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
        <!-- fonts links -->
    </head>
    <body>
    <!-- navbar -->
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.html" id="logo"><span id="span1">E</span>- <span>Shop</span></a>           
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Produit</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #F7F1F0;">
                      <li><a class="dropdown-item" href="pantalon.php">Pantalons</a></li>
                      <li><a class="dropdown-item" href="chaussure.php">Chaussures</a></li>
                      <li><a class="dropdown-item" href="manteaux.php">Manteaux</a></li>
                      <li><a class="dropdown-item" href="pull.php">Pull</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>
                </ul>
                <form class="d-flex" id="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>

    <div class="container" id="product-cards">
      <h1 class="text-center">Pull</h1>
      <div class="row" style="margin-top: 30px;">
      <?php 
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) { ?>
               <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="<?php echo $row["image"] ?>" alt="">
            <div class="card-body">
              <h3 class="text-center"><?php echo $row["titre"] ?></h3>
              <p class="text-center"><?php echo $row["description"] ?></p>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2><?php echo $row["prix"] ?> DT <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
    <?php    }
      } else {
        echo "0 results";
      }
      $conn->close();
      ?>    
      </div>
    </div>           
        <div class="container" id="contact">
            <div class="row" style="margin-top: 50px;">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fas fa-phone"> Phone</i>
                        <h6>+216 55243290</h6>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fas fa-envelope"> Email</i>
                        <h6>E-shop@gmail.com</h6>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fas fa-location-dot"> Address</i>
                        <h6>Monastir , tunisie</h6>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-4 py-3 py-md-0">
                    <input type="text" class="form-control form-control" placeholder="Name">
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <input type="text" class="form-control form-control" placeholder="Email">
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <input type="text" class="form-control form-control" placeholder="Phone">
                </div>
                <div class="form-group" style="margin-top: 30px;">
                    <textarea class="form-control" id="" rows="5" placeholder="Message"></textarea>
                </div>
                <div class="messagebtn text-center"><button>Message</button></div>
            </div>
        </div>
 
        <div class="container" id="newslater">
          <h3 class="text-center">Subscribe To The E-Shop For Latest upload.</h3>
          <div class="input text-center">
            <input type="text" placeholder="Enter Your Email..">
            <button id="subscribe">SUBSCRIBE</button>
          </div>
        </div>

        <footer id="footer">
          <div class="footer-top">
            <div class="container">
              <div class="row">
    
                <div class="col-lg-3 col-md-6 footer-contact">
                  <h3>E-shop</h3>
                 <strong>Phone:</strong> +216 55243290 <br>
                  <strong>Email:</strong> e-shop@.com <br>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Produit</h4>
                 <ul>
                  <li><a href="#">Promotion</a></li>
                  <li><a href="#">Nouveaux produits</a></li>
                  <li><a href="#">Meilleurs ventes</a></li>
                 </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Our Social Networks</h4> 
                  <div class="socail-links mt-3">
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-skype"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
    </body>
    </html>
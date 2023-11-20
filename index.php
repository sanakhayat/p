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

$sql = "SELECT * FROM `produit`";
$result = $conn->query($sql);

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
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
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="./images/na.jpg" alt="" width="30px"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Acceuil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Catégorie</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#C3A6A0">
                  <li><a class="dropdown-item" href="#">Femmes</a></li>
                  <li><a class="dropdown-item" href="#">Hommes</a></li>           
                </ul>
              </li>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Produit</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#C3A6A0">
                  <li><a class="dropdown-item" href="pantalon.php">Pantalons</a></li>
                  <li><a class="dropdown-item" href="chaussure">Chaussures</a></li>
                  <li><a class="dropdown-item" href="manteaux.html">Mantaux</a></li>
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
    <!-- navbar -->
    <!-- home content -->
    <section class="home">
    <div class="content">
      <h1> <span>La Nouvelle Collection</span>
        <br>
       <span id="span2">Autonome & Hiver</span>  
<br>
    </div>
    <div class="img">
      <img src="./images/na.jpg" alt="">
    </div>
  </section>
    <!-- home content -->
        <!-- product cards -->
    <div class="container" id="product-cards">
      <h1 class="text-center">Manteau</h1>
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
    <!-- product cards -->
 <!-- other cards -->
    <div class="container" id="other-cards">
      <div class="row">
        <div class="col-md-6 py-3 py-md-0">
          <div class="card">
            <img src="./images/n8.jpg" alt="">
            <div class="card-img-overlay">
              <h3>Nouvelle collection</h3>
              <h5></h5>
              <p>- 30% </p>
              <button id="shopnow">Achetez maintenant</button>
            </div>
          </div>
        </div>
        <div class="col-md-6 py-3 py-md-0">
          <div class="card">
            <img src="./images/n5.jpg" alt="">
            <div class="card-img-overlay">
              <h3></h3>
              <h5>Ancienne Collection</h5>
              <p>- 50% </p>
              <button id="shopnow">Achetez maintenant</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- other cards -->
     <!-- banner -->
    <section class="banner">
      <div class="content">
        <h1> <span>-20%</span>
          <br>
         <span id="span2">sur </span> la nouvelle collection
        </h1>
      </div>
      <div class="img">
        <img src="./images/n3.jpg" alt="">
      </div>
    </section>
    <!-- banner -->
  <!-- product cards -->
<div class="container" id="product-cards">
    <h1 class="text-center">Pull</h1>
    <div class="row" style="margin-top: 30px;">
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./images/j1.jpg" alt="">
          <div class="card-body">
            <h3 class="text-center"></h3>
            <p class="text-center"></p>
            <div class="star text-center">
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
            </div>
            <h2>1000 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./images/j2.jpg" alt="">
          <div class="card-body">
            <h3 class="text-center"></h3>
            <p class="text-center"></p>
            <div class="star text-center">
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
            </div>
            <h2>100 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./images/j3.jpg" alt="">
          <div class="card-body">
            <h3 class="text-center"></h3>
            <p class="text-center"></p>
            <div class="star text-center">
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
            </div>
            <h2>200 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./images/j4.jpg" alt="">
          <div class="card-body">
            <h3 class="text-center"></h3>
            <p class="text-center"></p>
            <div class="star text-center">
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
            </div>
            <h2>300 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="margin-top: 30px;">
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./images/j5.jpg" alt="">
          <div class="card-body">
            <h3 class="text-center"></h3>
            <p class="text-center"></p>
            <div class="star text-center">
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
            </div>
            <h2>50.60 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./images/j6.jpg" alt="">
          <div class="card-body">
            <h3 class="text-center"></h3>
            <p class="text-center"></p>
            <div class="star text-center">
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
            </div>
            <h2>600 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./images/j7.jpg" alt="">
          <div class="card-body">
            <h3 class="text-center"></h3>
            <p class="text-center"></p>
            <div class="star text-center">
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
            </div>
            <h2>500 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./images/j8.jpg" alt="">
          <div class="card-body">
            <h3 class="text-center"></h3>
            <p class="text-center"></p>
            <div class="star text-center">
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
            </div>
            <h2>60 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- product cards -->
    <div class="container" id="product-cards">
      <h1 class="text-center">Chaussures</h1>
      <div class="row" style="margin-top: 30px;">
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/b1.jpg" alt="">
            <div class="card-body">
              <h3 class="text-center"></h3>
              <p class="text-center"></p>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2>1000 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/b2.jpg" alt="">
            <div class="card-body">
              <h3 class="text-center"></h3>
              <p class="text-center"></p>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2>100 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/b3.jpg" alt="">
            <div class="card-body">
              <h3 class="text-center"></h3>
              <p class="text-center"></p>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2>200 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/b4.jpg" alt="">
            <div class="card-body">
              <h3 class="text-center"></h3>
              <p class="text-center"></p>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2>300 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin-top: 30px;">
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/b5.jpg" alt="">
            <div class="card-body">
              <h3 class="text-center"></h3>
              <p class="text-center"></p>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2>50.60 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/b6.jpg" alt="">
            <div class="card-body">
              <h3 class="text-center"></h3>
              <p class="text-center"></p>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2>600 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/b7.jpg" alt="">
            <div class="card-body">
              <h3 class="text-center"></h3>
              <p class="text-center"></p>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2>500 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/b8.jpg" alt="">
            <div class="card-body">
              <h3 class="text-center"></h3>
              <p class="text-center"></p>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2>60 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- offer -->
    <div class="container" id="offer">
      <div class="row">
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-cart-shopping"></i>
          <h3>Livraison gratuite</h3>
          <p>commande supérieure à 200 DT</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-rotate-left"></i>
          <h3>Paiemenr sécurisé</h3>
          <p>E-shop vous offre plusieurs méthodes de paiement</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-truck"></i>
          <h3>Livraison Rapide</h3>
          <p>E-shop vous offre la livraison sur tout le territoire tunisien</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-thumbs-up"></i>
          <h3>Enorme choix</h3>
          <p>E-shop vous offre plusieurs modeles</p>
        </div>
      </div>
    </div>
    <!-- offer -->
 <!-- newslater -->
    <div class="container" id="newslater">
      <h3 class="text-center">Abonnez-vous à notre boutique E-shop</h3>
      <div class="input text-center">
        <input type="text" placeholder="Enter Your Email..">
        <button id="subscribe"> S'ABONNER</button>
      </div>
    </div>
    <!-- newslater -->
 <!-- footer -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>E-Shop</h3>          
              <strong>Phone:</strong>+216 55243290 <br>
              <strong>Email:</strong> E-shop@.com <br>
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
              <h4>Nos réseaux sociaux</h4>
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
      </div>
    </footer>
    <!-- footer -->
 <a href="#" class="arrow"><i><img src="./images/arrow.png" alt=""></i></a>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
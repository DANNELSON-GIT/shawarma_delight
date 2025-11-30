<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shawarma Delight</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  
  
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .navbar {
      height:auto;
      position:absolute;
      
  
    }
    .navbar-brand {
      color: #e27b3aff !important;
      font-weight: 700;
    }
    
    .hero {
      background: url('images/shawarma-on-transparent-background-1.png') center/cover no-repeat;
      height:800px;
      color: white;
      text-align: center;
      padding: 160px 0;
      position: relative;
    }
    .hero::before {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.6);
    }
    .hero h1, .hero p, .hero a {
      position: relative;
      z-index: 1;
    }
    .menu-card img {
      height: 220px;
      object-fit: cover;
      border-radius: 10px;
    }
    .men{
      transition: 0.3s ease;
    }
    .men:hover{
     transform: translateY(-8px);
    }
    footer {
      background: black;
      color: #ccc;
      padding: 40px 0;
    }
    footer a {
      color: #0f0cc9ff;
      text-decoration: none;
    }
    .nav-link{
        color:black;
    }
    .nav-link:hover{
    
        color: #e27b3aff;
        text-decoration:none;
   
        
    }
    .warning{
        color: #e27b3aff;
        border:none;
    }
    .warning1{
        background-color: #e27b3aff;
        border:none;
    }
    .warning0{
        width:100%;
        background-color: #e27b3aff;
        border:none;
    }
    .bot{
        border:none;
        background-color: #e27b3aff;
    }
    .bot:hover{
        border:none;
        background-color: #413704ff;
    }
    .foot{
        width:100%;
        height:70px;
        position:absolute;
    }
    .none{
        text-decoration:none;
    }
    .present{
        
        font-size:40px;
        
    }
    .present1{
        
        font-size:70px;
        
    }
    .mt{
        margin-top:180px;
    }
    
    .abs{
      width: 100%;
      height:400px;
      background:url("images/lambshawarma.jpeg");
      background-size:cover;
      position:relative;
    }
    .abs1{
      width:100%;
      height:400px;
      background-color:black;
      padding-top:60px;
      color:white;
      opacity: 0.8;
      position:absolute;
    }
    .bea{
      width:7%;
      height:30px;
    }
    a{
      text-decoration:none;
      
    }
    
  </style>
</head>
<body>
 
 <?php include("nav.php"); ?>

  <!-- About -->
  <section id="about" class="py-5 text-center">
    <div class="container">
      <h2 class="fw-bold mb-4">About Us</h2>
      <p class="text-muted">
        At <strong>Shawarma Delight</strong>, we bring you the authentic Middle Eastern shawarma experience — 
        juicy meats, fresh veggies, and our signature sauces that make every bite irresistible.
      </p>
    </div>
  </section>

  <!-- Menu -->
  <section id="menu" class="py-5 bg-light">
    <div class="container text-center">
      <h2 class="fw-bold mb-5">Our Menu</h2>
      <div class="row g-4">

        <div class="col-md-4 men">
          <div class="card menu-card shadow-sm">
            <a href="#">
                <img src="images/Easy-Homemade-Chicken-Shawarma39.jpg" class="card-img-top" alt="Chicken Shawarma">
            </a>
            <div class="card-body">
              <h5 class="card-title">Chicken Shawarma</h5>
              <p class="card-text text-muted">Tender chicken wrapped with veggies and sauce.</p>
              <p class="fw-bold warning">&#8358;5,000</p>
              <a href="#" class="btn btn-warning warning0 mt-3">Order Now</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 men">
          <div class="card menu-card shadow-sm">
            <a href="#">
                <img src="images/shawarma-600x600.jpg" class="card-img-top" alt="Beef Shawarma">
            </a>
            <div class="card-body">
              <h5 class="card-title">Beef Shawarma</h5>
              <p class="card-text text-muted">Marinated beef with creamy garlic sauce.</p>
              <p class="fw-bold warning">&#8358;5,000</p>
              <a href="#" class="btn btn-warning warning0 mt-3">Order Now</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 men">
          <div class="card menu-card shadow-sm">
            <a href="#">
                <img src="images/Chicken-shawarma-19.jpg" class="card-img-top" alt="Shawarma Plate">
            </a>
            <div class="card-body">
              <h5 class="card-title">Shawarma Plate</h5>
              <p class="card-text text-muted">Full plate served with rice.</p>
              <p class="fw-bold warning">&#8358;7,000</p>
              <a href="#" class="btn btn-warning warning0 mt-3">Order Now</a>
            </div>
          </div>
        </div>

      </div>


      <div class="row g-4 mt-3">

        <div class="col-md-4 men">
          <div class="card menu-card shadow-sm">
            <a href="#">
                <img src="images/images.jpg" class="card-img-top" alt="pizza">
            </a>
            <div class="card-body">
              <h5 class="card-title">pizza</h5>
              <p class="card-text text-muted">Tenderly wrapped with veggies and sauce.</p>
              <p class="fw-bold warning">&#8358;10,000</p>
              <a href="#" class="btn btn-warning warning0 mt-3">Order Now</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 men">
          <div class="card menu-card shadow-sm">
            <a href="#">
                <img src="images/Farmfresh-Yoghurt-Strawberry-1ltr.jpg" width="100%" height="100" class=" border-bottom card-img-top" alt="yoghurt">
            </a>
            <div class="card-body">
              <h5 class="card-title">Farmfresh-yoghurt</h5>
              <p class="card-text text-muted">Chilled</p>
              <p class="fw-bold warning">&#8358;3,000</p>
              <a href="#" class="btn btn-warning warning0 mt-3">Order Now</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 men">
          <div class="card menu-card shadow-sm">
            <a href="#">
                <img src="images/08C8C8FD-930E-4C89-A332-63772CCBCD4D.webp" class="card-img-top" alt="Shawarma Plate">
            </a>
            <div class="card-body">
              <h5 class="card-title">Home-made Yoghurt</h5>
              <p class="card-text text-muted">Chilled</p>
              <p class="fw-bold warning">&#8358;3,000</p>
              <a href="#" class="btn btn-warning warning0 mt-3">Order Now</a>
            </div>
          </div>
        </div>

      </div>



    </div>
  </section>

  <div class="container mt-4">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <img src="images/chicken-shawarma-12-1024x1536.jpg" width="100%" height="750" alt="">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 text-center mt border-top">
                <b class="present">Present</b><br>
                <b class="present1">Beef & chicken</b><br>
                <b class="present1" style=color:red>shawarma</b><br>
                <b>OUR SIGNATURE HANDMADE shawarma</b><br>

                This is truly the best beef & chicken shawarma available! 
                The beef and chicken patties are healthy, 
                loaded with fresh herbs, and full of flavor 
                with the perfect blend of seasonings.


                <div><a href="#" class="btn btn-warning warning1 mt-5">Order Now</a></div>
                
        </div>
        
    </div>

    <div class="row">
        
        <div class="col-sm-12 col-md-6 col-lg-6 text-center mt border-top">
                <b class="present">Present</b><br>
                <b class="present1">Tasteful</b><br>
                <b class="present1" style=color:red>Pizza</b><br>
                <b>OUR SIGNATURE HANDMADE Pizza</b><br>

                This is truly the best Pizza available! 
                The ingredients for this pizza are healthy, 
                loaded with fresh herbs, and full of flavor 
                with the perfect blend of seasonings.


                <div><a href="#" class="btn btn-warning warning1 mt-5 mb-3">Order Now</a></div>
                
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6">
            <img src="images/tomato-mozzarella-pizza-FT-RECIPE0725-e7244e979c504188a049623668c15b2e.webp" width="100%" height="650" alt="">
        </div>
        
    </div>
  </div>

  <!-- Testimonials -->
  <section class=" mt-5 mb-3 py-5 text-center">
    <div class="container">
      <h2 class="fw-bold mb-4">What Our Customers Say</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="p-4 border rounded shadow-sm men">
            <p>"Best shawarma I’ve ever had! The sauce is out of this world!"</p>
            <h6 class="fw-bold warning">— Sarah K.</h6>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 border rounded shadow-sm men">
            <p>"Friendly staff and amazing food. Always coming back for more!"</p>
            <h6 class="fw-bold warning">— James D.</h6>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 border rounded shadow-sm men">
            <p>"Perfectly grilled shawarma with fresh ingredients every time."</p>
            <h6 class="fw-bold warning">— Aisha M.</h6>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  
      <?php include("footer.php"); ?>
      
   

  

  
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  
</head>
<style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .navbar {
      height:auto;
      position: absolute;
  
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
    .abt{
     width:100%;
     height:200px;
     text-align:center;
     padding-top:80px;
     
    }
    .brand{
        width:100%;
        height:60px;
        color: #e27b3aff;
        padding-left:30px;
        padding-top:15px;

}
.for{
    font-size:30px;
    color:white;
}
.small{
    font-size:10px;
    color:white;
     }

     .small:hover{
    font-size:10px;
    color: #e27b3aff;
     }
     .red{
        width:100%;
        height:200px;
        position:relative;
        background:url("images/lambshawarma.jpeg");
     }
     .red1{
        width: 100%;
        height:200px;
        position:absolute;
        background-color:black;
        opacity:0.8;

     }

</style>
<body>
    
            
        <div class="brand">
            <b>
                Shawarma_Delight
            </b>
        </div>
        
        
     <div class="red">
        <div class="red1">
              
            <div class="abt">
                <b class="for">
                    About us
                </b><br>
                <div>
                    <a class="small" href="home.php">
                        Home
                    </a>
                     <i class="fa fa-arrow"></i> 
                    <a class="small" href="about.php">
                        About
                    </a>
                </div>
            </div>
            
        
        </div>
     </div>
     
    
<!-- About Section -->
  <section class="container py-5">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4">
        <div class="about-img shadow">
          <img src="https://images.unsplash.com/photo-1571091718767-18b5b1457add?auto=format&fit=crop&w=1000&q=80" class="w-100" alt="Shawarma Image">
        </div>
      </div>

      <div class="col-md-6">
        <h2 class="fw-bold mb-3">Welcome to Shawarma Delight</h2>
        <p class="text-muted">
          Shawarma Delight was created with one mission —  
          <strong>to bring you the most delicious, freshly grilled shawarma in town.</strong>
          With our unique blend of spices, fresh vegetables, and creamy signature sauces,
          every bite becomes a memory you won’t forget.
        </p>

        <p class="text-muted">
          Whether you're dining in, taking out, or ordering for delivery, our team
          ensures your food is prepared with love, care, and the finest ingredients.
        </p>
        
        <div class="highlight-box mt-3">
          <h6 class="fw-bold mb-2"><i class="fa-solid fa-award text-warning me-2"></i>Our Promise</h6>
          <p class="mb-0">Fresh ingredients, fast service, unbeatable taste — every time.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Mission & Vision -->
  <section class="container py-4">
    <div class="row text-center">
      <div class="col-md-6 mb-4">
        <h3 class="fw-bold"><i class="fa-solid fa-bullseye text-warning me-2"></i>Our Mission</h3>
        <p class="text-muted">
          To serve high-quality, affordable shawarma that brings people joy and keeps them coming back.
        </p>
      </div>

      <div class="col-md-6 mb-4">
        <h3 class="fw-bold"><i class="fa-solid fa-lightbulb text-warning me-2"></i>Our Vision</h3>
        <p class="text-muted">
          To become the number one shawarma brand known for taste, consistency, and excellent customer service.
        </p>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="py-5 bg-light">
    <div class="container text-center">
      <h2 class="fw-bold mb-5">Meet Our Team</h2>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="p-3 border rounded shadow-sm bg-white">
           <div class="text-center">Chef</div>
            <h5 class="fw-bold">Ahmed Musa</h5>
            <p class="text-muted">Head Chef</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="p-3 border rounded shadow-sm bg-white">
            <div class="text-center">Manager</div>
            <h5 class="fw-bold">Sandra Obi</h5>
            <p class="text-muted">Store Manager</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="p-3 border rounded shadow-sm bg-white">
            <div class="text-center">Delivery</div>
            <h5 class="fw-bold">John Daniel</h5>
            <p class="text-muted">Delivery Specialist</p>
          </div>
        </div>
      </div>
    </div>
  </section>
    
    <?php include("footer.php"); ?> 
    
</body>
</html>
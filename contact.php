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
      /* Contact Boxes */
    .contact-box {
      background: #fff;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      transition: 0.3s ease;
    }

    .contact-box:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .contact-icon {
      font-size: 2.2rem;
      color: #e27b3aff;
      margin-bottom: 15px;
    }

    /* Contact Form */
    .form-control {
      border-radius: 10px;
      padding: 12px;
    }

    .btn-custom {
      background-color:#e27b3aff;
      border: none;
      padding: 12px 25px;
      border-radius: 10px;
      font-weight: 600;
      transition: 0.3s;
    }

    .btn-custom:hover {
      background-color: #e6b800;
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
                    Contact us
                </b><br>
                <div>
                    <a class="small" href="home.php">
                        Home
                    </a>
                     <i class="fa fa-arrow"></i> 
                    <a class="small" href="contact.php">
                        Contact Us
                    </a>
                </div>
            </div>
            
        
        </div>
     </div>
     
    <!-- Contact Info & Form -->
  <section class="container py-5">
    <div class="row g-4">

      <!-- Contact Info Boxes -->
      <div class="col-md-4">
        <div class="contact-box text-center">
          <i class="fa-solid fa-phone contact-icon"></i>
          <h5 class="fw-bold mb-2">Phone</h5>
          <p class="text-muted mb-1">+234 812 345 6789</p>
          <p class="text-muted">+234 902 111 3344</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-box text-center">
          <i class="fa-solid fa-location-dot contact-icon"></i>
          <h5 class="fw-bold mb-2">Address</h5>
          <p class="text-muted">123 Flavor Street,Independece layout, Enugu, Nigeria</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-box text-center">
          <i class="fa-solid fa-envelope contact-icon"></i>
          <h5 class="fw-bold mb-2">Email</h5>
          <p class="text-muted">info@shawarmadelight.com</p>
          <p class="text-muted">support@shawarmadelight.com</p>
        </div>
      </div>

    </div>

    <!-- Contact Form -->
    <div class="row mt-5">
      <div class="col-md-8 mx-auto">
        <div class="contact-box">
          <h3 class="fw-bold mb-3 text-center">Send Us a Message</h3>

          <form>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Your Name</label>
                <input type="text" class="form-control" placeholder="Enter your full name">
              </div>

              <div class="col-md-6 mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" placeholder="Enter your email">
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">Phone Number</label>
              <input type="text" class="form-control" placeholder="Enter your phone number">
            </div>

            <div class="mb-3">
              <label class="form-label">Your Message</label>
              <textarea class="form-control" rows="5" placeholder="Write your message here..."></textarea>
            </div>

            <div class="text-center">
              <button class="btn btn-custom px-4 warning1">Send Message</button>
            </div>
          </form>

        </div>
      </div>
    </div>

  </section>


    <?php include("footer.php"); ?> 

</body>
</html>
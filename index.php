<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="index.js"></script>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>Hello</h2>
            <p>Welcome to Project1</p><br>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for products.." title="Type in a name">
            <br><br>
            <section class="mb-4">

                <h4 class="font-weight-bold mb-3">Filter by Category</h4>
          
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="new">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="new">New</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="used">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="used">Used</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="collectible">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="collectible">Collectible</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="renewed">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="renewed">Renewed</label>
                </div>
          
              </section>
              <br><br>
               <!-- Section: Price version 2 -->
    <section class="mb-4">

        <h4 class="font-weight-bold mb-3">Filter by Price</h4>
  
        <div class="slider-price d-flex align-items-center my-4">
          <span class="font-weight-normal small text-muted mr-2">$0</span>
          <form class="multi-range-field w-100 mb-1">
            <input id="multi" class="multi-range" type="range" />
          </form>
          <span class="font-weight-normal small text-muted ml-2">$100</span>
        </div>
  
      </section>
      <!-- Section: Price version 2 -->
        </div>
    </div>
    <div class="main-box">
        <div class="container-1">
            
            <div class="header">
              <nav>
                <ul id="MenuItems">
                    <li><a href="">Home</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <a href="logout.php">Logout</a>
                </ul>
            </nav>
            </div>
        </div>
        <div class="container-2">
          <br><br>
          <h2>Products</h2>
        <!--
        <ul id="myUL">
            <li><a href="#">Adele</a></li>
            <li><a href="#">Agnes</a></li>
            <li><a href="#">Billy</a></li>
            <li><a href="#">Bob</a></li>
            <li><a href="#">Calvin</a></li>
            <li><a href="#">Christina</a></li>
            <li><a href="#">Cindy</a></li>
        </ul>
        -->
        <!--Product List-->
    <div class="small-container">
        <div class="container">
            <div class="row">
              <div class="col-sm">
                <div class="col-4">
                    <img src="images/product-1.jpg" alt="Product-1">
                    <h4 class="font-weight-bold">RED T-SHIRT</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <p class="price" id="p1">₹150.00</p>
                    <p class="btn-1">Read More</p>
                </div>
             </div>
              <div class="col-sm">
                <div class="col-4">
                    <img src="images/product-2.jpg" alt="Product-1">
                    <h4 class="font-weight-bold mb-4">BLACK SHOES</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <p class="price">₹250.00</p>
                    <p class="btn-1">Read More</p>
                </div>
              </div>
              <div class="col-sm">
                <div class="col-4">
                    <img src="images/product-3.jpg" alt="Product-1">
                    <h4 class="font-weight-bold mb-3">GREY TRACK PANTS</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <p class="price">₹350.00</p>
                    <p class="btn-1">Read More</p>
                </div>
              </div>
              <div class="col-sm">
                <div class="col-4">
                    <img src="images/product-4.jpg" alt="Product-1">
                    <h4 class="font-weight-bold mb-3">BLUE T-SHIRT</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <p class="price">₹150.00</p>
                    <p class="btn-1">Read More</p>
                </div>
              </div>
            </div>
          </div>
    </div>
    </div>
        
        
    </div>
    
    
    
</body>
</html>
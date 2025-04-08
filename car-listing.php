<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Car Listings</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
  <link href="assets/css/slick.css" rel="stylesheet">
  <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/switcher/css/switcher.css" />
</head>

<body>
<header>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">CarRental</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Home</a></li>
        <li class="active"><a href="#">Car Listing</a></li>
        <li><a href="#">Login / Register</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </nav>
</header>

<!-- Page Header -->
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Car Listings</h1>
      </div>
    </div>
  </div>
  <div class="dark-overlay"></div>
</section>

<!-- Listings -->
<section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-3">
        <div class="result-sorting-wrapper">
          <div class="sorting-count">
            <p><span>4 Listings</span></p>
          </div>
        </div>

        <!-- Listing Card -->
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img">
            <img src="assets/images/car1.jpg" class="img-responsive" alt="Car Image">
          </div>
          <div class="product-listing-content">
            <h5><a href="#">Toyota, Corolla</a></h5>
            <p class="list-price">$50 Per Day</p>
            <ul>
              <li><i class="fa fa-user"></i> 5 seats</li>
              <li><i class="fa fa-calendar"></i> 2020 model</li>
              <li><i class="fa fa-car"></i> Petrol</li>
            </ul>
            <a href="#" class="btn">View Details <span class="angle_arrow"><i class="fa fa-angle-right"></i></span></a>
          </div>
        </div>
      </div>

      <!-- Sidebar -->
      <aside class="col-md-3 col-md-pull-9">
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-filter"></i> Find Your Car</h5>
          </div>
          <div class="sidebar_filter">
            <form>
              <div class="form-group select">
                <select class="form-control" name="brand">
                  <option>Select Brand</option>
                  <option value="1">Toyota</option>
                  <option value="2">Honda</option>
                  <option value="3">BMW</option>
                </select>
              </div>
              <div class="form-group select">
                <select class="form-control" name="fueltype">
                  <option>Select Fuel Type</option>
                  <option value="Petrol">Petrol</option>
                  <option value="Diesel">Diesel</option>
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-block"><i class="fa fa-search"></i> Search Car</button>
              </div>
            </form>
          </div>
        </div>

        <!-- Recently Added -->
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-car"></i> Recently Listed Cars</h5>
          </div>
          <div class="recent_addedcars">
            <ul>
              <li class="gray-bg">
                <div class="recent_post_img"><a href="#"><img src="assets/images/car2.jpg" alt="car"></a></div>
                <div class="recent_post_title">
                  <a href="#">Honda, Civic</a>
                  <p class="widget_price">$45 Per Day</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>About Us</h5>
        <p>We provide affordable car rental services across the country with a wide range of options.</p>
      </div>
      <div class="col-md-4">
        <h5>Quick Links</h5>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Car Listing</a></li>
          <li><a href="#">Login</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Contact Us</h5>
        <p>Email: support@carrental.com</p>
        <p>Phone: +123-456-7890</p>
      </div>
    </div>
    <div class="footer-bottom text-center">
      <p>&copy; 2025 CarRental. All rights reserved.</p>
    </div>
  </div>
</footer>
</body>
</html>

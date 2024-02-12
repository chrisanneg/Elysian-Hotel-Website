<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="topnav">
    <h1 class="logo" href="index.html">Elysian</h1>

    <a class="active" href="index.html">Home</a>
    
   

    <a href="contact.html">Contact Us</a>
   
</div>
<?php
    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        
        echo '<div class="welcome-message"><h4 style="text-align:center;color:white">Welcome, ' . $_SESSION['username'] . '!</span>';
    } else {
    
        echo '<a class="imp" href="login.php">Sign Up Now!</a>';
    }
    ?>
</div>
<div class="slideshow-container">
    <div class="mySlides fade">
        <div class="numbertext">1 / 7</div>
        <img src="slider3.jpg" style="width:100%">
        <div class="text">Luxurious Skydeck Room</div>
      </div>
      
      <div class="mySlides fade">
        <div class="numbertext">2 / 7</div>
        <img src="slider2.jpg" style="width:100%">
        <div class="text"> Deluxe Suite</div>
      </div>
      
      <div class="mySlides fade">
        <div class="numbertext">3 / 7</div>
        <img src="slider4.jpg" style="width:100%">
        <div class="text">King's Room</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">4 / 7</div>
        <img src="slider1.jpg" style="width:100%">
        <div class="text">Kings Suite</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">5 / 7</div>
        <img src="slider5.jpg" style="width:100%">
        <div class="text">Complemetary Massage</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">6 / 7</div>
        <img src="slider6.jp.jpg" style="width:100%">
        <div class="text">Ayurvedic Spa</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">7 / 7</div>
        <img src="slider7.jpg" style="width:100%">
        <div class="text">Indoor Pool</div>
      </div>
      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>
      
      </div>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
        <span class="dot" onclick="currentSlide(4)"></span> 
        <span class="dot" onclick="currentSlide(5)"></span> 
        <span class="dot" onclick="currentSlide(6)"></span> 
        <span class="dot" onclick="currentSlide(7)"></span> 
      </div>
      

      
      <div class = "book">
        <form class = "book-form">
            <div class = "form-item">
                <label for = "checkin-date">Check In Date: </label>
                <input type = "date" id = "chekin-date">
            </div>
            <div class = "form-item">
                <label for = "checkout-date">Check Out Date: </label>
                <input type = "date" id = "chekout-date">
            </div>
            <div class = "form-item">
                <label for = "adult">Adults: </label>
                <input type = "number" min = "1" value = "1" id = "adult">
            </div>
            <div class = "form-item">
                <label for = "children">Children: </label>
                <input type = "number" min = "1" value = "1" id = "children">
            </div>
            <div class = "form-item">
                <label for = "rooms">Rooms: </label>
                <input type = "number" min = "1" value = "1" id = "rooms">
            </div>
            <div class = "form-item">
                <input type = "submit" class = "btn" value = "Book Now">
            </div>
        </form>
    </div>

      
          <section class = "customers" id = "customers">
            <div class = "sec-width">
                <div class = "title">
                    <h2>customers</h2>
                </div>
                <div class = "customers-container">
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>We Loved it</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                        <img src = "images/cus1.jpg" alt = "customer image">
                        <span>Customer Name, Country</span>
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Comfortable Living</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                        <img src = "images/cus2.jpg" alt = "customer image">
                        <span>Customer Name, Country</span>
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Nice Place</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                        <img src = "images/cus3.jpg" alt = "customer image">
                        <span>Customer Name, Country</span>
                    </div>
  </div>
                    <footer class = "footer">
                      <div class = "footer-container">
                          <div>
                              <h2>About Us </h2>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sapiente mollitia doloribus provident? Eos quisquam aliquid vel dolorum, impedit culpa.</p>
                             
                          </div>
          
                          
          
                          <div>
                              <h2>Have A Question</h2>
                              <div class = "contact-item">
                                  <span>
                                      <i class = "fas fa-map-marker-alt"></i>
                                  </span>
                                  <span>
                                      203 Fake St.Mountain View, San Francisco, California, USA
                                  </span>
                              </div>
                              <div class = "contact-item">
                                  <span>
                                      <i class = "fas fa-phone-alt"></i>
                                  </span>
                                  <span>
                                      +84545 37534 48
                                  </span>
                              </div>
                              <div class = "contact-item">
                                  <span>
                                      <i class = "fas fa-envelope"></i>
                                  </span>
                                  <span>
                                      info@domain.com
                                  </span>
                              </div>
                          </div>
                      </div>
                  </footer>
          

      <script>
        let slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
        </script>
</body>
</html>

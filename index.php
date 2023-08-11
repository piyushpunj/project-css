<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- FAVICON -->
        <link rel="shortcut icon" href="images/kp.png" type="image/x-icon" >
      
      <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@700&display=swap" rel="stylesheet">
>
       <!-- BOXICONS  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

         
        <!-- CSS -->
        <link rel="stylesheet" href="style.css">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.3/js/jquery.tablesorter.min.js"></script>
<script src="script.js"></script>

        <title> watches website </title>
    </head>
    <body>
       <!--HEADER  -->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <i class='bx bxs-watch nav__logo-icon'></i> KP Watches
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.html" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="featured.html" class="nav__link">Featured</a>
                        </li>
                        <li class"nav__item">
                            <a href="products.html" class="nav__link">Products</a>
                        </li>
                        <li class="nav__item">
                            <a href="new.html" class="nav__link">Latest</a>
                        </li>
                       <li class="nav__item">
                            <a href="Our story.html" class="nav__link">Our Story</a>
                        </li>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x' ></i>
                    </div>
                </div>

                <div class="nav__btns">
                   
                   

                    <div class="nav__shop" id="cart-shop">
                       <i class='bx bx-grid-alt' ></i>
                        <i class='bx bx-shopping-bag' ></i>
                    </div>

                    <div class="nav__toggle" id="nav-toggle">
                       
                    </div>
                </div>
            </nav>
        </header>


 
        
        <main class="main">
           
            <section class="home" id="home">
                <div class="home__container container grid">
                    <div class="home__img-bg">
                        <img src="images/mainpage.png" alt="" class="home__img">
                    </div>
    
                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            Facebook
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            Twitter
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            Instagram
                        </a>
                    </div>
    
                    <div class="home__data">
                        <h1 class="home__title">NEW WATCH <br> COLLECTIONS B720</h1>
                        <p class="home__description">
                           <i> Latest arrival of the new imported watches of the B720 series, 
                            with a modern and resistant design.
                   </i>     </p>
                        <span class="home__price">$1245</span>

                        <div class="home__btns">
                            <a href="featured.html" class="button button--gray button--small">
                                Discover
                            </a>

                            <button class="button home__button">ADD TO CART</button>
                        </div>
                    </div>
                </div>
            </section>

          
            <!--==================== STORY ====================-->
            <section class="story section container">
                <div class="story__container grid">
                    <div class="story__data">
                        <h2 class="section__title story__section-title">
                            Our Story
                        </h2>
    
                        <h1 class="story__title">
                            Inspirational Watch of <br> this year
                        </h1>
    
                        <p class="story__description">
                            The latest and modern watches of this year, is available in various 
                            presentations in this store, discover them now.
                        </p>
    
                        <a href="#" class="button button--small">Discover</a>
                    </div>

                    <div class="story__images">
                        <img src="images/story.png" alt="" class="story__img">
                        <div class="story__square"></div>
                    </div>
                </div>
            </section>

          
             <!-- TESTIMONIAL -->
            <section class="testimonial section container">
                <div class="testimonial__container grid">
                    <div class="swiper testimonial-swiper">
                        <div class="swiper-wrapper">
                            <div class="testimonial__card swiper-slide">
                                <div class="testimonial__quote">
                                    <i class='bx bxs-quote-alt-left' ></i>
                                </div>
                                <p class="testimonial__description">
                                    They are the best watches that one acquires, also they are always with the latest 
                                    news and trends, with a very comfortable price and especially with the attention 
                                    you receive, they are always attentive to your questions.
                                </p>
                                <h3 class="testimonial__date">March 27. 2021</h3>
        
                                <div class="testimonial__perfil">
                                    <img src="images/bhavesh.png" alt="" class="testimonial__perfil-img">
        
                                    <div class="testimonial__perfil-data">
                                        <span class="testimonial__perfil-name">Kataria</span>
                                        <span class="testimonial__perfil-detail">Director of the company</span>
                                    </div>
                                </div>
                            </div>

                           
                            <div class="testimonial__card swiper-slide">
                                <div class="testimonial__quote">
                             </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>

                    <div class="testimonial__images">
                        <div class="testimonial__square"></div>
                        <img src="images/foo.jpg" alt="" class="testimonial__img" height="100px">
                    </div>
                </div>
            </section>

            <!-- NEWSLETTER  -->
            <section class="newsletter section container">
                <div class="newsletter__bg grid">
                    <div>
                        <h2 class="newsletter__title" id ="news">Subscribe Our <br> Newsletter</h2>
                        <p class="newsletter__description">
                            Don't miss out on your discounts. Subscribe to our email 
                            newsletter to get the best offers, discounts, coupons, 
                            gifts and much more.
                        </p>
                    </div>

                    <form action="savedata.php" method="POST" class="newsletter__subscribe">
    <label for="email"></label>
    <input type="email" id="email" name="email" placeholder="Enter your email" class="newsletter__input" required>
    <button class="button" type="submit">
        SUBSCRIBE
    </button>
</form>

                 
  
 
  

                  

                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <h3 class="footer__title"><b>Our information</b></h3>

                    <ul class="footer__list">
                        <li>KP's Watches Ltd</li>
                        <li>Toronto, Canada</li>
                        <li>(437)4281990</li>
                    </ul>
                </div>
             
  <script src="script.js"></script>

                <div class="footer__content">
                    <h3 class="footer__title"><b>About Us</b></h3>

                    <ul class="footer__links" id ="cust">
                        <li>
                          
                            <a href="index.html" class="footer__link">Customer Support</a>
                        </li>
                        <li>
                            <a href="https://www.google.ca/maps/search/watches/@43.6723447,-79.3969564,14z/data=!3m1!4b1?entry=ttu" class="footer__link">Location</a>
                        </li>
                        <li>
                            <a href="Our story.html" class="footer__link">Copy Right</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title"><b>Products</b></h3>

                    <ul class="footer__links">
                       
                        <li>
                            <a href="products.html" class="footer__link">Analog Watches</a>
                        </li>
                        <li>
                            <a href="products.html" class="footer__link">Smart Watches</a>
                        </li>
                        <li>
                            <a href="featured.html" class="footer__link">Accesories</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title"><b>Social</b></h3>

                    <ul class="footer__social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-facebook'></i>
                        </a>

                        <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-twitter' ></i>
                        </a>

                        <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-instagram' ></i>
                        </a>
                    </ul>
                </div>
            </div>

            <span class="footer__copy">&#169; KP. All rigths reserved</span>
        </footer>

        

        <!--=============== MAIN JS ===============-->
        <script src="script.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c28c53cee.js" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="css/index.css">
    <script src="js/hamburger.js" defer></script>
    <script src="js/chef.js" defer></script>
    <script src="js/cake.js" defer></script>
    <title>Cake Application</title>
</head>
<body>
    
    <!-- START NAVBAR -->
    <?php include("navbar.php") ?>
    <!-- END NAVBAR -->

    <!-- START HERO -->

    <div class="hero">
        <img src="images/cake-hero.jpg" alt="Cake Application" />

        <div class="hero-overlay">

            <p>The best cakes are here! Place an order now!</p>

            <div>
                <a href="cakes" class="hero-button-one">Our Cakes</a>
                <a href="about" class="hero-button-two">Learn More</a>
            </div>

        </div>
    </div>

    <!-- START HERO -->

    <!-- START ABOUT -->

    <div class="about" id="about">
        <p>ABOUT US</p>

        <div class="horisontal-line"></div>

        <div class="about-title">Lorem ipsum dolor sit amet consectetur adipisicing</div>

        <div class="about-inline">

            <div>
                <i class="fa fa-heart"></i>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto molestias vitae ab molestiae, perferendis aperiam veniam.</p>
            </div>
            
            <div>
                <i class="fa fa-award"></i>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto molestias vitae ab molestiae, perferendis aperiam veniam.</p>
            </div>
            
            <div>
                <i class="fa fa-user"></i>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto molestias vitae ab molestiae, perferendis aperiam veniam.</p>
            </div>

            <div class="nice-grid">
                <i class="fa fa-user"></i>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto molestias vitae ab molestiae, perferendis aperiam veniam.</p>
            </div>

            <div>
                <i class="fa fa-star"></i>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto molestias vitae ab molestiae, perferendis aperiam veniam.</p>
            </div>

        </div>
        
    </div>

    <!-- END ABOUT -->

    <!-- START CHEFS -->

    <div class="chefs" id="chefs">
        <p>MEET OUR CHEFS</p>

        <div class="horisontal-line"></div>

        <div class="chefs-title">Lorem ipsum dolor sit amet consectetur</div>

        <div class="chefs-inline">
            <div id="div-chef">
                <img src="images/chef-one.jpg" alt="Cake Application" />
                <div>
                    <p>Hank White</p>
                </div>
                <p id="overlay-chef">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
                </p>
            </div>
            
            <div id="div-chef">
                <img src="images/chef-two.jpg" alt="Cake Application" />
                <div>
                    <p>Jane Brown</p>
                </div>
                <p id="overlay-chef">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
                </p>
            </div>
            
            <div id="div-chef">
                <img src="images/chef-three.jpeg" alt="Cake Application" />
                <div>
                    <p>Nick Johnson</p>
                </div>
                <p id="overlay-chef">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
                </p>
            </div>
        </div>
    </div>

    <!-- END CHEFS -->

    <!-- START MORE INFO -->

    <div class="more-info">
        <div class="overlay-more-info">
            <div class="cakes-inline">
                <div>
                    <i>BIRTHDAY CAKES</i>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto molestias vitae ab molestiae, perferendis aperiam veniam.</p>
                </div>
    
                <div>
                    <i>WEDDING CAKES</i>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto molestias vitae ab molestiae, perferendis aperiam veniam.</p>
                </div>
    
                <div>
                    <i>CUSTOM CAKES</i>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto molestias vitae ab molestiae, perferendis aperiam veniam.</p>
                </div>
            </div>

            <a href="cakes">Order Now</a>

        </div>
    </div>

    <!-- END MORE INFO -->

    <!-- START CAKES -->

    <div class="cakes" id="cakes">
        <p>OUR CAKES</p>

        <div class="horisontal-line"></div>

        <div class="cake-category">
            <button class="cake-button">Birthday</button>
            <button class="cake-button">Wedding</button>
            <button class="cake-button">Custom</button>
        </div>

        <!-- START BIRTHDAY CAKE -->
        <div class="cake-inline-one">
            <div>
                <img src="images/cake-two.jpg" alt="Cake Application" />
                <p class="cake-info">
                    <span class="cake-price">45.00$ <span><del style="color:red; font-size:15px;">90.00$</del></span></span>
                    <a href="#" class="cake-button-href">Order</a>
                </p>
                <p class="cake-text">Chocolate Cake</p>
                <p class="cake-sale">50%</p>
            </div>

            <div>
                <img src="images/cake-two.jpg" alt="Cake Application" />
                <p class="cake-info">
                    <span class="cake-price">40.00$ <span><del style="color:red; font-size:15px;">80.00$</del></span></span>
                    <a href="#" class="cake-button-href">Order</a>
                </p>
                <p class="cake-text">Strawberry Cake</p>
                <p class="cake-sale">50%</p>
            </div>

            <div>
                <img src="images/cake-two.jpg" alt="Cake Application" />
                <p class="cake-info">
                    <span class="cake-price">35.00$ <span><del style="color:red; font-size:15px;">70.00$</del></span></span>
                    <a href="#" class="cake-button-href">Order</a>
                </p>
                <p class="cake-text">Vanilla Cake</p>
                <p class="cake-sale">50%</p>
            </div>

            <div>
                <img src="images/cake-two.jpg" alt="Cake Application" />
                <p class="cake-info">
                    <span class="cake-price">50.00$ <span><del style="color:red; font-size:15px;">100.00$</del></span></span>
                    <a href="#" class="cake-button-href">Order</a>
                </p>
                <p class="cake-text">Cherry Cake</p>
                <p class="cake-sale">50%</p>
            </div>

            <div>
                <img src="images/cake-two.jpg" alt="Cake Application" />
                <p class="cake-info">
                    <span class="cake-price">30.00$ <span><del style="color:red; font-size:15px;">60.00$</del></span></span>
                    <a href="#" class="cake-button-href">Order</a>
                </p>
                <p class="cake-text">Cheese Cake</p>
                <p class="cake-sale">50%</p>
            </div>

            <div>
                <img src="images/cake-two.jpg" alt="Cake Application" />
                <p class="cake-info">
                    <span class="cake-price">25.00$ <span><del style="color:red; font-size:15px;">50.00$</del></span></span>
                    <a href="#" class="cake-button-href">Order</a>
                </p>
                <p class="cake-text">Lemon Cake</p>
                <p class="cake-sale">50%</p>
            </div>
        </div>
        <!-- END BIRTHDAY CAKE -->


        <!-- START WEDDING CAKE -->
        <div class="cake-inline-two">
            <div>
                <img src="images/cake-three.jpg" alt="Cake Application" />
                <p class="cake-info">
                    <span class="cake-price">60.00$ <span><del style="color:red; font-size:15px;">120.00$</del></span></span>
                    <a href="#" class="cake-button-href">Order</a>
                </p>
                <p class="cake-text">Chocolate Cake</p>
                <p class="cake-sale">50%</p>
            </div>

            <div>
                <img src="images/cake-three.jpg" alt="Cake Application" />
                <p class="cake-info">
                    <span class="cake-price">45.00$ <span><del style="color:red; font-size:15px;">90.00$</del></span></span>
                    <a href="#" class="cake-button-href">Order</a>
                </p>
                <p class="cake-text">Strawberry Cake</p>
                <p class="cake-sale">50%</p>
            </div>

            <div>
                <img src="images/cake-three.jpg" alt="Cake Application" />
                <p class="cake-info">
                    <span class="cake-price">55.00$ <span><del style="color:red; font-size:15px;">110.00$</del></span></span>
                    <a href="#" class="cake-button-href">Order</a>
                </p>
                <p class="cake-text">Vanilla Cake</p>
                <p class="cake-sale">50%</p>
            </div>

            <div>
                <img src="images/cake-three.jpg" alt="Cake Application" />
                <p class="cake-info">
                    <span class="cake-price">65.00$ <span><del style="color:red; font-size:15px;">130.00$</del></span></span>
                    <a href="#" class="cake-button-href">Order</a>
                </p>
                <p class="cake-text">Cherry Cake</p>
                <p class="cake-sale">50%</p>
            </div>

            <div>
                <img src="images/cake-three.jpg" alt="Cake Application" />
                <p class="cake-info">
                    <span class="cake-price">40.00$ <span><del style="color:red; font-size:15px;">80.00$</del></span></span>
                    <a href="#" class="cake-button-href">Order</a>
                </p>
                <p class="cake-text">Cheese Cake</p>
                <p class="cake-sale">50%</p>
            </div>

            <div>
                <img src="images/cake-three.jpg" alt="Cake Application" />
                <p class="cake-info">
                    <span class="cake-price">30.00$ <span><del style="color:red; font-size:15px;">60.00$</del></span></span>
                    <a href="#" class="cake-button-href">Order</a>
                </p>
                <p class="cake-text">Lemon Cake</p>
                <p class="cake-sale">50%</p>
            </div>
        </div>
        <!-- END WEDDING CAKE -->


        <!-- START CUSTOM CAKE -->
        <div class="cake-inline-three">
            <div>
                <img src="images/cake-one.jpg" alt="Cake Application" />
                <p class="cake-info">
                    <span class="cake-price">45.00$ <span><del style="color:red; font-size:15px;">90.00$</del></span></span>
                    <a href="#" class="cake-button-href">Order</a>
                </p>
                <p class="cake-text">Chocolate Cake</p>
                <p class="cake-sale">50%</p>
            </div>

            <div>
                <img src="images/cake-one.jpg" alt="Cake Application" />
                <p class="cake-info">
                    <span class="cake-price">50.00$ <span><del style="color:red; font-size:15px;">100.00$</del></span></span>
                    <a href="#" class="cake-button-href">Order</a>
                </p>
                <p class="cake-text">Strawberry Cake</p>
                <p class="cake-sale">50%</p>
            </div>

            <div>
                <img src="images/cake-one.jpg" alt="Cake Application" />
                <p class="cake-info">
                    <span class="cake-price">55.00$ <span><del style="color:red; font-size:15px;">110.00$</del></span></span>
                    <a href="#" class="cake-button-href">Order</a>
                </p>
                <p class="cake-text">Vanilla Cake</p>
                <p class="cake-sale">50%</p>
            </div>

            <div>
                <img src="images/cake-one.jpg" alt="Cake Application" />
                <p class="cake-info">
                    <span class="cake-price">60.00$ <span><del style="color:red; font-size:15px;">120.00$</del></span></span>
                    <a href="#" class="cake-button-href">Order</a>
                </p>
                <p class="cake-text">Cherry Cake</p>
                <p class="cake-sale">50%</p>
            </div>

            <div>
                <img src="images/cake-one.jpg" alt="Cake Application" />
                <p class="cake-info">
                    <span class="cake-price">65.00$ <span><del style="color:red; font-size:15px;">130.00$</del></span></span>
                    <a href="#" class="cake-button-href">Order</a>
                </p>
                <p class="cake-text">Cheese Cake</p>
                <p class="cake-sale">50%</p>
            </div>

            <div>
                <img src="images/cake-one.jpg" alt="Cake Application" />
                <p class="cake-info">
                    <span class="cake-price">40.00$ <span><del style="color:red; font-size:15px;">80.00$</del></span></span>
                    <a href="#" class="cake-button-href">Order</a>
                </p>
                <p class="cake-text">Lemon Cake</p>
                <p class="cake-sale">50%</p>
            </div>
        </div>
        <!-- END CUSTOM CAKE -->

    </div>

    <!-- END CAKES -->

    <!-- START CONTACT -->

    <div class="contact" id="contact">
        <div>
            <i class="fa fa-envelope"></i>
            <p>cake@cake.com</p>
            <a href="mailto:cake@cake.com">Contact Us</a>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>055 987 789</p>
            <a href="tel:055987789">Call Us</a>
        </div>
    </div>

    <!-- START CONTACT -->

    <!-- START TESTIMONIALS -->

    <div class="testimonials" id="testimonials">
        <p>WHAT OUR CLIENTS SAY</p>

        <div class="horisontal-line"></div>

        <div class="testimonials-inline">
            <div>
                <div class="testimonials-inline-image">
                    <img src="images/testimonial-one.jpg" alt="Cake Application" width="100" height="100" />
                    <p>
                        <span style="font-size:20px; color:#db6750; font-weight:800;">WALTER PINK</span>
                        <br />
                        <span style="font-size: 18px; font-weight:800;">Lawyer</span>
                    </p>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>

            <div>
                <div class="testimonials-inline-image">
                    <img src="images/testimonial-three.jpg" alt="Cake Application" width="100" height="100" />
                    <p>
                        <span style="font-size:20px; color:#db6750; font-weight:800;">ANNA ADAMS</span>
                        <br />
                        <span style="font-size: 18px; font-weight:800;">Designer</span>
                    </p>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
            
            <div>
                <div class="testimonials-inline-image">
                    <img src="images/testimonial-two.jpg" alt="Cake Application" width="100" height="100" />
                    <p>
                        <span style="font-size:20px; color:#db6750; font-weight:800;">CARL ROSS</span>
                        <br />
                        <span style="font-size: 18px; font-weight:800;">Doctor</span>
                    </p>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>

    <!-- END TESTIMONIALS -->

    <!-- START FOOTER -->
    <?php include("footer.php") ?>
    <!-- END FOOTER -->

</body>
</html>
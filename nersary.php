<?php 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Nursery Plant Shopping</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">

    <!--font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!--custom css file link -->
    <link rel="stylesheet" href="design.css">
    

</head>

<body>

    <!--header section starts-->

    <header>

        <div class="header-1">


            <div class="share">
                <span>Follow us:</span>
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <div class="call">
                <span>Call us:</span>
                <a href="#">+982-463-4340</a>
                <a href="#" class="call-num"><br>+909-973-8923</a>
            </div>
        </div>
        <div class="header-2">

            <a href="#" class="logo"> <i class="fas fa-seedling"></i>THE GREEN HOUSE</a>

            <form action="" class=" search-bar-container ">
                <input type="Search" id="search-bar" placeholder="Search here...">
                <label for="search-bar " class="fas fa-search "></label>
            </form>
        </div>

    </header>
    <div class="header-3">
        <div id="menu-bar" class="fas fa-bars"></div>
        <nav class="navbar">
            <a href="#Home ">Home</a>
            <a href="#Category ">Category</a>
            <a href="#Product ">Product</a>
            <a href="#Deal ">Deal</a>
            <a href="#Contact ">Contact</a>
            <a href="http://localhost/project/nersaryPlant.php">login</a>
        </nav>
        <div class="icons ">
            <a href="# " class="fas fa-shopping-cart "></a>
            <a href="# " class="fas fa-heart "></a>
            <a href="http://localhost/project/account.php" class="fas fa-user-circle "></a>
        </div>

    </div>



    </header>

    <!--header section ends-->

    <!--home section starts-->
    <section class="home" id="Home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box" style="background: url(Slider1.jpg);">
                        <div class="content">
                            <span>upto 75% off</span>
                            <h3>Plants big sale special offer</h3>
                            <a href="#" class="btn">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box" style="background: url(Slider2.jpg);">
                        <div class="content">
                            <span>upto 45% off</span>
                            <h3>Make your home a greener place</h3>
                            <a href="http://localhost/project/nersaryPlant.php" class="btn">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box" style="background: url(Slider3.jpg);">
                        <div class="content">
                            <span>upto 65% off</span>
                            <h3>Decorate your home now</h3>
                            <a href="http://localhost/project/nersaryPlant.php" class="btn">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!--home section ends-->

    <!--banner section starts-->
    <section class="banner-container">
        <div class="banner">
            <img src="banner1.jpg" alt="">
            <div class="content">
                <span>New arrivals</span>
                <h3>House Plants</h3>
                <a href="http://localhost/project/nersaryPlant.php" class="btn">Shop now</a>
            </div>
        </div>
        <div class="banner">
            <img src="banner2.jpg" alt="">
            <div class="content">
                <span>New arrivals</span>
                <h3>Office Plants</h3>
                <a href=http://localhost/project/nersaryPlant.php" class="btn">Shop now</a>
            </div>
        </div>
    </section>
    <!--banner section ends-->

    <!-- Category section starts -->
    <section class="category" id="Category">
        <h1 class="heading">Shop by category</h1>
        <div class="box-container">
            <div class="box">
                <img src="cat1.jpg" alt="">
                <div class="content">
                    <h3>bonsai</h3>
                    <a href="http://localhost/project/nersaryPlant.php" class="btn">Shop now</a>

                </div>
            </div>
            <div class="box">
                <img src="cat2.jpg" alt="">
                <div class="content">
                    <h3>plants for house</h3>
                    <a href="http://localhost/project/nersaryPlant.php" class="btn">Shop now</a>

                </div>
            </div>
            <div class="box">
                <img src="cat3.jpg" alt="">
                <div class="content">
                    <h3>plants for office</h3>
                    <a href="http://localhost/project/nersaryPlant.php" class="btn">Shop now</a>

                </div>
            </div>
            <div class="box">
                <img src="cat4.jpg" alt="">
                <div class="content">
                    <h3>gift plants</h3>
                    <a href="http://localhost/project/nersaryPlant.php" class="btn">Shop now</a>

                </div>
            </div>
        </div>



    </section>
    <!-- category section ends-->

    <!--product section starts-->

    <section class="product" id="Product">
        <h1 class="heading">New products</h1>
        <div class="box-container">
            <div class="box">
                <span class="discount">-10%</span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="product1.jpg" alt="">
                <h3>litleo artificial bonsai</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="quantity">
                    <span>Quantity:</span>
                    <input type="number" min="1" max="100" value="1">
                </div>
                <div class="price">&#8377;280<span>&#8377;300</span></div>
                <a href="http://localhost/project/nersaryPlant.php" class="btn">add to cart</a>
            </div>
            <div class="box">
                <span class="discount">-25%</span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="product2.jpg" alt="">
                <h3>Mogra plants</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="quantity">
                    <span>Quantity:</span>
                    <input type="number" min="1" max="100" value="1">
                </div>
                <div class="price">&#8377;468<span>&#8377;625</span></div>
                <a href="http://localhost/project/nersaryPlant.php" class="btn">add to cart</a>
            </div>
            <div class="box">
                <span class="discount">-8%</span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="product3.jpg" alt="">
                <h3>peace lily Plant</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="quantity">
                    <span>Quantity:</span>
                    <input type="number" min="1" max="100" value="1">
                </div>
                <div class="price">&#8377;80<span>&#8377;90</span></div>
                <a href="http://localhost/project/nersaryPlant.php" class="btn">add to cart</a>
            </div>
            <div class="box">
                <span class="discount">-4%</span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="product4.jpg" alt="">
                <h3>kochia plants</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="quantity">
                    <span>Quantity:</span>
                    <input type="number" min="1" max="100" value="1">
                </div>
                <div class="price">&#8377;499<span>&#8377;518</span></div>
                <a href="http://localhost/project/nersaryPlant.php" class="btn">add to cart</a>
            </div>
            <div class="box">
                <span class="discount">-16%</span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="product5.jpg" alt="">
                <h3>pepper face Plant</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="quantity">
                    <span>Quantity:</span>
                    <input type="number" min="1" max="100" value="1">
                </div>
                <div class="price">&#8377;899<span>&#8377;1,042</span></div>
                <a href="http://localhost/project/nersaryPlant.php" class="btn">add to cart</a>
            </div>
            <div class="box">
                <span class="discount">-1%</span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="product6.jpg" alt="">
                <h3>fern Plant</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="quantity">
                    <span>Quantity:</span>
                    <input type="number" min="1" max="100" value="1">
                </div>
                <div class="price">&#8377;259<span>&#8377;261</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
            <div class="box">
                <span class="discount">-6%</span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="product7.jpg" alt="">
                <h3>hanging pothos plant</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="quantity">
                    <span>Quantity:</span>
                    <input type="number" min="1" max="100" value="1">
                </div>
                <div class="price">&#8377;665<span>&#8377;704</span></div>
                <a href="http://localhost/project/nersaryPlant.php" class="btn">add to cart</a>
            </div>
            <div class="box">
                <span class="discount">-24%</span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="product8.jpg" alt="">
                <h3>Monstera adansonii Plant</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="quantity">
                    <span>Quantity:</span>
                    <input type="number" min="1" max="100" value="1">
                </div>
                <div class="price">&#8377;199<span>&#8377;247</span></div>
                <a href="http://localhost/project/nersaryPlant.php" class="btn">add to cart</a>
            </div>
        </div>

    </section>
    <!-- product section ends-->
    <!-- icons section starts-->
    <section class="icons-container">
        <div class="icon">
            <img src="icon1.png" alt="">
            <div class="content">
                <h3>free shipping</h3>
                <p> free shipping on order</p>
            </div>
        </div>
        <div class="icon">
            <img src="icon2.png" alt="">
            <div class="content">
                <h3>100% cash back</h3>
                <p>You have 30 days to return</p>
            </div>
        </div>
        <div class="icon">
            <img src="icon3.png" alt="">
            <div class="content">
                <h3>Payment secure</h3>
                <p>100% secure payment</p>
            </div>
        </div>
        <div class="icon">
            <img src="icon4.png" alt="">
            <div class="content">
                <h3>support 24/7</h3>
                <p>contact us anytime</p>
            </div>
        </div>


    </section>
    <!--icons section ends-->
    <!-- deal section starts-->
    <section class="deal" id="Deal">
        <h1 class="heading">deal of the day</h1>
        <div class="row">
            <div class="content">
                <h3 class="title">don't miss the deal</h3>
                <p>the best stock at the best price</p>
                <div class="count-down">
                    <div class="box">
                        <h3 id="day">00</h3>
                        <span>day</span>
                    </div>
                    <div class="box">
                        <h3 id="hour">00</h3>
                        <span>hour</span>
                    </div>
                    <div class="box">
                        <h3 id="minute">00</h3>
                        <span>minute</span>
                    </div>
                    <div class="box">
                        <h3 id="second">00</h3>
                        <span>second</span>
                    </div>
                </div>
                <a href="http://localhost/project/nersaryPlant.php" class="btn">check out deal</a>
            </div>
            <div class="image">
                <img src="deal-img.jpg" alt="">
            </div>
        </div>
    </section>
    <!-- deal section ends-->
    <!-- Contact section starts-->
    <section class="contact" id="Contact">
        <h1 class="heading">get in touch</h1>
        <div class="row">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.8020994793765!2d72.36074077446655!3d23.611429394098952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c4367c5379fc9%3A0x7fc210a20cc8900b!2s2%2C%20Radhanpur%20Rd%2C%20beside%20rangoli%20parlour%2C%20Puspanjale%20Society%2C%20Kunal%2C%20Mehsana%2C%20Gujarat%20384002!5e0!3m2!1sen!2sin!4v1699276849971!5m2!1sen!2sin"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <form action="">
                <div class="inputBox">
                    <input type="text" required>
                    <label>name</label>
                </div>
                <div class="inputBox">
                    <input type="email" required>
                    <label>email</label>
                </div>
                <div class="inputBox">
                    <input type="number" required>
                    <label>number</label>
                </div>
                <div class="inputBox">
                    <textarea required name="" id="" cols="30" rows="10"></textarea>
                    <label>message</label>
                </div>

                <input type="submit" value="send message" class="btn">
            </form>
        </div>
    </section>
    <!-- contact section ends-->

    <!-- footer section starts-->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>about us</h3>
                <p>The Green House germinated in 2023 from a promise to make 'green and healthy' a click away for all Indians. Having plants in our homes or in our offices doesn’t just look good, it also boosts our mood, makes us more productive, and cleans
                    the air around us by absorbing toxins. Most of us being urban dwellers spending their days in apartments with limited access to parks and ecological reserves, have no way of feeling close to nature and experiencing the benefits of
                    being around plants.</p>
            </div>
            <div class="box">
                <h3>branch locations</h3>
                <a href="#">Mahesana</a>
                <a href="#">palanpur</a>
                <a href="#">ahmedabad</a>
                <a href="#">Himmatnagar</a>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">category</a>
                <a href="#">product</a>
                <a href="#">deal</a>
                <a href="#">contact</a>
            </div>
            <div class="box">
                <h3>Follow us</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                <a href="#">linkedin</a>

            </div>
        </div>
        <h1 class="credit">created by<span> Nijal Modh</span>,<span> Keyur Dholakiya</span> and <span>joshi prince</span> </h1>| all rights reserved</h1>
    </section>
    <!-- footer section ends-->
    <!-- scroll top button-->
    <a href="#Home" class="scroll-top fas fa-angle-up"></a>

    <script src=" https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js "></script>


    <!--custom js file link-->

    <script src="dynamic.js"></script>


</body>

</html>
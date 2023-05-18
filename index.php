<!DOCTYPE php>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FindMyHealth</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- custom css -->
        <link rel = "stylesheet" href = "assets/css/main2.css" />
        <link rel = "stylesheet" href = "assets/css/utilities.css" />
        <!-- normalize.css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        
        <div class="page-wrapper">
            <!-- header -->
            <header class = "header">
                <nav class = "navbar">
                    <div class="container">
                        <div class="navbar-content d-flex justify-content-between align-items-center">
                            <div class = "brand-and-toggler d-flex align-items-center justify-content-between">
                                <a href = "#" class = "navbar-brand d-flex align-items-center">
                                    <span class="brand-shape d-inline-block text-white">M</span>
                                    <span class="brand-text fw-7">FindMyHealth</span>
                                </a>
                                <button type = "button" class = "d-none navbar-show-btn">
                                    <i class = "fas fa-bars"></i>
                                </button>
                            </div>

                            <div class = "navbar-box">
                                <button type = "button" class = "navbar-hide-btn">
                                    <i class = "fas fa-times"></i>
                                </button>

                                <ul class = "navbar-nav d-flex align-items-center">
                                    <li class = "nav-item">
                                        <a href = "#" class = "nav-link text-white nav-active text-nowrap">Home</a>
                                    </li>
                                    <li class = "nav-item">
                                        <a href = "cabinets.php" class = "nav-link text-white text-nowrap">Find a doctor</a>
                                    </li>
                                    <li class = "nav-item">
                                        <a href = "#" class = "nav-link text-white text-nowrap">About us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

                <div class="element-one">
                    <img src = "assets/images/element-img-1.png" alt = "">
                </div>

                <div class="banner">
                    <div class="container">
                        <div class="banner-content">
                            <div class="banner-left">
                                <div class="content-wrapper">
                                    <h1 class="banner-title">Virtual healthcare <br> for you</h1>
                                    <p class="text text-white">FindMyHealth provides information about nearby medical cabinets for all your health needs</p>
                                    <a href = "cabinets.php" class="btn btn-secondary">Consult today</a>
                                </div>
                            </div>

                            <div class = "banner-right d-flex align-items-center justify-content-end">
                                <img src = "assets/images/banner-image.png" alt = "">
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end of header -->

            <main>
                <section class = "sc-services">
                    <div class = "services-shape">
                        <img src = "assets/images/curve-shape-1.png" alt = "">
                    </div>
                    <div class="container">
                        <div class = "services-content">
                            <div class="title-box text-center">
                                <div class = "content-wrapper">
                                    <h3 class = "title-box-name">Our services</h3>
                                    <div class = "title-separator mx-auto"></div>
                                    <p class = "text title-box-text">We provide you the best choices for you. Adjust it to your health needs and make sure you undergo treatment with qualified doctors, you can consult with them which type of service is suitable for your health</p>
                                </div>
                            </div>

                            <div class = "services-list">
                                <div class = "services-item">
                                    <div class = "item-icon">
                                        <img src = "assets/images/service-icon-1.png" alt = "service icon">
                                    </div>
                                    <h5 class = "item-title fw-7">Search doctor</h5>
                                    <p class = "text">Choose your doctor from thousands of specialist, general and trusted hospitals.</p>
                                </div>

                                <div class = "services-item">
                                    <div class = "item-icon">
                                        <img src = "assets/images/service-icon-2.png" alt = "service icon">
                                    </div>
                                    <h5 class = "item-title fw-7">Pharmacy locations</h5>
                                    <p class = "text">Buy your medicines from trusted cabinets in your area</p>
                                </div>

                                <div class = "services-item">
                                    <div class = "item-icon">
                                        <img src = "assets/images/service-icon-3.png" alt = "service icon">
                                    </div>
                                    <h5 class = "item-title fw-7">Consultation</h5>
                                    <p class = "text">Free consultation with trusted doctors and get the best recommendations.</p>
                                </div>

                                <div class = "services-item">
                                    <div class = "item-icon">
                                        <img src = "assets/images/service-icon-4.png" alt = "service icon">
                                    </div>
                                    <h5 class = "item-title fw-7">Details info</h5>
                                    <p class = "text">Read details about the doctors from the comfort of your home.</p>
                                </div>

                                <div class = "services-item">
                                    <div class = "item-icon">
                                        <img src = "assets/images/service-icon-5.png" alt = "service icon">
                                    </div>
                                    <h5 class = "item-title fw-7">Emergency care</h5>
                                    <p class = "text">You can get 24/7 urgent care for yourself or your children and your lovely family.</p>
                                </div>

                                <div class = "services-item">
                                    <div class = "item-icon">
                                        <img src = "assets/images/service-icon-6.png" alt = "service icon">
                                    </div>
                                    <h5 class = "item-title fw-7">Tracking</h5>
                                    <p class = "text">easy to book appointments for your health needs</p>
                                </div>
                            </div>

                            <div class = "d-flex align-items-center justify-content-center services-main-btn">
                             
                            </div>
                        </div>
                    </div>
                </section>

                <section class = "sc-grid sc-grid-one">
                    <div class="container">
                        <div class = "grid-content d-grid align-items-center">
                            <div class = "grid-img">
                                <img src = "assets/images/health-care-img.png" alt = "">
                            </div>
                            <div class = "grid-text">
                                <div class = "content-wrapper text-start">
                                    <div class = "title-box">
                                        <h3 class = "title-box-name text-white">Leading healthcare providers</h3>
                                        <div class = "title-separator mx-auto"></div>
                                    </div>

                                    <p class = "text title-box-text text-white">FindMyHealth provides progressive, and affordable healthcare locations, accessible online for everyone. To us, it's not just work. We take pride in the help we deliver</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class = "sc-grid sc-grid-two">
                    <div class = "container">
                        <div class = "grid-content d-grid align-items-center">
                            <div class = "grid-img">
                                <img src = "assets/images/download-image.png" alt = "">
                            </div>
                            <div class = "grid-text">
                                <div class = "content-wrapper text-start">
                                    <div class = "title-box">
                                        <h3 class = "title-box-name">Download our mobile app</h3>
                                        <div class = "title-separator mx-auto"></div>
                                    </div>
                                    <p class = "text title-box-text">Our future dedicated patient engagement app and web portal allow you to access information instantaneously (no tedious form, long calls, or administrative hassle) and securely</p>
                                    <button type = "button" class = "btn btn-primary-outline">
                                        Coming Soon
                                        <img src = "assets/images/arrow-down.svg" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class = "sc-feedback">
                    <div class="container">
                        <div class = "feedback-content">
                            <div class = "feedback-element">
                                <img src = "assets/images/element-img-3.png">
                            </div>
                            <div class="feedback-element-2">
                                <img src = "assets/images/element-img-5.png">
                            </div>
                            <div class = "title-box text-center">
                                <div class = "content-wrapper">
                                    <h3 class = "title-box-name text-white">What our customers are saying</h3>
                                    <div class = "title-separator mx-auto"></div>
                                </div>
                            </div>

                            <div class = "feedback-list feedback-slider owl-carousel owl-theme">
                                <div class = "feedback-item d-grid">
                                    <div class = "item-left d-flex align-items-center">
                                        <div class = "item-img">
                                            <img src = "assets/images/person-image.png" alt = "">
                                        </div>
                                        <div class = "item-info text-white">
                                            <p class = "fw-7 name">Ion Carcel</p>
                                            <span class = "designation fw-4">Programmer</span>
                                        </div>
                                    </div>
                                    <div class = "item-right">
                                        <p class = "text text-white">"foarte smecher siteul"</p>
                                    </div>
                                </div>

                                <div class = "feedback-item d-grid">
                                    <div class = "item-left d-flex align-items-center">
                                        <div class = "item-img">
                                            <img src = "assets/images/salam.jpg" alt = "">
                                        </div>
                                        <div class = "item-info text-white">
                                            <p class = "fw-7 name">Florin Sunca</p>
                                            <span class = "designation fw-4">Manelist</span>
                                        </div>
                                    </div>
                                    <div class = "item-right">
                                        <p class = "text text-white">"Mult noroc si sanatate creatorilor siteului"</p>
                                    </div>
                                </div>

                                <div class = "feedback-item d-grid">
                                    <div class = "item-left d-flex align-items-center">
                                        <div class = "item-img">
                                            <img src = "assets/images/brandon.png" alt = "">
                                        </div>
                                        <div class = "item-info text-white">
                                            <p class = "fw-7 name">Brandon Currington</p>
                                            <span class = "designation fw-4">Barber</span>
                                        </div>
                                    </div>
                                    <div class = "item-right">
                                        <p class = "text text-white">"acuma oricine  poate gasi cabinete din zona"</p>
                                    </div>
                                </div>

                                <div class = "feedback-item d-grid">
                                    <div class = "item-left d-flex align-items-center">
                                        <div class = "item-img">
                                            <img src = "assets/images/meow" alt = "">
                                        </div>
                                        <div class = "item-info text-white">
                                            <p class = "fw-7 name">Fat Cat</p>
                                            <span class = "designation fw-4">Vicepresident of Mongolia</span>
                                        </div>
                                    </div>
                                    <div class = "item-right">
                                        <p class = "text text-white">"meow"</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class = "sc-articles">
                    <div class = "articles-shape">
                        <img src = "assets/images/curve-shape-2.png" alt = "">
                    </div>
                    <div class = "container">
                        <div class = "articles-content">
                            <div class = "articles-element">
                                <img src = "assets/images/element-img-2.png" alt = "">
                            </div>
                            <div class = "title-box text-center">
                                <div class = "content-wrapper">
                                    <h3 class = "title-box-name">Check out our latest articles</h3>
                                    <div class = "title-separator mx-auto"></div>
                                </div>
                            </div>
                            
                            <div class = "articles-list d-flex flex-wrap justify-content-center">
                                <article class = "articles-item">
                                    <div class = "item-img">
                                        <img src = "assets/images/article-img-1.png">
                                    </div>
                                    <div class = "item-body">
                                        <div class = "item-title">Disease detection, check up in the laboratory</div>
                                        <p class = "text">In this case, the role of the health laboratory is very important to do a disease detection ...</p>
                                        <a target="_blank" href = "https://www.medscape.com/viewarticle/807880" class = "item-link text-blue d-flex align-items-baseline">
                                            <span class = "item-link-text">Read more</span>
                                            <span class = "item-link-icon">
                                                <i class = "fas fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </article>

                                <article class = "articles-item">
                                    <div class = "item-img">
                                        <img src = "assets/images/article-img-2.png">
                                    </div>
                                    <div class = "item-body">
                                        <div class = "item-title">Herbal medicines that are safe for consumption</div>
                                        <p class = "text">Herbal medicine is very widely used at this time because of its very good for your health ...</p>
                                        <a target="_blank" href = "https://www.healthline.com/nutrition/herbal-medicine" class = "item-link text-blue d-flex align-items-baseline">
                                            <span class = "item-link-text">Read more</span>
                                            <span class = "item-link-icon">
                                                <i class = "fas fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </article>

                                <article class = "articles-item">
                                    <div class = "item-img">
                                        <img src = "assets/images/article-img-3.png">
                                    </div>
                                    <div class = "item-body">
                                        <div class = "item-title">Natural care for healthy facial skin</div>
                                        <p class = "text">A healthy lifestyle should start from now and also for your skin health ...</p>
                                        <a target="_blank" href = "https://www.healthline.com/health/beauty-skin-care/natural-skin-care-routine" class = "item-link text-blue d-flex align-items-baseline">
                                            <span class = "item-link-text">Read more</span>
                                            <span class = "item-link-icon">
                                                <i class = "fas fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <footer class = "footer">
                <div class = "container">
                    <div class = "footer-content">
                        <div class = "footer-list d-grid text-white">
                            <div class = "footer-item">
                                <a href = "#" class = "navbar-brand d-flex align-items-center">
                                    <span class = "brand-shape d-inline-block text-white">M</span>
                                    <span class = "brand-text fw-7">FindMyHealth</span>
                                </a>
                                <p class = "text-white">FindMyHealth provides information about medical cabinets, accessible on mobile and online for everyone</p>
                                <p class = "text-white copyright-text">&copy; FindMyHealth PTY LTD 2023. All rights reserved.</p>
                            </div>

                            <div class = "footer-item">
                                <h3 class = "footer-item-title">Company</h3>
                                <ul class = "footer-links">
                                    <li><a href = "#">About</a></li>
                                    <li><a href = "cabinets.php">Find a doctor</a></li>
                                    <li><a href = "#">Apps</a></li>
                                </ul>
                            </div>

                            <div class = "footer-item">
                                <h3 class = "footer-item-title">Region</h3>
                                <ul class = "footer-links">
                                    <li><a href = "#">Romania</a></li>
                                </ul>
                            </div>

                            <div class = "footer-item">
                                <h3 class = "footer-item-title">Help</h3>
                                <ul class = "footer-links">
                                    <li><a href = "#">Help center</a></li>
                                    <li><a href = "#">Contact support</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class = "footer-element-1">
                    <img src = "assets/images/element-img-4.png" alt = "">
                </div>
                <div class = "footer-element-2">
                    <img src = "assets/images/element-img-5.png" alt = "">
                </div>
            </footer>
        </div>
        







        <!-- jquery cdn -->
        <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
        <!-- owl carousel -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- custom js -->
        <script src = "assets/js/script.js"></script>
    </body>
</html>
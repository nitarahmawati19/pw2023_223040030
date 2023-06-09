<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" /> -->
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<title>TUBES 223040030</title>

<body id="home" class="scrollspy">
    <!-- navbar -->
    <nav class="navbar bg-dark" data-bs-theme="dark">
        <div class="navbar-fixed fixed-top">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#home"><img src="img/title/logo.jpg" alt="logo" width="100" height="39"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle
                            navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#explore">Explore</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#products">Products</a>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#contact">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="login.html">Login</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-dark" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </nav>

    <!-- slider -->


    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider/home.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider/home.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider/home.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- explore -->
    <section id="explore" class="grey lighten-3 scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="light center grey-text text-darken-3">Explore</h3>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <img src="img/explore/qm.png" alt>
                        <h5>Quality Material</h5>
                        <p>At Baseus, quality ranks on top to ensure all our
                            user gets the most out of our products with an
                            extend time use while remaining ecofriendly to
                            contribute just a little bit.</p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <img src="img/explore/ac.png">
                        <h5>Advanced Tech</h5>
                        <p>Our product stands apart by integrating the
                            industry-leading GaN technology. We are proud to be
                            the pioneer of the worlds premier GaN charger, and
                            we will continue to built-in advanced tech into our
                            product.</p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <img src="img/explore/sd.png">
                        <h5>Sophisticated Design</h5>
                        <p>Every single piece of gadget we engineer carries all
                            our thoughts and efforts to deliver users an
                            optimized experience that makes usage a breeze,
                            without compromising the look and the touch.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients -->
    <div id="clients" class="parallax-container scrollspy">
        <div class="parallax"><img src="img/clients/wtb.png"></div>
        <div class="container clients">
            <h3 class="center light black-text">Where To Buy</h3>
            <div class="row">
                <div class="col m4 s12 center">
                    <img src="img/clients/amazon.png" alt>
                </div>
                <div class="col m4 s12 center">
                    <img src="img/clients/shopee.png" alt>
                </div>
                <div class="col m4 s12 center">
                    <img src="img/clients/aliexpress.png" alt>
                </div>
                <div class="col m4 s12 center">
                    <img src="img/clients/lazada.png" alt>
                </div>
            </div>
        </div>
    </div>

    <!-- catalog -->
    <section id="products" class="products scrollspy">
        <div class="container">
            <h3 class="light center grey-text text-darken-3">Best Selling
                Products</h3>
            <div class="row">
                <div class="col m3 s12">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/catalog/wm02.png">
                        </div>
                        <div class="card-content">
                            <p>Baseus Bowie WM02 Plus TWS Wireless Earbuds</p>
                        </div>
                        <div class="card-action">
                            <a href="https://www.baseus.com/products/bowie-wm02-plus-tws-wireless-earbuds?_pos=1&_fid=fbd871061&_ss=c" class="waves-effect yellow btn">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="col m3 s12">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/catalog/m2plus.png">
                        </div>
                        <div class="card-content">
                            <p>Baseus Bowie M2 Plus TWS Wireless Earbuds</p>
                        </div>
                        <div class="card-action">
                            <a href="https://www.baseus.com/products/bowie-m2-plus-tws-wireless-earbuds?_pos=14&_fid=c9b3792f5&_ss=c" class="waves-effect yellow btn">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="col m3 s12">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/catalog/simus1.png">
                        </div>
                        <div class="card-content">
                            <p>Baseus SIMU S1 Pro ANC TWS Wireless Earbuds</p>
                        </div>
                        <div class="card-action">
                            <a href="https://www.baseus.com/products/simu-s1-pro-anc-tws-wireless-earbuds?_pos=17&_fid=c9b3792f5&_ss=c" class="waves-effect yellow btn">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="col m3 s12">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/catalog/starlord.png">
                        </div>
                        <div class="card-content">
                            <p>Baseus Star-Lord Power Bank 22.5W 30000mAh</p>
                        </div>
                        <div class="card-action">
                            <a href="https://www.baseus.com/products/star-lord-power-bank-22-5w-30000mah?_pos=9&_fid=c9b3792f5&_ss=c" class="waves-effect yellow btn">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m3 s12">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/catalog/airpow.png">
                        </div>
                        <div class="card-content">
                            <p>Baseus Airpow Power Bank 20W 20000mAh</p>
                        </div>
                        <div class="card-action">
                            <a href="https://www.baseus.com/products/airpow-power-bank-20w-20000mah?_pos=11&_fid=c9b3792f5&_ss=c" class="waves-effect yellow btn">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="col m3 s12">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/catalog/elf.png">
                        </div>
                        <div class="card-content">
                            <p>Baseus Elf Power Bank 65W 20000mAh</p>
                        </div>
                        <div class="card-action">
                            <a href="https://www.baseus.com/products/elf-power-bank-65w-20000mah?_pos=10&_fid=c9b3792f5&_ss=c" class="waves-effect yellow btn">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="col m3 s12">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/catalog/gan.png">
                        </div>
                        <div class="card-content">
                            <p>Baseus GaN 2 in 1 Power Bank 45W 10000mAh</p>
                        </div>
                        <div class="card-action">
                            <a href="https://www.baseus.com/products/gan-2-in-1-power-bank-45w-10000mah?_pos=15&_fid=c9b3792f5&_ss=c" class="waves-effect yellow btn">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="col m3 s12">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/catalog/adaman.png">
                        </div>
                        <div class="card-content">
                            <p>Baseus Adaman2 Power Bank 30W 20000mAh VOOC</p>
                        </div>
                        <div class="card-action">
                            <a href="https://www.baseus.com/products/adaman2-power-bank-30w-20000mah-vooc?_pos=13&_fid=c9b3792f5&_ss=c" class="waves-effect yellow btn">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us -->
    <section id="contact" class="contact grey lighten-3 scrollspy">
        <div class="container">
            <h3 class="light center grey-text text-darken-3">Contact Us</h3>
            <div class="row">
                <div class="col m5 s12">
                    <div class="card-panel black darken-4 center
                        white-text">
                        <i class="material-icons">email</i>
                        <h5>Contact</h5>
                        <p>Get in touch with us about any issues you're
                            having, we're always here to help.</p>
                    </div>
                    <ul class="collection with-header">
                        <li class="collection-header">
                            <h5>Phone</h5>
                        </li>
                        <li class="collection-item">Tel: +18002208056</li>
                        <li class="collection-item">Mon-Fri: UTC-5</li>
                        <li class="collection-item">10:00AM-18:00.PM</li>
                        <li class="collection-item">(Except on national
                            holidays).</li>
                    </ul>
                </div>

                <div class="col m7 s12">
                    <form>
                        <div class="card-panel">
                            <h5>Please fill out this form</h5>
                            <div class="input-field">
                                <input type="text" name="name" id="name" required class="validate">
                                <label for="name">Name</label>
                            </div>
                            <div class="input-field">
                                <input type="email" name="email" id="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="text" name="phone" id="phone">
                                <label for="phone">Phone Number</label>
                            </div>
                            <div class="input-field">
                                <textarea name="message" id="message" class="materialize-textarea"></textarea>
                                <label for="message">Message</label>
                            </div>
                            <button type="submit" class="btn yellow">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="black darken-4 white-text center">
        <p>CopyRight 2023 Nta Rahmawati All Rights Reserved</p>
        <footer>

            <!--JavaScript at end of body for optimized loading-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

            <script type="text/javascript" src="js/materialize.min.js">
                const sideNav = document.querySelectorAll('.sidenav')
                M.Sidenav.init(sideNav);

                const slider = document.querySelectorAll('.slider');
                M.Slider.init(slider, {
                    indicators: false,
                    height: 500,
                    transition: 600,
                    interval: 3000
                });

                const parallax = document.querySelectorAll('.parallax')
                M.Parallax.init(parallax);

                const materialbox = document.querySelectorAll('.materialboxed')
                M.Materialbox.init(materialbox);

                const scroll = document.querySelectorAll('.scrollspy')
                M.ScrollSpy.init(scroll, {
                    scrollOffset: 50
                });
            </script>
</body>

</html>
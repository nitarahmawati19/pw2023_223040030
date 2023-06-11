<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<title>TUBES 223040030</title>

<body id="home" class="scrollspy overflow-x-hidden">
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
                                <a class="nav-link active" aria-current="page" href="login.php">Login</a>
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
    <div id="carouselExample" class="carousel slide pt-5">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider/home.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider/home1.jpg" class="d-block w-100" alt="...">
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
            <h3 class="light center grey-text text-darken-3">Explore</h3>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <img src="img/explore/qm.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Quality Material</h5>
                            <p class="card-text">At Baseus, quality ranks on top to ensure all our
                                user gets the most out of our products with an
                                extend time use while remaining ecofriendly to
                                contribute just a little bit.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img/explore/ac.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Advanced Tech</h5>
                            <p class="card-text">Our product stands apart by integrating the
                                industry-leading GaN technology. We are proud to be
                                the pioneer of the worlds premier GaN charger, and
                                we will continue to built-in advanced tech into our
                                product.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img/explore/sd.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sophisticated Design</h5>
                            <p class="card-text">Every single piece of gadget we engineer carries all
                                our thoughts and efforts to deliver users an
                                optimized experience that makes usage a breeze,
                                without compromising the look and the touch.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Clients -->
    <!-- <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <img src="img/clients/amazon.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/clients/lazada.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/clients/shopee.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- catalog -->
    <section id="products">
        <div class="container">
            <h3 class="light center grey-text text-darken-3">Best Selling
                Products</h3>
            <div class="row row-whith-wide-cards">
                <div class="col d-flex align-items-stretch">
                    <div class="card">
                        <img src="img/catalog/wm02.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Baseus Bowie WM02 Plus TWS Wireless Earbuds</h5>
                            <a href="https://www.baseus.com/products/bowie-wm02-plus-tws-wireless-earbuds?_pos=1&_fid=fbd871061&_ss=c" class="btn btn-warning">Shop Now</a>
                        </div>
                    </div>
                </div>

                <div class="col d-flex align-items-stretch">
                    <div class="card">
                        <img src="img/catalog/m2plus.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Baseus Bowie M2 Plus TWS Wireless Earbuds</h5>
                            <a href="https://www.baseus.com/products/bowie-m2-plus-tws-wireless-earbuds?_pos=14&_fid=c9b3792f5&_ss=c" class="btn btn-warning">Shop Now</a>
                        </div>
                    </div>
                </div>

                <div class="col d-flex align-items-stretch">
                    <div class="card">
                        <img src="img/catalog/simus1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Baseus SIMU S1 Pro ANC TWS Wireless Earbuds</h5>
                            <a href="https://www.baseus.com/products/simu-s1-pro-anc-tws-wireless-earbuds?_pos=17&_fid=c9b3792f5&_ss=c" class="btn btn-warning">Shop Now</a>
                        </div>
                    </div>
                </div>

                <div class="col d-flex align-items-stretch">
                    <div class="card">
                        <img src="img/catalog/starlord.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Baseus Star-Lord Power Bank 22.5W 30000mAh</h5>
                            <a href="https://www.baseus.com/products/star-lord-power-bank-22-5w-30000mah?_pos=9&_fid=c9b3792f5&_ss=c" class="btn btn-warning">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-whith-wide-cards mt-3">
                <div class="col d-flex align-items-stretch">
                    <div class="card">
                        <img src="img/catalog/airpow.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Baseus Airpow Power Bank 20W 20000mAh</h5>
                            <a href="https://www.baseus.com/products/airpow-power-bank-20w-20000mah?_pos=11&_fid=c9b3792f5&_ss=c" class="btn btn-warning">Shop Now</a>
                        </div>
                    </div>
                </div>

                <div class="col d-flex align-items-stretch">
                    <div class="card">
                        <img src="img/catalog/gan.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Baseus GaN 2 in 1 Power Bank 45W 10000mAh</h5>
                            <a href="https://www.baseus.com/products/gan-2-in-1-power-bank-45w-10000mah?_pos=15&_fid=c9b3792f5&_ss=c" class="btn btn-warning">Shop Now</a>
                        </div>
                    </div>
                </div>

                <div class="col d-flex align-items-stretch">
                    <div class="card">
                        <img src="img/catalog/adaman.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Baseus Adaman2 Power Bank 30W 20000mAh VOOC</h5>
                            <a href="https://www.baseus.com/products/adaman2-power-bank-30w-20000mah-vooc?_pos=13&_fid=c9b3792f5&_ss=c" class="btn btn-warning">Shop Now</a>
                        </div>
                    </div>
                </div>

                <div class="col d-flex align-items-stretch">
                    <div class="card">
                        <img src="img/catalog/elf.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Baseus Elf Power Bank 65W 20000mAh</h5>
                            <a href="https://www.baseus.com/products/elf-power-bank-65w-20000mah" class="btn btn-warning">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="py-5 bg-dark text-white">
        <div class="row">
            <h3>Contact Us</h3>
            <div class="row">
                <div class="col">
                    <div class="card-footer">
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

                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5>Newsletter</h5>
                        <p>Get the latest news from Baseus.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email
                                address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-warning" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>© 2023 Nita Rahmawati. All rights reserved.</p>
            </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
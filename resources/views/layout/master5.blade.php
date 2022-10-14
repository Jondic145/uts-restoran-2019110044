<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contacts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/form.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/sForm.js"></script>
    <script src="js/Forms.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">
    <![endif]-->
</head>

<body>
    <div class="main">
        <!--==============================header=================================-->
        <header>
            <div class="zerogrid">
                <div class="col-full">
                    <div class="wrap-col">
                        <h1><a href="index.html"><img src="images/logo.png" alt="EXTERIOR"></a> </h1>

                        <div class="menu_block">
                            <nav>
                                <ul class="sf-menu">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li class="{{ route('about') }}"><a href="index-1.html">About Us</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Products</a></li>
                                    <li><a href="{{ route('testimonial') }}">Testimonial</a></li>
                                    <li class="current"><a href="{{ route('contact') }}">Contacts</a></li>
                                </ul>
                            </nav>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </header>
        <main role="main" class="inner cover">
            @yield('content')
        </main>
        <!--=======content================================-->

        <div class="content">
            <div class="zerogrid">
                <div class="row">
                    <div class="col-2-5">
                        <div class="wrap-col">
                            <h2>Find Us</h2>
                            <div class="map"></div>
                            <address>
                                <dl>
                                    <dt>
                                        <p>The Company Name Inc.<br>
                                            8901 Marmora Road,<br>
                                            Glasgow, D04 89GR.</p>
                                    </dt>
                                    <dd><span>Freephone:</span>+1 800 559 6580</dd>
                                    <dd><span>Telephone:</span>+1 800 603 6035</dd>
                                    <dd><span>FAX:</span>+1 800 889 9898</dd>
                                </dl>
                            </address>

                        </div>
                    </div>
                </div>
                <div class="col-1-5">
                    <div class="wrap-col">
                        <!--empty-->
                    </div>
                </div>
                <div class="row">
                    <div class="bottom_block">
                        <div class="col-1-2">
                            <h3>Follow Us</h3>
                            <div class="socials">
                                <a href="#"></a>
                                <a href="#"></a>
                                <a href="#"></a>
                            </div>
                            <nav>
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('product') }}">Menu</a></li>
                                    <li><a href="{{ route('testimonial') }}">Portfolio</a></li>
                                    <li class="current"><a href="{{ route('contact') }}">Contacts</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-1-2">
                            <h3>Email Updates</h3>
                            <p class="col1">Join our digital mailing list and get news<br> deals and be first to know
                                about events</p>
                            <form id="newsletter">
                                <div class="success">Your subscribe request has been sent!</div>
                                <label class="email">
                                    <input type="email" value="Enter e-mail address">
                                    <a href="#" class="btn" data-type="submit">subscribe</a>
                                    <span class="error">*This is not a valid email address.</span>
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================footer=================================-->

    <footer>
        <div class="zerogrid">
            <div class="col-full">
                <div class="wrap-col">
                    <strong>Jonathan Dicky 2019110044</strong> &nbsp;&nbsp; |&nbsp;&nbsp; <a href="#">PBWL</a>
                    &nbsp;&nbsp;|&nbsp;&nbsp; STMIK LIKMI
                </div>
            </div>
        </div>
    </footer>
</body>

</html>

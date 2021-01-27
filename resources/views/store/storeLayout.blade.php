<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Fresk_Och_Snab</title>

    {{-- <link rel="shortcut icon" href="{{asset('favicon.png')}}" /> --}}
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/slick.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/slick-theme.css')}}" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/nouislider.min.css')}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/style2.css')}}" />

    <!-- JQuery and Validator Plugins -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    {{-- custom css --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .dropdown-submenu {
            position: relative;
        }

        /*
        .dropdown-menu ul {
            background-color: lightblue;
            width: 110px;
            height: 110px;
            overflow: auto;
        }
*/
        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
        }

        /* end style menu */

        /* start style hover */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* End style hover  */

        @media only screen and (max-width: 767px) {
            #head_links {
                visibility: hidden;
            }

            .custom_search_top {
                text-align: center;
            }

            .header-ctn {
                width: 100%;
            }
        }
    </style>

</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul id="head_links" class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +000-00-00-00</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> Sweden@Fresk_Och_Snabb.se</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> Sweden, Stockholm</a></li>
                </ul>
                <ul class="header-links pull-right">
                    @if(session()->has('user'))
                    <li><a style="color:white" href="{{route('user.history')}}">{{session()->get('user')->full_name}}
                        </a></li>
                    <li><a href="{{route('user.logout')}}"><i class="fa fa-user-o"></i> Logout</a></li>
                    @else

                    <li><a href="#"><i class="fa fa-user-o"></i> Login</a></li>

                    <li><a href="{{route('user.signup')}}"><i class="fa fa-user-o"></i> SignUp</a></li>
                    @endif

                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="{{route('user.home')}}" class="logo">
                                {{--
                                <img src="{{asset('img/logo.png')}}" alt="">
                                --}}
                                <h3 style="color: #FFF ; margin-top: 17px">Fresk_Och_Snabb</h3>
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form action="{{route('user.search')}}" method="get">
                                <div class="custom_search_top">
                                    <input class="input" style="border-radius: 40px 0px 0px 40px;" name="n"
                                        placeholder="Search here">
                                    <button class="search-btn">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Cart -->
                            <div class="dropdown">
                                <a class="dropdown-toggle " id="custom_shopping_cart" href="{{route('user.cart')}}">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Your Cart</span>
                                </a>

                            </div>
                            <!-- /Cart -->

                            <!-- Menu Toogle -->
                            <div class="menu-toggle pull-right">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <div class="dropdown">

                    <!-- NAV -->
                    <ul class="dropdown-menu-main-nav nav navbar-nav">
                        <li class="{{Route::is('user.home') ? 'active' : ''}}"><a href="{{route('user.home')}}">Home</a>
                        </li>

                        <!-- // group li Foodstuffs //-->
                        @foreach($cat as $c)
                        @if($c['name']=='Foodstuffs')
                        <li class="dropdown-submenu">
                            <a class="test" href="#">{{$c->name}}<span class="caret">&raquo;</span></a>

                            <ul class="dropdown-menu">
                                <!-- li Canned Food -->
                                <div class="dropdown-content">
                                    <li class="dropdown-submenu">
                                        <a class="test" tabindex="-1" href="#">
                                            Canned Food
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Fava Beans</a></li>
                                            <li><a href="#">Hummus</a></li>
                                            <li><a href="#">Boiled Chickpea</a></li>
                                            <li><a href="#">Falafel</a></li>
                                            <li><a href="#">Tahini</a></li>
                                            <li><a href="#">Thyme</a></li>
                                            <li><a href="#">Molokhia & Dried vegetables</a></li>
                                            <li><a href="#">Baba Ganoush</a></li>
                                            <li><a href="#">Pickles</a></li>
                                            <li><a href="#">Artichoke</a></li>
                                            <li><a href="#">Tomato Paste</a></li>
                                            <li><a href="#">Pomegranate & dates Syrup</a></li>
                                            <li><a href="#">Cheese & Yogurts</a></li>
                                            <li><a href="#">Makdous</a></li>
                                            <li><a href="#">Grape Leaves</a></li>
                                            <li><a href="#">Olive</a></li>
                                            <li><a href="#">Jam</a></li>
                                            <li><a href="#">Mortadella & Hot Dogs</a></li>
                                            <li><a href="#">Tuna & Sardine</a></li>
                                            <li><a href="#">Pepper Sauce</a></li>
                                            <li><a href="#">Pineapple Slice</a></li>
                                            <li><a href="#">Halva</a></li>
                                            <li><a href="#">Ready Food</a></li>
                                            <li><a href="#">Pea</a></li>
                                            <li><a href="#">Mushroom & Corn</a></li>
                                            <li><a href="#">Lupine</a></li>
                                            <li><a href="#">Roasted Eggplant</a></li>
                                        </ul>
                                    </li>

                                    <!-- end li Canned Food -->
                                    <!-- li Rice & Grains -->
                                    <li class="dropdown-submenu">
                                        <a class="test" tabindex="-1" href="#">
                                            Rice & Grains
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Rice</a></li>
                                            <li><a href="#">Bulgur</a></li>
                                            <li><a href="#">Lentils</a></li>
                                            <li><a href="#">Freekeh</a></li>
                                            <li><a href="#">Chickpeas</a></li>
                                            <li><a href="#">Couscous & Keshk</a></li>
                                            <li><a href="#">Beans</a></li>
                                            <li><a href="#">Corn</a></li>
                                            <li><a href="#">Flour</a></li>
                                            <li><a href="#">Thread Noodles</a></li>
                                            <li><a href="#">Raw Beans</a></li>
                                            <li><a href="#">Pasta</a></li>
                                            <li><a href="#">Semolina</a></li>
                                            <li><a href="#">Oats & Breakfast Cereals</a></li>
                                        </ul>
                                    </li>
                                    <!-- end li Rice & Grains -->
                                    <!-- li Beverages -->
                                    <li class="dropdown-submenu">
                                        <a class="test" tabindex="-1" href="#">
                                            Beverages
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Coffee</a></li>
                                            <li><a href="#">Tea</a></li>
                                            <li><a href="#">Herbal Tea</a></li>
                                            <li><a href="#">Juices & Soda</a></li>
                                            <li><a href="#">Mate</a></li>
                                            <li><a href="#">Milk</a></li>
                                            <li><a href="#">Milo</a></li>
                                            <li><a href="#">Sahlab</a></li>
                                            <li><a href="#">Licorice & Tamarind </a></li>
                                        </ul>
                                    </li>
                                    <!-- end li Beverages -->
                                    <!-- li Oil & Ghee -->
                                    <li class="dropdown-submenu">
                                        <a class="test" tabindex="-1" href="#">
                                            Oil & Ghee
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Olive Oil</a></li>
                                            <li><a href="#">Sunflower Oil</a></li>
                                            <li><a href="#">Vegetarian Ghee</a></li>
                                            <li><a href="#">Butter Ghee</a></li>
                                        </ul>
                                    </li>
                                    <!-- end li Oil & Ghee -->

                                    <!-- li Spices & Flavorings -->
                                    <li class="dropdown-submenu">
                                        <a class="test" tabindex="-1" href="#">
                                            Spices & Flavorings
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Spices</a></li>
                                            <li><a href="#">Flavorings</a></li>
                                            <li><a href="#">Soup</a></li>
                                            <li><a href="#">Salt & Suga</a></li>
                                        </ul>
                                    </li>
                                    <!-- end li Spices & Flavorings -->
                                    <!-- li  Snacks & Nuts -->
                                    <li class="dropdown-submenu">
                                        <a class="test" tabindex="-1" href="#">
                                            Snacks & Nuts
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Chips</a></li>
                                            <li><a href="#">Biscuits</a></li>
                                            <li><a href="#">Chewing Gum</a></li>
                                            <li><a href="#">Jelly (Halal)</a></li>
                                            <li><a href="#">Candies (Halal)</a></li>
                                            <li><a href="#">Nuts</a></li>
                                            <li><a href="#">Bon Bon & Chocolate</a></li>
                                            <li><a href="#">Dates & Dried Fruit</a></li>
                                        </ul>
                                    </li>
                                    <!-- end li Snacks & Nuts -->
                                    <!-- li  Baking -->
                                    <li class="dropdown-submenu">
                                        <a class="test" tabindex="-1" href="#">
                                            Baking
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Confectionery Supplies</a></li>
                                            <li><a href="#">Mixtures</a></li>
                                        </ul>
                                    </li>
                                    <!-- end li Baking -->
                            </ul>

                        </li>
                        @endif
                        @endforeach
                        <!-- // End group li Foodstuffs //-->

                        <!-- // start group li Pastries & Sweets //-->
                        @foreach($cat as $c)
                        @if($c['name']=='Pastries & Sweets')
                        <li class="dropdown-submenu">
                            <a class="test" href="#">{{$c->name}}<span class="caret">&raquo;</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Bread (Fresh)</a></li>
                                <li><a href="#">Pastries</a></li>
                                <li><a href="#">Arabic Sweets</a></li>
                            </ul>
                        </li>
                        @endif
                        @endforeach
                        <!-- // End group li Pastries & Sweets //-->

                        <!-- // start group li Household Utensils //-->
                        @foreach($cat as $c)
                        @if($c['name']=='Household Utensils')
                        <li class="dropdown-submenu">
                            <a class="test" href="#">{{$c->name}}<span class="caret">&raquo;</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Kitchen</a></li>
                                <li><a href="#">BBQ Accessories</a></li>
                                <li><a href="#">Cleaning Accessories</a></li>
                                <li><a href="#">Anti Bacteria</a></li>
                            </ul>
                        </li>
                        @endif
                        @endforeach
                        <!-- // End group li Household Utensils //-->

                        <!-- // start group li Orientals //-->

                        @foreach($cat as $c)
                        @if($c['name']=='Orientals')
                        <li class="dropdown-submenu">
                            <a class="test" href="#">{{$c->name}}<span class="caret">&raquo;</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Artworks</a></li>
                                <li><a href="#">Games</a></li>
                            </ul>
                        </li>
                        @endif
                        @endforeach

                        <!-- // End group li Orientals //-->

                        <!-- // start group li Kiosk //-->
                        @foreach($cat as $c)
                        @if($c['name']=='Kiosk')
                        <li>
                            <a href="#">{{$c->name}}</a>
                        </li>
                        @endif
                        @endforeach
                        <!-- // End group li Kiosk //-->

                        <!-- // start group li Health & Beauty  //-->
                        @foreach($cat as $c)
                        @if($c['name']=='Health & Beauty ')
                        <li class="dropdown-submenu">
                            <a class="test" href="#">{{$c->name}}<span class="caret">&raquo;</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Soap & Bath Sponge</a></li>
                                <li><a href="#">Depilatory</a></li>
                                <li><a href="#">Hair Care</a></li>
                                <li><a href="#">Shampoo</a></li>
                                <li><a href="#">Creams</a></li>
                                <li><a href="#">Perfumes</a></li>
                            </ul>
                        </li>
                        @endif
                        @endforeach
                        <!-- // End group li Health & Beauty  //-->

                        <!-- // start group li Kids //-->
                        @foreach($cat as $c)
                        @if($c['name']=='Kids')
                        <li>
                            <a href="#">{{$c->name}}</a>
                        </li>
                        @endif
                        @endforeach
                        <!-- // End group li Kids //-->

                        <!-- // start group li Prices drop  //-->
                        @foreach($cat as $c)
                        @if($c['name']=='Prices drop ')
                        <li>
                            <a href="#">{{$c->name}}</a>
                        </li>
                        @endif
                        @endforeach
                        <!-- // End group li Prices drop  //-->

                        <!-- // start group li New  //-->
                        @foreach($cat as $c)
                        @if($c['name']=='New ')
                        <li>
                            <a href="#">{{$c->name}}</a>
                        </li>
                        @endif
                        @endforeach
                        <!-- // End group li New  //-->

                        <!-- // start group li products  //-->
                        @foreach($cat as $c)
                        @if($c['name']=='products ')
                        <li>
                            <a href="#">{{$c->name}}</a>
                        </li>
                        @endif
                        @endforeach
                        <!-- // End group li products  //-->

                        <!-- // start group li Best sales   //-->
                        @foreach($cat as $c)
                        @if($c['name']=='Best sales ')
                        <li>
                            <a href="#">{{$c->name}}</a>
                        </li>
                        @endif
                        @endforeach
                        <!-- // End group li Best sales   //-->
                    </ul>
                    <!-- /NAV -->
                </div>
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            @if(Route::is('user.home'))
            <div class="row">
                <!-- shop -->
                @php
                $counter=0;
                @endphp
                @foreach($cat as $c)
                @php
                $counter++;
                if($counter==4)
                break;

                @endphp
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop0{{$index++}}.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- /shop -->
                @endforeach
            </div>
            @endif
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- SECTION -->


    @yield('content')

    <!-- /SECTION -->

    <div id="newsletter" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter">
                        <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                        <form>
                            <input class="input" type="email" placeholder="Enter Your Email">
                            <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                        </form>
                        <ul class="newsletter-follow">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /NEWSLETTER -->

    <!-- FOOTER -->
    <footer id="footer">
        <!-- top footer -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">About Us</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut.</p>
                            <ul class="footer-links">
                                <li><a href="#"><i class="fa fa-phone"></i> +000-00-00-00</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i> Sweden@Fresk_Och_Snabb.se</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i> Sweden, Stockholm</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Categories</h3>
                            <ul class="footer-links">
                                <li><a href="#">Foodstuffs</a></li>
                                <li><a href="#">Pastries & Sweets</a></li>
                                <li><a href="#">Household Utensils</a></li>
                                <li><a href="#">Orientals</a></li>
                                <li><a href="#">Kiosk</a></li>
                                <li><a href="#">And More</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Information</h3>
                            <ul class="footer-links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Service</h3>
                            <ul class="footer-links">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">View Cart</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Track My Order</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /top footer -->

        <!-- bottom footer -->
        <div id="bottom-footer" class="section">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="footer-payments">
                            <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                            <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bottom footer -->
    </footer>
    <!-- /FOOTER -->


    <!-- jQuery Plugins -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/nouislider.min.js')}}"></script>
    <script src="{{asset('js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/lib/jquery.js')}}"></script>
    <script src="{{asset('js/dist/jquery.validate.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('.dropdown-submenu a.test').mouseover(function(e) {
                $(this).next('ul').toggle()
                e.stopPropagation()
                e.preventDefault()
            })
        })
    </script>>


</body>

</html>
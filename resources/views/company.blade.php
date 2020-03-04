<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trouvez une agence Web pour votre prochain projet</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="asset/cards-gallery.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="template/images/favicon.ico" />

    <!-- font -->
    <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900|Nunito:200,300,400,400i,600,600i,700,700i,800,800i,900">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugins-css.css" />

    <!-- Typography -->
    <link rel="stylesheet" type="text/css" href="css/typography.css" />

    <!-- Shortcodes -->
    <link rel="stylesheet" type="text/css" href="css/shortcodes/shortcodes.css" />

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <!-- marketing -->
    <link rel="stylesheet" type="text/css" href="css/marketing.css" />

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />

    <!-- Style customizer -->
    <link rel="stylesheet" type="text/css" href="css/skins/skin-red.css" data-style="styles"/>

    <style>
        html, body {

        }
        #pre-loader {
            background-color: rgba(0, 0, 0, 0.60);
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
        .team-list{

            border: 2px groove black;
            border-radius: 5px;

        }
        .team-description{
            height: 230px;
            overflow:hidden;

        }
    </style>

</head>
<body>

<div class="wrapper">

    <div id="pre-loader">
        <img src="img/pre-loader/loader-04.svg" alt="">
    </div>

    <!--=================================
    header -->

    <header id="header" class="header light topbar-dark">

        <!--=================================
         mega menu -->

        <!-- <div class="topbar">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-6 col-md-6 xs-mb-10">
                         <div class="topbar-call text-center text-md-left">
                             <ul>
                                 <li><i class="fa fa-envelope-o theme-color"></i> gethelp@webster.com</li>
                                 <li><i class="fa fa-phone"></i> <a href="tel:+7042791249"> <span>+(704) 279-1249 </span> </a> </li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                         <div class="topbar-social text-center text-md-right">
                             <ul>
                                 <li><a href="#"><span class="ti-facebook"></span></a></li>
                                 <li><a href="#"><span class="ti-instagram"></span></a></li>
                                 <li><a href="#"><span class="ti-google"></span></a></li>
                                 <li><a href="#"><span class="ti-twitter"></span></a></li>
                                 <li><a href="#"><span class="ti-linkedin"></span></a></li>
                                 <li><a href="#"><span class="ti-dribbble"></span></a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
-->

        <div class="menu">
            <!-- menu start -->
            <nav id="menu" class="mega-menu">
                <!-- menu list items container -->
                <section class="menu-list-items">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <!-- menu logo -->
                                <ul class="menu-logo">
                                    <li>
                                        <a href="/"><img src="img/delisoft.png" alt="logo"> </a>
                                    </li>
                                </ul>
                                <!-- menu links -->
                                <div class="menu-bar">

                                    @if (Route::has('login'))
                                        <div class="top-right links">
                                            @if (Auth::check())
                                                <a href="{{ url('/home') }}">Home</a>
                                            @else
                                                <a href="{{ url('/login') }}">Login</a>
                                                <a href="{{ url('/register') }}">Register</a>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </nav>
            <!-- menu end -->
        </div>
    </header>

    <!--=================================
     header -->

    <!--=================================
     page-title-->

    <section class="page-title center bg-overlay-theme-50 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(template/images/03.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="page-title-name text-left">
                        <h1>[Titre de la Company]</h1>
                        <p>Company Short Description</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--=================================
    page-title -->

    <!--=================================
 single-->

    <section class="page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="mb-30">The best way is to develop and follow a plan. Start with your goals in mind and then work backwards to develop the plan. What steps are required to get you to the goals? Make the plan as detailed as possible. Try to visualize and then plan for, every possible setback.</h4>
                    <p> Commit the plan to paper and then keep it with you at all times. Review it regularly and ensure that every step takes you closer to your Vision and Goals. If the plan doesn’t support the vision then change it!</p>
                    <p>Michael Jordan and Bill Gates. We can look a bit further back in time to Albert Einstein or even further back to Abraham Lincoln. What made each of these people so successful? Motivation.</p>
                    <p>Positive pleasure-oriented goals are much more powerful motivators than negative fear-based ones. Although each is successful separately, the right combination of both is the most powerful motivational force known to humankind.</p>

                    <div class="row">
                        <div class="col-lg-4 col-sm-4 mt-30">
                            <h5>Budget</h5>
                            <p class="mt-20">Brand idantity </p>
                        </div>
                        <div class="col-lg-4 col-sm-4 mt-30">
                            <h5>Ville</h5>
                            <p class="mt-20">A Person</p>
                        </div>
                        <div class="col-lg-4 col-sm-4 mt-30">
                            <h5>Timeline</h5>
                            <p class="mt-20"><b>Start Date:</b> 09-01-2016 <span class="d-block"><b>Launch Date:</b> 11-11-2016</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img  class="img-fluid full-width" src="template/images/about/01.jpg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-40 mb-40">

                    <h4 class="mb-20">Description</h4>
                    <p>I coach my clients to practice the 3 D’s – Defer, Delegate or Delete. Can the particular activity be done later? Defer it! Can it be done by someone else? Delegate it! Does it need to be done at all? If not, consider deleting it! Posing these questions will help to keep you focused on what is truly important!</p>

                </div>
                <div class="col-md-6 mt-40 mb-40">
                    <h4>Expertises</h4>

                    <p class="mb-0"><b>Client:</b> envato</p>
                    <p class="mb-0"><b>Client:</b> envato</p>
                    <p class="mb-0"><b>Client:</b> envato</p>
                    <p class="mb-0"><b>Client:</b> envato</p>
                    <p class="mb-0"><b>Client:</b> envato</p>
                    <p class="mb-0"><b>Client:</b> envato</p>
                    <p class="mb-0"><b>Client:</b> envato</p>
                    <p class="mb-0"><b>Client:</b> envato</p>
                    <p class="mb-0"><b>Client:</b> envato</p>


                  <!--  <a class="button" href="#"> live preview </a> -->

                </div>
                <div class="col-lg-12">
                    <img src="template/images/03.jpg" class="img-fluid full-width mt-20">
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <img src="template/images/blog/02.jpg" class="img-fluid full-width mt-20">
                </div>
                <div class="col-md-6">
                    <img src="template/images/blog/01.jpg" class="img-fluid full-width mt-20">
                </div>
            </div>

        </div>
    </section>


    <!--=================================
     single-->

    <!--=================================
    footer -->

    <footer class="footer page-section-pt black-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-6 sm-mb-30">
                    <div class="footer-useful-link footer-hedding">
                        <h6 class="text-white mb-30 mt-10 text-uppercase">Navigation</h6>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Service</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 sm-mb-30">
                    <div class="footer-useful-link footer-hedding">
                        <h6 class="text-white mb-30 mt-10 text-uppercase">Useful Link</h6>
                        <ul>
                            <li><a href="#">Create Account</a></li>
                            <li><a href="#">Company Philosophy</a></li>
                            <li><a href="#">Corporate Culture</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 xs-mb-30">
                    <h6 class="text-white mb-30 mt-10 text-uppercase">Contact Us</h6>
                    <ul class="addresss-info">
                        <li> <p>Address: 17504 Carlton Cuevas Rd, Gulfport, MS, 39503</p> </li>
                        <li> <a href="tel:7042791249"> <span>+(704) 279-1249 </span> </a> </li>
                        <li>Email: letstalk@webster.com</li>
                    </ul>
                </div>
                <!-- Newsletter Signup
                <div class="col-lg-4 col-sm-6">
                    <h6 class="text-white mb-30 mt-10 text-uppercase">Subscribe to Our Newsletter</h6>
                    <p class="mb-30">Sign Up to our Newsletter to get the latest news and offers.</p>
                    <div class="footer-Newsletter">
                        <div id="mc_embed_signup_scroll">
                            <form action="php/mailchimp-action.php" method="POST" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate">
                                <div id="msg"> </div>
                                <div id="mc_embed_signup_scroll_2">
                                    <input id="mce-EMAIL" class="form-control" type="text" placeholder="Email address" name="email1" value="">
                                </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>
                                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                    <input type="text" name="b_b7ef45306f8b17781aa5ae58a_6b09f39a55" tabindex="-1" value="">
                                </div>
                                <div class="clear">
                                    <button type="submit" name="submitbtn" id="mc-embedded-subscribe" class="button button-border mt-20 form-button">  Get notified </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                -->
            </div>
            <div class="footer-widget mt-20">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <p class="mt-15"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> Webster </a> All Rights Reserved </p>
                    </div>
                    <!--
                    <div class="col-lg-6 col-md-6 text-left text-md-right">
                        <div class="social-icons color-hover mt-10">
                            <ul>
                                <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i> </a></li>
                                <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </footer>

    <!--=================================
     footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.cards-gallery', { animation: 'slideIn'});
    </script>

</div>
<div id="back-to-top"><a class="top arrow" href="#top"> <span style="padding-top: 15px">TOP</span></a></div>

<!--=================================
 jquery -->

<!-- jquery -->
<script src="js/jquery-3.3.1.min.js"></script>

<!-- plugins-jquery -->
<script src="js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = 'js/';</script>

<!-- custom -->
<script src="js/custom.js"></script>

</body>
</html>

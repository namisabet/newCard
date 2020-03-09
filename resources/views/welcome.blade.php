<?php
//Import

?>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trouvez une agence Web pour votre prochain projet</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />


        <!-- Favicon -->
        <link rel="icon" type="image/png" href="img/circle.png" />

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
        <link rel="stylesheet" type="text/css" href="css/skins/skin-green.css" data-style="styles"/>

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

                <section class="page-title center bg-overlay-theme-50 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(template/images/test.jpeg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="page-title-name text-left">
                                    <h1>[Titre du Site Web]</h1>
                                    <p class="desc">Positive pleasure-oriented goals are much more powerful motivators than negative fear-based ones. Although each is successful separately, the right combination of both is the most powerful motivational force known to humankind.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <!--=================================
                page-title -->

                <!--=================================
                team -->

                 <section class="marketing-team white-bg page-section-ptb">
                    <div class="container">
                        <div class="row">

                            <!-- Card Dynamic -->
                            <?php

                                    //Get Database
                                    $companies = DB::table('informations')->get();

                                    //Count number of total rows
                                    $total = count($companies);

                                    //Total pages
                                    $totalPages= ceil($total/10);

                                    //Initialize Loop
                                    $i=0;
                                    $page=0;
                                    $pageNo=1;

                                    //Check Page
                                    if(isset($_GET['page'])){
                                        $pageNo = $_GET['page'];
                                    }

                                    //Get right company ids depending on page number
                                    if ($pageNo == 1){
                                        $i=0;
                                    }
                                    else{
                                        $i=(($pageNo-1)*10);
                                    }


                                    //Dynamic Card Views
                                    for ($y=0;$y<10;$y++){
                                        //Next id
                                        $i++;
                                        //Get specific Row
                                        $companyinfo = DB::table('informations')->where('id',$i)->first();


                                        echo '<div class="col-lg-6 col-md-6 mb-30">';
                                            echo '<div class="team team-list">';
                                                echo '<div class="team-photo">';
                                                    echo '<a href="company?id='.$i.'">';
                                                        echo '<img class="img-fluid mx-auto" src="template/images/team/01.jpg" alt="">';
                                                    echo '</a>';
                                                echo '</div>';
                                                echo '<div class="team-description">';
                                                     echo '<div class="team-info">';
                                                        echo '<h5><a href="company?id='.$i.'"> '.$companyinfo->titre.' </a></h5>';
                                                        echo '<span>'.$companyinfo->titre.'</span>';
                                                     echo '</div>';
                                                     echo '<div class="team-contact">';
                                                            echo '<span class="call"> '.$companyinfo->ville.' </span>';
                                                            echo '<span class="email">'.$companyinfo->budget.'</span>';
                                                            echo '<p  class="desc" style="font-size: 12px">'.$companyinfo->description.'</p>';
                                                     echo '</div>';
                                                echo '</div>';
                                            echo '</div>';
                                        echo '</div>';
                                    }

                                /* Dynamic Card Template
                                echo '<div class="col-lg-6 col-md-6 mb-30">';
                                echo '<div class="team team-list">';
                                echo '<div class="team-photo">';
                                echo '<a href="company?id=1">';
                                echo '<img class="img-fluid mx-auto" src="template/images/team/01.jpg" alt="">';
                                echo '</a>';
                                echo '</div>';
                                echo '<div class="team-description">';
                                echo '<div class="team-info">';
                                echo '<h5><a href="company?id=1"> Company Logo A</a></h5>';
                                echo '<span>Company Name A</span>';
                                echo '</div>';
                                echo '<div class="team-contact">';
                                echo '<span class="call"> City </span>';
                                echo '<span class="email">Budget</span>';
                                echo '<p  class="desc">Description, description, description, description, description</p>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                */
                                //echo '';
                            ?>
                            <!-- Card HTML -->
                            <!-- Card Start -->
                            <!--
                            <div class="col-lg-6 col-md-6 mb-30">
                                <div class="team team-list">
                                    <div class="team-photo">
                                        <a href="company?id=1">
                                            <img class="img-fluid mx-auto" src="template/images/team/01.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="team-description">
                                        <div class="team-info">
                                            <h5><a href="company?id=1"> Company Logo A</a></h5>
                                            <span>Company Name A</span>
                                        </div>
                                        <div class="team-contact">
                                            <span class="call"> City </span>
                                            <span class="email">Budget</span>
                                            <p  class="desc">Description, description, description, description, description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            -->
                            <!-- Card End -->

                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center mt-30">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">

                                        <?php
                                                //Dynamic Page Numbers

                                                $next=$pageNo+1;

                                                //Page == 1
                                                if($pageNo==1){

                                                    $previous=$pageNo-1;

                                                    //Previous page
                                                    echo'<li class="page-item">';
                                                    echo'<a class="page-link" href="/" aria-label="Previous">';
                                                    echo'<span aria-hidden="true">&laquo;</span>';
                                                    echo'<span class="sr-only">Previous</span>';
                                                    echo'</a>';
                                                    echo'</li>';

                                                    for($i=$pageNo;$i<$pageNo+3;$i++){
                                                        echo '<li class="page-item"><a class="page-link" href="/?page='.$i.'">'.$i.'</a></li>';
                                                    }
                                                }
                                                else{ //Page > 1
                                                    $previous=$pageNo-1;

                                                    //Previous page
                                                    echo'<li class="page-item">';
                                                    echo'<a class="page-link" href="/?page='.$previous.'" aria-label="Previous">';
                                                    echo'<span aria-hidden="true">&laquo;</span>';
                                                    echo'<span class="sr-only">Previous</span>';
                                                    echo'</a>';
                                                    echo'</li>';

                                                    for($i=$pageNo-1;$i<$pageNo+3;$i++){
                                                        echo '<li class="page-item"><a class="page-link" href="/?page='.$i.'">'.$i.'</a></li>';
                                                    }

                                                }

                                                //Next page
                                        echo '<li class="page-item">';
                                        echo '<a class="page-link" href="/?page='.$next.'" aria-label="Next">';
                                        echo '<span aria-hidden="true">&raquo;</span>';
                                        echo '<span class="sr-only">Next</span>';
                                        echo '</a>';
                                        echo '</li>';

                                        ?>

                                        <!-- <li class="page-item active"><a class="page-link" href="#">1</a></li>-->
                                        <!--<li class="page-item"><a class="page-link" href="#">2</a></li>-->

                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </section>

                <!--=================================
                 team -->

                <!--=================================
                footer -->

                <footer class="footer page-section-pt black-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-sm-6 sm-mb-30">
                                <div class="footer-useful-link footer-hedding">
                                    <h6 class="text-white mb-30 mt-10 text-uppercase">Navigation</h6>
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Service</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 sm-mb-30">
                                <div class="footer-useful-link footer-hedding">
                                    <h6 class="text-white mb-30 mt-10 text-uppercase">Useful Link</h6>
                                    <ul>
                                        <li><a href="register">Create Account</a></li>
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

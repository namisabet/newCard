
<?php

//Check ID
if(isset($_GET['id'])){
$var = $_GET['id'];
}

$user = $_SESSION["user"];
$splitImages = $_SESSION["split"];
$half = $_SESSION["half"];
$half1 = $_SESSION["half1"];
$string = $_SESSION["string"];

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
    <link rel="icon" type="image/png" href="img/super.png" />

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
    <link rel="stylesheet" type="text/css" href="css/skins/skin-blue-gem.css" data-style="styles"/>

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
        :root {
            --mainColor: #8aa3ff;
        }
        a.links2 {
            background:
                    linear-gradient(
                            to bottom, var(--mainColor) 0%,
                            var(--mainColor) 100%
                    );
            background-position: 0 100%;
            background-repeat: repeat-x;
            background-size: 4px 4px;
            color: #000;
            text-decoration: none;
            transition: background-size .2s;
        }

        a.links2:hover {
            background-size: 4px 50px;
        }
    </style>

</head>
<body>

<div class="wrapper">

    <div id="pre-loader">
        <img src="img/pre-loader/loader-13.svg" alt="">
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
                                <ul class="menu-logo" >
                                    <li>
                                        <a href="/"><img src="img/ez.png" alt="logo" style="min-height: 40px"> </a>
                                    </li>
                                </ul>
                                <!-- menu links -->
                                <div class="menu-bar">

                                    @if (Route::has('login'))
                                        <div class="top-right links" style="padding-left: 100px">
                                                 <a class="links2" href="{{ route('search') }}" style="font-size:1vmax;padding: 5px">Recherche</a>
                                            @if (Auth::check())
                                                <a class="links2" href="{{ url('/home') }}" style="font-size:1vmax;padding: 5px">Profil</a>
                                            @else
                                                <a class="links2" href="{{ url('/login') }}" style="font-size:1vmax;padding: 5px">Connexion</a>
                                                <a class="links2" href="{{ url('/register') }}" style="font-size:1vmax;padding: 5px">Inscription</a>
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

    <!-- Parallax-->
    <section class="page-title center bg-overlay-theme-50 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(<?php if($half1 > 11){echo $splitImages[$half1-4];}else if($user==true){echo 'companyImage/'.$var.'_image4.png';} ?>); " onerror="this.onerror=null; this.src=''">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="page-title-name text-left">
                        <h1>{{ $titre }}</h1>
                        <!-- <p>Company Short Description</p> -->
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

                    <!-- Description 1  -->
                    <h4 class="mb-30"> {{ $desc }} </h4>

                    <!-- Description 2
                    <h5 class="mb-20">Plus d'info</h5>
                    <p> {{ $desc }} </p>
                    -->

                    <div class="row">
                        <div class="col-lg-4 col-sm-4 mt-30">
                            <h5>Budget</h5>
                            <p class="mt-20">{{ $budget }}</p>
                        </div>
                        <div class="col-lg-4 col-sm-4 mt-30">
                            <h5>Ville</h5>
                            <p class="mt-20">{{ $ville }}</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <!--<img  class="img-fluid full-width" src="template/images/about/01.jpg">-->
                    <img  class="img-fluid full-width" src="
                        <?php //Insert image + error catcher
                            if($user == false){echo $splitImages[$half1];}
                            else if($user==true ){
                            echo 'companyImage/'.$var.'_imagePrincipal.png';}
                            ?>"
                              onerror="this.onerror=null; this.src=''">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-40 mb-40">

                    <h4 class="mb-20">Contact</h4>
                    <a href="{{ $link }}">{{ $link }}</a>
                    <p><a href="mailto:{{ $email }}">{{$email}}</a></p>
                    <p>{{ $phone }}</p>

                </div>
                <div class="col-md-6 mt-40 mb-40">
                    <h4>Expertises</h4>

                   <!-- <p class="mb-0"><b>Client:</b> envato</p> -->

                    <p class="mb-0" style="white-space: pre-line; font-size: 12px"><strong>
                        {{ $string }}
                        </strong> </p>



                  <!--  <a class="button" href="#"> live preview </a> -->

                </div>
                <div class="col-lg-12">
                    <img src="<?php if($half1 > 5){echo $splitImages[$half1-1];}else if($user==true){echo 'companyImage/'.$var.'_image1.png';} ?>" onerror="this.onerror=null; this.src=''" class="img-fluid full-width mt-20">
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <img src="<?php if($half1 > 7){echo $splitImages[$half1-2];}else if($user==true){echo 'companyImage/'.$var.'_image2.png';} ?>" onerror="this.onerror=null; this.src=''" class="img-fluid full-width mt-20">
                </div>
                <div class="col-md-6">
                    <img src="<?php if($half1 > 9){echo $splitImages[$half1-3];}else if($user==true){echo 'companyImage/'.$var.'_image3.png';} ?>" onerror="this.onerror=null; this.src=''" class="img-fluid full-width mt-20">
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
                            <li><a href="/">Page Principale</a></li>
                            <li><a href="/home">Mon Profil</a></li>
                            <li><a href="/search">Recherche</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 sm-mb-30">
                    <div class="footer-useful-link footer-hedding">
                        <h6 class="text-white mb-30 mt-10 text-uppercase">Liens Utiles</h6>
                        <ul>
                            <li><a href="register">Créer un Compte</a></li>


                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 xs-mb-30">
                    <h6 class="text-white mb-30 mt-10 text-uppercase">Contacter Nous</h6>
                    <ul class="addresss-info">
                        <li> <a href="tel:7042791249"> <span>+(704) 279-1249 </span> </a> </li>
                        <li>Courriel: info@agenceswebduquebec.com</li>
                    </ul>
                </div>

            </div>
            <div class="footer-widget mt-20">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <p class="mt-15"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="https://delisoft.ca/"> Delisoft </a> All Rights Reserved </p>
                    </div>

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

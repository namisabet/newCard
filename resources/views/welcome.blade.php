<?php



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
            @media screen and (min-width: 601px) {
                div.example {
                    font-size: 80px;
                }
            }

            /* If the screen size is 600px wide or less, set the font-size of <div> to 30px */
            @media screen and (max-width: 600px) {
                div.example {
                    font-size: 30px;
                }
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
                                                            <a href="{{ url('/search') }}" style="font-size:1vmax;padding: 5px">Recherche</a>
                                                        @if (Auth::check())
                                                            <a href="{{ url('/home') }}" style="font-size:1vmax;padding: 5px">Profil</a>
                                                        @else
                                                            <a href="{{ url('/login') }}" style="font-size:1vmax;padding: 5px">Connexion</a>
                                                            <a href="{{ url('/register') }}" style="font-size:1vmax;padding: 5px">Inscription</a>
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

                <section class="page-title center bg-overlay-theme-50 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(img/webGif.gif);">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="page-title-name text-left">
                                    <h1>Agences Web du Québec</h1>
                                    <p class="desc">Trouvez une agence Web pour votre prochain projet</p>
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
                                    $splitImages = [];
                                    $array = [];
                                    $exist = true;
                                    $half="";
                                    $half1=0;

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

                                        //Get specific Row - Informations
                                        $companyinfo = DB::table('informations')->where('id',$i)->first();
                                        if ($companyinfo===null){
                                                    continue;
                                        }
                                        else{
                                            $exist=true;
                                        }

                                        //Get specific Row - Gallery
                                        $companyGallery = DB::table('gallery')->where('companyId',$i)->first();
                                        if ($companyGallery===null){
                                            $exist=false;
                                        }
                                        else{
                                            $exist=true;
                                        }


                                        //REGEX Time!

                                        //Check if data is from Web Crawler or User
                                        //Web Crawler Images
                                        if ($i < 909 && $exist==true) {
                                            //Get Image Blob
                                            $companyBlob = $companyGallery->image;

                                            //convert Blob to String for REGEX
                                            $companyImageString = (string)$companyBlob;

                                            //Split Images
                                            $splitImages = explode('<br>',$companyImageString);

                                            //Get image du milleu, la première moitier est du garbage (Pour data du web crawler)
                                            $half=((count($splitImages)-1)/2)+1;

                                            //Get avant dernier image, la dernière image est du garbage (Pour data du web crawler)
                                            $half1=count($splitImages)-2;
                                        }
                                        else{ //User Images

                                            $companyinfo = DB::table('informations')->where('id',$i)->first();
                                            if ($companyinfo->titre==null){
                                                continue;
                                            }
                                            else{
                                                $exist=true;
                                            }

                                            if ($companyGallery===null || $exist==false){
                                                $exist=false;
                                            }
                                            else
                                                {

                                                    $exist=true;
                                            $companyGallery1 = DB::table('gallery')->where('companyId',$i)->get();
                                            $x=0;

                                            foreach($companyGallery1 as $image){
                                                $companyBlob = $image->image;

                                                //Array
                                                $array[$x] = $companyBlob;
                                                $x++;
                                                }

                                            $splitImages=$array;
                                            $half1=0;
                                            $half=1;

                                            }


                                        }

                                        //Console Debug
                                        echo '<script>';
                                        echo 'console.log('. json_encode( $i ) .')';
                                        echo '</script>';

                                    try{
                                        if($exist==true){// Print Card

                                            echo '<div class="col-lg-6 col-md-6 mb-30">';
                                            echo '<div class="team team-list">';
                                            echo '<div class="team-photo">';
                                            echo '<a href="company?id='.$i.'">';
                                            echo '<img class="img-fluid mx-auto" src="'.$splitImages[$half1].'" alt="" >';
                                            echo '</a>';
                                            echo '</div>';
                                            echo '<div class="team-description">';
                                            echo '<div class="team-info">';
                                            echo '<a href="company?id='.$i.'">';
                                            echo '<img class="img-fluid mx-auto" src="'.$splitImages[$half].'" alt="" style="max-height:50px" >';
                                            echo '</a><br>';
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

                                        }catch(Exception $e){}
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
                                                //---------------Dynamic Page Numbers-------------

                                                $wrongPage=false;
                                                $next=$pageNo+1;
                                                //Last page
                                                 $lastPage=$totalPages;

                                                //Page == 1
                                                if($pageNo==1){
                                                    $class="";
                                                    $previous=$pageNo-1;


                                                    for($i=$pageNo;$i<$pageNo+3;$i++){

                                                        if($pageNo==$i){
                                                            $class='active';
                                                        }
                                                        else{
                                                            $class='';
                                                        }

                                                        echo '<li class="page-item '.$class.'"><a class="page-link" href="/?page='.$i.'">'.$i.'</a></li>';
                                                    }
                                                }
                                                else if($pageNo==$lastPage){

                                                    $previous=$pageNo-1;
                                                    $class="";
                                                    //Previous page
                                                    echo'<li class="page-item">';
                                                    echo'<a class="page-link" href="/?page='.$previous.'" aria-label="Previous">';
                                                    echo'<span aria-hidden="true">&laquo;</span>';
                                                    echo'<span class="sr-only">Previous</span>';
                                                    echo'</a>';
                                                    echo'</li>';

                                                    //First Page
                                                    echo '<li class="page-item">';
                                                    echo '<a class="page-link" href="/?page=1" aria-label="Next">';
                                                    echo '<span aria-hidden="true">...</span>';
                                                    echo '<span class="sr-only">Last</span>';
                                                    echo '</a>';
                                                    echo '</li>';

                                                    for($i=$pageNo-2;$i<$pageNo+1;$i++){

                                                        if($pageNo==$i){
                                                            $class='active';
                                                        }
                                                        else{
                                                            $class='';
                                                        }

                                                        echo '<li class="page-item '.$class.'"><a class="page-link" href="/?page='.$i.'">'.$i.'</a></li>';
                                                    }
                                                }
                                                else if ($pageNo==$lastPage-1){
                                                    $previous=$pageNo-1;
                                                    $class="";
                                                    //Previous page
                                                    echo'<li class="page-item">';
                                                    echo'<a class="page-link" href="/?page='.$previous.'" aria-label="Previous">';
                                                    echo'<span aria-hidden="true">&laquo;</span>';
                                                    echo'<span class="sr-only">Previous</span>';
                                                    echo'</a>';
                                                    echo'</li>';

                                                    //First Page
                                                    echo '<li class="page-item">';
                                                    echo '<a class="page-link" href="/?page=1" aria-label="Next">';
                                                    echo '<span aria-hidden="true">...</span>';
                                                    echo '<span class="sr-only">Last</span>';
                                                    echo '</a>';
                                                    echo '</li>';

                                                    for($i=$pageNo-1;$i<$pageNo+2;$i++){

                                                        if($pageNo==$i){
                                                            $class='active';
                                                        }
                                                        else{
                                                            $class='';
                                                        }

                                                        echo '<li class="page-item '.$class.'"><a class="page-link" href="/?page='.$i.'">'.$i.'</a></li>';
                                                    }
                                                }
                                                else if($pageNo>$lastPage || $pageNo < 1){
                                                    $wrongPage=true;
                                                    //First Page
                                                    echo '<li class="page-item" style="padding-bottom: 5%">';
                                                    echo '<a class="page-link" href="/?page=1" aria-label="Next">';
                                                    echo '<span aria-hidden="true">Back to First Page</span>';
                                                    echo '<span class="sr-only">First</span>';
                                                    echo '</a>';
                                                    echo '</li>';
                                                }
                                                else{ //Page > 1
                                                    $previous=$pageNo-1;
                                                    $class="";
                                                    //Previous page
                                                    echo'<li class="page-item">';
                                                    echo'<a class="page-link" href="/?page='.$previous.'" aria-label="Previous">';
                                                    echo'<span aria-hidden="true">&laquo;</span>';
                                                    echo'<span class="sr-only">Previous</span>';
                                                    echo'</a>';
                                                    echo'</li>';

                                                    //First Page
                                                    echo '<li class="page-item">';
                                                    echo '<a class="page-link" href="/?page=1" aria-label="Next">';
                                                    echo '<span aria-hidden="true">...</span>';
                                                    echo '<span class="sr-only">Last</span>';
                                                    echo '</a>';
                                                    echo '</li>';

                                                    for($i=$pageNo-1;$i<$pageNo+3;$i++){

                                                        if($pageNo==$i){
                                                            $class='active';
                                                        }
                                                        else{
                                                            $class='';
                                                        }

                                                        echo '<li class="page-item '.$class.'"><a class="page-link" href="/?page='.$i.'">'.$i.'</a></li>';
                                                    }

                                                }

                                        // Next page and Last Page
                                        if ($pageNo==$lastPage || $wrongPage==true){
                                                    //Don't display anything
                                        }
                                        else{
                                            //Last page;

                                            echo '<li class="page-item">';
                                            echo '<a class="page-link" href="/?page='.$lastPage.'" aria-label="Next">';
                                            echo '<span aria-hidden="true">...</span>';
                                            echo '<span class="sr-only">Last</span>';
                                            echo '</a>';
                                            echo '</li>';

                                            //Next Page
                                            echo '<li class="page-item">';
                                            echo '<a class="page-link" href="/?page='.$next.'" aria-label="Next">';
                                            echo '<span aria-hidden="true">&raquo;</span>';
                                            echo '<span class="sr-only">Next</span>';
                                            echo '</a>';echo '</li>';

                                        }

                                        //-------End of Dynamic Page Numbers-------------
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

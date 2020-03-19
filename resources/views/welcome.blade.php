
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
                box-shadow: 5px 5px #c9d4ff;

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
                                                            <a class="links2" href="{{ url('/search') }}" style="font-size:1vmax;padding: 5px">Recherche</a>
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
                                    //Paginate
                                    $users = DB::table('informations')->paginate(9);

                                    //Initialize
                                    $i=0;
                            ?>

                                    @foreach ($users as $company)

                             <div class="col-lg-6 col-md-6 mb-30">
                                    <div class="team team-list gray-mb">
                                        <div class="team-photo">
                                            <a href="company?id={{$company->id}}">
                                                <img class="img-fluid mx-auto" src="companyImage/{{$company->id}}_imagePrincipal.png" onerror="this.onerror=null; this.src='img/ez.png'" alt="" >
                                            </a>
                                        </div>
                                        <div class="team-description">
                                            <div class="team-info">
                                                <a href="company?id={{$company->id}}">
                                                    <img class="img-fluid mx-auto" src="companyImage/{{$company->id}}imageTitre.png" onerror="this.onerror=null; this.src='ez.png'" alt="" style="max-height:50px" >
                                                    </a><br>
                                                <span>{{$company->titre}}</span>
                                                </div>
                                            <div class="team-contact">
                                                <span class="call"> {{$company->ville}} </span>
                                                <span class="email">{{$company->budget}}</span>
                                                <p  class="desc" style="font-size: 12px">{{$company->description}}</p>
                                            </div>
                                        </div>
                                    </div>
                             </div>

                                       <!--Console Debug-->
                                       <script>
                                       console.log({{json_encode( $company->id )}})
                                       </script>

                                    @endforeach

                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center mt-30 ">
                                <nav aria-label="Page navigation example ">
                                    <ul class="pagination justify-content-center ">

                                        <!-- Dynamic Page Numbers -->

                                        <!-- Previous -->
                                        <li class="page-item">
                                            <a class="page-link" href="{{$users->previousPageUrl()}}" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>

                                        <!-- First Page -->
                                        <li class="page-item">
                                            <a class="page-link" href="/?page=1" aria-label="Previous">
                                                <span aria-hidden="true">...</span>
                                                <span class="sr-only">First</span>
                                            </a>
                                        </li>

                                        <!-- Page Numbers -->
                                        <li class="page-item"><a class="page-link" href="{{$users->previousPageUrl()}}">{{$users->currentPage()-1}}</a></li>
                                        <li class="page-item active"><a class="page-link" href="/?page={{$users->currentPage()}}">{{$users->currentPage()}}</a></li>
                                        <li class="page-item"><a class="page-link" href="{{$users->nextPageUrl()}}">{{$users->currentPage()+1}}</a></li>

                                        <!-- Last Page -->
                                        <li class="page-item">
                                            <a class="page-link" href="/?page={{$users->lastPage()}}" aria-label="Next">
                                                <span aria-hidden="true">...</span>
                                                <span class="sr-only">Last</span>
                                            </a>
                                        </li>

                                        <!-- Next -->
                                        <li class="page-item">
                                            <a class="page-link" href="{{$users->nextPageUrl()}}" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>

                                        <!-- End of Dynamic Page Numbers -->

                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </section>

                <!--=================================
                 team -->
                <!--=================================
                 blog -->

                <section class="masonry-main white-bg page-section-ptb">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="masonry columns-3">
                                    <div class="grid-sizer"></div>
                                    <div class="masonry-item" >
                                        <div class="blog-box blog-2 border">
                                            <img class="img-fluid" src="img/ez.png" alt="">
                                            <div class="blog-info  p-3">
                                                <span class="post-category"><a class="mb-10" href="#">Business</a></span>
                                                <h4> <a href="blog-single.html">Remind yourself of someone</a></h4>
                                                <p class="mb-0">Success isn’t really that difficult. There is a significant portion of the population here in North America.</p>
                                                <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="masonry-item">
                                        <div class="blog-box blog-2 border">
                                            <img class="img-fluid" src="img/ez.png" alt="">
                                            <div class="blog-info  p-3">
                                                <span class="post-category"><a class="mb-10" href="#">Business</a></span>
                                                <h4> <a href="blog-single.html">Most people believe that</a></h4>
                                                <p class="mb-0">That actually want and need success to be hard! Why</p>
                                                <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="masonry-item">
                                        <div class="blog-box blog-2 border">
                                            <img class="img-fluid" src="img/ez.png" alt="">
                                            <div class="blog-info  p-3">
                                                <span class="post-category"><a class="mb-10" href="#">Business</a></span>
                                                <h4> <a href="blog-single.html">Success is something of which</a></h4>
                                                <p class="mb-0">We also know those epic stories.</p>
                                                <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="masonry-item">
                                        <div class="blog-box blog-2 border">
                                            <img class="img-fluid" src="img/ez.png" alt="">
                                            <div class="blog-info  p-3">
                                                <span class="post-category"><a class="mb-10" href="#">Style</a></span>
                                                <h4> <a href="blog-single.html"> Does your life lack</a></h4>
                                                <p class="mb-0">I truly believe Augustine’s words are true.</p>
                                                <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="masonry-item">
                                        <div class="blog-box blog-2 border">
                                            <img class="img-fluid" src="img/ez.png" alt="">
                                            <div class="blog-info  p-3">
                                                <span class="post-category"><a class="mb-10" href="#">Lookbook</a></span>
                                                <h4> <a href="blog-single.html"> Supercharge your</a></h4>
                                                <p class="mb-0">So they then have a built-in excuse when things don’t go their way! Pretty sad situation, to say the least.</p>
                                                <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="masonry-item">
                                        <div class="blog-box blog-2 border">
                                            <img class="img-fluid" src="img/ez.png" alt="">
                                            <div class="blog-info  p-3">
                                                <span class="post-category"><a class="mb-10" href="#">Trend</a></span>
                                                <h4> <a href="blog-single.html"> Helen keller a </a></h4>
                                                <p class="mb-0">We also know those epic stories.</p>
                                                <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="masonry-item">
                                        <div class="blog-box blog-2 border">
                                            <img class="img-fluid" src="img/ez.png" alt="">
                                            <div class="blog-info  p-3">
                                                <span class="post-category"><a class="mb-10" href="#">Fashion</a></span>
                                                <h4> <a href="blog-single.html">The other virtues</a></h4>
                                                <p class="mb-0">We also know those epic stories.</p>
                                                <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="masonry-item">
                                        <div class="blog-box blog-2 border">
                                            <img class="img-fluid" src="img/ez.png" alt="">
                                            <div class="blog-info  p-3">
                                                <span class="post-category"><a class="mb-10" href="#">Mackup</a></span>
                                                <h4> <a href="blog-single.html"> You will begin</a></h4>
                                                <p class="mb-0">We also know those epic stories.</p>
                                                <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="masonry-item">
                                        <div class="blog-box blog-2 border">
                                            <img class="img-fluid" src="img/ez.png" alt="">
                                            <div class="blog-info  p-3">
                                                <span class="post-category"><a class="mb-10" href="#">Business</a></span>
                                                <h4> <a href="blog-single.html">Step out on</a></h4>
                                                <p class="mb-0">We also know those epic stories.</p>
                                                <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            {{ $users->links() }}

                <!--=================================
                 blog -->

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
            <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

            <!-- plugins-jquery -->
            <script src="{{ asset('js/plugins-jquery.js') }}"></script>

            <!-- plugin_path -->
            <script>var plugin_path = 'js/';</script>

            <!-- custom -->
            <script src="{{ asset('js/custom.js') }}"></script>

    </body>
</html>

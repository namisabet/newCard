@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Dashboard</h2></div>

                <div class="panel-body" style="overflow: hidden">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Content -->
                        <p><b>Titre de la Compaqnie:</b> {{ $titre }}</p>
                        <p><b>Site Web (URL):</b> {{ $link }}</p>
                        <p><b>Addresse Email de Compagnie:</b> {{ $email }}</p>
                        <p><b>Telephone de Compagnie:</b> {{ $phone }}</p>
                        <p><b>Description de Compagnie:</b> {{ $desc }}</p>
                        <p><b>Ville:</b> {{ $ville }}</p>
                        <p><b>Budget:</b> {{ $budget }}</p>
                        <p><b>Expertise:</b> {{ $expert }}</p>


                        <form action="edit">
                            <button type="submit" class="btn btn-primary">
                                Edit
                            </button>
                        </form>
                        <form action="upload" style="margin-top: 10px">
                            <button type="submit" class="btn btn-primary">
                                Upload Image
                            </button>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!--=================================
footer -->

<footer class="footer page-section-pt black-bg" style="margin-top: 9%">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-sm-6 sm-mb-30">
                <div class="footer-useful-link footer-hedding">
                    <h6 class="text-white mb-30 mt-10 text-uppercase">Navigation</h6>
                    <ul>
                        <li><a href="/">Home Page</a></li>
                        <li><a href="/home">My Profile</a></li>
                        <li><a href="/search">Search</a></li>

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
@endsection

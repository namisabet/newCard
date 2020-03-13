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

<footer class="footer page-section-pt black-bg" style="margin-top: 13%">
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
@endsection

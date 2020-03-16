@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Delete Your Account</h2></div>

                <div class="panel-body text-center" style="overflow: hidden">
                    {{--@if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                @endif--}}

                    <p>
                        Are you sure you want to delete your account?<br>
                        This action is irreversible.
                    </p>

                        <form class="form-horizontal" style="display:inline" method="POST" action="{{ route('postDelete') }}">
                            {{ csrf_field() }}
                        {{--<input type="hidden" value="deleted">--}}
                        <button type="submit" class="btn btn-primary">
                            Confirm
                        </button>
                    </form>
                        <form action="home" style="display:inline">
                        <button type="submit" class="btn btn-primary">
                            Cancel
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<!--=================================
footer -->

<footer class="footer page-section-pt black-bg" style="margin-top: 20%">
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
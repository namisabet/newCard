@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Recherche Avance</h4></div>

                    <div class="panel-body" style="border-bottom: 2px solid gray; border-top: 2px solid gray">
                        <!-- Content -->

                        <form class="form-horizontal" method="POST" action="{{ route('postSearch') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Rechercher</label>

                                <div class="col-md-6">
                                    <input id="recherche" type="text" class="form-control" maxlength="30" name="recherche" value="{{ old('recherche') }}" autofocus>

                                    @if ($errors->has('recherche'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('recherche') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('expertise') ? ' has-error' : '' }}">
                                <label for="expertise" class="col-md-4 control-label">Expertise</label>

                                <div class="col-md-6">
                                    <select id="expertise" name="expertise[]" multiple class="selectpicker" data-width="100%" >
                                        @php
                                            $expertiseList = array("Architecture d'information","Assurance qualité","Conception","Contenu","Design",
                                                "Design interactif","Expérience utilisateur","Gestion","Gestionnaires de contenu","Marketing",
                                                "Programmation","Systèmes et serveurs","Usabilité");
                                        @endphp
                                        @foreach($expertiseList as $expertiseName)
                                            <option value='{{$expertiseName}}'>{{$expertiseName}}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('expertise'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('expertise') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('ville') ? ' has-error' : '' }}">
                                <label for="ville" class="col-md-4 control-label">Ville</label>

                                <div class="col-md-6">
                                    <select id="ville" name="ville[]" multiple class="selectpicker" data-width="100%">

                                        @php
                                            $villeList = array("Montréal","Québec","Gatineau","Sherbrooke","Trois-Rivières",
                                                "Laval","Rimouski","Saguenay","Terrebonne","Lévis",
                                                "Saint-Jean-sur-Richelieu","Repentigny","Drummondville","Saint-Jérôme","Saint-Sauveur",
                                                "Granby","Shawinigan","Val d'Or","Rouyn-Noranda","St-Georges", "Thetford Mines");
                                        @endphp
                                        @foreach($villeList as $villeName)
                                                <option value='{{$villeName}}'>{{$villeName}}</option>
                                        @endforeach

                                    </select>

                                    @if ($errors->has('ville'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('ville') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('budget') ? ' has-error' : '' }}">
                                <label for="budget" class="col-md-4 control-label">Budget</label>

                                <div class="col-md-6">
                                    <select name="budget[]" id="budget" class="selectpicker" multiple data-width="100%" data-live-search="false">

                                        <option value="- de 3,000 $">0 ~ 3,000 $</option>

                                        <option value="3,000$ à 10,000$">3,000 ~ 10,000 $</option>

                                        <option value="10,000$ à 25,000$">10,000 ~ 25,000 $</option>

                                        <option value="25,000$ à 50,000$">25,000 ~ 50,000 $</option>

                                        <option value="50,000$ et +">50,000 + $</option>

                                    </select>

                                    @if ($errors->has('budget'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('budget') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Recherche
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div>
                    @isset( $result ))
                        result =  yes
                        id =>
                        @foreach($result as $r)
                           <br> {{ $r }}
                        @endforeach

                    @else
                        result = none
                    @endisset
                </div>
            </div>
        </div>
    </div>
    <!--=================================
    footer -->

    <footer class="footer page-section-pt black-bg">
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

            </div>
            <div class="footer-widget mt-20">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <p class="mt-15"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> Webster </a> All Rights Reserved </p>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!--=================================
     footer -->
@endsection


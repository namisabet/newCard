@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Information</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('postEdit') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <!-- Company Title -->
                            <div class="form-group{{ $errors->has('titre') ? ' has-error' : '' }}">
                                <label for="titre" class="col-md-4 control-label">Titre de la Compagnie</label>

                                <div class="col-md-6">
                                    <input id="titre" type="text" class="form-control" maxlength="64" name="titre" value="{{ $titre }}" required autofocus>

                                    @if ($errors->has('titre'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('titre') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!-- Website Link -->
                            <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
                                <label for="link" class="col-md-4 control-label">Site Web (URL)</label>

                                <div class="col-md-6">
                                    <input id="link" type="text" class="form-control" maxlength="64" name="link" value="{{ $link }}" required autofocus>

                                    @if ($errors->has('link'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('link') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('emailc') ? ' has-error' : '' }}">
                                <label for="emailc" class="col-md-4 control-label">Addresse Email de Compagnie</label>

                                <div class="col-md-6">
                                    <input id="emailc" type="text" class="form-control" maxlength="64" name="emailc" value="{{ $email }}" required autofocus>

                                    @if ($errors->has('emailc'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('emailc') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('phonec') ? ' has-error' : '' }}">
                                <label for="phonec" class="col-md-4 control-label">Telephone de Compagnie</label>

                                <div class="col-md-6">
                                    <input id="phonec" type="tel" placeholder="514-123-4567" pattern="[0-9]{3} [0-9]{3} [0-9]{4}|[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength='16'  class="form-control" name="phonec" value="{{ $phone }}" required autofocus>

                                    @if ($errors->has('phonec'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phonec') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Description de Compagnie</label>

                                <div class="col-md-6">
                                <textarea rows="3" cols="40" id="description" maxlength="500" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>{{ $desc }}
                                </textarea>
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!-- Company Expertise -->
                            <div class="form-group{{ $errors->has('expertise') ? ' has-error' : '' }}">
                                <label for="expertise" class="col-md-4 control-label">Expertise de la Compagnie</label>

                                <div class="col-md-6">
                                <textarea rows="3" cols="40" id="expertise" maxlength="500" class="form-control @error('expertise') is-invalid @enderror" name="expertise" value="{{ old('expertise') }}" required autocomplete="expertise" autofocus>{{ $expert }}

                                </textarea>
                                    @if ($errors->has('expertise'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('expertise') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!-- Ville -->
                            <div class="form-group{{ $errors->has('ville') ? ' has-error' : '' }}">
                                <label for="ville" class="col-md-4 control-label">Ville</label>

                                <div class="col-md-6">

                                    <select id="ville" name="ville"tabindex="12">

                                        @php
                                        $villeList = array("Montréal","Québec","Gatineau","Sherbrooke","Trois-Rivières",
                                            "Laval","Rimouski","Saguenay","Terrebonne","Lévis",
                                            "Saint-Jean-sur-Richelieu","Repentigny","Drummondville","Saint-Jérôme","Granby",
                                            "Granby","Shawinigan","Val d'Or","Rouyn-Noranda","St-George", "Thetford Mines");
                                        @endphp
                                        @foreach($villeList as $villeName)
                                            @if($ville == $villeName)
                                                <option value='{{$villeName}}' selected>{{$villeName}}</option>
                                            @else
                                                <option value='{{$villeName}}'>{{$villeName}}</option>
                                            @endif
                                        @endforeach

                                    </select>

                                    @if ($errors->has('ville'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('ville') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!-- Budget -->
                            <div class="form-group{{ $errors->has('budget') ? ' has-error' : '' }}">
                                <label for="budget" class="col-md-4 control-label">Budget</label>

                                <div class="col-md-6">

                                    <select name="budget" id="budget">
                                        @php
                                            $budgetList = array("0 ~ 3,000 $","3,000 ~ 10,000 $","10,000 ~ 25,000 $","25,000 ~ 50,000 $","50,000 + $");
                                        @endphp
                                        @foreach($budgetList as $budgetName)
                                            @if($budget == $budgetName)
                                                <option value='{{$budgetName}}' selected>{{$budgetName}}</option>
                                            @else
                                                <option value='{{$budgetName}}'>{{$budgetName}}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                    @if ($errors->has('budget'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('budget') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group" style="align-content: center">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary" style="margin-right: 10px">
                                        Save
                                    </button>

                                    <a href="home" class="btn btn-primary">
                                        Cancel
                                    </a>
                                </div>
                            </div>

                        </form>
                    </div>

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
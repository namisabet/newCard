@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>User Registration</h4></div>

                <div class="panel-body" style="border-bottom: 2px solid gray; border-top: 2px solid gray">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" maxlength="30" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" maxlength="64" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Telephone</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" placeholder="514-123-4567" pattern="[0-9]{3} [0-9]{3} [0-9]{4}|[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="16" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" maxlength="127" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" maxlength="127" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="panel-heading" style="border-bottom: 2px solid gray; margin-top:30px; margin-bottom:30px"><h4>Company Registration</h4></div>

						<div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                            <label for="website" class="col-md-4 control-label">Site Web (URL)</label>

                            <div class="col-md-6">
                                <input id="website" type="text" class="form-control" maxlength="64" name="website" value="{{ old('website') }}" required autofocus>

                                @if ($errors->has('website'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group{{ $errors->has('emailc') ? ' has-error' : '' }}">
                            <label for="emailc" class="col-md-4 control-label">Addresse Email de Compagnie</label>

                            <div class="col-md-6">
                                <input id="emailc" type="text" class="form-control" maxlength="64" name="emailc" value="{{ old('emailc') }}" required autofocus>

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
                                <input id="phonec" type="tel" placeholder="514-123-4567" pattern="[0-9]{3} [0-9]{3} [0-9]{4}|[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength='16'  class="form-control" name="phonec" value="{{ old('phonec') }}" required autofocus>

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
                                <textarea rows="3" cols="40" id="description" maxlength="500" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                                </textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group{{ $errors->has('ville') ? ' has-error' : '' }}">
                            <label for="ville" class="col-md-4 control-label">Ville</label>

                            <div class="col-md-6">
                                <select id="ville" name="ville" tabindex="12">

                                <option value="Montréal">Montréal</option>

                                <option value="Québec">Québec</option>

                                <option value="Gatineau">Gatineau</option>

                                <option value="Sherbrooke">Sherbrooke</option>

                                <option value="Trois-Rivières">Trois-Rivières</option>

                                <option value="Laval">Laval</option>

                                <option value="Rimouski">Rimouski</option>

                                <option value="Saguenay">Saguenay</option>

                                <option value="Terrebonne">Terrebonne</option>

                                <option value="Lévis">Lévis</option>

                                <option value="Saint-Jean-sur-Richelieu">Saint-Jean-sur-Richelieu</option>

                                <option value="Repentigny">Repentigny</option>

                                <option value="Drummondville">Drummondville</option>

                                <option value="Saint-Jérôme">Saint-Jérôme</option>

                                <option value="Granby">Granby</option>

                                <option value="Shawinigan">Shawinigan</option>

                                <option value="Saint-Sauveur">Saint-Sauveur</option>

                                <option value="Val d'Or">Val d'Or</option>

                                <option value="Rouyn-Noranda">Rouyn-Noranda</option>

                                <option value="St-George">St-Georges</option>

                                <option value="Thetford Mines">Thetford Mines</option>

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
                                <select name="budget" id="budget">

                                <option value="0 ~ 3,000 $">0 ~ 3,000 $</option>

                                <option value="3,000 ~ 10,000 $">3,000 ~ 10,000 $</option>

                                <option value="10,000 ~ 25,000 $">10,000 ~ 25,000 $</option>

                                <option value="25,000 ~ 50,000 $">25,000 ~ 50,000 $</option>

                                <option value="50,000 + $">50,000 + $</option>

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
                                    Register
                                </button>
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
@endsection

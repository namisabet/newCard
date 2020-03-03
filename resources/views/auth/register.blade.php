@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

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
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                                <input id="phone" type="tel" placeholder="514-123-4567" pattern="[0-9]{3} [0-9]{3} [0-9]{4}|[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

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
                                <input id="password" type="password" class="form-control" name="password" required>

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                            <label for="website" class="col-md-4 control-label">Site Web (URL)</label>

                            <div class="col-md-6">
                                <input id="website" type="text" class="form-control" name="website" value="{{ old('website') }}" required autofocus>

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
                                <input id="emailc" type="text" class="form-control" name="emailc" value="{{ old('emailc') }}" required autofocus>

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
                                <input id="phonec" type="tel" placeholder="514-123-4567" pattern="[0-9]{3} [0-9]{3} [0-9]{4}|[0-9]{3}-[0-9]{3}-[0-9]{4}" max='16' class="form-control" name="phonec" value="{{ old('phonec') }}" required autofocus>

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
                                <textarea rows="3" cols="40" id="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

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
						
						
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

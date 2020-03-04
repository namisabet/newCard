<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Informations;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
			'phone' => 'required|string',
            'password' => 'required|string|min:6|confirmed',
			'website' => 'required|string',
			'emailc' => 'required|string',
			'phonec' => 'required|string',
			'description' => 'required|string',
			'ville' => 'required|string',
			'budget' => 'required|string',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        /*return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
			'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
        ]);
		*/
		
		$informations = Informations::create([
            'titre' => $data['website'],
            'email' => $data['emailc'],
            'telephone' => $data['phonec'],
            'description' => $data['description'],
            'ville' => $data['ville'],
            'budget' => $data['budget'],
        ]);

        $informations->save();
        $informationId = $informations->id;
		
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'informationId' => $informationId,
            'password' => bcrypt($data['password']),
        ]);

        return $user;
		
    }
}

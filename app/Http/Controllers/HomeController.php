<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$id = Auth::id();
		$user = Auth::user();
		
		$companyinfo = DB::table('informations')->where('id',$user->informationId)->first();
		
		$titre = $companyinfo->titre;
        $link = $companyinfo->link;
		$email = $companyinfo->email;
		$phone = $companyinfo->telephone;
		$desc = $companyinfo->description;
		$ville = $companyinfo->ville;
		$budget = $companyinfo->budget;
        $expert = $companyinfo->expertise;
		
        return view('Home')->with('titre',$titre)
                            ->with('link',$link)
							->with('email',$email)
							->with('phone',$phone)
							->with('desc',$desc)
							->with('ville',$ville)
							->with('budget',$budget)
                            ->with('expert',$expert);
    }
    public function edit()
    {
        $id = Auth::id();
        $user = Auth::user();

        $companyinfo = DB::table('informations')->where('id',$user->informationId)->first();

        $titre = $companyinfo->titre;
        $link = $companyinfo->link;
        $email = $companyinfo->email;
        $phone = $companyinfo->telephone;
        $desc = $companyinfo->description;
        $ville = $companyinfo->ville;
        $budget = $companyinfo->budget;
        $expert = $companyinfo->expertise;

        return view('edit')->with('titre',$titre)
            ->with('link',$link)
            ->with('email',$email)
            ->with('phone',$phone)
            ->with('desc',$desc)
            ->with('ville',$ville)
            ->with('budget',$budget)
            ->with('expert',$expert);
    }
}

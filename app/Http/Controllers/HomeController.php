<?php

namespace App\Http\Controllers;

use App\Informations;
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
    public function postEdit()
    {
        $user = Auth::user();

        $companyinfo = Informations::find($user->informationId);

        $inputs = request()->all();

        $companyinfo->titre = $inputs['titre'];
        $companyinfo->link = $inputs['link'];
        $companyinfo->email = $inputs['emailc'];
        $companyinfo->telephone = $inputs['phonec'];
        $companyinfo->description = $inputs['description'];
        $companyinfo->expertise = $inputs['expertise'];
        $companyinfo->ville = $inputs['ville'];
        $companyinfo->budget = $inputs['budget'];

        $companyinfo->save();

        return view('Home')->with('titre',$companyinfo->titre)
            ->with('link',$companyinfo->link)
            ->with('email',$companyinfo->email)
            ->with('phone',$companyinfo->telephone)
            ->with('desc',$companyinfo->description)
            ->with('ville',$companyinfo->expertise)
            ->with('budget',$companyinfo->ville)
            ->with('expert',$companyinfo->budget);
    }
    // Upload/Get Images
    public function upload()
    {
        $id = Auth::id();
        $user = Auth::user();

        $companyinfo = DB::table('informations')->where('id',$user->informationId)->first();

        $titre = $companyinfo->titre;

        return view('upload')->with('titre',$titre);

    }
    public function postUpload()
    {
        //Image Titre
        if(isset($_FILES['imageTitre'])){
            $file_name = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($file_tmp,"public/companyImage/".$file_name);
        }
        //Image Principal
        if(isset($_FILES['imagePrincipal'])){
            $file_name = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($file_tmp,"public/companyImage/".$file_name);
        }
        //Image 1
        if(isset($_FILES['image1'])){
            $file_name = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($file_tmp,"public/companyImage/".$file_name);
        }
        //Image 2
        if(isset($_FILES['image2'])){
            $file_name = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($file_tmp,"public/companyImage/".$file_name);
        }
        //Image 3
        if(isset($_FILES['image3'])){
            $file_name = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($file_tmp,"public/companyImage/".$file_name);
        }
        //Image 4
        if(isset($_FILES['image4'])){
            $file_name = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($file_tmp,"public/companyImage/".$file_name);
        }



        $user = Auth::user();

        $companyinfo = Informations::find($user->informationId);

        $inputs = request()->all();

        //$companyinfo->titre = $inputs['titre'];


        //$companyinfo->save();

        return view('Home')->with('titre',$companyinfo->titre);
    }
}

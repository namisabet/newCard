<?php

namespace App\Http\Controllers;
use DB;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Request;
use Illuminate\Support\Str;

class CompanyController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Initialize
        session_start();
        $var=1;

        if(isset($_GET['id'])){
            $var = $_GET['id'];
        }

        $id = Auth::id();
        $user = Auth::user();

        //Connect to database
        $companyinfo = DB::table('informations')->where('id',$var)->first();

        $titre = $companyinfo->titre;
        $link = $companyinfo->link;
        $email = $companyinfo->email;
        $phone = $companyinfo->telephone;
        $desc = $companyinfo->description;
        $ville = $companyinfo->ville;
        $budget = $companyinfo->budget;
        $expert = $companyinfo->expertise;

        //Put expertise in session
        $_SESSION["desc1"] = $expert;

        //Return View
        return view('company')->with('titre',$titre)
            ->with('link',$link)
            ->with('email',$email)
            ->with('phone',$phone)
            ->with('desc',$desc)
            ->with('ville',$ville)
            ->with('budget',$budget)
            ->with('expert',$expert);
    }

    public function search()
    {
        return view("search");
    }


    public function postSearch()
    {
        $recherche = Request::get('recherche');
        $expertise =  Request::get('expertise');
        $ville =  Request::get('ville');
        $budget =  Request::get('budget');

//        if($budget = null && $expertise = null){
//            $cityResearch=DB::table('informations')->where('ville',$ville);
//
//            return view("search")->with('result',$cityResearch);
//
//        }
//        if($ville = null && $budget = null){
//            $expertiseResearch=DB::table('informations')->where('expertise',$expertise);
//            return view("search")->with('result',$expertiseResearch);
//
//        }
//        if($expertise = null && $ville = null){
//
//            $budgetResearch=DB::table('informations')->where('budget',$budget);
//            return view('result')->with('result',$budgetResearch);
//        }

        $titreList = DB::table('informations')->select('id','titre')->get();
        $expertiseList = DB::table('informations')->select('expertise')->get();
        $idList = array();

        if($recherche != null){
            foreach($titreList as $titre){
                //var_dump(($titre->titre));
                $contains = Str::contains(strtolower($titre->titre),strtolower($recherche));
                //var_dump($contains);
                if($contains == true){
                    $titreSearch = DB::table('informations')->where('id', $titre->id)->first();
                    //var_dump($titreSearch);
                    $idList[] = $titreSearch->id;
                }

            }

        }
        if($expertise!= null){
            $expertiseSearch=DB::table('informations')->where('expertise',$expertise);
        }
        if($ville != null){
            $villeSearch = DB::table('informations')->where('ville',$ville);
        }
        if($budget != null){
            $budgetSearch = DB::table('informations')->where('budget',$budget);
        }

        //$resultList = DB::table('informations')->whereIn('id', $idList)->get();

        return view("search")->with('result',$idList);
    }
}

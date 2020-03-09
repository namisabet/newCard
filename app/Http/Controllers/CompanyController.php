<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function search(){
//        $inputs=request()->all();
//        $budget=$inputs['budget'];
//        $expertise=$inputs['expertise'];
//        $ville=$inputs['ville'];
//
//
//        if($budget=null&&$expertise=null){
//            $cityResearch=DB::table('informations')->where('ville',$ville);
//        }
//        if($ville=null && $budget=null){
//            $expertiseResearch=DB::table('informations')->where('expertise',$expertise);
//        }
//        if($expertise=null && $ville=null){
//
//            $budgetResearch=DB::table('informations')->where('budget',$budget);
//        }


        return view("search");
    }


    public function postSearch(){
        $inputs=request()->all();
        $budget=null;
        $expertise=null;
        $ville=null;

        $budget=$inputs['budget'];
        $expertise=$inputs['expertise'];
        $ville=$inputs['ville'];

//
//        if($budget=null&&$expertise=null){
//            $cityResearch=DB::table('informations')->where('ville',$ville);
//
//            return view("search")->with('result',$cityResearch);
//
//        }
//        if($ville=null && $budget=null){
//            $expertiseResearch=DB::table('informations')->where('expertise',$expertise);
//            return view("search")->with('result',$expertiseResearch);
//
//        }
//        if($expertise=null && $ville=null){
//
//            $budgetResearch=DB::table('informations')->where('budget',$budget);
//            return view('result')->with('result',$budgetResearch);
//        }

        $threeSearch=DB::table('informations')
                        ->where(array(
                            'ville'=>$ville,
                            'expertise'=>$expertise,
                            'budget'=>$budget
                        ))->get();

        return view("search")->with('result',$threeSearch);
    }
}

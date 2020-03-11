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
        session_start();
        //Inputs
        $recherche = Request::get('recherche');
        $expertise =  Request::get('expertise');
        $ville =  Request::get('ville');
        $budget =  Request::get('budget');

        //Get all Records from Database
        $titreList = DB::table('informations')->select('id','titre')->get();
        $expertiseList = DB::table('informations')->select('id','expertise')->get();

        //Initialize Arrays
        $rechercheIdList = array();
        $expertiseIdList = array();
        $villeIdList = array();
        $budgetIdList = array();
        $finalIdList = array();

        //Add to Respective Array if input is not null
        if($recherche != null){
            foreach($titreList as $titre){
                //Match input with record for each record
                $contains = Str::contains(strtolower($titre->titre),strtolower($recherche));
                if($contains == true){
                    //Add to array if matching
                    $titreSearch = DB::table('informations')->where('id', $titre->id)->first();
                    $rechercheIdList[] = $titreSearch->id;
                }
            }
        }
        if($expertise!= null){
            //Each Record in Input Array
            foreach($expertise as $expertiseName){
                //Each record in DB
                foreach($expertiseList as $expertiseObj){
                    //Match input with record for each record
                    $contains = Str::contains(strtolower($expertiseObj->expertise),strtolower($expertiseName));
                    if($contains == true){
                        //Add to array if matching
                        $expertiseSearch = DB::table('informations')->where('id', $expertiseObj->id)->first();
                        if($recherche != null){
                            //Add to array only if id is inside research array IF research input not null
                            if(in_array($expertiseSearch->id,$rechercheIdList)){
                                $expertiseIdList[] = $expertiseSearch->id;
                            }
                        }
                        else{
                            //New Array if research input is null
                            $expertiseIdList[] = $expertiseSearch->id;
                        }
                    }
                }
            }
        }
        if($ville != null){
            //Each Record in Input Array
            foreach($ville as $villeName) {
                //Match input with record for each record
                $villeSearch = DB::table('informations')->where('ville', $villeName)->get();
                foreach ($villeSearch as $villeObj) {
                    //Add to array depending on which input is null
                    if($recherche != null){
                        if($expertise != null){
                            if(in_array($villeObj->id,$rechercheIdList)){
                                if(in_array($villeObj->id,$expertiseIdList)){
                                    $villeIdList[] = $villeObj->id;
                                }
                            }
                        }
                        else{
                            if(in_array($villeObj->id,$rechercheIdList)){
                                $villeIdList[] = $villeObj->id;
                            }
                        }
                    }
                    elseif($expertise != null){
                        if(in_array($villeObj->id,$expertiseIdList)){
                            $villeIdList[] = $villeObj->id;
                        }
                    }
                    else
                        $villeIdList[] = $villeObj->id;
                }
            }
        }
        if($budget != null){
            //Each Record in Input Array
            foreach($budget as $budgetName){
                //Match input with record for each record
                $budgetSearch = DB::table('informations')->where('budget',$budgetName)->get();
                foreach($budgetSearch as $budgetObj){
                    //Add to array depending on which input is null
                    if($recherche != null){
                        if($expertise != null){
                            if($ville != null){
                                if(in_array($budgetObj->id,$rechercheIdList)){
                                    if(in_array($budgetObj->id,$expertiseIdList)){
                                        if(in_array($budgetObj->id,$villeIdList)){
                                            $budgetIdList[] = $budgetObj->id;
                                        }
                                    }
                                }
                            }
                            else{
                                if(in_array($budgetObj->id,$rechercheIdList)){
                                    if(in_array($budgetObj->id,$expertiseIdList)){
                                        $budgetIdList[] = $budgetObj->id;
                                    }
                                }
                            }
                        }
                        elseif($ville != null){
                            if(in_array($budgetObj->id,$rechercheIdList)){
                                if(in_array($budgetObj->id,$villeIdList)){
                                    $budgetIdList[] = $budgetObj->id;
                                }
                            }
                        }
                        else{
                            if(in_array($budgetObj->id,$rechercheIdList)){
                                $budgetIdList[] = $budgetObj->id;
                            }
                        }
                    }
                    elseif($expertise != null){
                        if($ville != null){
                            if(in_array($budgetObj->id,$expertiseIdList)){
                                if(in_array($budgetObj->id,$villeIdList)){
                                    $budgetIdList[] = $budgetObj->id;
                                }
                            }
                        }
                        else{
                            if(in_array($budgetObj->id,$expertiseIdList)){
                                $budgetIdList[] = $budgetObj->id;
                            }
                        }
                    }
                    elseif($ville != null){
                        if(in_array($budgetObj->id,$villeIdList)){
                            $budgetIdList[] = $budgetObj->id;
                        }
                    }
                    else
                        $budgetIdList[] = $budgetObj->id;
                }
            }
        }
        //Take array as result depending if request is null
        if($budget != null){
            $finalIdList = $budgetIdList;
        }
        elseif($ville!= null){
            $finalIdList = $villeIdList;
        }
        elseif($expertise != null){
            $finalIdList = $expertiseIdList;
        }
        elseif($recherche != null){
            $finalIdList = $rechercheIdList;
        }

        //Get Array of Users with list of Id
        //$resultList = DB::table('informations')->whereIn('id', $idList)->get();

        //Remove Duplicate Values & Sort Array (ascending)
        //$idList = array_unique($finalIdList);
        sort($finalIdList);

        //Put results in session
        $_SESSION["result"] = $finalIdList;

        return view("search")->with('result',$finalIdList);
    }
}

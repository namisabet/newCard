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


        //Initialize
        $splitImages = [];
        $string="UndefinedString";
        $string1="UndefinedString1";
        $buffer="UndefinedBuffer";
        $buffer1="UndefinedBuffer";
        $array = [];
        $exist = true;
        $half=0;
        $half1=0;
        $user=false;

        //Ultra REGEX Expertise, Cookie set in CompanyController
        if(!isset($_SESSION["desc1"])) {
            echo "Session named '" . "desc1" . "' is not set!";
            header("Refresh:0");

        } else {
            // Remove line break before and after :
            $buffer1 = str_replace(array("Expertises"), '', $_SESSION["desc1"]);


            // Remove line break before and after :
            $buffer = str_replace(array("\r : \r", "\n : \n"), ': ', $buffer1);

            //Remove Extra Line Breaks
            $string1 = preg_replace('/\s*$^\s*/m', "\n", $buffer);

            //Remove Bold
            $string = str_replace(array(" "), ' ', $string1);

            //echo preg_replace('/[ \t]+/', ' ', $string);

        }


        //Get specific Row - Gallery
        $companyGallery = DB::table('gallery')->where('companyId',$var)->first();
        if ($companyGallery===null){
            //Get Image Blob
            $companyBlob = "";

            //convert Blob to String for REGEX
            $companyImageString = "";
        }
        else if($var < 909){
            //Get Image Blob
            $companyBlob = $companyGallery->image;

            //convert Blob to String for REGEX
            $companyImageString = (string)$companyBlob;

            //Split Images
            $splitImages = explode('<br>',$companyImageString);

            //Get image du milleu, la première moitier est du garbage (Pour data du web crawler)
            $half=((count($splitImages)-1)/2)+1;

            //Get avant dernier image, la dernière image est du garbage (Pour data du web crawler)
            $half1=count($splitImages)-2;

        }
        else{ //User Images

            $companyGallery1 = DB::table('gallery')->where('companyId',$var)->get();
            /*
            $x=0;

            foreach($companyGallery1 as $image){
                $companyBlob = $image->image;

                //Array
                $array[$x] = $companyBlob;
                $x++;
            }
    */
            $splitImages=$array;
            $half=0;
            $half1=4;
            $user=true;

        }

        $_SESSION["user"] = $user;
        $_SESSION["split"] = $splitImages;
        $_SESSION["half"] = $half;
        $_SESSION["half1"] = $half1;
        $_SESSION["string"] = $string;

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

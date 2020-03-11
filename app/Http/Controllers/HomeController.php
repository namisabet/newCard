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
        /*//Current Logged User
        $user = Auth::user();
        $companyinfo = Informations::find($user->informationId);
        $companyGallery = DB::table('gallery')->where('companyId',$companyinfo->id)->first();

        //Get Image Blob
        $companyBlob = $companyGallery->image;

        //convert Blob to String for REGEX
        $companyImageString = (string)$companyBlob;

        //Check if data is from Web Crawler or User
        //Web Crawler Images
        if (strpos($companyImageString, '<img') !== false) {

            //Split Images
            $splitImages = explode('<br>',$companyImageString);

            //Get image du milleu, la première moitier est du garbage (Pour data du web crawler)
            $half=((count($splitImages)-1)/2)+1;

            //Get avant dernier image, la dernière image est du garbage (Pour data du web crawler)
            $half1=count($splitImages)-2;


        }

        $imageSet = $half;*/

        $user = Auth::user();
        $companyinfo = Informations::find($user->informationId);
        $companyGallery = DB::table('gallery')->where('companyId',$companyinfo->id)->get();

        //var_dump($companyGallery);

        /*foreach($companyGallery as $image){
            $link = $image->image;
            echo '<img src="'.$link.'" alt="image">';
        }*/

        $imageTitre = "";
        $imagePrincipal = "";
        $image1 = "";
        $image2 = "";
        $image3 = "";
        $image4 = "";

        foreach($companyGallery as $image){
            $imageAfterId = substr($image->image, strpos($image->image, "image") + 5);
            $imageBeforeExtension = substr($imageAfterId, 0, strpos($imageAfterId, "."));
            echo $imageBeforeExtension;
            if($imageBeforeExtension == "Titre"){
                $imageTitre = $image->image;
            }
            elseif($imageBeforeExtension == "Principal"){
                $imagePrincipal = $image->image;
            }
            elseif($imageBeforeExtension == "1"){
                $image1 = $image->image;
            }
            elseif($imageBeforeExtension == "2"){
                $image2 = $image->image;
            }
            elseif($imageBeforeExtension == "3"){
                $image3 = $image->image;
            }
            elseif($imageBeforeExtension == "4"){
                $image4 = $image->image;
            }

        }

        return view('upload')->with('imageTitre',$imageTitre)
            ->with('imagePrincipal',$imagePrincipal)
            ->with('image1',$image1)
            ->with('image2',$image2)
            ->with('image3',$image3)
            ->with('image4',$image4);

    }
    public function postUpload()
    {
        //Current Logged User
        $user = Auth::user();
        $companyinfo = Informations::find($user->informationId);
        $companyGallery = DB::table('gallery')->where('companyId',$companyinfo->id);

        $path = '/companyImage/';
        $physicalPath = public_path() . '/companyImage/';

        //Check if Input is null
        if( request()->hasFile('imageTitre')) {
            $image = request()->file('imageTitre');
            $filename = $companyinfo->id . '_imageTitre.' . $image->getClientOriginalExtension();
            //Check if image is set or not
            $image->move($physicalPath, $filename);
            DB::table('gallery')->insert(
                ['Image' => $path.$filename, 'companyId' => $companyinfo->id]
            );
        }
        if( request()->hasFile('imagePrincipal')) {
            $image = request()->file('imagePrincipal');
            $filename =  $companyinfo->id . '_imagePrincipal.' . $image->getClientOriginalExtension();
            $image->move($physicalPath, $filename);
            DB::table('gallery')->insert(
                ['Image' => $path.$filename, 'companyId' => $companyinfo->id]
            );
        }
        if( request()->hasFile('image1')) {
            $image = request()->file('image1');
            $filename =  $companyinfo->id . '_image1.' . $image->getClientOriginalExtension();
            $image->move($physicalPath, $filename);
            DB::table('gallery')->insert(
                ['Image' => $path.$filename, 'companyId' => $companyinfo->id]
            );
        }
        if( request()->hasFile('image2')) {
            $image = request()->file('image2');
            $filename =  $companyinfo->id . '_image2.' . $image->getClientOriginalExtension();
            $image->move($physicalPath, $filename);
            DB::table('gallery')->insert(
                ['Image' => $path.$filename, 'companyId' => $companyinfo->id]
            );
        }
        if( request()->hasFile('image3')) {
            $image = request()->file('image3');
            $filename =  $companyinfo->id . '_image3.' . $image->getClientOriginalExtension();
            $image->move($physicalPath, $filename);
            DB::table('gallery')->insert(
                ['Image' => $path.$filename, 'companyId' => $companyinfo->id]
            );
        }
        if( request()->hasFile('image4')) {
            $image = request()->file('image4');
            $filename =  $companyinfo->id . '_image4.' . $image->getClientOriginalExtension();
            $image->move($physicalPath, $filename);
            DB::table('gallery')->insert(
                ['Image' => $path.$filename, 'companyId' => $companyinfo->id]
            );
        }

        return view('Home')->with('titre',$companyinfo->titre)
            ->with('link',$companyinfo->link)
            ->with('email',$companyinfo->email)
            ->with('phone',$companyinfo->telephone)
            ->with('desc',$companyinfo->description)
            ->with('ville',$companyinfo->expertise)
            ->with('budget',$companyinfo->ville)
            ->with('expert',$companyinfo->budget);
    }
}

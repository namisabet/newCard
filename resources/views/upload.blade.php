@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Upload Images</div>

                    <div class="panel-body">
                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('postUpload') }}">
                            {{ csrf_field() }}
                            <!-- Image Titre -->

                            <div class="form-group{{ $errors->has('titre') ? ' has-error' : '' }}">
                                <label for="imageTitre" class="col-md-4 control-label">Image Titre</label>
                                {{--isset( $imageSet )

                                    @foreach($imageSet as $image)
                                        <img src="{{$image->image}}" alt="image" width="50px" height="50px">
                                        {{$imageTitre = substr($image->image, strpos($image->image, "image") + 5)}}
                                        {{$imageTitre2 = substr($imageTitre, 0, strpos($imageTitre, "."))}}
                                        {{$imageTitre2}}

                                    @endforeach
                                @else
                                @endisset--}}
                                <div class="col-md-2">
                                    <?php
                                        if(isset($imageTitre) && $imageTitre != ""){

                                            echo "<img src='$imageTitre' alt='NoImage' width='65px' height='50px'>";
                                            echo "<input type='hidden' name='imageTitre' value='exist'>";
                                        }
                                        else{
                                            echo "<img src='/' alt='NoImage' width='65px' height='50px'>";
                                        }
                                    ?>
                                </div><br>
                                <div class="col-md-6">
                                    <input id="imageTitre" type="file"  name="imageTitre" <?php if(isset($imageTitre) && $imageTitre == ""){echo " required ";} ?> autofocus>
                                </div>
                            </div>
                            <!-- Image Card/Main -->
                            <div class="form-group{{ $errors->has('titre') ? ' has-error' : '' }}">
                                <label for="imagePrincipal" class="col-md-4 control-label">Image Principal</label>
                                <div class="col-md-2">
                                    <?php
                                    if(isset($imagePrincipal) && $imagePrincipal != ""){

                                        echo "<img src='$imagePrincipal' alt='NoImage' width='65px' height='50px'>";
                                        echo "<input type='hidden' name='imagePrincipal' value='exist'>";
                                    }
                                    else{
                                        echo "<img src='/' alt='NoImage' width='65px' height='50px'>";
                                    }
                                    ?>
                                </div><br>
                                <div class="col-md-6">
                                    <input id="imagePrincipal" type="file"  name="imagePrincipal" <?php if(isset($imagePrincipal) && $imagePrincipal == ""){echo " required ";} ?> autofocus>
                                </div>
                            </div>
                            <!-- Image 1 -->
                            <div class="form-group{{ $errors->has('titre') ? ' has-error' : '' }}">
                                <label for="image1" class="col-md-4 control-label">Image 1</label>
                                <div class="col-md-2">
                                    <?php
                                    if(isset($image1) && $image1 != ""){
                                        echo "<img src='$image1' alt='NoImage' width='65px' height='50px'>";
                                        echo "<input type='hidden' name='image1' value='exist'>";
                                    }
                                    else{
                                        echo "<img src='/' alt='NoImage' width='65px' height='50px'>";
                                    }
                                    ?>
                                </div><br>
                                <div class="col-md-6">
                                    <input id="image1" type="file"  name="image1" >
                                </div>
                            </div>
                            <!-- Image 2 -->
                            <div class="form-group{{ $errors->has('titre') ? ' has-error' : '' }}">
                                <label for="image2" class="col-md-4 control-label">Image 2</label>
                                <div class="col-md-2">
                                    <?php
                                    if(isset($image2) && $image2 != ""){
                                        echo "<img src='$image2' alt='NoImage' width='65px' height='50px'>";
                                        echo "<input type='hidden' name='image2' value='exist'>";
                                    }
                                    else{
                                        echo "<img src='/' alt='NoImage' width='65px' height='50px'>";
                                    }
                                    ?>
                                </div><br>
                                <div class="col-md-6">
                                    <input id="image2" type="file"  name="image2" >
                                </div>
                            </div>
                            <!-- Image 3 -->
                            <div class="form-group{{ $errors->has('titre') ? ' has-error' : '' }}">
                                <label for="image3" class="col-md-4 control-label">Image 3</label>
                                <div class="col-md-2">
                                    <?php
                                    if(isset($image3) && $image3 != ""){
                                        echo "<img src='$image3' alt='NoImage' width='65px' height='50px'>";
                                        echo "<input type='hidden' name='image3' value='exist'>";
                                    }
                                    else{
                                        echo "<img src='/' alt='NoImage' width='65px' height='50px'>";
                                    }
                                    ?>
                                </div><br>
                                <div class="col-md-6">
                                    <input id="image3" type="file"  name="image3"  >
                                </div>
                            </div>
                            <!-- Image 4 -->
                            <div class="form-group{{ $errors->has('titre') ? ' has-error' : '' }}">
                                <label for="image4" class="col-md-4 control-label">Image 4</label>
                                <div class="col-md-2">
                                    <?php
                                    if(isset($image4) && $image4 != ""){
                                        echo "<img src='$image4' alt='NoImage' width='66px' height='50px'>";
                                        echo "<input type='hidden' name='image4' value='exist'>";
                                    }
                                    else{
                                        echo "<img src='/' alt='NoImage' width='65px' height='50px'>";
                                    }
                                    ?>
                                </div><br>
                                <div class="col-md-6">
                                    <input id="image4" type="file"  name="image4"  >
                                </div>
                            </div>



                            <!-- Submit/Cancel-->
                            <div class="form-group" style="align-content: center">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary" style="margin-right: 10px">
                                        Save
                                    </button>

                                    <a href="home" class="btn btn-primary">
                                        Cancel
                                    </a>
                                </div>
                            </div>
                            <!-- End Submit/Cancel -->

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>




    <!--=================================
footer -->

    <footer class="footer page-section-pt black-bg" style="margin-top: 80px">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-6 sm-mb-30">
                    <div class="footer-useful-link footer-hedding">
                        <h6 class="text-white mb-30 mt-10 text-uppercase">Navigation</h6>
                        <ul>
                            <li><a href="/">Home Page</a></li>
                            <li><a href="/home">My Profile</a></li>
                            <li><a href="/search">Search</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 sm-mb-30">
                    <div class="footer-useful-link footer-hedding">
                        <h6 class="text-white mb-30 mt-10 text-uppercase">Useful Link</h6>
                        <ul>
                            <li><a href="#">Create Account</a></li>
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

            </div>
            <div class="footer-widget mt-20">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <p class="mt-15"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> Webster </a> All Rights Reserved </p>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!--=================================
     footer -->
@endsection
@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Upload Images</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('postUpload') }}">

                            <!-- Image Titre -->
                            <div class="form-group{{ $errors->has('titre') ? ' has-error' : '' }}">
                                <label for="titre" class="col-md-4 control-label">Image Titre</label>

                                <div class="col-md-6">
                                    <input id="titre" type="file"  name="imageTitre"  required autofocus>
                                </div>
                            </div>
                            <!-- Image Card/Main -->
                            <div class="form-group{{ $errors->has('titre') ? ' has-error' : '' }}">
                                <label for="titre" class="col-md-4 control-label">Image Principal</label>

                                <div class="col-md-6">
                                    <input id="titre" type="file"  name="imagePrincipal"  required autofocus>
                                </div>
                            </div>
                            <!-- Image 1 -->
                            <div class="form-group{{ $errors->has('titre') ? ' has-error' : '' }}">
                                <label for="titre" class="col-md-4 control-label">Image 1</label>

                                <div class="col-md-6">
                                    <input id="titre" type="file"  name="image1" >
                                </div>
                            </div>
                            <!-- Image 2 -->
                            <div class="form-group{{ $errors->has('titre') ? ' has-error' : '' }}">
                                <label for="titre" class="col-md-4 control-label">Image 2</label>

                                <div class="col-md-6">
                                    <input id="titre" type="file"  name="image2" >
                                </div>
                            </div>
                            <!-- Image 3 -->
                            <div class="form-group{{ $errors->has('titre') ? ' has-error' : '' }}">
                                <label for="titre" class="col-md-4 control-label">Image 3</label>

                                <div class="col-md-6">
                                    <input id="titre" type="file"  name="image3"  >
                                </div>
                            </div>
                            <!-- Image 4 -->
                            <div class="form-group{{ $errors->has('titre') ? ' has-error' : '' }}">
                                <label for="titre" class="col-md-4 control-label">Image 4</label>

                                <div class="col-md-6">
                                    <input id="titre" type="file"  name="image4"  >
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
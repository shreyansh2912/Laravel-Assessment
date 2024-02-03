<!DOCTYPE html>
<!-- 
Template Name: Miraculous - Online Music Store Html Template
Version: 1.0.0
Author: Kamleshyadav
Website: 
Purchase: 
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Begin Head -->


<!-- Mirrored from kamleshyadav.com/html/miraculous/html/Bootstrap5/version1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Dec 2023 18:13:55 GMT -->
<head>
    <title>Miraculous - Online Music Store Html Template</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
    {{-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/swiper/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/nice_select/nice-select.css">
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/player/volume.css">
	<link rel="stylesheet" type="text/css" href="assets/js/plugins/scroll/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"> 
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
</head>

<div class="ms_register_popup">
    <div id="myModal" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog register_dialog">
            <!-- Modal content-->
            <div class="modal-content" style="height: 500px; width:1100px; margin-left:-100px;">
                <div class="modal-body">
                    <div class="ms_register_img">
                        <img src="assets/images/register_img.png" alt="" class="img-fluid" />
                    </div>
                    <div class="ms_register_form">
                        <form action="" method="post">
                            @csrf
                        <h2>Register / Sign Up</h2>
                            <div class="form-group">
                                <i class="fa_icon form-user" aria-hidden="true"></i>
                                <input type="text" name="name" placeholder="Enter Your Name" value="{{old('name')}}" class="form-control">
                                <span class="form_icon">
                                </span>
                                <span style="color: red">
                                    @error('name')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                            <i class="fa_icon form-envelope" aria-hidden="true"></i>
                            <input type="text" name="email" placeholder="Enter Your Email" value="{{old('email')}}"  class="form-control">
                            <span class="form_icon">
                            </span>
                            <span style="color: red">
                                @error('email')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <i class="fa_icon form-lock" aria-hidden="true"></i>
                            <input type="password" name="password" placeholder="Enter Password"  class="form-control">
                            <span class="form_icon">
                            </span>
                            <span style="color: red">
                                @error('password')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <i class=" fa_icon form-lock" aria-hidden="true"></i>
                            <input type="password" name="Confirm_password" placeholder="Confirm Password" class="form-control">
                            <span class="form_icon">
                            </span>
                            <span style="color: red">
                                @error('Confirm_password')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                            <button style="width:120px; border-radius:0px; height:40px; margin-right:200px; margin-top:400px;" type="submit">Register now</button>
                        <p style="margin-top: 60px;">Already Have An Account? <a href="login" data-toggle="modal" class="ms_modal hideCurrentModel">login here</a></p>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
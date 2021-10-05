@extends('layouts.app')

@section('contentHeader')

    <div class="header-intro theme-bg-primary text-white py-5">
        <div class="container">
            <h2 class="page-heading mb-0">Admin Login</h2>
        </div>
    </div><!--//header-intro-->

@endsection

@section('content')

    <div class="container">
        <div class="row my-5">
            
            <div class="contact-form-container shadow-sm col-lg-5 mx-lg-auto p-5 bg-white">
                <form id="contact-form" class="contact-forms" method="POST" enctype="multipart/form-data">
                    <h3 class="text-center mb-4">Stay In Touch</h3>
                    <div class="feedbackmessage my-3">
                        <div class="text-danger">{{$errors->first('errorMessage')}}</div>
                    </div>
                    @csrf
                    <div class="row g-3">                                                           
                        <div class="col-12">
                            <label class="sr-only" for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address" minlength="3" required value="@if (!empty(old('email'))){{ old('email') }}@endif" aria-required="true" aria-describedby="emailhelp">
                            <div id="emailhelp" class="form-text text-danger"> {{$errors->first('email')}} </div>
                        </div>
                        <div class="col-12">
                            <label class="sr-only" for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required value="@if (!empty(old('password'))){{ old('password') }}@endif" aria-required="true" aria-describedby="passwordhelp">
                            <div id="passwordhelp" class="form-text text-danger"> {{$errors->first('password')}} </div>
                        </div>
                        
                        <div class="col-12">
                            <button type="submit" name="submitLogin" value="submitLogin" class="btn w-100 btn-primary py-2">Login</button>
                        </div>
                    </div><!--//form-row-->
                </form>
            </div>

        </div>
    </div>

@endsection
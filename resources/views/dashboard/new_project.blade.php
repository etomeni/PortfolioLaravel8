@extends('layouts.app')

@section('contentHeader')

    <div class="header-intro theme-bg-primary text-white py-5">
        <div class="container">
            <h2 class="page-heading mb-0">New Project</h2>
        </div>
    </div>

@endsection

@section('content')

    <div class="container">
        <div class="row my-5">
            
            <div class="col">
                <form id="contact-form" class="contact-forms" method="POST" enctype="multipart/form-data">
                    <h3 class="text-center mb-4">Add New Project</h3>
                    <div class="feedbackmessage">
                        <div class="text-success"><?php //echo $errors['success']; ?></div>
                        <div class="text-danger"> <?php //echo $errors['dbError']; ?> </div>
                    </div>
                    @csrf
                    <div class="row g-3">                                                           
                        <div class="col-12 col-md-6">
                            <label class="" for="cname">Client Name</label>
                            <input type="text" class="form-control" id="cname" name="name" placeholder="Client Name" minlength="3" required value="@if (!empty(old('name'))){{ old('name') }}@endif" aria-required="true" aria-describedby="Namehelp">
                            <div id="Namehelp" class="form-text text-danger"> {{$errors->first('name')}} </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="" for="cemail">Project Type</label>
                            <input type="text" class="form-control" id="cemail" name="email" placeholder="Project Type" required value="@if (!empty(old('email'))){{ old('email') }}@endif" aria-required="true" aria-describedby="Emailhelp">
                            <div id="Emailhelp" class="form-text text-danger"> {{$errors->first('email')}} </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="" for="wlogo">Transparent logo with white text</label>
                            <input type="file" class="form-control" id="wlogo" name="wlogo" placeholder="Transparent logo with With text" minlength="3" required value="@if (!empty(old('wlogo'))){{ old('wlogo') }}@endif" aria-required="true" aria-describedby="wlogohelp">
                            <div id="wlogohelp" class="form-text text-danger"> {{$errors->first('wlogo')}} </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="" for="blogo">Transparent logo with black text</label>
                            <input type="file" class="form-control" id="blogo" name="blogo" placeholder="Transparent logo with With text" minlength="3" required value="@if (!empty(old('blogo'))){{ old('blogo') }}@endif" aria-required="true" aria-describedby="blogohelp">
                            <div id="blogohelp" class="form-text text-danger"> {{$errors->first('blogo')}} </div>
                        </div>
                        <div class="col-12">
                            <label class="" for="p_screenshot">Project Screenshot</label>
                            <input type="file" class="form-control" id="p_screenshot" name="Pscreenshot" required value="@if (!empty(old('Pscreenshot'))){{ old('Pscreenshot') }}@endif" aria-required="true" aria-describedby="Pscreenshothelp">
                            <div id="p_screenshothelp" class="form-text text-danger"> {{$errors->first('Pscreenshot')}} </div>
                        </div>
                        <div class="col-12">
                            <label class="" for="p_screenshot">Technologies</label>
                            <input type="file" class="form-control" id="p_screenshot" name="Pscreenshot" required value="@if (!empty(old('Pscreenshot'))){{ old('Pscreenshot') }}@endif" aria-required="true" aria-describedby="Pscreenshothelp">
                            <div id="p_screenshothelp" class="form-text text-danger"> {{$errors->first('Pscreenshot')}} </div>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Checked checkbox
                            </label>
                        </div>


                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                            <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                        </div>



                        <div class="col-12">
                            <label class="" for="p_description">Project Description</label>
                            <textarea class="form-control" id="p_description" name="Pdescription" placeholder="Project Description" rows="10" required aria-required="true" aria-describedby="Pdescriptionhelp">@if (!empty(old('Pdescription'))){{ old('Pdescription') }}@endif</textarea>
                            <div id="Pdescriptionhelp" class="form-text text-danger"> {{$errors->first('Pdescription')}} </div>
                        </div>
                        
                        <div class="col-12">
                            <button type="submit" name="submitContactForm" value="submitContactForm" class="btn w-100 btn-primary py-2">Send It</button>
                        </div>
                    </div><!--//form-row-->
                </form>
            </div>
           
        </div>
    </div>

@endsection
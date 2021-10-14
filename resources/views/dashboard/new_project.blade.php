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
            
            <div class="contact-form-container shadow-sm col-lg-8 mx-lg-auto p-5 bg-white">

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
                            <label class="" for="pType">Project Type</label>
                            <select class="form-select form-control" id="pType" aria-label="Default select example">
                                <option value="Webapp Development" selected>Webapp Development</option>
                                <option value="Mobile app development">Mobile app development</option>
                                <option value="Mobile App">Mobile App</option>
                                <option value="Web App & Chrome Extension">Web App & Chrome Extension</option>
                                <option value="Facebook Ads Manager">Facebook Ads Manager</option>
                                <option value="Internal Product">Internal Product</option>
                            </select>
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
                            <label class="" for="Pscreenshot">Project Screenshot</label>
                            <input type="file" class="form-control" id="Pscreenshot" name="Pscreenshot" required value="@if (!empty(old('Pscreenshot'))){{ old('Pscreenshot') }}@endif" aria-required="true" aria-describedby="Pscreenshothelp">
                            <div id="p_screenshothelp" class="form-text text-danger"> {{$errors->first('Pscreenshot')}} </div>
                        </div>
                        
                        <div class="col-12">
                            <p>Technologies used:</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="HTML" id="HTML" checked>
                                <label class="form-check-label" for="HTML">HTML</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input form " type="checkbox" value="CSS" id="CSS" checked>
                                <label class="form-check-label" for="CSS">CSS</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input form " type="checkbox" value="LESS" id="LESS">
                                <label class="form-check-label" for="LESS">LESS</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input form " type="checkbox" value="SaSS" id="SaSS">
                                <label class="form-check-label" for="SaSS">SaSS</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input form " type="checkbox" value="JavaScript" id="JavaScript">
                                <label class="form-check-label" for="JavaScript">JavaScript</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input form " type="checkbox" value="jQuery" id="jQuery">
                                <label class="form-check-label" for="jQuery">jQuery</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input form " type="checkbox" value="AJAX" id="AJAX">
                                <label class="form-check-label" for="AJAX">AJAX</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input form " type="checkbox" value="React" id="React">
                                <label class="form-check-label" for="React">React</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input form " type="checkbox" value="NodeJS" id="NodeJS">
                                <label class="form-check-label" for="NodeJS">NodeJS</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input form " type="checkbox" value="VueJS" id="VueJS">
                                <label class="form-check-label" for="VueJS">VueJS</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input form " type="checkbox" value="MySQL" id="MySQL">
                                <label class="form-check-label" for="MySQL">MySQL</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input form " type="checkbox" value="PHP" id="PHP">
                                <label class="form-check-label" for="PHP">PHP</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input form " type="checkbox" value="Laravel" id="Laravel">
                                <label class="form-check-label" for="Laravel">Laravel</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input form " type="checkbox" value="WordPress" id="WordPress">
                                <label class="form-check-label" for="WordPress">WordPress</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="" for="p_description">Project Description</label>
                            <textarea class="form-control" id="p_description" name="Pdescription" placeholder="Project Description" rows="5" required aria-required="true" aria-describedby="Pdescriptionhelp">@if (!empty(old('Pdescription'))){{ old('Pdescription') }}@endif</textarea>
                            <div id="Pdescriptionhelp" class="form-text text-danger"> {{$errors->first('Pdescription')}} </div>
                        </div>
                        
                        <div class="col-12">
                            <button type="submit" name="addProject" value="addProject" class="btn w-100 btn-primary py-2">Add Project</button>
                        </div>
                    </div><!--//form-row-->
                </form>
            </div>
           
        </div>
    </div>

@endsection
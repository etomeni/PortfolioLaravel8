@extends('layouts.app')

@section('contentHeader')

    <div class="header-intro theme-bg-primary text-white py-5">
        <div class="container">
            <h2 class="page-heading mb-0">Contact</h2>
        </div>
    </div><!--//header-intro-->

@endsection

@section('content')
    
    <section class="section py-5">
        <div class="container">
            <div class="row">
                <div class="contact-intro col-lg-8 mx-lg-auto mb-5 text-center">
                    
                    <img class="profile-small d-inline-block mx-auto rounded-circle mb-3" src="assets/images/sunwhite.jpeg" alt="">
                    
                    <div class="speech-bubble bg-white p-4 p-lg-5 shadow-sm">
                        <p class="text-start mb-3">I'm currently taking on freelance work. If you are interested in hiring me for your project please use the form below to get in touch. Want to know how I work and what I can offer? Check out my <a class="text-link" href="projects">project case studies</a> and <a class="text-link" href="resume">resume</a>.</p>
                        <h6 class="font-weight-bold text-center mb-3">You can also find me on the following channels</h6>
                        
                        <ul class="social-list-color list-inline mb-0">
                            <li class="list-inline-item mb-3"><a class="twitter" href="https://twitter.com/sun1white"><i class="fab fa-twitter fa-fw"></i></a></li>
                            <li class="list-inline-item mb-3"><a class="facebook" href="https://facebook.com/amsundaywhite"><i class="fab fa-facebook fa-fw"></i></a></li>
                            <li class="list-inline-item mb-3"><a class="instagram" href="https://instagram.com/amsundaywhite"><i class="fab fa-instagram fa-fw"></i></a></li>
                            <li class="list-inline-item mb-3"><a class="linkedin" href="https://linkedin.com/in/sunday-white"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                            <li class="list-inline-item mb-3"><a class="github" href="https://github.com/etomeni"><i class="fab fa-github-alt fa-fw"></i></a></li>
                            <li class="list-inline-item mb-3"><a class="stack-overflow" href="http://sunday.rf.gd/"><i class="fas fa-globe fa-fw"></i></a></li>
                            
                            <!--<li class="list-inline-item"><a class="instagram" href="#"><i class="fab fa-instagram fa-fw"></i></a></li>-->
                        </ul><!--//social-list-->
                    </div>
                    
                </div><!--//contact-intro-->

                <div class="contact-form-container shadow-sm col-lg-8 mx-lg-auto p-5 bg-white">
                    <form id="contact-form" class="contact-forms" method="POST" enctype="multipart/form-data">
                        <h3 class="text-center mb-4">Get In Touch</h3>
                        <div class="feedbackmessage">
                            <div class="text-success"><?php //echo $errors['success']; ?></div>
                            <div class="text-danger"> <?php //echo $errors['dbError']; ?> </div>
                        </div>
                        @csrf
                        <div class="row g-3">                                                           
                            <div class="col-12 col-md-6">
                                <label class="sr-only" for="cname">Name</label>
                                <input type="text" class="form-control" id="cname" name="name" placeholder="Name" minlength="3" required value="@if (!empty(old('name'))){{ old('name') }}@endif" aria-required="true" aria-describedby="Namehelp">
                                <div id="Namehelp" class="form-text text-danger"> {{$errors->first('name')}} </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="sr-only" for="cemail">Email</label>
                                <input type="email" class="form-control" id="cemail" name="email" placeholder="Email" required value="@if (!empty(old('email'))){{ old('email') }}@endif" aria-required="true" aria-describedby="Emailhelp">
                                <div id="Emailhelp" class="form-text text-danger"> {{$errors->first('email')}} </div>
                            </div>
                            <div class="col-12">
                                <label class="sr-only" for="cmessage">Your message</label>
                                <textarea class="form-control" id="cmessage" name="message" placeholder="Enter your message" rows="10" required aria-required="true" aria-describedby="messagehelp">@if (!empty(old('message'))){{ old('message') }}@endif</textarea>
                                <div id="messagehelp" class="form-text text-danger"> {{$errors->first('message')}} </div>
                            </div>
                            
                            <div class="col-12">
                                <button type="submit" name="submitContactForm" value="submitContactForm" class="btn w-100 btn-primary py-2">Send It</button>
                            </div>
                        </div><!--//form-row-->
                    </form>
                </div>
                
            </div><!--//row-->
        </div><!--//container-->
    </section>

@endsection
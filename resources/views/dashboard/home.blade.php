@extends('layouts.app')

@section('contentHeader')

    <div class="header-intro theme-bg-primary text-white py-5">
        <div class="container">
            <div class="profile-teaser row gx-lg-5 justify-content-center">
                <div class="col-12 col-md-auto text-center text-md-start">
                    <img class="profile-image mb-3 mb-lg-0 ms-md-0 rounded mx-auto" src="assets/images/sunwhite.jpeg" alt="">
                </div>
                <div class="col text-center text-md-start">
                    <div class="lead">Hello, my name is </div>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#header-intro"><i class="fa fa-pen-alt float-end text-secondary"></i></a>
                    <h2 class="mt-0 display-4 font-weight-bold">Sunday Etom Eni</h2>
                    <div class="bio mb-3">I'm a full-stack developer specialised in frontend and backend development for complex scalable web apps. 
                        I've been developing since 2019, am Keen on learning more, expanding my skills and knowledge, collaborating and sharing knowledge with people.
                        <!-- write about web development on <a class="link-on-bg text-link" href="blog">my blog</a> and regularly <a class="link-on-bg text-link" href="talks">speak</a> at various web conferences and meetups.  -->
                        Want to know how I may help your project? Check out my project <a class="link-on-bg text-link" href="projects">case studies</a> and <a class="link-on-bg text-link" href="resume">resume</a>.
                    </div><!--//bio-->
                    <a class="theme-btn-on-bg btn font-weight-bold theme-btn-cta" href="contact">Hire Me</a>
                
                </div><!--//media-body-->
            </div><!--//profile-teaser-->
            
        </div><!--//container-->
    </div>
    <!--//header-intro-->


    <!-- Modal for Header Intro -->
    <div class="modal fade homepage" id="header-intro" tabindex="-1" aria-labelledby="header-intro-Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center" id="header-intro-Label">Edit Header Intro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

					<div class="row">
						<div class="col">
							<form id="" class="" method="POST" enctype="multipart/form-data">
								<div class="feedbackmessage">
									<div class="text-success"><?php //echo $errors['success']; ?></div>
									<div class="text-danger"> <?php //echo $errors['dbError']; ?> </div>
								</div>
								@csrf
								<div class="row g-3">                                                           
									<div class="col-12 col-md-6">
										<label class="sr-only" for="itext">Intro Text</label>
										<input type="text" class="form-control" id="itext" name="itext" placeholder="Name intro" minlength="3" required value="@if (!empty(old('itext'))){{ old('itext') }}@endif" aria-required="true" aria-describedby="itexthelp">
										<div id="itexthelp" class="form-text text-danger"> {{$errors->first('itext')}} </div>
									</div>
									<div class="col-12 col-md-6">
										<label class="sr-only" for="name">Name</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Name" minlength="3" required value="@if (!empty(old('name'))){{ old('name') }}@endif" aria-required="true" aria-describedby="Namehelp">
										<div id="Namehelp" class="form-text text-danger"> {{$errors->first('name')}} </div>
									</div>
									<div class="col-12">
										<label class="sr-only" for="propic">Profile Picture</label>
										<input type="file" class="form-control" id="propic" name="propic" minlength="3" required value="@if (!empty(old('propic'))){{ old('propic') }}@endif" aria-required="true" aria-describedby="propichelp">
										<div id="propichelp" class="form-text text-danger"> {{$errors->first('propic')}} </div>
									</div>
									<div class="col-12">
										<label class="sr-only" for="description">description</label>
										<textarea class="form-control" id="description" name="description" placeholder="Give a brief intro. description about yourself" rows="5" required aria-required="true" aria-describedby="descriptionhelp">@if (!empty(old('description'))){{ old('description') }}@endif</textarea>
										<div id="descriptionhelp" class="form-text text-danger"> {{$errors->first('description')}} </div>
									</div>
									
									<div class="col-12">
										<button type="submit" name="headerintro" value="headerintro" class="btn w-100 btn-primary py-2 headerIntroBTN suBTN">Save changes</button>
									</div>
								</div><!--//form-row-->
							</form>
						</div>
					</div>

                </div>
                
            </div>
        </div>
    </div>

@endsection

@section('content')
        
    <section class="skills-section section py-5">
        <div class="container">
	        <h3 class="section-title font-weight-bold text-center mb-3">Skills Overview 
                <a href="#" data-bs-toggle="modal" data-bs-target="#Skills-Overview"><i class="fa fa-pen-alt ms-3 fs-6 fw-light text-primary"></i></a>
            </h3>
	        <div class="section-intro mx-auto text-center mb-5 text-secondary">I have more than 2 years' experience building 
				rich web applications for clients all over the world. Below is a quick overview of my main technical skill sets and tools I use. 
				Want to find out more about my experience? <a class="text-link" href="resume">Check out my online resume</a>.
			</div>

            <!-- Modal for Skills Overview -->
            <div class="modal fade homepage" id="Skills-Overview" tabindex="-1" aria-labelledby="Skills-Overview-Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title w-100 text-center" id="Skills-Overview-Label">Skills Overview</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
								<div class="col">
									<form id="" class="" method="POST" enctype="multipart/form-data">
										<div class="feedbackmessage">
											<div class="text-success"><?php //echo $errors['success']; ?></div>
											<div class="text-danger"> <?php //echo $errors['dbError']; ?> </div>
										</div>
										@csrf
										<div class="row g-3">                                                           
											<div class="col-12">
												<label class="sr-only" for="hTitle">Skills Overview [New Header]</label>
												<input type="text" class="form-control" id="hTitle" name="hTitle" placeholder="Skills Overview [New Header]" minlength="3" required value="@if (!empty(old('hTitle'))){{ old('hTitle') }}@endif" aria-required="true" aria-describedby="hTitlehelp">
												<div id="hTitlehelp" class="form-text text-danger"> {{$errors->first('hTitle')}} </div>
											</div>
											
											<div class="col-12">
												<label class="sr-only" for="Skilldescription">Skills Overview Description</label>
												<textarea class="form-control" id="Skilldescription" name="Skilldescription" placeholder="Give a brief Skills Overview Description" rows="5" required aria-required="true" aria-describedby="Skilldescriptionhelp">@if (!empty(old('Skilldescription'))){{ old('Skilldescription') }}@endif</textarea>
												<div id="Skilldescriptionhelp" class="form-text text-danger"> {{$errors->first('Skilldescription')}} </div>
											</div>
											
											<div class="col-12">
												<button type="submit" name="SkillOverview" value="SkillOverview" class="btn w-100 btn-primary py-2 skillsOverViewBTN suBTN">Save changes</button>
											</div>
										</div><!--//form-row-->
									</form>
								</div>
							</div>

                        </div>
                        
                    </div>
                </div>
            </div>
	        
	        <div class="skills-blocks mx-auto pt-5">
		        <div class="row">
			        <div class="skills-block col-12 col-lg-4 mb-5 mb-3 mb-lg-0">
				        <div class="skills-block-inner bg-white shadow-sm py-4 px-5 position-relative">
					        <h4 class="skills-cat text-center mb-3 mt-5">Frontend</h4>
					        <div class="skills-icon-holder position-absolute d-inline-block rounded-circle text-center">
					            <img class="skills-icon" src="assets/images/frontend-icon.svg">
					        </div>
					        <ul class="skills-list list-unstyled text-secondary">
						        <!-- <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i>React/Redux/Angular</li> -->
						        <li class="mb-2">
                                    <i class="fas fa-check me-2 text-primary"></i>Javascript/JQuery 
                                    <a href="#"><i class="fa fa-trash float-end mx-1 text-secondary"></i></a>
                                </li>
						        <!-- <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i>Node.js</li> -->
						        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i>Bootstrap
                                    <a href="#"><i class="fa fa-trash float-end mx-1 text-secondary"></i></a>
                                </li>
						        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i>HTML/CSS<!-- /SASS/LESS -->
                                    <a href="#"><i class="fa fa-trash float-end mx-1 text-secondary"></i></a>
                                </li>

						        <li class="mt-3 text-center">
                                    <a href="#" class="btn add-btn-outline w-100" data-bs-toggle="modal" data-bs-target="#Skills"><i class="fa fa-plus"></i></a>
                                </li>

					        </ul>
				        </div><!--//skills-block-inner-->
			        </div><!--//skills-block-->
			        
			        <div class="skills-block col-12 col-lg-4 mb-5 mb-3 mb-lg-0">
				        <div class="skills-block-inner bg-white shadow-sm py-4 px-5 position-relative">
					        <h4 class="skills-cat text-center mb-3 mt-5">Backend</h4>
					        <div class="skills-icon-holder position-absolute d-inline-block rounded-circle text-center">
					            <img class="skills-icon" src="assets/images/backend-icon.svg">
					        </div>
					        <ul class="skills-list list-unstyled text-secondary">
						        <!-- <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i>Python/Django</li> -->
						        <!-- <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i>Ruby/Rails</li> -->
						        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i>PHP/Laravel
                                    <a href="#"><i class="fa fa-trash float-end mx-1 text-secondary"></i></a>
                                </li>
                                
						        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i><!-- PostgresSQL/ -->MySQL
                                    <a href="#"><i class="fa fa-trash float-end mx-1 text-secondary"></i></a>
                                </li>
						        <!-- <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i>MongoDB</li> -->
                                <li class="mt-3 text-center">
                                    <a href="#" class="btn add-btn-outline w-100" data-bs-toggle="modal" data-bs-target="#Skills"><i class="fa fa-plus"></i></a>
                                </li>

					        </ul>
				        </div><!--//skills-block-inner-->
			        </div><!--//skills-block-->
			        
			        <div class="skills-block col-12 col-lg-4">
				        <div class="skills-block-inner bg-white shadow-sm py-4 px-5 position-relative">
					        <h4 class="skills-cat text-center mb-3 mt-5">Others</h4>
					        <div class="skills-icon-holder position-absolute d-inline-block rounded-circle text-center">
					            <img class="skills-icon" src="assets/images/other-skills-icon.svg">
					        </div>
					        <ul class="skills-list list-unstyled text-secondary">
						        <!-- <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i>DevOps</li> -->
						        <!-- <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i>Unit Testing</li> -->
						        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i>Video Editing
                                    <a href="#"><i class="fa fa-trash float-end mx-1 text-secondary"></i></a>
                                </li>
						        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i>Blogging
                                    <a href="#"><i class="fa fa-trash float-end mx-1 text-secondary"></i></a>
                                </li>
						        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i>Wordpress
                                    <a href="#"><i class="fa fa-trash float-end mx-1 text-secondary"></i></a>
                                </li>

                                <li class="mt-3 text-center">
                                    <a href="#" class="btn add-btn-outline w-100" data-bs-toggle="modal" data-bs-target="#Skills"><i class="fa fa-plus"></i></a>
                                </li>

					        </ul>
				        </div><!--//skills-block-inner-->
			        </div><!--//skills-block-->
			        
		        </div><!--//row-->
	        </div>
			
			<!-- Modal for Skills -->
			<div class="modal fade homepage" id="Skills" tabindex="-1" aria-labelledby="skills-Label" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title w-100 text-center" id="skills-Label">{New} Skill</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							
							<div class="row">
								<div class="col">
									<form id="" class="" method="POST">
										<div class="feedbackmessage">
											<div class="text-success"><?php //echo $errors['success']; ?></div>
											<div class="text-danger"> <?php //echo $errors['dbError']; ?> </div>
										</div>
										@csrf
										<div class="row g-3">                                                           
											<div class="col-12">
												<label class="sr-only" for="newSkill">{New} {skill type} Skill</label>
												<input type="text" class="form-control" id="newSkill" name="newSkill" placeholder="{New} {Frontend} Skill" minlength="3" required value="@if (!empty(old('newSkill'))){{ old('newSkill') }}@endif" aria-required="true" aria-describedby="newSkillhelp">
												<div id="newSkillhelp" class="form-text text-danger"> {{$errors->first('newSkill')}} </div>
											</div>
											
											<div class="col-12">
												<button type="submit" name="SubmitNewSkill" value="SubmitNewSkill" class="btn w-100 btn-primary py-2 suBTN">Save changes</button>
											</div>
										</div><!--//form-row-->
									</form>
								</div>
							</div>

						</div>
						
					</div>
				</div>
			</div>


        </div><!--//container-->
    </section><!--//skills-section-->
    
    <section class="section-proof section bg-white py-5">
        <div class="container">
	        <h3 class="section-title font-weight-bold text-center mb-5">Great clients I've worked with</h3>
	        <div class="logos row mb-5">
		        <div class="logo px-3 col-6 col-md-4 col-lg-2 me-0 px-md-5 px-lg-4"><a class="logo-link" href="#"><img class="img-fluid svg-ie-fix" src="assets/images/logos/ams.png"></a></div>
		        <div class="logo px-3 col-6 col-md-4 col-lg-2 me-0 px-md-5 px-lg-4"><a class="logo-link" href="#"><img class="img-fluid svg-ie-fix" src="assets/images/logos/shuttleB.png"></a></div>
		        <div class="logo px-3 col-6 col-md-4 col-lg-2 me-0 px-md-5 px-lg-4"><a class="logo-link" href="#"><img class="img-fluid svg-ie-fix" src="assets/images/logos/stop2shop.png"></a></div>
		        <div class="logo px-3 col-6 col-md-4 col-lg-2 me-0 px-md-5 px-lg-4"><a class="logo-link" href="#"><img class="img-fluid svg-ie-fix" src="assets/images/logos/nadia.png"></a></div>
		        {{-- <div class="logo px-3 col-6 col-md-4 col-lg-2 me-0 px-md-5 px-lg-4"><a class="logo-link" href="#"><img class="img-fluid svg-ie-fix" src="assets/images/logos/hall6.png"></a></div> --}}
		        <div class="logo px-3 col-6 col-md-4 col-lg-2 me-0 px-md-5 px-lg-4"><a class="logo-link" href="#"><img class="img-fluid svg-ie-fix" src="assets/images/logos/uncommonR.png"></a></div>
		        <div class="logo px-3 col-6 col-md-4 col-lg-2 me-0 px-md-5 px-lg-4"><a class="logo-link" href="#"><img class="img-fluid svg-ie-fix" src="assets/images/logos/lemmt.png"></a></div>
		        <!-- <div class="logo px-3 col-6 col-md-4 col-lg-2 me-0 px-md-5 px-lg-4"><a class="logo-link" href="#"><img class="img-fluid svg-ie-fix" src="assets/images/logos/smartinfo.png"></a></div> -->
	        </div>
	        
        </div>
        
    </section>
    
    <section class="section-featured-projects py-5">
        <div class="container">
	        <h3 class="section-title font-weight-bold text-center mb-5">Featured Projects
                <a href="#" data-bs-toggle="modal" data-bs-target="#Select-Featured-Projects"><i class="fa fa-pen-alt ms-3 fs-6 fw-light text-primary"></i></a>
                {{-- <a href="dashboard/home"><i class="fa fa-plus ms-3 fs-6 fw-light text-secondary"></i></a> --}}
			</h3>
        
	        <div class="project-cards row mb-5">
		        <div class="col-12 col-lg-4">
					<div class="card rounded-0 border-0 shadow-sm mb-5 mb-lg-0">
						<div class="card-img-container position-relative">
							<img class="card-img-top rounded-0" src="assets/images/projects/audiomack.png" alt="">
							<div class="card-img-overlay overlay-logo text-center">
								<div class="project-logo"><img class="img-fluid w-50" src="assets/images/logos/ams2.png"></div>
							</div>
							<a class="card-img-overlay overlay-content text-start p-lg-4" href="#" data-bs-toggle="modal" data-bs-target="#FeaPro">
								<h5 class="card-title font-weight-bold">Client: TesaMedia</h5>
							    <p class="card-text">AudioMackStream.com is a platform that sells AudioMack streams, just like buying Instagram followers, Facebook likes, etc. Audiomackstream.com was successfull built within a short period of 3 days with fluterwave payment gateway intergration. </p>
							</a>
						</div>
						<div class="card-body pb-0">
							<h4 class="card-title text-truncate text-center mb-0"><a class="text-link" href="#" data-bs-toggle="modal" data-bs-target="#FeaPro">Webapp Development</a></h4>
						</div>
						
						<div class="card-footer border-0 text-center bg-white pb-4">
							<ul class="list-inline mb-0 mx-auto">
						        <li class="list-inline-item"><span class="badge bg-secondary badge-pill">WordPress</span></li>
						        <li class="list-inline-item"><span class="badge bg-secondary badge-pill" >PHP</span></li>
						        <li class="list-inline-item"><span class="badge bg-secondary badge-pill">JavaScript</span></li>
						        <li class="list-inline-item"><span class="badge bg-secondary badge-pill">HTML/CSS</span></li>
							</ul>
					    </div>
				    </div><!--//card-->
		        </div>

		        <div class="col-12 col-lg-4">
					<div class="card rounded-0 border-0 shadow-sm mb-5 mb-lg-0">
						<div class="card-img-container position-relative">
							<img class="card-img-top rounded-0" src="assets/images/projects/shuttle.png" alt="">
							<div class="card-img-overlay overlay-logo text-center">
								<div class="project-logo"><img class="img-fluid w-50" src="assets/images/logos/shuttle.png"></div>
							</div>
							<a class="card-img-overlay overlay-content text-start p-lg-4" href="#" data-bs-toggle="modal" data-bs-target="#FeaPro">
								<h5 class="card-title font-weight-bold">Client: Uniuyo Shuttle</h5>
							    <p class="card-text">A Smart Campus Shuttle Bus Seat Reservation System With Real-Time Display of Departure Time, Arrival Time and Distance Between Buses and Bus Stops... </p>
							</a>
						</div>
						<div class="card-body pb-0">
							<h4 class="card-title text-truncate text-center mb-0"><a class="text-link" href="#" data-bs-toggle="modal" data-bs-target="#FeaPro">Webapp Development</a></h4>
						</div>
						
						<div class="card-footer border-0 text-center bg-white pb-4">
							<ul class="list-inline mb-0 mx-auto">
						        <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Javascript/jQuery</span></li>
						        <li class="list-inline-item"><span class="badge bg-secondary badge-pill" >PHP</span></li>
						        <li class="list-inline-item"><span class="badge bg-secondary badge-pill">MySQL</span></li>
						        <li class="list-inline-item"><span class="badge bg-secondary badge-pill">HTML/CSS</span></li>
							</ul>
					    </div>
				    </div><!--//card-->
		        </div>

		        <div class="col-12 col-lg-4">
					<div class="card rounded-0 border-0 shadow-sm mb-5 mb-lg-0">
						<div class="card-img-container position-relative">
							<img class="card-img-top rounded-0" src="assets/images/projects/stop2shop.jpg" alt="">
							<div class="card-img-overlay overlay-logo text-center">
								<div class="project-logo"><img class="img-fluid w-50" src="assets/images/logos/stop2shop.png"></div>
							</div>
							<a class="card-img-overlay overlay-content text-start p-lg-4" href="#" data-bs-toggle="modal" data-bs-target="#FeaPro">
								<h5 class="card-title font-weight-bold">Client: Stop2Shop</h5>
							    <p class="card-text">An E-Commerce website for a supermarket in Benin City, It allows their customers to purchase goods and get it delivered within Benin for free...</p>
							</a>
						</div>
						<div class="card-body pb-0">
							<h4 class="card-title text-truncate text-center mb-0"><a class="text-link" href="#" data-bs-toggle="modal" data-bs-target="#FeaPro">Webapp Development</a></h4>
						</div>
						
						<div class="card-footer border-0 text-center bg-white pb-4">
							<ul class="list-inline mb-0 mx-auto">
						        <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Javascript/jQuery</span></li>
						        <li class="list-inline-item"><span class="badge bg-secondary badge-pill" >PHP</span></li>
						        <li class="list-inline-item"><span class="badge bg-secondary badge-pill">MySQL</span></li>
						        <li class="list-inline-item"><span class="badge bg-secondary badge-pill">HTML/CSS</span></li>
							</ul>
					    </div>
				    </div><!--//card-->
		        </div>
			    
	        </div><!--//row-->
	        <div class="text-center">
	            <a class="btn btn-outline-primary adnewpro" href="new_project">Add New Project</a>
	            <a class="btn btn-primary" href="projects">View all projects</a>
	        </div>
        </div><!--///container-->
		
		<!-- Modal TO SELECT Featured Projects -->
		<div class="modal fade homepage" id="Select-Featured-Projects" tabindex="-1" aria-labelledby="Select-Featured-Projects-Label" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title w-100 text-center" id="Select-Featured-Projects-Label">Select Featured Projects</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						
						<div class="row">
							<div class="col">
								
								<form id="" class="" method="POST" enctype="multipart/form-data">
									<div class="feedbackmessage">
										<div class="text-success"><?php //echo $errors['success']; ?></div>
										<div class="text-danger"> <?php //echo $errors['dbError']; ?> </div>
									</div>
									@csrf
									<div class="row g-3">                                                           
										
										<div class="col-12">
											<label class="form-label" for="stp">Start Featured Projects</label>
											<select class="form-select form-control" id="stp" aria-label="Default select">
												<option value="AudioMack Streams" selected>AudioMack Streams</option>
												<option value="UUTMS Shuttle">UUTMS Shuttle</option>
												<option value="Stop2Shop">Stop2Shop</option>
												<option value="Nadia Bakery">Nadia Bakery</option>
												<option value="Uncommon Reporters">Uncommon Reporters</option>
												<option value="Lemmt">Lemmt</option>
												<option value="SmartInfo">SmartInfo</option>
												<option value="Hall6">Hall6</option>
											</select>
										</div>
										<div class="col-12">
											<label class="form-label" for="mtp">Middle Featured Projects</label>
											<select class="form-select form-control" id="mtp" aria-label="Default select">
												<option value="UUTMS Shuttle" selected>UUTMS Shuttle</option>
												<option value="AudioMack Streams">AudioMack Streams</option>
												<option value="Stop2Shop">Stop2Shop</option>
												<option value="Nadia Bakery">Nadia Bakery</option>
												<option value="Uncommon Reporters">Uncommon Reporters</option>
												<option value="Lemmt">Lemmt</option>
												<option value="SmartInfo">SmartInfo</option>
												<option value="Hall6">Hall6</option>
											</select>
										</div>
										<div class="col-12">
											<label class="form-label" for="etp">End Featured Projects</label>
											<select class="form-select form-control" id="etp" aria-label="Default select">
												<option value="Stop2Shop" selected>Stop2Shop</option>
												<option value="AudioMack Streams">AudioMack Streams</option>
												<option value="UUTMS Shuttle">UUTMS Shuttle</option>
												<option value="Nadia Bakery">Nadia Bakery</option>
												<option value="Uncommon Reporters">Uncommon Reporters</option>
												<option value="Lemmt">Lemmt</option>
												<option value="SmartInfo">SmartInfo</option>
												<option value="Hall6">Hall6</option>
											</select>
										</div>
										 
																				
										<div class="col-12">
											<button type="submit" name="selectFeaPro" value="selectFeaPro" class="btn w-100 btn-primary py-2 suBTN">Save changes</button>
										</div>
									</div><!--//form-row-->
								</form>
							</div>
						</div>

					</div>
					
				</div>
			</div>
		</div>


		<!-- Modal for Featured Projects -->
		<div class="modal fade homepage" id="FeaPro" tabindex="-1" aria-labelledby="FeaPro-Label" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title w-100 text-center" id="FeaPro-Label">Add New Project</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						
						<div class="row">
							<div class="col">
								
								<form id="" class="" method="POST" enctype="multipart/form-data">
									<div class="feedbackmessage">
										<div class="text-success"><?php //echo $errors['success']; ?></div>
										<div class="text-danger"> <?php //echo $errors['dbError']; ?> </div>
									</div>
									@csrf
									<div class="row g-3">                                                           
										<div class="col-12 col-md-6">
											<label class="form-label" for="cname">Client Name</label>
											<input type="text" class="form-control" id="cname" name="name" placeholder="Client Name" minlength="3" required value="@if (!empty(old('name'))){{ old('name') }}@endif" aria-required="true" aria-describedby="Namehelp">
											<div id="Namehelp" class="form-text text-danger"> {{$errors->first('name')}} </div>
										</div>
										<div class="col-12 col-md-6">
											<label class="form-label" for="pType">Project Type</label>
											<select class="form-select form-control" id="pType" aria-label="Default select">
												<option value="Webapp Development" selected>Webapp Development</option>
												<option value="Mobile app development">Mobile app development</option>
												<option value="Mobile App">Mobile App</option>
												<option value="Web App & Chrome Extension">Web App & Chrome Extension</option>
												<option value="Facebook Ads Manager">Facebook Ads Manager</option>
												<option value="Internal Product">Internal Product</option>
											</select>
										</div>
										 
										<div class="col-12">
											<div class="form-label">Technologies used:</div>
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
												<input class="form-check-input form " type="checkbox" value="jQuery" id="jQuery10">
												<label class="form-check-label" for="jQuery10">jQuery</label>
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
											<label class="form-label" for="p_description">Project Description</label>
											<textarea class="form-control" id="p_description" name="Pdescription" placeholder="Project Description" rows="5" required aria-required="true" aria-describedby="Pdescriptionhelp">@if (!empty(old('Pdescription'))){{ old('Pdescription') }}@endif</textarea>
											<div id="Pdescriptionhelp" class="form-text text-danger"> {{$errors->first('Pdescription')}} </div>
										</div>
										
										<div class="col-12">
											<button type="submit" name="editFeaPro" value="editFeaPro" class="btn w-100 btn-primary py-2 suBTN">Save changes</button>
										</div>
									</div><!--//form-row-->
								</form>
							</div>
						</div>

					</div>
					
				</div>
			</div>
		</div>
        
    </section>   

@endsection
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Faisal Nawaz, Portfolio, Web developer, Web designer, UI/UX Developer">
		<meta name="description" content="I'm web designer and developer with 4 years of experience.">
		<meta name="author" content="Faisal Nawaz">
		<meta property="og:image" content="http://faisalnawaz.in/fais/fn.png" />
		<meta property="og:description" content="I'm web designer and developer with 4 years of experience." />
		<title>FN | Portfolio</title>
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik%3A300%2C400%2C500%2C700%2C800&subset=latin" />
		<!---<link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">--->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elemenfn and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> <![endif]-->
	</head>

	<body data-spy="scroll" data-target=".navbar" class="has-loading-screen">
	
		<?php include 'include/preloader.php' ?>
		
		<nav class="navbar navbar-expand-lg navbar-light fixed-top">
			<div class="container">
				<a href="index" class="fn-push-down__50">
				<img width="64" height="70" src="images/logo.png" class="custom-logo" alt="faisal nawaz"/></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="navbar">
					<div class="navbar-nav d-block d-lg-flex ml-auto text-right">
						<ul class="mainmenu">
							<li><a class="nav-item nav-link active fn-scroll" href="#home" > Home </a></li>
							<li><a class="nav-item nav-link fn-scroll" href="#about" > About me </a></li>
							<li><a class="nav-item nav-link fn-scroll" href="#skills" > Skills </a></li>
							<li><a class="nav-item nav-link fn-scroll" href="#project" > Projects </a></li>
							<li><a class="nav-item nav-link fn-scroll" href="#contact" > Contact </a></li>
						</ul>
					</div>
				</div>

			</div>
		</nav>
		
		<section id="home" class="ts-block page-section fn__banner">
		<div class="fn__background_images">
			<div class="container position-relative h-100 fn-align__vertical">
				<div class="row w-100">
					<div class="col-md-12">
						<div class="container position-relative h-100 fn-align__vertical">
							<div class="row w-100">
								<div class="col-md-8">
									<h2>I am Faisal Nawaz</h2>
									<h2 class="fn-bubble-border">
										<span class="fn-title-rotate">
											<span class="active">Designer</span>
											<span>Developer</span>
											<span>Creative Person</span>
										</span>
									</h2>
								</div>
							</div>
							<a href="#about " class="fn-scroll fn-scroll fn-btn-effect position-absolute fn-bottom__0 fn-left__0 fn-scroll ml-3 mb-3">
								<span class="fn-visible fn-circle__sm rounded-0 fn-bg-primary">
									<i class="fa fa-arrow-down text-white"></i>
								</span>
								<span class="fn-hidden fn-circle__sm rounded-0">
									<i class="fa fa-arrow-down text-white"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="overlay"></div>
		</section>
		
		<section id="about" class="ts-block page-section portfolio">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center mb-5">
						<h2 class="fn_heading-title">About me</h2>
						<div class="fn__divider">
							<span></span>
							<span></span>
						</div>
					</div>
					
					<div class="col-xl-6 col-12">
						<div class="fn__avatar text-center">
							<img src="images/its__me.png" alt="Faisal Nawaz" class="img-fluid"/>
						</div>
					</div>
					
					<div class="col-xl-6 col-12">
						<h4 class="fn_about fn-bubble-border fn__intro">Hi There</h4>
						<div class="about-me-description">
							<p>I'm web designer and developer with 4 years of experience.</br> Hard-working, excellent work ethic, enthusiasm and adaptability with experience in web designing, frontend, backend development. Personable, friendly and eager to work and learn with others. I enjoy working in the industry and have a passion for creating and discovering new and effective digital experiences.</p>
						</div>
						<dl class="fn-column-count-2 info-block data__anchor">
	                	           		
		                    <dt>Name:</dt>
		                    <dd>Faisal Nawaz</dd>
	                	           		
		                    <dt>Email:</dt>
		                    <dd><a href="mailto:contact@faisalnawaz.in">contact@faisalnawaz.in</a></dd>
	                	           		
		                    <dt>Phone:</dt>
		                    <dd><a href="tel:+91 9831201606">+91 9831201606</a></dd>
	                	           		
		                    <dt>facebook:</dt>
		                    <dd><a href="https://www.facebook.com/fais.nawaz" target="_blank">fais.nawaz</a></dd>
							
	                	</dl>
						
						
						<div class="col-12 p-0 text-center">
						
							<a href="javascript:void()" class="fn-btn-effect mr-2" data-toggle="modal" data-target="#sendMail">
								<span class="fn-visible btn btn-primary">Send CV <i class="fa fa-send small ml-2"></i> </span>
								<span class="fn-hidden btn btn-primary" data-bg-color="#d44729" style="background-color: rgb(242, 108, 79); border-color: rgb(242, 108, 79);">Send CV <i class="fa fa-send small ml-2"></i> </span>
							</a>
							
							<a href="file/faisalnawaz.pdf" target="_blank" class="fn-btn-effect mr-2">
								<span class="fn-visible btn btn-primary"><span class="m-none">View CV</span><i class="fa fa-eye small ml-md-2"></i> </span>
								<span class="fn-hidden btn btn-primary" data-bg-color="#d44729" style="background-color: rgb(242, 108, 79); border-color: rgb(242, 108, 79);"><span class="m-none">View CV</span><i class="fa fa-eye small ml-md-2"></i> </span>
							</a>
							
							<a href="file/faisalnawaz.pdf" class="fn-btn-effect mr-2" download="file/faisalnawaz.pdf">
								<span class="fn-visible btn btn-primary"><span class="m-none">Download CV</span><i class="fa fa-download small ml-md-2"></i> </span>
								<span class="fn-hidden btn btn-primary" data-bg-color="#d44729" style="background-color: rgb(242, 108, 79); border-color: rgb(242, 108, 79);"><span class="m-none">Download CV</span><i class="fa fa-download small ml-md-2"></i> </span>
							</a>
							
							
							
						</div>

					</div>
				</div>
			</div>
		</section>
		
		<section id="skills" class="ts-block skills page-section">
			<div class="container">
                <div class="col-12 text-center mb-5">
					<h2 class="fn_heading-title">Skills</h2>
					<div class="fn__divider">
						<span></span>
						<span></span>
					</div>
					<p>2015 - 2019</p>
				</div>
                    
                    <h4>Every Day is a  New Challenge</h4>
                    <div class="row">
                        <div class="col-xl-6 col-12 mt-5 expriance">
                            <ul>
								<li>Work at <a href="https://apixelhouse.com" target='_blank'>'A Pixel House'</a> as a web designer and developer since 4 years.</li>
								<li>To manage large, complex design projects for corporate clients.</li>
								<li>Develop project consept and maintain optimal workflow.</li>
								<li>Collaborate with designers to create clean interfaces and simple, intuitive interactions and experiences.</li>
								<li>Carry out quality assurance tests to discover errors and optimize usability.</li>
								<li>Developing and maintaining the front end functionality of websites.</li>
								<li>Developing websites that have a consistent feel and look throughout all web properties.</li>
								<li>Specialized in fashion designer and product base website.</li>
								
							</ul>
                            <a href="#contact" class="fn-scroll btn btn-outline-light mb-5">Contact Me</a>
                        </div>
                        <!--end col-md-6-->
                        <div class="col-xl-6 col-12">
                            <div class="progress" data-progress-width="90%">
                                <h5 class="fn-progress-title">HTML5 <small> & </small> CSS3 <small> ( Bootstrap 3, 4 ) </small></h5>
                                <figure class="fn-progress-value" style="left: 90%;">90%</figure>
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="90"></div>
                            </div>
                            <!--end progress-->
                            <div class="progress" data-progress-width="50%">
                                <h5 class="fn-progress-title">Javascript <small> & </small> jQuery</h5>
                                <figure class="fn-progress-value" style="left: 50%;">50%</figure>
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="50"></div>
                            </div>
                            <!--end progress-->
                            <div class="progress" data-progress-width="60%">
                                <h5 class="fn-progress-title">Php <small>(OOPs)</small> <small> & </small> MySqli</h5>
                                <figure class="fn-progress-value" style="left: 60%;">60%</figure>
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="60"></div>
                            </div>
                            <!--end progress-->
                            <div class="progress" data-progress-width="70%">
                                <h5 class="fn-progress-title">Magento 1, 2  <small> & </small> Opencart <small>x3</small></h5>
                                <figure class="fn-progress-value" style="left: 70%;">70%</figure>
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="70"></div>
                            </div>
                            <!--end progress-->
                            <div class="progress" data-progress-width="40%">
                                <h5 class="fn-progress-title">Wordpress</h5>
                                <figure class="fn-progress-value" style="left: 40%;">40%</figure>
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="40"></div>
                            </div>
                            <!--end progress-->
                        </div>
                        <!--end col-md-6-->
                    </div>
                    <!--end row-->
            </div>
		</section>
		
		<section id="project" class="ts-block project page-section">
			<div class="container">

                <div class="col-12 text-center mb-5">
					<h2 class="fn_heading-title">Projects</h2>
					<div class="fn__divider">
						<span></span>
						<span></span>
					</div>
				</div>
               
                <div class="row">
				
					<div class="col-xl-4 col-6">
                        <div class="fn-item">
                            <div class="fn-item-content">
								<img src="images/project__16.jpg" class="img-fluid"/>
                                <div class="fn-item-body">
									<a href="http://dollarshoppe.in/" target="_blank">dollarshoppe <small>(eCommerce)</small></a>
                                </div>
                                <div class="fn-item-footer">
                                    <a href="http://dollarshoppe.in/" target="_blank" class="fn-link-arrow-effect">
                                        <span>visit site</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xl-4 col-6">
                        <div class="fn-item">
                            <div class="fn-item-content">
								<img src="images/project__17.jpg" class="img-fluid"/>
                                <div class="fn-item-body">
									<a href="http://mahimamahajan.in/" target="_blank">mahimamahajan <small>(eCommerce)</small></a>
                                </div>
                                <div class="fn-item-footer">
                                    <a href="http://mahimamahajan.in/" target="_blank" class="fn-link-arrow-effect">
                                        <span>visit site</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xl-4 col-6">
                        <div class="fn-item">
                            <div class="fn-item-content">
								<img src="images/project__18.jpg" class="img-fluid"/>
                                <div class="fn-item-body">
									<a href="http://forcenxt.com/" target="_blank">forcenxt <small>(eCommerce)</small></a>
                                </div>
                                <div class="fn-item-footer">
                                    <a href="http://forcenxt.com/" target="_blank" class="fn-link-arrow-effect">
                                        <span>visit site</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-6">
                        <div class="grid-gallery fn-item">
                            <div class="fn-item-content">
								<img src="images/project__1.jpg" class="img-fluid"/>
                                <div class="fn-item-body">
									<a href="http://www.anamikakhanna.in/" target="_blank">anamikakhanna</a>
                                </div>
                                <div class="fn-item-footer">
                                    <a href="http://www.anamikakhanna.in/" target="_blank" class="fn-link-arrow-effect">
                                        <span>visit site</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xl-4 col-6">
                        <div class="fn-item">
                            <div class="fn-item-content">
								<img src="images/project__2.jpg" class="img-fluid"/>
                                <div class="fn-item-body">
									<a href="http://www.eshasethithirani.com/" target="_blank">eshasethithirani</a>
                                </div>
                                <div class="fn-item-footer">
                                    <a href="http://www.eshasethithirani.com/" target="_blank" class="fn-link-arrow-effect">
                                        <span>visit site</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xl-4 col-6">
                        <div class="fn-item">
                            <div class="fn-item-content">
								<img src="images/project__3.jpg" class="img-fluid"/>
                                <div class="fn-item-body">
									<a href="http://xcsyouthink.com/" target="_blank">xcsyouthink</a>
                                </div>
                                <div class="fn-item-footer">
                                    <a href="http://xcsyouthink.com/" target="_blank" class="fn-link-arrow-effect">
                                        <span>visit site</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xl-4 col-6">
                        <div class="fn-item">
                            <div class="fn-item-content">
								<img src="images/project__13.jpg" class="img-fluid"/>
                                <div class="fn-item-body">
									<a href="http://soltee.in/" target="_blank">soltee</a>
                                </div>
                                <div class="fn-item-footer">
                                    <a href="http://soltee.in/" target="_blank" class="fn-link-arrow-effect">
                                        <span>visit site</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					<div class="col-xl-4 col-6">
                        <div class="fn-item">
                            <div class="fn-item-content">
								<img src="images/project__5.jpg" class="img-fluid"/>
                                <div class="fn-item-body">
									<a href="http://veydaa.com/" target="_blank">veydaa</a>
                                </div>
                                <div class="fn-item-footer">
                                    <a href="http://veydaa.com/" target="_blank" class="fn-link-arrow-effect">
                                        <span>visit site</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xl-4 col-6">
                        <div class="fn-item">
                            <div class="fn-item-content">
								<img src="images/project__6.jpg" class="img-fluid"/>
                                <div class="fn-item-body">
									<a href="http://purvlogistics.in/" target="_blank">purvlogistics</a>
                                </div>
                                <div class="fn-item-footer">
                                    <a href="http://purvlogistics.in/" target="_blank" class="fn-link-arrow-effect">
                                        <span>visit site</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xl-4 col-6">
                        <div class="fn-item">
                            <div class="fn-item-content">
								<img src="images/project__7.jpg" class="img-fluid"/>
                                <div class="fn-item-body">
									<a href="http://safebarrier.in/" target="_blank">safebarrier</a>
                                </div>
                                <div class="fn-item-footer">
                                    <a href="http://safebarrier.in/" target="_blank" class="fn-link-arrow-effect">
                                        <span>visit site</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xl-4 col-6">
                        <div class="fn-item">
                            <div class="fn-item-content">
								<img src="images/project__8.jpg" class="img-fluid"/>
                                <div class="fn-item-body">
									<a href="http://janatatextiles.com/" target="_blank">janatatextiles</a>
                                </div>
                                <div class="fn-item-footer">
                                    <a href="http://janatatextiles.com/" target="_blank" class="fn-link-arrow-effect">
                                        <span>visit site</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xl-4 col-6">
                        <div class="fn-item">
                            <div class="fn-item-content">
								<img src="images/project__9.jpg" class="img-fluid"/>
                                <div class="fn-item-body">
									<a href="http://1991.clothing/" target="_blank">1991</a>
                                </div>
                                <div class="fn-item-footer">
                                    <a href="http://1991.clothing/" target="_blank" class="fn-link-arrow-effect">
                                        <span>visit site</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xl-4 col-6">
                        <div class="fn-item">
                            <div class="fn-item-content">
								<img src="images/project__10.jpg" class="img-fluid"/>
                                <div class="fn-item-body">
									<a href="http://www.dnsstones.co.uk/home" target="_blank">dnsstones</a>
                                </div>
                                <div class="fn-item-footer">
                                    <a href="http://www.dnsstones.co.uk/home" target="_blank" class="fn-link-arrow-effect">
                                        <span>visit site</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xl-4 col-6">
                        <div class="fn-item">
                            <div class="fn-item-content">
								<img src="images/project__11.jpg" class="img-fluid"/>
                                <div class="fn-item-body">
									<a href="http://investinyourself.in/" target="_blank">investinyourself</a>
                                </div>
                                <div class="fn-item-footer">
                                    <a href="http://investinyourself.in/" target="_blank" class="fn-link-arrow-effect">
                                        <span>visit site</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xl-4 col-6">
                        <div class="fn-item">
                            <div class="fn-item-content">
								<img src="images/project__12.jpg" class="img-fluid"/>
                                <div class="fn-item-body">
									<a href="http://greenstateforex.co.in/" target="_blank">greenstateforex</a>
                                </div>
                                <div class="fn-item-footer">
                                    <a href="http://greenstateforex.co.in/" target="_blank" class="fn-link-arrow-effect">
                                        <span>visit site</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xl-4 col-6">
                        <div class="fn-item">
                            <div class="fn-item-content">
								<img src="images/project__4.jpg" class="img-fluid"/>
                                <div class="fn-item-body">
									<a href="http://ngtrexim.in" target="_blank">ngtrexim</a>
                                </div>
                                <div class="fn-item-footer">
                                    <a href="http://ngtrexim.in" target="_blank" class="fn-link-arrow-effect">
                                        <span>visit site</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xl-4 col-6">
                        <div class="fn-item">
                            <div class="fn-item-content">
								<img src="images/project__14.jpg" class="img-fluid"/>
                                <div class="fn-item-body">
									<a href="http://www.classes.aswinibajaj.com/" target="_blank">aswinibaja</a>
                                </div>
                                <div class="fn-item-footer">
                                    <a href="http://www.classes.aswinibajaj.com/" target="_blank" class="fn-link-arrow-effect">
                                        <span>visit site</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xl-4 col-6">
                        <div class="fn-item">
                            <div class="fn-item-content">
								<img src="images/project__15.jpg" class="img-fluid"/>
                                <div class="fn-item-body">
									<a href="http://purvknowledge.com" target="_blank">purvknowledge</a>
                                </div>
                                <div class="fn-item-footer">
                                    <a href="http://purvknowledge.com" target="_blank" class="fn-link-arrow-effect">
                                        <span>visit site</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					
                </div>
            </div>
		</section>
		
		<section id="contact" class="ts-block contact page-section">
            <div class="container">
				<div class="col-12 text-center mb-5">
					<h2 class="fn_heading-title">Contact</h2>
					<div class="fn__divider">
						<span></span>
						<span></span>
					</div>
				</div>
			
				<div class="row">
					<div class="col-12">
						<div class="text-center px-5 pt-5 position-relative">
							<h3 class="my-3 fn__dark">Let’s Work Together On Your Next Project!</h3>
							<a href="#contact-form" class="fn-scroll btn btn-primary mr-2 fn-push-down__50 fn-has-talk-arrow">Hire Me Now!</a>
							<div class="fn-background fn-opacity__20" data-bg-image="images/bg-keyboard.jpg" style="background-image: url(images/bg-keyboard.jpg);"></div>
						</div>
					</div>
				</div>
				
				<div id="contact-form" class="ts-block row mtb_xl">
					<div class="col-md-12 py-5 fn__dark p-0">
							<h3 class="mb-5">Send Me a Message</h3>
                            <form action="include/sendMail.php" name="ajax-form" id="ajax-form"  method="POST" class="clearfix fn-form fn-form-email">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="form-contact-name">Name </label>
                                            <input type="text" class="fn-control form-control" id="name" name="name" placeholder="Name" required="">
											<span class="error" id="err-name">please enter your name</span>
                                        </div>
										
										<div class="form-group">
                                            <label for="form-contact-email">Email</label>
                                            <input type="email" class="fn-control form-control" id="email" name="email" placeholder="Email" required="">
											<span class="error" id="err-email">please enter your e-mail</span>
											<span class="error" id="err-emailvld">e-mail is not a valid format</span>
                                        </div>
										
										<div class="form-group">
											<label for="form-contact-subject">Phone</label>
											<input type="tel" class="fn-control form-control" id="phone" name="phone" placeholder="Phone" required="">
											<span class="error" id="err-phone">please your phone number</span>
										</div>
										
                                    </div>
    
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
                                            <label for="form-contact-message">Message</label>
                                            <textarea class="h-custom fn-control form-control" id="message" rows="9" name="message" placeholder="Message" required=""></textarea>
                                        </div>
									</div>
                                </div>
								
								<div class="col-md-12 p-0">
									<div class="form-group clearfix">
										<div id="button-con"><button class="btn btn-primary float-right fn-btn-arrow mob__btn" id="send">Send a Message</button></div>	
										<div class="error m-0 p-0" id="err-form">There was a problem validating the form please check!</div>
										<div class="error m-0 p-0" id="err-timedout">The connection to the server timed out!</div>
										<div class="error" id="err-state"></div>
									</div>
								</div>
                                <!--end row -->
                            </form>
							<div id="ajaxsuccess">Your Message Successfully Sent!!</div>	 
					</div>
				</div>
            </div>
        </section>

		<footer id="footer">
			<div class="col-12 copyright">
				<img width="64" height="70" src="images/logo.png" class="m-auto d-block custom-logo" alt="faisal nawaz"/>
				<h6>&copy; <?php echo $copyright = date('Y') ?> | faisalnawaz.in </h6>
			</div>
		</footer>
		
		<!-- The Modal -->
		<div class="modal fade" id="sendMail">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content rounded-0">

				  <!-- Modal Header -->
				  <div class="modal-header border-bottom-0">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				  </div>

				  <!-- Modal body -->
				  <div class="modal-body">
					<form action="include/mailCV.php" name="attachment_form" id="attachment_form"  method="POST" >
						<div class="form-group cv">
							<input type="email" name="cv_mail" id="cv_mail" class="form-control fn__control" placeholder="Enter your email"/> 
							<span class="error cls_cv" id="err-email_cv">please enter your e-mail</span>
							<span class="error cls_cv" id="err-emailvld_cv">e-mail is not a valid format</span>
						</div>
						<div class="form-group">
							<button type="submit" id="attachment" class="btn btn-primary btn-sm">
								<span class="mr-2">Send</span> <i class="fa fa-send small"></i> 
							</button>
						</div>
					</form>
					<div id="cv_send" class="cv_attachment">Check your mailbox</div>
				  </div>

				</div>
			</div>
		</div>

		<a href="javascript:void(0);" id="back-to-top" title="Back to top" class="">&uarr;</a>
		
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/popper.min.js" type="text/javascript"></script>
		<script src="js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
		<script src="js/isInViewport.jquery.js" type="text/javascript"></script>
		<script src="js/setting.js" type="text/javascript"></script>
		<script src="js/contact.js" type="text/javascript"></script>
		<script src="js/cv_mail.js" type="text/javascript"></script>
		
	
	</body>
	</html>
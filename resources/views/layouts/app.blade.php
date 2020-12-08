<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('images/fav-icon/icon.png') }}">


		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css ') }}">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="{{ asset('vendor/html5shiv.js ') }}"></script>
			<script src="{{ asset('vendor/respond.js ') }}'"></script>
		<![endif]-->

        <style>
          
            .p-color{color:#EBAA0F; }
        </style>
			
	</head>

	<body>
		<div class="main-page-wrapper">


			<!-- Header _________________________________ -->
			<header class="main-header">


				<div class="top-header">
					<div class="container">
						<div class="left-side float-left">
							<ul>
								<li><span class="icon round-border"><i class="ficon flaticon-signs"></i></span> <a href="#" class="tran3s">{{ env('APP_ADDRESS', 'Laravel') }}</a></li>
								<li><span class="icon round-border"><i class="ficon flaticon-multimedia"></i></span> <a href="#" class="tran3s">{{ env('APP_EMAIL', 'Laravel') }}</a></li>
								<li><span class="icon round-border"><i class="ficon flaticon-technology"></i></span> <a href="#" class="tran3s">{{ env('APP_PHONE', 'Laravel') }}</a></li>
								<li><span class="icon round-border"><i class="ficon flaticon-translation"></i></span>
									<select class="selectpicker">
										<option>English</option>
									</select>
								</li>
							</ul>
						</div> <!-- /.left-side -->
						<div class="right-side float-right">
							<ul>
								<li><a href="#" class="tran3s round-border icon"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		        				<li><a href="#" class="tran3s round-border icon"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="tran3s round-border icon"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#" class="tran3s round-border icon"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
							</ul>
						</div> <!-- /.right-side -->
					</div>
				</div> <!-- /.top-header -->

				<!-- _______________________ Theme Menu _____________________ -->

				<div class="container">
					<div class="main-menu-wrapper clear-fix">
						<div class="container">
							<div class="logo float-left"><a href="/" style="vertical-align:middle;"><img src="images/logo/logo.png" alt="LOGO"></a></div>

							<form action="#" class="float-right">
								<input type="text" placeholder="Search">
								<button><i class="fa fa-search-minus" aria-hidden="true"></i></button>
							</form>

							<!-- Menu -->
							<nav class="navbar float-right">
							   <!-- Brand and toggle get grouped for better mobile display -->
							   <div class="navbar-header">
							     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
							       <span class="sr-only">Toggle navigation</span>
							       <span class="icon-bar"></span>
							       <span class="icon-bar"></span>
							       <span class="icon-bar"></span>
							     </button>
							   </div>
							   <!-- Collect the nav links, forms, and other content for toggling -->
							   <div class="collapse navbar-collapse" id="navbar-collapse-1">
							     <ul class="nav navbar-nav">
								  <li><a href="{{route('homepage')}}">Home</a></li>
								  <li><a href="{{route('about_us')}}">About Us</a></li>
							       
							      
							       <li class="dropdown-holder"><a href="#">Event</a>
										<ul class="sub-menu">
											<li><a href="event.html" class="tran3s">Event Single</a></li>
											<li><a href="event-details.html" class="tran3s">Event Details</a></li>
										</ul>
							       </li>
							       <li class="dropdown-holder"><a href="#">courses</a>
										<ul class="sub-menu">
											<li><a href="course-v1.html" class="tran3s">Course Version One</a></li>
											<li><a href="course-v2.html" class="tran3s">Course Version Two</a></li>
											<li><a href="course-details.html" class="tran3s">Course Details Page</a></li>
										</ul>
							       </li>

								     <li><a href="{{route('contact_us')}}">contact</a></li>

                                   @guest
                            
                              <li><a  href="{{ route('login') }}"><span style="border:1px solid white; padding:10px; border-radius:5px;">Login</span></a></li>
                              <li><a href="{{ route('register') }}"><span style="background: #EBAA0F; padding:10px; border-radius:5px;">Register</span></a></li>
                           
                        @else


						 <li class="dropdown-holder"><a href="#" style="color:gold;"><i class="ficon flaticon-signs"></i> {{ Auth::user()->username }}</a>
										<ul class="sub-menu">
											<li><a href="{{route('home')}}" class="tran3s">Dashboard</a></li>
											<li><a href="course-v2.html" class="tran3s">My Profile</a></li>
											<li><a href="#!" class="tran3s"
											onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"	
										style="color:red;"	>Log Out</a></li>
										</ul>
							       </li>
                             
                            
                            
                        @endguest


							     
							     </ul>
							   </div><!-- /.navbar-collapse -->
							</nav>
						</div>
					</div> <!-- /.main-menu-wrapper -->
				</div>
			</header>









 @yield('content')








	        <!-- Footer ______________________________ -->
	        <footer>
	        	<div class="top-footer">
	        		<div class="container">
	        			<div class="row">
	        				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer-about">
	        					<h4>About edutech</h4>
	        					<p>EDUTECH Mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the sys- tem, and expound the actual teachings of the great explorer</p>
	        					<a href="about-us.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> About us</a>
	        					<a href="our-teacher.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> Team Member</a>
	        					<ul>
									<li><a href="#" class="tran3s round-border icon"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			        				<li><a href="#" class="tran3s round-border icon"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#" class="tran3s round-border icon"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#" class="tran3s round-border icon"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								</ul>
	        				</div> <!-- /.footer-about -->

	        				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 footer-contact">
	        					<h4>CONTACT US</h4>
	        					<ul>
	        						<li>
	        							<i class="fa fa-envelope-o" aria-hidden="true"></i>
	        							<a href="http://themazine.com/cdn-cgi/l/email-protection#375f525b4759525253775253424352545f1954585a" class="tran3s"><span class="__cf_email__" data-cfemail="244c4148544a414140644140515041474c0a474b49">[email&#160;protected]</span></a>
	        						</li>
	        						<li>
	        							<i class="fa fa-phone" aria-hidden="true"></i>
	        							<a href="tel:+8801712570051" class="tran3s">+8801712570051</a>
	        						</li>
	        						<li><i class="fa fa-map-marker" aria-hidden="true"></i>Edine rode,1234 Plot/RS ,CA</li>
	        					</ul>
	        				</div> <!-- /.footer-contact -->

	        				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 footer-quick-link">
	        					<h4>Quick link</h4>
	        					<ul>
	        						<li><a href="course-v2.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> Our Courses</a></li>
	        						<li><a href="blog-v1.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> News/Blog</a></li>
	        						<li><a href="event.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> Event</a></li>
	        						<li><a href="our-teacher.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> Team Member</a></li>
	        						<li><a href="faq.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> Privacy Policy</a></li>
	        						<li><a href="faq.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> Help</a></li>
	        						<li><a href="contact-us.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> Support</a></li>
	        						<li><a href="#" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> Education</a></li>
	        						<li><a href="our-teacher.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> Teacher</a></li>
	        					</ul>
	        				</div> <!-- /.footer-quick-link -->

	        				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer-event">
	        					<h4>Latest events</h4>

	        					<div id="footer-event-carousel" class="carousel slide" data-ride="carousel">
								  	  <!-- Indicators -->
									  <ol class="carousel-indicators">
									    <li data-target="#footer-event-carousel" data-slide-to="0" class="active"></li>
									    <li data-target="#footer-event-carousel" data-slide-to="1"></li>
									    <li data-target="#footer-event-carousel" data-slide-to="2"></li>
									  </ol>

									  <!-- Wrapper for slides -->
									  <div class="carousel-inner" role="listbox">
									    <div class="item active">
									      <ul>
									      	<li>
									      		<div class="date p-color-bg">27 <span>Dec</span></div>
									      		<a href="event-details.html"><h6>Learning Management</h6></a>
									      		<ul>
					        						<li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
					        						<li><i class="fa fa-tags" aria-hidden="true"></i> Gpur Academy</li>
					        					</ul>
									      	</li>

									      	<li>
									      		<div class="date p-color-bg">19 <span>Dec</span></div>
									      		<a href="event-details.html"><h6>LEARN COUSES ONLINE</h6></a>
									      		<ul>
					        						<li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
					        						<li><i class="fa fa-tags" aria-hidden="true"></i> Gpur Academy</li>
					        					</ul>
									      	</li>

									      	<li>
									      		<div class="date p-color-bg">07 <span>Dec</span></div>
									      		<a href="event-details.html"><h6>COURSES FOR FREE GED</h6></a>
									      		<ul>
					        						<li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
					        						<li><i class="fa fa-tags" aria-hidden="true"></i> Gpur Academy</li>
					        					</ul>
									      	</li>
									      </ul>
									    </div> <!-- /.item -->

									    <div class="item">
									      <ul>
									      	<li>
									      		<div class="date p-color-bg">27 <span>Dec</span></div>
									      		<a href="event-details.html"><h6>Learning Management</h6></a>
									      		<ul>
					        						<li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
					        						<li><i class="fa fa-tags" aria-hidden="true"></i> Gpur Academy</li>
					        					</ul>
									      	</li>

									      	<li>
									      		<div class="date p-color-bg">19 <span>Dec</span></div>
									      		<a href="event-details.html"><h6>LEARN COUSES ONLINE</h6></a>
									      		<ul>
					        						<li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
					        						<li><i class="fa fa-tags" aria-hidden="true"></i> Gpur Academy</li>
					        					</ul>
									      	</li>

									      	<li>
									      		<div class="date p-color-bg">07 <span>Dec</span></div>
									      		<a href="event-details.html"><h6>COURSES FOR FREE GED</h6></a>
									      		<ul>
					        						<li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
					        						<li><i class="fa fa-tags" aria-hidden="true"></i> Gpur Academy</li>
					        					</ul>
									      	</li>
									      </ul>
									    </div> <!-- /.item -->

									    <div class="item">
									      <ul>
									      	<li>
									      		<div class="date p-color-bg">27 <span>Dec</span></div>
									      		<a href="event-details.html"><h6>Learning Management</h6></a>
									      		<ul>
					        						<li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
					        						<li><i class="fa fa-tags" aria-hidden="true"></i> Gpur Academy</li>
					        					</ul>
									      	</li>

									      	<li>
									      		<div class="date p-color-bg">19 <span>Dec</span></div>
									      		<a href="event-details.html"><h6>LEARN COUSES ONLINE</h6></a>
									      		<ul>
					        						<li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
					        						<li><i class="fa fa-tags" aria-hidden="true"></i> Gpur Academy</li>
					        					</ul>
									      	</li>

									      	<li>
									      		<div class="date p-color-bg">07 <span>Dec</span></div>
									      		<a href="event-details.html"><h6>COURSES FOR FREE GED</h6></a>
									      		<ul>
					        						<li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
					        						<li><i class="fa fa-tags" aria-hidden="true"></i> Gpur Academy</li>
					        					</ul>
									      	</li>
									      </ul>
									    </div> <!-- /.item -->  
									</div>
								</div> <!-- /#footer-event-carousel -->
	        				</div> <!-- /.footer-event -->
	        			</div> <!-- /.row -->
	        		</div> <!-- /.container -->
	        	</div> <!-- /.top-footer -->

	        	<div class="bottom-footer">
	        		<p>Copyright 2016 &copy; <a href="#!" class="tran3s" >TheMazine</a> <span>|</span> Designed by <span class="p-color">Otech Nieria</span></p>
	        	</div> <!-- /.bottom-footer -->
	        </footer>

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s p-color-bg">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			<!-- pre loader  -->
		 	<div id="loader-wrapper">
				<div id="loader"></div>
			</div>





		<!-- Js File_________________________________ -->

		<!-- j Query -->
		<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="vendor/jquery-2.1.4.js"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>

		<!-- Vendor js _________ -->
		<!-- revolution -->
		<script src="{{ asset('vendor/revolution/jquery.themepunch.tools.min.js') }}"></script>
		<script src="{{ asset('vendor/revolution/jquery.themepunch.revolution.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/revolution/revolution.extension.slideanims.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/revolution/revolution.extension.layeranimation.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/revolution/revolution.extension.navigation.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/revolution/revolution.extension.kenburn.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/revolution/revolution.extension.actions.min.js') }}"></script>

		<!-- Google map js -->
		<script src="http://maps.google.com/maps/api/js"></script> <!-- Gmap Helper -->
		<script src="{{ asset('vendor/gmap.js') }}"></script>
		<!-- Bootstrap Select JS -->
		<script type="text/javascript" src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.js') }}"></script>
		<!-- Time picker -->
		<script type="text/javascript" src="{{ asset('vendor/time-picker/jquery.timepicker.min.js') }}"></script>
		<!-- WOW js -->
		<script type="text/javascript" src="{{ asset('vendor/WOW-master/dist/wow.min.js') }}"></script>
		<!-- owl.carousel -->
		<script type="text/javascript" src="{{ asset('vendor/owl-carousel/owl.carousel.min.js') }}"></script>
		<!-- js count to -->
		<script type="text/javascript" src="{{ asset('vendor/jquery.appear.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/jquery.countTo.js') }}"></script>

		<!-- Theme js -->
		<script type="text/javascript" src="{{ asset('js/theme.js') }}"></script>

		</div> <!-- /.main-page-wrapper -->
	</body>
</html>



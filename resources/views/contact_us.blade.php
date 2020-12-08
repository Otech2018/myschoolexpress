@extends('layouts.app')

@section('content')





<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>Contact us</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="index-2.html">Home</a></li>
						<li>-</li>
						<li>Contact us</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->


			<!-- Contact Us Form _____________________ -->
			<div class="contact-us-page">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 wow fadeInLeft">
							<div class="contact-us-form">
								<h3>Send A Message</h3>
								<p>Your email address will not be published.</p>
								<form action="http://themazine.com/html/edu/inc/sendemail.php" class="form-validation" autocomplete="off">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<input name="name" type="text" placeholder="Username">
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<input name="email" type="email" placeholder="Email">
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<input name="sub" type="text" placeholder="Subject">
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<textarea name="message" placeholder="Write Message"></textarea>
											<button class="tran3s p-color-bg themehover" title="Send">send message</button>
										</div>
									</div>
								</form>

								<!-- Contact alert -->
								<div class="alert_wrapper" id="alert_success">
									<div id="success">
										<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
										<div class="wrapper">
							               	<p>Your message was sent successfully.</p>
							             </div>
							        </div>
							    </div> <!-- End of .alert_wrapper -->
							    <div class="alert_wrapper" id="alert_error">
							        <div id="error">
							           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
							           	<div class="wrapper">
							               	<p>Sorry!Something Went Wrong.</p>
							            </div>
							        </div>
							    </div> <!-- End of .alert_wrapper -->
							</div> <!-- /.contact-us-form -->
						</div> <!-- /.col- -->

						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 wow fadeInRight">
							<div class="contactUs-address">
								<h3>CONTACT US</h3>
			        			<p>Welcome to our website , Feel free to contact us any time </p>

			        			<ul>
	        						<li>
	        							<i class="fa fa-envelope-o" aria-hidden="true"></i>
	        							<a href="http://themazine.com/cdn-cgi/l/email-protection#94fcf1f8e4faf1f1f0d4f1f0e1e0f1f7fcbaf7fbf9" class="tran3s"><span class="__cf_email__" data-cfemail="0f676a637f616a6a6b4f6a6b7a7b6a6c67216c6062">[email&#160;protected]</span></a>
	        						</li>
	        						<li>
	        							<i class="fa fa-phone" aria-hidden="true"></i>
	        							<a href="tel:+8801712570051" class="tran3s">+8801712570051</a>
	        						</li>
	        						<li><i class="fa fa-map-marker" aria-hidden="true"></i>Edine rode,1234 Plot/RS ,CA <br>Near army club, #2 Road,NY</li>
	        					</ul>

							</div> <!-- /.our-address -->
						</div>
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.contact-us-page -->


			<!-- Google Map -->
			<div id="google-map" style="height:460px; width:100%; margin-top:100px;"></div>




			<!-- SubsCribe Banner ___________________ -->
	        <div class="subscribe-banner p-color-bg">
	        	<div class="container">
	        		<h3>Subscribe now</h3>
	        		<p>Receive weekly newsletter with educational materials, new courses, most popular posts, popular books and much more!</p>
	        		<form action="#" class="clear-fix">
	        			<input type="email" class="float-left wow fadeInLeft" placeholder="Email address">
	        			<button class="float-left tran3s wow fadeInRight">Subcribe</button>
	        		</form>
	        	</div>
	        </div>


@endsection
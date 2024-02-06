<section class="cta-2">
        <div class="container">
            <div class="row align-items-center subscribe-section ">
                <div class="col-lg-6">
                    <div class="section-heading white-text">
                        <span class="subheading">Newsletter</span>
                        <h3>Join our community of students</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="subscribe-form">
                        <form action="#">
                            <input type="email" class="form-control" placeholder="Email Address" name="email">
							<input type="submit" name="submit" value="Subscribe" class="btn btn-main">
                            <!-- <a href="#" class="btn btn-main">Subscribe<i class="fa fa-angle-right ml-2"></i> </a> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<?php
	if(isset($_GET['submit'])){
		include_once "./apis/Courses.php";
		$userObj=new Courses();
		$status=$userObj->insertUser($_GET['email']);
	}
	?>
<style>
    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        left: 40px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .my-float {
        margin-top: 16px;
    }
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=+918588891017&text=Hello." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<section class="footer ">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6 col-md-6">
				<div class="widget footer-widget mb-lg-0">
					<h5 class="widget-title">About Us</h5>
					<p class="mt-3">Accoet provides high quality IT training courses. Training is an important step in advancing your career and attaining professional goals. So, To help you make career ready with corporate requirements we will be nuturing you throughout.We are available on physical as well as virtual mode. Our team is comprised of learning professional, subject matter and IT professionals. </p>
					<ul class="list-inline footer-socials">
						<li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone=+918588891017&text=Hello."><i class="fab fa-whatsapp"></i></a></li>
						<li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100086036258976"><i class="fab fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href="https://www.linkedin.com/in/accoet-india-05a176250"><i class="fab fa-linkedin"></i></a></li>
						<li class="list-inline-item"> <a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-sm-6 col-md-6">
				<div class="footer-widget mb-5 mb-lg-0">
					<h5 class="widget-title">Organization</h5>
					<ul class="list-unstyled footer-links">
						<li><a href="about.php">About us</a></li>
						<li><a href="contact.php">Contact us</a></li>
						<li><a href="#">Terms & Condition</a></li>
						<li><a href="#">Privacy policy</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6 col-md-6">
				<div class="footer-widget mb-5 mb-lg-0">
					<h5 class="widget-title">Courses</h5>
					<ul class="list-unstyled footer-links">
						<li><a href="course-details.php?id=1">Java Fullstack Development</a></li>
						<li><a href="course-details.php?id=2">Laravel Fullstack Development</a></li>
						<li><a href="course-details.php?id=3">React Js</a></li>
						<li><a href="course-details.php?id=4">Digital Marketing</a></li>
						<li><a href="course-details.php?id=5">Python</a></li>
						<li><a href="course-details.php?id=7">React Native</a></li>
						<li><a href="course-details.php?id=6">AutoCad</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-md-6">
				<div class="footer-widget footer-contact mb-5 mb-lg-0">
					<h5 class="widget-title">Contact </h5>

					<ul class="list-unstyled">
						<li><i class="bi bi-headphone"></i>
							<div>
								<strong>Phone number</strong>
								+91 1202 555 999
							</div>

						</li>
						<li> <i class="bi bi-envelop"></i>
							<div>
								<strong>Email Address</strong>
								 info@accoet.com
							</div>
						</li>
						<li><i class="bi bi-location-pointer"></i>
							<div>
								<strong>Office Address</strong>
								3rd Floor, Bhavani Complex,
								Sector-27,Noida-201304.
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-btm">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<!-- <div class="col-lg-6">
					<div class="footer-logo">
						<span style="font-size: 30px; font-weight: bold;">
							accoet
						</span>
					</div>
				</div> -->
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-auto">
							<div class="mb-4 mb-md-0">
								<a href="#" class="text-decoration-none link-dark small mx-3">Terms &amp; Conditions</a>
								<a href="#" class="text-decoration-none link-dark small">Privacy Policy</a>
							</div>
						</div>
						<div class="col-auto">
							<div class="d-flex align-items-center gap-1 store">
								<!-- <a href="#" class="text-decoration-none link-dark pe-2">Download app</a> -->
								<a class="me-1" href="#"><img src="assets/images/google.png" class="img-fluid app-icon" alt="#" loading="lazy"></a>
								<a href="#"><img src="assets/images/apple.png" class="img-fluid app-icon" alt="#" loading="lazy"></a>
							</div>
						</div>
					</div>
					<hr class="m-0">
					<div class="row align-items-center justify-content-between flex-column flex-sm-row">
						<div class="col-auto order-1 order-md-0">
							<p>© 2022 <a href="https://www.accoet.com">www.accoet.com</a> Developed by Spirale Infosoft </p>
						</div>
						<div class="col-auto order-0 order-md-1">
							<a href="https://accoet.com" class="text-decoration-none text-primary"><i class="bi bi-globe me-1"></i> accoet</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<div class="fixed-btm-top">
	<a href="#top-header" class="js-scroll-trigger scroll-to-top"><i class="fa fa-angle-up"></i></a>
</div>
<!--<div class="modal fade" id="regstration-Modal" tabindex="-1" aria-labelledby="regstration-ModalLabel" aria-hidden="true">-->
<!--	<div class="modal-dialog modal-dialog-centered">-->
<!--		<div class="modal-content">-->
<!--			<div class="modal-header bg-primary">-->
<!--				<h5 class="modal-title text-light text-center" id="regstration-ModalLabel">Request for Class Room & Online Training Quotation</h5>-->
<!--				<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--					<span aria-hidden="true">&times;</span>-->
<!--				</button>-->
<!--			</div>-->
<!--			<div class="modal-body">-->
<!--				<form action="#">-->
<!--					<div class="form-group">-->
<!--						<input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">-->
<!--					</div>-->
<!--					<div class="form-group">-->
<!--						<input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">-->
<!--					</div>-->
<!--					<div class="form-group">-->
<!--						<input type="text" maxlength="10" class="form-control" name="mobile" id="mobile" placeholder="Enter your mobile number">-->
<!--					</div>-->
<!--					<div class="form-group">-->
<!--						<select name="course-name" id="course-name" class="form-control">-->
<!--							<option value="Not sure">Select course</option>-->
<!--							<option value="Full-stack training">Full-stack training</option>-->
<!--							<option value="Website development training">Website Development training</option>-->
<!--							<option value="Mobile Application development training">Mobile Application development training</option>-->
<!--							<option value="Java training">Java training</option>-->
<!--							<option value="Python training">Python training</option>-->
<!--							<option value="React training">React training</option>-->
<!--							<option value="Digital marketing training">Digital marketing training</option>-->
<!--							<option value="Laravel training">Laravel training</option>-->
<!--							<option value="php training">Php training</option>-->
<!--							<option value="Auto cad training">Auto-Cad training</option>-->
<!--							<option value="Other">Other</option>-->
<!--						</select>-->
<!--					</div>-->
<!--			</div>-->
<!--			<div class="modal-footer">-->
<!--				<button type="button" class="btn btn-secondary p-2" data-dismiss="modal">Close</button>-->
<!--				<button type="submit" class="btn btn-primary p-2">Get Quote</button>-->
<!--			</div>-->
<!--			</form>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<div class="modal fade bg-transparent" id="regstration-Modal" tabindex="-1" aria-labelledby="regstration-ModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content bg-transparent">
			<div class="modal-header ">
				<button type="button" class="close " style="position: absolute;" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<img src="./assets/images/events/christmas.png" width="100%" alt="">
			</div>
			<!-- <div class="modal-body">
				<img src="./assets/images/events/christmas.png" alt="">
			</div> -->
		</div>
	</div>
</div>
<script>
	setTimeout(function() {
		$('#regstration-Modal').modal();
	}, 3000)
</script>
<style>
	.modal-header {
		padding: 0;
	}

	.close {
		color: #fff;
		text-shadow: 0 1px 0 #fff;
		opacity: 1;
	}

	.modal-header button:hover {
		background-color: transparent;
	}
</style>
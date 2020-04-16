<?php include 'header.php' ?>

<nav class="text-center">
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu">
				<li class="mr-lg-4 mr-2"><a href="index.php">Home</a></li>
				<li class="mr-lg-4 mr-2"><a href="about.php">About Us</a></li>
				<!-- <li class="mr-lg-4 mr-2"><a href="services.html">Services</a></li>
				 --><li class="mr-lg-4 mr-2"><a href="categories.php">Categories</a></li>
				<!-- <li class="mr-lg-4 mr-2"><a href="blog.html">Blog</a></li>
				 --><li class=" active"><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- inner banner -->
<section class="inner-banner">
	<div class="container">
		<h3 class="text-center">Contact Page</h3>
	</div>
</section>
<!-- //inner banner -->

<!-- page details -->
<div class="breadcrumb-agile">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page"> Contact Us</li>
		</ol>
	</div>
</div>
<!-- //page details -->

<!-- contact -->
<section class="contact py-5">
	<!-- contact content -->
	<div class="contact-cont pb-3">
		<div class="container">
			<div class="row mail-w3l-w3pvt-">
				<div class="col-lg-6">
					<div class="w3pvt-info_mail_grid_right">
						<form action="contact_form.php" method="post">
							<div class="form-group">
								<input type="text" name="Name" class="form-control" placeholder="Enter Your Name" required="">
							</div>
							<div class="form-group">
								<input type="email" name="Email" class="form-control" placeholder="Your Email Id" required="">
							</div>
							<div class="form-group">
								<input type="text" name="phone" class="form-control" placeholder="Phone Number" required="">
							</div>
							<div class="form-group">
								<textarea name="Message" placeholder="Enter Message Here" required=""></textarea>
							</div>
							<button type="submit" class="btn">Submit</button>
						</form>
					</div>
				</div>
				<div class="col-lg-5 mt-lg-0 mt-5">
					<div class="contact-left-w3ls">
						<h3>Contact Info</h3>
						<div class="row visit">
							<div class="col-md-1 col-sm-2 col-2 contact-icon-wthree  pl-2 pr-0">
								<span class="fa fa-home" aria-hidden="true"></span>
							</div>
							<div class="col-md-11 col-sm-10 col-10 contact-text-w3pvt-info">
								<h4>Visit us</h4>
								<p>B-35/36, Royal Township,  
								<br>Kandodara Road, Surat, Gujarat.</p>
							</div>
						</div>
						<div class="row mail-w3 my-4">
							<div class="col-md-1 col-sm-2 col-2 contact-icon-wthree pl-2 pr-0">
								<span class="fa fa-envelope-open-o" aria-hidden="true"></span>
							</div>
							<div class="col-md-11 col-sm-10 col-10 contact-text-w3pvt-info">
								<h4>Mail us</h4>
								<p><a href="mailto:aaram4860@gmail.com">aaram4860@gmail.com</a></p>
							</div>
						</div>
						<div class="row call">
							<div class="col-md-1 col-sm-2 col-2 contact-icon-wthree pl-2 pr-0">
								<span class="fa fa-phone" aria-hidden="true"></span>
							</div>
							<div class="col-md-11 col-sm-10 col-10 contact-text-w3pvt-info">
								<h4>Call us</h4>
								<p>(+91)- 9375031347/ 9829015283</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //contact content -->
</section>
<!-- //contact -->

<!-- map -->
<div class="map p-2">
	<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
	 class="map" style="border:0" allowfullscreen=""></iframe> -->

	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.061760390017!2d72.87816941493156!3d21.189705387640274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04540b11912fb%3A0x12850a60bd2b1657!2sSurat%20Kadodara%20Hwy%2C%20Royal%20Town%20Ship%2C%20Transport%20Nagar%2C%20Magob%2C%20Surat%2C%20Gujarat%20395010!5e0!3m2!1sen!2sin!4v1587014190643!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<!-- //map -->




<?php include 'footer.php' ?>
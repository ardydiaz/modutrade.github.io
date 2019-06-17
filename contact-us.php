<?php include('header.php'); ?>
<section id="contact-us" class="contact-us section">
<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="section-title">
				<h1>Contact Us</h1>
				<p>Contry to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
			</div>
		</div>
	</div>
	<div class="row">
		<!-- Contact Form -->
		<div class="col-md-8 col-sm-6 col-xs-12">
			<form class="form" method="post" action="mail/mail.php">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="name" placeholder="Full Name" required="required">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="email" name="email" placeholder="Your Email" required="required">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<input type="text" name="subject" placeholder="Subject" required="required">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<textarea name="message" rows="7" placeholder="Type Your Message Here"></textarea>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group button">	
							<button type="submit" class="btn primary">Submit Message</button>
						</div>
					</div>
				</div>
			</form>
		</div>
		<!--/ End Contact Form -->
		<!-- Contact Address -->
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="contact-address">
				<div class="contact">
					<h2>Get In Touch</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<!-- Single Address -->
					<div class="single-address">
						<span><i class="fa fa-headphones"></i>Phone</span>
						<p>+(123) 45678910, +(346) 45678910</p>
					</div>
					<!--/ End Single Address -->
					<!-- Single Address -->
					<div class="single-address">
						<span><i class="fa fa-envelope"></i>Email</span>
						<p><a href="mailto:info@youremail.com">info@youremail.com</a>, <a href="mailto:success@youremail.com">success@youremail.com</a></p>
					</div>
					<!--/ End Single Address -->
					<!--/ End Single Address -->
					<!-- Single Address -->
					<div class="single-address">
						<span><i class="fa fa-map"></i>Head Office:</span>
						<p>Blk.7 Lot 6 G. Tan Avenue, First Bulacan Industrial City Tikay, Malolos City Bulacan Philippines</p>
					</div>
					<!--/ End Single Address -->
				</div>
			</div>
		</div>
		<!--/ End Contact Address -->
	</div>
</div>
</section>

<?php include('footer.php');?>
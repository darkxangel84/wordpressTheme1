<?php 
/* Template Name: Contact Page */

get_header();

$thumbnail_url = wp_get_attachment_url ( get_post_thumbnail_id( $post->ID ) );

 ?>
<!-- HERO IMAGE -->
 <?php if( has_post_thumbnail() ) {  ?>
<div class="heroImageWP" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;"><!-- background-image --> </div>

 <?php } else { // Fallback image - ?>
<div class="heroImage"><!-- background-image --> </div>

<?php } ?>
 <main>

	<!-- ============ SECTION 1 ========= -->

	<section class="sectionone">
		<div class="container">
			<div class="title padding-top-lg padding-bottom-lg">
				<h1><?php the_title(); ?></h1>
				<div class="divider"></div>
			</div>

			<div class="row"> 
				<div class="col-9">

					<div class="contactDetails">
						<h2>Contact Details</h2>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus tenetur vitae consequuntur adipisci illum, eius saepe, dolorum accusamus aspernatur error fugiat nobis doloremque similique ab hic iste ipsa! Numquam id, ratione, est tempora autem dolor perspiciatis ducimus, ut fuga quaerat quae cum quasi quod unde temporibus nisi sunt? Accusamus, ipsam!</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
 
						<form class="contactForm" action="" method="POST">
							
							<div class="form-group"> 
								<label for="name">Name:</label>
								<input type="text" id="name" placeholder="your name">
							</div>
							<div class="form-group"> 
								<label for="email">Email Address:</label>
								<input type="email" id="email" placeholder="johndoe@gmail.com">
							</div>
							<div class="form-group"> 
								<label for="message">Your Message:</label>
								<textarea id="message"></textarea>
							</div>
							<input type="submit" value="Send Message" class="btn">
						</form>
					</div>
					
				</div>

				<div class="col-3">

					<div class="contactPg-details">
						<h3><i class="fa fa-map-marker" aria-hidden="true"></i> Where to find us:</h3>
						<p>Address1<br/>
						Address2<br/>
						Town<br/>
						County<br/>
						Postcode<br/><br/>
						<i class="fa fa-phone" aria-hidden="true"></i> Tel: 01582 123123</p>

						<h4><i class="fa fa-clock-o" aria-hidden="true"></i> Opening Hours</h4>
						<p> Monday - Thrusday: 5.00pm - 11.00pm<br/>
							Friday - Saturday: 5.00pm - 12.00am<br/>
							Sunday: 5.30pm - 10.00pm</p>

					</div>
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d19701.07775959639!2d-0.5217719540283203!3d51.88588000512603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1515443357547" class="googlemaps" allowfullscreen></iframe>
				</div>

			</div>
				
		</div>
	</section>

</main>

<?php get_footer(); ?>
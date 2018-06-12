<?php
/*
 	Template Name: Home Page
 */

 	// Advanced Custom Fields
 	// About Section 
 	$about_body = get_field('about_body');
 	$about_btn = get_field('about_us_button_text');
 	// SERVICE SECTION -----
 	$service_title = get_field('service_title');
 	$service_body =  get_field('service_body');
 	// OFFERS SECTION
 	$offers_title = get_field('offers_title');
 	$offers_desc =  get_field('our_offers_desc');
 	$offers_btn =  get_field('our_offers_btn_text');

 	// CONTACT DETAILS AND OPENING SECTION

 	$footer_logo = get_field('company_logo');
 	$openingHours1 = get_field('opening_hours');
 	$openingHours2 = get_field('opening_hours2');
 	$openingHours3 = get_field('opening_hours3');
 	$contact_details = get_field('contact_us');
 	$contact_num = get_field('contact_num');

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

<!-- ============ SECTION 1 - ABOUT ========= -->

<section class="sectionone">
	<div class="container">
		<div class="row">
			<div class="title padding-top-lg padding-bottom-lg">
				<h2>About Us</h2>
				<div class="divider"></div>
			</div>
		</div>
		<div class="row"> 
			<div class="col-6">
				<div class="aboutimg">
					<!-- // background-image -->
				</div>
			</div>
			<div class="col-6">
				<div class="aboutContent"> 
					<?php echo $about_body ?>
					<button class="btn"><a href="#"><?php echo $about_btn ?></a></button>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ======= SERVICES ==== SECTION 2 ======== -->

<section class="sectiontwo">
	<div class="container">
		<div class="title padding-top-lg padding-bottom-lg">
			<h1><?php echo $service_title ?></h1>

			<p><?php echo $service_body ?> </p>
			<div class="divider"></div>
		</div>
		<div class="row">

		<?php $loop = new WP_Query( array( 'post_type' => 'services_section', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

		<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

			<div class="col-3">
				<div class="service-container">
					<div class="service-img">
						<?php

						if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						}

						?>
					</div>
					<div class="service-content">
						<h2><?php the_title(); ?></h2>
						<div class="divider"></div>

						<p><?php the_content(); ?></p>
					</div>
				</div>
			</div>
			
			<?php endwhile; wp_reset_query(); ?>
			
		</div>
	</div>
</section>



<!-- ======= SPECIAL OFFERS ==== SECTION 2 ======== -->

<section class="sectionthree">
	<div class="offersContainer">
	<div class="offers">
		<div class="offersContent">
			<div class="padding-top-lg padding-bottom-lg">
				<h2 class="offersTitle"><?php echo $offers_title ?></h2>
				<div class="divider"></div>
			</div>
			<p><?php echo $offers_desc ?></p>
			<button class="btn"> <a href=""><?php echo $offers_btn ?></a></button>
		</div>
	</div>
</div>
</section>

	<!-- MAP -->

<section class="sectionfour">
	<div class="row">
				<div class="title padding-top-lg padding-bottom-lg">
					<h2>Where to Find Us</h2>
					<div class="divider"></div>
				</div>
			</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d19701.07775959639!2d-0.5217719540283203!3d51.88588000512603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1515443357547" class="googlemaps" allowfullscreen></iframe>
</section>


</main>
<!-- === ADDRESS DETAILS === -->
<div class="footerContent">
	<div class="row">
		<div class="col-4">
			<img src="<?php echo $footer_logo['url'];?>" alt="<?php echo $footer_logo['alt']; ?>" class="footerLogo">
		</div>
		<div class="col-4 padding-top-lg padding-bottom-lg">
			<h3><i class="fa fa-clock-o" aria-hidden="true"></i> Opening Hours</h3>
			<p> Monday - Thrusday: <strong><?php echo $openingHours1 ?></strong><br/>
				Friday - Saturday: <strong><?php echo $openingHours2 ?></strong><br/>
				Sunday: <strong><?php echo $openingHours3 ?></strong></p>
		</div>
		<div class="col-4 padding-top-lg padding-bottom-lg">
			<h3><i class="fa fa-map-marker" aria-hidden="true"></i> Contact Us</h3>
			<p><?php echo $contact_details ?></p>

			<p><i class="fa fa-phone" aria-hidden="true"></i>Phone: <?php echo $contact_num ?></p>
			<p>
				<a href=""><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
			</p>
		</div>
	</div>
</div>
<?php get_footer(); ?>

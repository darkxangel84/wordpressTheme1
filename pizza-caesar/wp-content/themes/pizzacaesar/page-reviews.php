<?php 
/* Template Name: Reviews Page */

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

			<?php $loop = new WP_Query( array( 'post_type' => 'testimonial', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
			
			<div class="row"> 
				<div class="review">
				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
				
				<?php $review_body = get_field('review_body'); ?>

					<div class="review-comment">
						<p><?php echo $review_body ?></p>
					</div>
					<div class="review-name"><?php the_title(); ?></div>
					<hr>
				
				<?php endwhile; wp_reset_query();?>

				</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
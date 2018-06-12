<?php 
/* Template Name: Menu Page */

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

				<div class="col-3">
					<h3>Choose from:</h3>
					<ul class="foodMenuList">
						<li>Food</li>
						<li>Pizza</li>
						<li>Pasta</li>
						<li>Drinks</li>
						<li>Soft Drinks</li>
						<li>Alcoholic</li>
					</ul>
				</div>

				<div class="col-9">
						<div class="pizzaMenu">
							<h2>Pizzas</h2>
							<div class="divider"></div>
							
							<img src="images/margherita.jpg" alt="margherita">
							
							<h4>Margherita</h4>
							<p>Tomato, Mozerella cheese</p>
							<div class="pizzaPrice">Price: <strong> &pound;6.00</strong></div>
							
							<img src="images/pepperoni.jpg" alt="pepperoni">
							
							<h4>Pepperoni</h4>
							<p>Double Pepperoni, Mozerella Cheese</p>
							<div class="pizzaPrice">Price: <strong>&pound;7.00</strong></div>
							
							<img src="images/fourcheese.jpg" alt="pepperoni">

							<h4>Four Cheese</h4>
							<p>Mozzarella, Smoked Provolone, Romano and Asiago</p>
							<div class="pizzaPrice">Price: <strong>&pound;6.00</strong></div>

							<h4>Hawaiian</h4>
							<p>Pineapple, Ham, and Mozzarella Cheese</p>
							<div class="pizzaPrice">Price: <strong>&pound;7.00</strong></div>

							<h4>Meat Feast</h4>
							<p>Chicken, Ham, Beef, and Mozzarella Cheese</p>
							<div class="pizzaPrice">Price: <strong>&pound;7.50</strong></div>

							<h4>Vegetable Supreme</h4>
							<p>Peppers, Mushrooms, Sweetcorn, and Mozzarella Cheese</p>
							<div class="pizzaPrice">Price: <strong>&pound;6.50</strong></div>
						</div>

						<div class="pastaMenu">
							<h2>Pasta Dishes</h2>
							<div class="divider"></div>
						</div>
				</div>
				
			</div>
				
		</div>
	</section>

</main>

<?php get_footer(); ?>
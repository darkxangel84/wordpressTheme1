<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pizza_Caesar
 */

?>


<?php wp_footer(); ?>

 <footer>
	<div class="copyright"> 
		<p>Web site designed and developed by Aimee Tacchi &copy; 2018 All rights reserved</p>
	</div>
</footer>
</div> <!-- end of container -->
<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>

<script>
	// Burger Menu
	 $('.burgerContainer').on('click', function(){
	 	$('nav').toggleClass('navShow');
			$('.burgerContainer .bars:nth-child(2)').toggleClass('animate');
		$('.burgerContainer .bars:nth-child(1)').toggleClass('transformBurgerBarone');
		$('.burgerContainer .bars:nth-child(3)').toggleClass('transformBurgerBarthree');

	});

	 //Fixed Nav on scroll.
	 let nav = $('.nav');
	 let heroImage = $('.heroImage');
	 let headerHeight = $('header').height();

	 $(window).scroll(function() {
		  if( $(this).scrollTop() > headerHeight ) {
		    nav.addClass('main-nav-scrolled');
		    heroImage.addClass('sectionOneMargin');
		  } else {
		    nav.removeClass('main-nav-scrolled');
		    heroImage.removeClass('sectionOneMargin');
		  }
		});
</script>

</body>
</html>

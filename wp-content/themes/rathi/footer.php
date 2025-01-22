<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rathi
 */

?>
<?php 
 if (is_product_category()) { ?>
<div class="shop-bottom-sec">
	<div class="container">
		<h1>
		Make Your Own Premium Hamper
		</h1>
		<p>Rathi Gold understands the importance of catering to your specific needs, especially when it comes to large or bulk orders. Whether it's for gifting or simply stocking up for indulgent moments, Rathi Gold has you covered.</p>
		<div class="boxes-shop">
			<div class="row">
				<?php if( have_rows('hamper_boxes','option') ): ?>
					<?php while( have_rows('hamper_boxes','option') ): the_row(); 
					
						$image = get_sub_field('image'); // Get the image URL
						$title = get_sub_field('title'); // Get the title text
					?>
						<div class="column">
							<div class="boxes">
								<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>">
								<div class="title"><?php echo esc_html($title); ?></div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
 <?php } ?>
<footer class="footer-main">
		<div class="footer-sec">
			<div class="container">
				<div class="footer-div">
					<div class="footer-logo">
						<?php dynamic_sidebar( 'footer-0' ); ?>
					</div>
					<div class="footer-cat">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
					<div class="useful-links">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
					<div class="contact-details-footer">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer-one">
			<div class="container">
                <div class="second-footer-row">
                    <div class="brand-logo-sec">
                        <?php dynamic_sidebar( 'footer-4' ); ?>
                    </div>
                    <div class="social-icon-sec">
                        <?php dynamic_sidebar( 'footer-5' ); ?>
                    </div>
                </div>
			</div>
		</div>
        <div class="bottom-footer-two">
			<div class="container">
				<?php dynamic_sidebar( 'footer-6' ); ?>
			</div>
		</div>
		<div class="scroll-top">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/scroll-icon.png">
		</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>



<?php get_header(); ?>
	<div class="four04">
		<div class="spotlight"></div>
		<div class="container">
			<!-- <svg class="" xmlns="http://www.w3.org/2000/svg" width="172" height="315" viewBox="0 0 172 315" fill="none">
				<path d="M171.5 2.5H2.5V312H147" stroke="#00AAFF" stroke-width="5" stroke-dasharray="50 50"/>
			</svg> -->
			<div class="title">
				<h1>404</h1>
				<p class="h3">Sorry, we can’t find what you’re looking for</p>
				<p class="subtitle1">Looking for any of these?</p>
			</div>
			<div class="four04__buttons">
				<?php $footer= get_field('404', 'options'); 
					if( have_rows('404', 'options') ): ?>
						<?php while( have_rows('404', 'options') ): the_row(); 	?>
						 <?php if( have_rows('buttons') ): ?>
                    		<?php while( have_rows('buttons') ): the_row(); 
								$link = get_sub_field('btn_link');
							?>
								<a class="anim-pulse" href="<?php echo esc_url($link['url']); ?>">
									<button class="btn-secondary">
										<?php echo get_sub_field('btn_text') ?>
									</button>
								</a>
							<?php endwhile; ?> 
               			<?php endif; ?> 
					<?php endwhile; ?> 
				<?php endif; ?> 
			</div>
		</div>

	</div>
<?php get_footer(); ?>

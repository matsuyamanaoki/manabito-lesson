<?php get_header(); ?>
	<div id="eye_catch" class="eye-catch">
		<ul>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/images/slide1.jpg" width="840" height="400" alt="こだわりの空間で心地よいひとときを">
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/images/slide2.jpg" width="840" height="400" alt="幸福に満ちた神聖なチャペル">
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/images/slide3.jpg" width="840" height="400" alt="「ありがとう」の気持ちが伝わるウェディング">
			</li>
		</ul>
	</div>
	<div class="contents">
		<main>
			<section class="l-section">
				<h2 class="section-title">お知らせ</h2>
				<ol class="topics-list">
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
					?>
					<li>
						<time datetime="<?php the_time( 'Y-m-d' ); ?>">
							<?php the_time( get_option( 'date_format' ) ); ?>
						</time>
						<span class="topics-title">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</span>
					</li>
					<?php
						endwhile;
					else:
					?>
					<li>現在お知らせはありません。</li>
				<?php endif; ?>
				</ol>
			</section>
		</main>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer();

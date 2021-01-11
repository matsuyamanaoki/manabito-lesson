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
					<li>
						<time datetime="2014-04-25">2014年04月25日</time>
						<span class="topics-title">ランチ・ディナーのテイスティングフェア</span>
					</li>
					<li>
						<time datetime="2014-03-03">2014年03月03日</time>
						<span class="topics-title">春の特別見学会</span>
					</li>
					<li>
						<time datetime="2014-02-20">2014年02月20日</time>
						<span class="topics-title">期間限定の割引プラン</span>
					</li>
					<li>
						<time datetime="2014-02-14">2014年02月14日</time>
						<span class="topics-title">バレンタインフェア</span>
					</li>
				</ol>
			</section>
		</main>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>

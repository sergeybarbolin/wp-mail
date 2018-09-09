<?php get_header(); ?>


<section class="search">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="breadcrumbs clearfix">
					<ul>
						<?php bcn_display(); ?>
					</ul>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="post">
					<h1>Поиск</h1>
				</div>
			</div>
			<div class="products clearfix">
				<?php while (have_posts()) : the_post(); ?>	
					<div class="col-md-3 col-sm-4 col-xs-12">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>

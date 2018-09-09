<?php get_header(); ?>
<section class="page">
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
				<div class="blog">
					<?php while (have_posts()) : the_post(); ?>	
						<div class="object">
							<b><?php the_title(); ?></b>

							<?php
							// vars	
							$field_category = get_field_object('category');
							$objects_category = $field_category['value'];
							// check
							if( $objects_category ): ?>
								<div class="item">
									<ul>
										<?php foreach( $objects_category as $object_category ): ?>
											<li><?php echo $field_category['choices'][ $object_category ]; ?></li>
										<?php endforeach; ?>
									</ul>
								</div>
							<?php endif; ?>

							<div class="item">
								 <?php the_field('company_adr'); ?>
							</div>
							<div class="item">
								 <?php the_field('mode'); ?>
							</div>
							<div class="item">
								<?php
								if( have_rows('tel') ):
								    while ( have_rows('tel') ) : the_row();
								        the_sub_field('number');
								    endwhile;
								endif;
								?>
							</div>
							<?php if (get_field('site')): ?>
								<div class="item">
									 <a target="_blank" href="http://<?php the_field('site'); ?>"><?php the_field('site'); ?></a>
								</div>
							<?php endif; ?>
							<?php if (get_field('vk')): ?>
								<div class="item">
									 <a target="_blank" href="http://<?php the_field('vk'); ?>"><?php the_field('vk'); ?></a>
								</div>
							<?php endif; ?>
							<?php if (get_field('mail')): ?>
								<div class="item">
									 <a target="_blank" href="mailto:<?php the_field('mail'); ?>"><?php the_field('mail'); ?></a>
								</div>
							<?php endif; ?>
							<?php if (get_field('viber')): ?>
								<div class="item">
									 <?php the_field('viber'); ?>
								</div>
							<?php endif; ?>
							<?php if (get_field('whatsapp')): ?>
								<div class="item">
									 <?php the_field('whatsapp'); ?>
								</div>
							<?php endif; ?>
							<?php if (get_field('telegram')): ?>
								<div class="item">
									 <?php the_field('telegram'); ?>
								</div>
							<?php endif; ?>
							<?php if (get_field('description')): ?>
								<div class="item">
									 <?php the_field('description'); ?>
								</div>
							<?php endif; ?>
							<?php if (get_field('info')): ?>
								<div class="item">
									 <?php the_field('info'); ?>
								</div>
							<?php endif; ?>
							<a href="<?php the_permalink(); ?>">Подробнее..</span></a>
						</div>
					<?php endwhile; ?>
				</div>
		</div>
	</div>       
</section>
<?php get_footer(); ?>
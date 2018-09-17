<?php get_header(); ?>
<section class="page">
      	<?php if (is_page(117)): 
			$text = get_field('typograf-test');
		?>


		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					
					<div class="post">
					<b>Без Типографа</b>
					<?php the_field('typograf-test'); ?>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="post">
					<b>Типограф</b>
					<form method="post">		
						<div>
						<?php

								include "tipograf/remotetypograf.php";
								
								$remoteTypograf = new RemoteTypograf('UTF-8');

								$remoteTypograf->htmlEntities();
								$remoteTypograf->br (true);
								$remoteTypograf->p (true);
								$remoteTypograf->nobr (3);
								$remoteTypograf->quotA ('laquo raquo');
								$remoteTypograf->quotB ('bdquo ldquo');

								print $remoteTypograf->processText ($text); ?>

						</div>
					</form>
					</div>
				</div>
			</div>
		</div>

      <?php endif; ?>

</section>
<?php get_footer(); ?>


















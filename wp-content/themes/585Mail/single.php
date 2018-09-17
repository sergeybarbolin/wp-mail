<?php get_header(); ?>
<section class="page">
	
	<div class="wrapper">	
	<div class="mail">
		<div class="mail_item">
			<?php 
				flex();
			?>
		</div>
	</div>
	<div class="code">
	   		<button class="js-textareacutbtn" data-textarea="js-cuttextarea<?php echo $mailCounter;?>" disable>Копировать</button>
	   		<textarea readonly class="js-cuttextarea<?php echo $mailCounter;?>">
				<?php 
					get_template_part( 'tamplates/head-mail' );
					flex();
				?>
			</textarea>
	</div>
</div>
	
</section>
<?php get_footer(); ?>
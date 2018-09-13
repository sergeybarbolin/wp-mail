<div class="wrapper">	
	<div class="mail">
			<div class="mail_item">
			<?php 
				get_template_part( 'tamplates/header-mail' );  
				get_template_part( 'tamplates/variative-mail' );  
				get_template_part( 'tamplates/footer-mail' ); 
			?>
		</div>
	</div>
	<div class="code">
		<button class="js-textareacutbtn" data-textarea="js-cuttextarea<?php echo $mailCounter;?>" disable>Копировать</button>
		<textarea readonly class="js-cuttextarea<?php echo $mailCounter;?>">
		<?php 
			global $mailCounter;
			get_template_part( 'tamplates/head-mail' );
			get_template_part( 'tamplates/header-mail' );  
			get_template_part( 'tamplates/variative-mail' );  
			get_template_part( 'tamplates/footer-mail' ); 
		?>
		</textarea>
	</div>
</div>
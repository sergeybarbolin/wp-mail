<?php get_header(); ?>
<section class="page">
	
	<?php 
		$banner_one 	 = get_field("banner_one");
		$banner_two 	 = get_field("banner_two");
		$banner_three 	 = get_field("banner_three");
		$oldMail 		 = get_field("old_tamplates");
		$vertical_banner = get_field("vertical_banner");
		$mailCounter 	= 0;
		if (get_field("move_banners")): 
			function pc_next_permutation($p, $size) {
			    // slide down the array looking for where we're smaller than the next guy
			    for ($i = $size - 1; $p[$i] >= $p[$i+1]; --$i) { }

			    // if this doesn't occur, we've finished our permutations
			    // the array is reversed: (1, 2, 3, 4) => (4, 3, 2, 1)
			    if ($i == -1) { return false; }

			    // slide down the array looking for a bigger number than what we found before
			    for ($j = $size; $p[$j] <= $p[$i]; --$j) { }

			    // swap them
			    $tmp = $p[$i]; $p[$i] = $p[$j]; $p[$j] = $tmp;

			    // now reverse the elements in between by swapping the ends
			    for (++$i, $j = $size; $i < $j; ++$i, --$j) {
			         $tmp = $p[$i]; $p[$i] = $p[$j]; $p[$j] = $tmp;
			    }

			    return $p;
			}


			if ($vertical_banner or ($vertical_banner and $oldMail)):
				$set = array($banner_two,$banner_three);
				$size = count($set) - 1;
				$perm = range(0, $size);
				$j = 0;

				do { 
				     foreach ($perm as $i) { $perms[$j][] = $set[$i]; }
				} 

				while ($perm = pc_next_permutation($perm, $size) and ++$j);

						foreach ($perms as $p) { 
							$banner_two 	= $p[0];
							$banner_three 	= $p[1];
							$mailCounter++;
							get_template_part( 'tamplates/new-mail-vertical' );  
						}

					if ($oldMail):
						foreach ($perms as $p) { 
							$banner_two 	= $p[0];
							$banner_three 	= $p[1];
							$mailCounter++;
							get_template_part( 'tamplates/old-mail-vertical' );  
						}
					endif;
			endif;


			$set = array($banner_one,$banner_two,$banner_three);
			$size = count($set) - 1;
			$perm = range(0, $size);
			$j = 0;

			do { 
			     foreach ($perm as $i) { $perms[$j][] = $set[$i]; }
			} 

			while ($perm = pc_next_permutation($perm, $size) and ++$j);

				foreach ($perms as $p) { 
					$banner_one 	= $p[0];
					$banner_two 	= $p[1];
					$banner_three 	= $p[2];
					$mailCounter++;

					get_template_part( 'tamplates/new-mail' );
				} 

				if ($oldMail):
					foreach ($perms as $p) { 
						$mailCounter++;
						get_template_part( 'tamplates/old-mail' );  
					}
				endif;


		else:  
			$mailCounter++;
			get_template_part( 'tamplates/new-mail' );
			if ($oldMail):
				$mailCounter++;
				get_template_part( 'tamplates/old-mail' ); 
			endif;
			if ($vertical_banner):
				$mailCounter++;
				get_template_part( 'tamplates/new-mail-vertical' );
			endif;
			if ($vertical_banner and $oldMail):
				$mailCounter++;
				get_template_part( 'tamplates/old-mail-vertical' ); 
			endif;
		endif; ?>












</section>
<?php get_footer(); ?>
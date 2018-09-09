<?php 
$banner_one = get_field('banner_one');
if( !empty($banner_one) ): ?>
  <tr>
    <td colspan="2" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; padding-bottom: 0px; padding-left: 0; padding-right: 0; padding-top: 0;"><a href="<?php echo $banner_one['caption']; ?>" target="_blank" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; line-height: 100%; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; padding-top: 0;"><img class="imageFix" width="100%" height="" border="0" src="<?php echo $banner_one['url']; ?>" alt="" style="-ms-interpolation-mode: bicubic; border: none; border-style: none; clear: both; display: block; outline: none; outline-style: none; text-decoration: none;"></a></td>
  </tr>
<?php endif; ?>
<tr>
  <td width="100%" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; padding-top: 0;">
    <table border="0" cellspacing="0" cellpadding="0" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; margin: 0; margin-bottom: 0; margin-left: 0; margin-right: 0; margin-top: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
      <?php
      $images = get_field('product_cards');
      $productCounter = 0;
      $products = count($images);
      $midpoint = $products / 2;
      if( $images ): ?>
          <tr>
              <?php foreach( $images as $image ):
                $productCounter++ ?>
                  <td align="center" width="50%" valign="top" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; padding-top: 0;"><a href="<?php echo $image['caption']; ?>" target="_blank" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; line-height: 100%; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; padding-top: 0;"><img class="imageFix" width="100%" height="" border="0" src="<?php echo $image['url']; ?>" alt="" style="-ms-interpolation-mode: bicubic; border: none; border-style: none; clear: both; display: block; outline: none; outline-style: none; text-decoration: none;"></a></td>            
                  <?php if (($productCounter % 2) == 0): ?>
                    </tr><tr>
                  <?php endif; ?>
                  <?php if ( $productCounter == $midpoint ): 
                    $banner_two = get_field('banner_three');
                    if( !empty($banner_two) ): ?>
                      <tr>
                        <td colspan="2" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; padding-bottom: 0px; padding-left: 0; padding-right: 0; padding-top: 0;"><a href="<?php echo $banner_two['caption']; ?>" target="_blank" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; line-height: 100%; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; padding-top: 0;"><img class="imageFix" width="100%" height="" border="0" src="<?php echo $banner_two['url']; ?>" alt="" style="-ms-interpolation-mode: bicubic; border: none; border-style: none; clear: both; display: block; outline: none; outline-style: none; text-decoration: none;"></a></td>
                      </tr>
                    <?php endif; 
                  endif; ?>
              <?php endforeach; ?>
          </tr>
      <?php endif; ?>
    </table>
  </td>
</tr>
<?php 
$banner_three = get_field('banner_two');
if( !empty($banner_three) ): ?>
  <tr>
    <td colspan="2" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; padding-bottom: 0px; padding-left: 0; padding-right: 0; padding-top: 0;"><a href="<?php echo $banner_three['caption']; ?>" target="_blank" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; line-height: 100%; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; padding-top: 0;"><img class="imageFix" width="100%" height="" border="0" src="<?php echo $banner_three['url']; ?>" alt="" style="-ms-interpolation-mode: bicubic; border: none; border-style: none; clear: both; display: block; outline: none; outline-style: none; text-decoration: none;"></a></td>
  </tr>
<?php endif; ?>

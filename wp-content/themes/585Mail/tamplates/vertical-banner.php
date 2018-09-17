<?php 
  global $vertical_banner, $banner_two, $banner_three;
  $images = get_field('product_cards');
  $productCounter = 0;
  $products = count($images);
  $midpoint = $products / 2;
?>
<tr>
  <td width="100%" style="padding-bottom:0;-webkit-font-smoothing:antialiased;line-height:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse !important;border-spacing:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;padding-top:0;padding-right:0;padding-left:0;" >
      <table  border="0" cellspacing="0" cellpadding="0" style="-webkit-font-smoothing:antialiased;line-height:100%;border-collapse:collapse !important;border-spacing:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;mso-table-lspace:0pt;mso-table-rspace:0pt;" >
        <tr>
          <!-- Б А Н Н Е Р -->
          <td rowspan="2"  align="center" width="342" heiht="653" valign="top" style="-webkit-font-smoothing:antialiased;line-height:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse !important;border-spacing:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" ><a href="<?php echo $vertical_banner['caption']; ?>" target="_blank" style="-webkit-font-smoothing:antialiased;line-height:100%;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" ><img width="342" heiht="653" class="imageFix" height="" border="0" src="<?php echo $vertical_banner['url']; ?>" alt="" style="-ms-interpolation-mode:bicubic;border-style:none;outline-style:none;clear:both;text-decoration:none;display:block;" /></a></td>
          <!-- Б А Н Н Е Р -->
          <td align="center" width="258" heiht="" valign="top" style="-webkit-font-smoothing:antialiased;line-height:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse !important;border-spacing:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;padding-top:0;padding-bottom:10px;padding-right:0;padding-left:0;" >
              <table bgcolor="#f8f8f8" class="categories-sml" border="0" cellspacing="0" cellpadding="0" width="600" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; margin: 0; margin-bottom: 0; margin-left: 0; margin-right: 0; margin-top: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                <tr>
                  <td align="center" width="100%" height="215px" valign="center" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; padding-top: 12px;">
                    <a href="<?php echo $images[0]['description']; ?>" target="_blank" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; line-height: 100%; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; padding-top: 0;"><img class="imageFix" width="100%" height="" border="0" src="<?php echo $images[0]['url']; ?>" alt="" style="-ms-interpolation-mode: bicubic; border: none; border-style: none; clear: both; display: block; outline: none; outline-style: none; text-decoration: none;"></a>
                  </td>
                </tr>
                <tr>
                  <td align="center" width="100%" height="55px" valign="top" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; padding-top: 0;">
                    <span class="fallback-text" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: none; color: #000000; display: inline-block; font-family: Verdana,sans-serif !important; font-size: 14px; font-weight: normal; line-height: 18px; text-decoration: none;"><?php echo $images[0]['caption']; ?></span>
                  </td>
                </tr>
                <tr>
                  <td align="center" width="100%" height="40px" valign="top" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; padding-bottom: 12px; padding-left: 0; padding-right: 0; padding-top: 12px;">
                     <a href="<?php echo $images[0]['description']; ?>" target="_blank" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; line-height: 100%; padding: 0; padding-bottom: 10px; padding-left: 0; padding-right: 0; padding-top: 10px; display: block; width: 180px; border-radius: 25px; text-align: center; background-color: #fe0000; ">
                        <span class="fallback-text" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: none; color: #fff; display: inline-block; font-family: Verdana,sans-serif !important; font-size: 14px; font-weight: normal; line-height: 18px; text-decoration: none; text-transform: uppercase;">Узнать цену</span>
                      </a>
                  </td>
                </tr>
              </table>
          </td>
        </tr>
        <tr>
          <td align="center"  width="258" heiht="" valign="top" style="-webkit-font-smoothing:antialiased;line-height:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse !important;border-spacing:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
            <table  border="0" cellspacing="0" cellpadding="0" style="-webkit-font-smoothing:antialiased;line-height:100%;border-collapse:collapse !important;border-spacing:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;mso-table-lspace:0pt;mso-table-rspace:0pt;" >
              <tr>
                <td align="center" width="258" heiht="" valign="top" style="-webkit-font-smoothing:antialiased;line-height:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse !important;border-spacing:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;padding-top:0;padding-bottom:10px;padding-right:0;padding-left:0;" >
                    <table bgcolor="#f8f8f8" class="categories-sml" border="0" cellspacing="0" cellpadding="0" width="600" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; margin: 0; margin-bottom: 0; margin-left: 0; margin-right: 0; margin-top: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                      <tr>
                        <td align="center" width="100%" height="215px" valign="center" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; padding-top: 12px;">
                          <a href="<?php echo $images[1]['description']; ?>" target="_blank" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; line-height: 100%; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; padding-top: 0;"><img class="imageFix" width="100%" height="" border="0" src="<?php echo $images[1]['url']; ?>" alt="" style="-ms-interpolation-mode: bicubic; border: none; border-style: none; clear: both; display: block; outline: none; outline-style: none; text-decoration: none;"></a>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" width="100%" height="55px" valign="top" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; padding-top: 0;">
                          <span class="fallback-text" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: none; color: #000000; display: inline-block; font-family: Verdana,sans-serif !important; font-size: 14px; font-weight: normal; line-height: 18px; text-decoration: none;"><?php echo $images[1]['caption']; ?></span>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" width="100%" height="40px" valign="top" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; padding-bottom: 12px; padding-left: 0; padding-right: 0; padding-top: 12px;">
                           <a href="<?php echo $images[1]['description']; ?>" target="_blank" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; line-height: 100%; padding: 0; padding-bottom: 10px; padding-left: 0; padding-right: 0; padding-top: 10px; display: block; width: 180px; border-radius: 25px; text-align: center; background-color: #fe0000; ">
                              <span class="fallback-text" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: none; color: #fff; display: inline-block; font-family: Verdana,sans-serif !important; font-size: 14px; font-weight: normal; line-height: 18px; text-decoration: none; text-transform: uppercase;">Узнать цену</span>
                            </a>
                        </td>
                      </tr>
                    </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
  </td>
</tr>
<tr>
  <td width="100%" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; padding-bottom: 0; padding-left: 5px; padding-right: 5px; padding-top: 0;">
    <table border="0" cellspacing="0" cellpadding="0" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; margin: 0; margin-bottom: 0; margin-left: 0; margin-right: 0; margin-top: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
      <?php

      if( $images ): ?>
          <tr>
              <?php foreach( $images as $image ):
                $productCounter++;
                if ($productCounter > 2) : 
              ?>
                  <td align="center" width="50%" valign="top" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px; padding-top: 5px;">
                    <table bgcolor="#f8f8f8" class="categories-sml" border="0" cellspacing="0" cellpadding="0" width="600" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; margin: 0; margin-bottom: 0; margin-left: 0; margin-right: 0; margin-top: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                      <tr>
                        <td align="center" width="100%" height="215px" valign="center" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; padding-top: 12px;">
                          <a href="<?php echo $image['description']; ?>" target="_blank" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; line-height: 100%; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; padding-top: 0;"><img class="imageFix" width="auto" height="" border="0" src="<?php echo $image['url']; ?>" alt="" style="-ms-interpolation-mode: bicubic; border: none; border-style: none; clear: both; display: block; outline: none; outline-style: none; text-decoration: none;"></a>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" width="100%" height="55px" valign="top" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; padding-top: 0;">
                          <span class="fallback-text" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: none; color: #000000; display: inline-block; font-family: Verdana,sans-serif !important; font-size: 14px; font-weight: normal; line-height: 18px; text-decoration: none;"><?php echo $image['caption']; ?></span>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" width="100%" height="40px" valign="top" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; padding-bottom: 12px; padding-left: 0; padding-right: 0; padding-top: 12px;">
                           <a href="<?php echo $image['description']; ?>" target="_blank" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; line-height: 100%; padding: 0; padding-bottom: 10px; padding-left: 0; padding-right: 0; padding-top: 10px; display: block; width: 180px; border-radius: 25px; text-align: center; background-color: #fe0000; ">
                              <span class="fallback-text" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: none; color: #fff; display: inline-block; font-family: Verdana,sans-serif !important; font-size: 14px; font-weight: normal; line-height: 18px; text-decoration: none; text-transform: uppercase;">Узнать цену</span>
                            </a>
                        </td>
                      </tr>
                    </table>
                  </td>            
                  <?php if (($productCounter % 2) == 0): ?>
                    </tr><tr>
                  <?php endif; ?>
                  <?php if ( $productCounter == $midpoint ): 
                    
                    if( !empty($banner_two) ): ?>
                      <tr>
                        <td colspan="2" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; padding-bottom: 0px; padding-left: 0; padding-right: 0; padding-top: 0;"><a href="<?php echo $banner_two['caption']; ?>" target="_blank" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; line-height: 100%; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; padding-top: 0;"><img class="imageFix" width="100%" height="" border="0" src="<?php echo $banner_two['url']; ?>" alt="" style="-ms-interpolation-mode: bicubic; border: none; border-style: none; clear: both; display: block; outline: none; outline-style: none; text-decoration: none;"></a></td>
                      </tr>
                    <?php endif; 
                    endif;
                  endif; ?>
              <?php endforeach; ?>
          </tr>
      <?php endif; ?>
    </table>
  </td>
</tr>
<?php 

if( !empty($banner_three) ): ?>
  <tr>
    <td colspan="2" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; border-spacing: 0; line-height: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; padding-bottom: 0px; padding-left: 0; padding-right: 0; padding-top: 0;"><a href="<?php echo $banner_three['caption']; ?>" target="_blank" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; line-height: 100%; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; padding-top: 0;"><img class="imageFix" width="100%" height="" border="0" src="<?php echo $banner_three['url']; ?>" alt="" style="-ms-interpolation-mode: bicubic; border: none; border-style: none; clear: both; display: block; outline: none; outline-style: none; text-decoration: none;"></a></td>
  </tr>
<?php endif; ?>

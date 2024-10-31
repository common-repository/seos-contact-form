<!---------------------------- Input code ---------------------------->

<strong><?php _e("Your form input code.","scf"); ?></strong>
<?php

	if( get_option('seos_form_title')){echo "<h1>" . get_option('seos_form_title') . "</h1>"; }
	
	echo '<form action="admin.php?page=seos-form-plugin-settings" method="post" class="scf-form">';

if( get_option('seos_form_name') != ""){	

	echo '<p>';
	echo  '' . esc_attr( get_option('seos_form_name') ) . ' ' . '<br />';
	echo '<input type="text" name="seos-name" value="' . ( isset( $_POST["seos-name"] ) ? esc_attr( $_POST["seos-name"] ) : '' ) . '" size="50" readonly="readonly"/>';
	echo '</p>';
}	

if( get_option('seos_form_phone') != ""){	
	echo '<p>';
	echo  '' . esc_attr( get_option('seos_form_phone') )  . ' ' . '<br />';
	echo '<input type="text" name="seos-phone" pattern="[0-9 ]+" value="' . ( isset( $_POST["seos-phone"] )? esc_attr( $_POST["seos-phone"] ) : '' ) . '" size="50" readonly="readonly"/>';

	echo '</p>';
}
	
if( get_option('seos_form_email') != ""){	
	echo '<p>';
	echo '' . esc_attr( get_option('seos_form_email') ). '<br />';	
	echo '<input type="email" name="seos-email" value="' . (isset( $_POST["seos-email"] ) ? esc_attr( $_POST["seos-email"] ) : '' ) . '" size="50" readonly="readonly"/>';
	echo '</p>';
}
	
if( get_option('seos_form_url') != ""){	
	echo '<p>';
	echo '' . esc_attr( get_option('seos_form_url') ). '<br />'; 	
	echo '<input type="url" name="seos-url" value="' . (isset( $_POST["seos-url"] ) ? esc_attr( $_POST["seos-url"] ) : '' ) . '" size="50" readonly="readonly"/>';
	echo '</p>';
}	
	
if( get_option('seos_form_select_title') != ""){	
	echo '<p>';
	echo '' . esc_attr( get_option('seos_form_select_title') ). '<br />';
	$scf_select = get_option( 'seos_form_select' ); ?>
		<select style="width: 160px;" name="seos_form_select" readonly="readonly">
			<option value="" selected="selected"> </option>
			<?php for($i=1; $i<=get_option('seos_form_select_number'); $i++) { ?>
				<?php if(get_option("scf_select_".$i)){?><option readonly="readonly" value="<?php echo get_option("scf_select_".$i); ?>" <?php if ( $scf_select == $i ) echo 'selected="selected"'; ?>><?php echo get_option("scf_select_".$i); ?></option><?php } ?>
			<?php } ?>
		</select>
	<?php				
	echo '</p>';
}	


for($new=1; $new<=get_option('count_rad'); $new++){
	if (get_option('seos_form_radio_text'.$new)) {
		echo '<p class="scf-right">'; ?>
		<input name="seos_form_radio" type="radio" value="<?php echo get_option("seos_form_radio_text".$new); ?>"<?php checked( $new, get_option( "seos_form_radio") ); ?> ' readonly="readonly"/>
		<?php
		echo '' . esc_attr( get_option("seos_form_radio_text".$new) ) . ' ' . '<br/>'; 
		echo '</p>';
	}

}
	
if( get_option('seos_form_subject') != ""){		
	echo '<p>';
	echo '' . esc_attr( get_option('seos_form_subject') ). '<br />';
	echo '<input type="text" name="seos-subject" value="' . (isset( $_POST["seos-subject"] ) ? esc_attr( $_POST["seos-subject"] ) : '' ) . '" size="50" readonly="readonly"/>';
	echo '</p>';
}


if( get_option('seos_form_message') != ""){		
	echo '<p>';
	echo '' . esc_attr( get_option('seos_form_message') ). '<br />';
	echo '<textarea readonly="readonly" rows="10" cols="50" name="seos-message">' . (isset( $_POST["seos-message"] ) ? esc_attr( $_POST["seos-message"] ) : '' ) . '</textarea>';

	echo '</p>';
}


if( get_option('seos_form_checkbox_text') != ""){		
	echo '<p>';
	echo '' . esc_attr( get_option('seos_form_checkbox_text') )  . ' ' . '<br/>'; 

	$seos_form_checked =  get_option('seos_form_checked'); ?>
	<input readonly="readonly" type="checkbox" name="seos_form_checked" value="1" <?php if (isset($seos_form_checked )) { echo "checked!";} ?> />
	
	<?php
	
}
		
	echo '<p>';
	echo '' . esc_attr( get_option('seos_form_antispam') )  . ' ' . '<br/>'; 
	echo  '<input class="noselect" type="text" name="rand" value="' . rand(1,50). '+10' . '" readonly="readonly" />' ;
	if ( get_option('seos_spam')){ echo  '<label>'. ' ' . esc_attr( get_option('seos_spam') ). ' ' . '</label>';}
	else {echo  '<label>'. _e(" Enter the SUM: ", "scf"). '</label>';}
	echo  '<input readonly="readonly" type="text" name="text" value="" />';
	echo '</p>';
	
	if ( get_option('seos_send_button')){ echo '<p><input type="submit" name="seos-submitted" value="' . esc_attr( get_option('seos_send_button')) . '"></p>';}
	else {echo '<p><input readonly="readonly" type="submit" name="seos-submitted" value="Send"></p>';}
	
	echo '</form>';
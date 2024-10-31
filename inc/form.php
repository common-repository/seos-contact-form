	<form method="post" action="options.php">
	
		<?php settings_fields( 'seos-form-plugin-settings-group' ); ?>
		<?php do_settings_sections( 'seos-form-plugin-settings-group' ); ?>
		
		 <table class="form-table">
		 
			<tr valign="top">
				<th scope="row"><?php _e('Custom text - Contact Form Title:', 'scf'); ?></th>
				<td><input type="text" name="seos_form_title" value="<?php echo esc_attr( get_option('seos_form_title') ); ?>" /></td>
			</tr>

			<tr valign="top">
				<th scope="row"><?php _e('Custom text - Required:', 'scf'); ?></th>
				<td><input type="text" name="seos_required" value="<?php echo esc_attr( get_option('seos_required') ); ?>" /></td>
			</tr>
			
			<tr valign="top">
				<th scope="row"><?php _e('Custom text - Your message is send:', 'scf'); ?></th>
				<td><input type="text" name="seos_send" value="<?php echo esc_attr( get_option('seos_send') ); ?>" /></td>
			</tr>
			
			<tr valign="top">
				<th scope="row"><?php _e('Custom text - Your message is not sent:', 'scf'); ?></th>
				<td><input type="text" name="seos_not_send" value="<?php echo esc_attr( get_option('seos_not_send') ); ?>" /></td>
			</tr>
			
			<tr valign="top">
				<th scope="row"><?php _e('Admin Email:', 'scf'); ?> </th>
				<td><input type="text" name="seos_admin_email" value="<?php echo esc_attr( get_option('seos_admin_email') ); ?>" /></td>
			</tr>
			
			<tr valign="top">
				<th scope="row"><?php _e('Custom text Antispam - Enter the SUM:', 'scf'); ?> </th>
				<td><input type="text" name="seos_spam" value="<?php echo esc_attr( get_option('seos_spam') ); ?>" /></td>
			</tr>
			
			<tr valign="top">
				<th scope="row"><?php _e('Custom text - Send Button:', 'scf'); ?> </th>
				<td><input type="text" name="seos_send_button" value="<?php echo esc_attr( get_option('seos_send_button') ); ?>" /></td>
			</tr>
			
			<tr valign="top">
				<th scope="row"><?php _e('Shortcode - Include form in your website:', 'scf'); ?> </th>
				<td> <?php echo "<textarea cols=\"10\" rows=\"1\" readonly>[seos_form]</textarea> "; ?></td>
			</tr>
			
		</table>
		
			<h3><?php _e('Each field will be activated if you inserted a text.', 'scf'); ?></h3>
		
		<table class="form-table">
		
			<tr valign="top">
				<th scope="row"><?php _e('Name - Custom text', 'scf'); ?></th>
				<td>
				<input type="text" name="seos_form_name" value="<?php echo esc_attr( get_option('seos_form_name') ); ?>" />
				<?php $required1 = esc_attr( get_option('required1')); ?>
				<span><?php _e('If checked the field is required.', 'scf'); ?> </span>
				<input type="checkbox" name="required1" value="1"<?php checked( 1 == $required1); ?> />
				</td>
			</tr>
			 
			<tr valign="top">
				<th scope="row"><?php _e('Phone Number - Custom text', 'scf'); ?></th>
				<td>
				<input type="text" name="seos_form_phone" value="<?php echo esc_attr( get_option('seos_form_phone') ); ?>" />
				<?php $required2 = esc_attr( get_option('required2')); ?>
				<span><?php _e('If checked the field is required.', 'scf'); ?> </span>
				<input type="checkbox" name="required2" value="1"<?php checked( 1 == $required2); ?> />
				</td>
			</tr>
			
			<tr valign="top">
				<th scope="row"><?php _e('Email - Custom text', 'scf'); ?></th>
				<td><input type="text" name="seos_form_email" value="<?php echo esc_attr( get_option('seos_form_email') ); ?>" />
				<?php $required3 = esc_attr( get_option('required3')); ?>
				<span><?php _e('If checked the field is required.', 'scf'); ?> </span>
				<input type="checkbox" name="required3" value="1"<?php checked( 1 == $required3); ?> />
				</td>
			</tr>
			
			<tr valign="top">
				<th scope="row"><?php _e('Website - Custom text', 'scf'); ?></th>
				<td><input type="text" name="seos_form_url" value="<?php echo esc_attr( get_option('seos_form_url') ); ?>" />
				<?php $required8 = esc_attr( get_option('required8')); ?>
				<span><?php _e('If checked the field is required.', 'scf'); ?> </span>
				<input type="checkbox" name="required8" value="1"<?php checked( 1 == $required8); ?> />
				</td>
			</tr>
			
			<tr valign="top">
				<th scope="row"><?php _e('Select Options - Custom text', 'scf'); ?></th>
				<td>
					<input type="text" name="seos_form_select_title" value="<?php echo esc_attr( get_option('seos_form_select_title') ); ?>" />
					<?php _e("Fields","scf"); ?>
					<input style="width: 50px;" type="number" min="0" name="seos_form_select_number" value="<?php echo esc_attr( get_option('seos_form_select_number') ); ?>" />
					<span class="scf-keep"><?php submit_button("keep"); ?></span>
					<?php $count = get_option('seos_form_select_number');?>
					
					
					<?php $required9 = esc_attr( get_option('required9')); ?>
					<span><?php _e('If checked the field is required.', 'scf'); ?> </span>
					<input type="checkbox" name="required9" value="1"<?php checked( 1 == $required9); ?> />
					
					<?php for($num=1; $num<=$count; $num++) {
						echo  '<p>'.__("Option Title ". $num, "scf") . ' <input size="60" type="text" name="scf_select_'.$num.'" value="'. get_option("scf_select_".$num) .'" /></p>';
					} ?>
				</td>
			</tr>
			
			<tr valign="top">
				<th scope="row"><?php _e('Subject - Custom text', 'scf'); ?></th>
				<td><input type="text" name="seos_form_subject" value="<?php echo esc_attr( get_option('seos_form_subject') ); ?>" />
				<?php $required4 = esc_attr( get_option('required4')); ?>
				<span><?php _e('If checked the field is required.', 'scf'); ?> </span>
				<input type="checkbox" name="required4" value="1"<?php checked( 1 == $required4); ?> />
				</td>
			</tr>
			
			<tr valign="top">
				<th scope="row"><?php _e('Your Message - Custom text', 'scf'); ?></th>
				<td><input type="text" name="seos_form_message" value="<?php echo esc_attr( get_option('seos_form_message') ); ?>" />
				<?php $required5 = esc_attr( get_option('required5')); ?>
				<span><?php _e('If checked the field is required.', 'scf'); ?> </span>
				<input type="checkbox" name="required5" value="1"<?php checked( 1 == $required5); ?> />
				</td>
			</tr>
			
			<tr valign="top">
				<th scope="row"><?php _e('Checkbox Button Text', 'scf'); ?></th>
				<td><input type="text" name="seos_form_checkbox_text" value="<?php echo esc_attr( get_option('seos_form_checkbox_text') ); ?>" />
					<?php $required6 = esc_attr( get_option('required6')); ?>
					<span><?php _e('If checked the field is required.', 'scf'); ?> </span>
					<input type="checkbox" name="required6" value="1"<?php checked( 1 == $required6); ?> />
				</td>
			</tr>			
						
			<tr valign="top">
				<th scope="row"><?php _e('Radio Buttons', 'scf'); ?></th>
				<td>
					<input style="width: 50px;" type="number" min="0" name="count_rad" value="<?php echo esc_attr( get_option('count_rad') ); ?>" />
					<span class="scf-keep"><?php submit_button("keep"); ?></span>
					<?php $required7 = esc_attr( get_option('required7')); ?>
					<span><?php _e('If checked the field is required.', 'scf'); ?> </span>
					<input type="checkbox" name="required7" value="1"<?php checked( 1 == $required7); ?> />
					<?php $count_rad = get_option('count_rad'); ?>
					<?php for($rad=1; $rad<=$count_rad; $rad++){ 
						echo "<p>" . __("Radio Button ", "scf").$rad .' <input size="60" type="text" name="seos_form_radio_text'.$rad.'" value="'.get_option("seos_form_radio_text".$rad).'" /></p>';				
					} ?>
				</td>
			</tr>			
		
			
		</table>
		
		<?php submit_button(); ?>

	</form>
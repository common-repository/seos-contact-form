<?php

function scf_form_html() {
	$seos_required = "<span class='required'>" . esc_attr( get_option('seos_required')) . "</span>";
	$required1 = esc_attr( get_option('required1'));
	$required2 = esc_attr( get_option('required2'));
	$required3 = esc_attr( get_option('required3'));
	$required4 = esc_attr( get_option('required4'));
	$required5 = esc_attr( get_option('required5'));
	$required6 = esc_attr( get_option('required6'));
	$required7 = esc_attr( get_option('required7'));
	$required8 = esc_attr( get_option('required8'));
	$required9 = esc_attr( get_option('required9'));
	$rand = (isset($_POST['rand']) ? $_POST['rand'] : null); 
	$text = (isset($_POST['text']) ? $_POST['text'] : null); 	
	$numb = 10;
	$sum = ($numb + $rand);
	$error = "";
	$checked = "";

 function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

	if( get_option('seos_form_title')){echo "<h1 class='scf-title'>" . get_option('seos_form_title') . "</h1>"; }
	
?> <div id="send"></div> <?php

	echo '<form class="scf-form" action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';

if( get_option('seos_form_name') != ""){	

	echo '<div>';
	echo  esc_attr( get_option('seos_form_name') );
	if(empty($_POST["seos-name"]) and $required1 != "") { $error = true;}
	if( $required1) {echo ' ' . $seos_required;}	
	echo "</div>";
	echo '<input type="text" name="seos-name" value="' . ( test_input(isset( $_POST["seos-name"] )) ? esc_attr( $_POST["seos-name"] ) : '' ) . '" size="50" />';
	echo '</p>';
}	

if( get_option('seos_form_phone') != ""){	
	echo '<p>';
	echo '<div>';
	echo  '' . esc_attr( get_option('seos_form_phone') );
	if(empty($_POST["seos-phone"]) and $required2 != "") { $error = true;}
	if($required2) {echo ' ' . $seos_required;}
	echo '</div>';	
	echo '<input type="text" name="seos-phone" pattern="[0-9 ]+" value="' . (test_input( isset( $_POST["seos-phone"] )) ? esc_attr( $_POST["seos-phone"] ) : '' ) . '" size="50" />';
	echo '</p>';
}
	
if( get_option('seos_form_email') != ""){	
	echo '<p>';
	echo '<div>';	
	echo '' . esc_attr( get_option('seos_form_email') );
	if(empty($_POST["seos-email"]) and $required3 != "") { $error = true;}
	if($required3) {echo ' ' . $seos_required;}
	echo '</div>';	
	echo '<input type="email" name="seos-email" value="' . (test_input( isset( $_POST["seos-email"] )) ? esc_attr( $_POST["seos-email"] ) : '' ) . '" size="50" />';
	echo '</p>';
}
	
if( get_option('seos_form_url') != ""){	
	echo '<p>';
	echo '<div>';
	echo '' . esc_attr( get_option('seos_form_url') ); 
	if(empty($_POST["seos-url"]) and $required8 != "") { $error = true;}
	if($required8) {echo ' ' . $seos_required;}	
	echo '</div>';	
	echo '<input type="url" name="seos-url" value="' . (test_input( isset( $_POST["seos-url"] )) ? esc_attr( $_POST["seos-url"] ) : '' ) . '" size="50" />';
	echo '</p>';
}	
	
if( get_option('seos_form_select_title') != ""){	
	echo '<p>';
	echo '<div>';
	echo '' . esc_attr( get_option('seos_form_select_title') );
	if(empty($_POST["seos_form_select"]) and $required9 != "") { $error = true;}
	if($required9) {echo ' ' . $seos_required . '<br />';}
	echo '</div>';	
	$scf_select = get_option( 'seos_form_select' ); ?>
		<select style="width: 160px;" name="seos_form_select">
			<option value="" selected="selected"> </option>
			<?php for($i=1; $i<=get_option('seos_form_select_number'); $i++) { ?>
				<?php if(get_option("scf_select_".$i)){?><option value="<?php echo get_option("scf_select_".$i); ?>" <?php if ( $scf_select == $i ) echo 'selected="selected"'; ?>><?php echo get_option("scf_select_".$i); ?></option><?php } ?>
			<?php } ?>
		</select>
	<?php				
	echo '</p><br />';
}	


for($new=1; $new<=get_option('count_rad'); $new++){
	if (get_option('seos_form_radio_text'.$new) != "") {
		echo '<p class="scf-right">'; ?>
		<input name="seos_form_radio" type="radio" value="<?php echo get_option("seos_form_radio_text".$new); ?>"<?php checked( $new, get_option( "seos_form_radio") ); ?> ' />
		<?php
		echo '' . esc_attr( get_option("seos_form_radio_text".$new) ) . ' ' . '<br/>'; 
		echo '</p>';
	}

}
	
	if (get_option('count_rad')) {
		if(empty($_POST["seos_form_radio"]) and $required7 != "") { $error = true;}
		if($required7) {echo ' ' . $seos_required . '<br />';}	
	}
	echo "<br />";
	
if( get_option('seos_form_subject') != ""){		
	echo '<p>';
	echo '<div>';
	echo '' . esc_attr( get_option('seos_form_subject') );
	if(empty($_POST["seos-subject"]) and $required4 != "") { $error = true;}
	if($required4) {echo ' ' . $seos_required;}
	echo '</div>';	
	echo '<input type="text" name="seos-subject" value="' . (test_input( isset( $_POST["seos-subject"] )) ? esc_attr( $_POST["seos-subject"] ) : '' ) . '" size="50" />';
	echo '</p>';
}


if( get_option('seos_form_message') != ""){		
	echo '<p>';
	echo '<div>';	
	echo '' . esc_attr( get_option('seos_form_message') );
	if(empty($_POST["seos-message"])and $required5 != "") { $error = true;}
	if($required5) {echo ' ' . $seos_required;}	
	echo '</div>';	
	echo '<textarea rows="10" cols="50" name="seos-message">' . (test_input( isset( $_POST["seos-message"] )) ? esc_attr( $_POST["seos-message"] ) : '' ) . '</textarea>';

	echo '</p>';
}


if( get_option('seos_form_checkbox_text') != ""){		
	echo '<p>';
	echo '' . esc_attr( get_option('seos_form_checkbox_text') )  . ' ' . '<br/>'; 

	$seos_form_checked =  get_option('seos_form_checked'); ?>
	<input type="checkbox" name="seos_form_checked" value="1" <?php if (isset($seos_form_checked )) { echo "checked!";} ?> />
	
	<?php
		if(isset($_POST['seos_form_checked'])){
			$checked = "<b>Checked</b>";
		}
		
		else {
			$checked = "<b>Not checked</b>";	
		}
		
		if(empty($_POST["seos_form_checked"])and $required6 != "") { $error = true;}
			if($required6) {echo ' ' . $seos_required;}
		echo '</p>';	
}

		
		if(isset($_POST['seos_form_radio']) == $new){
			$radio = $_POST['seos_form_radio'];	
		}

		
		if(isset($_POST['seos-url'])){
			$url = $_POST['seos-url'];	
		}

		if(get_option('seos_form_select_title') and isset($_POST["seos_form_select"]) == $i){
			$mail_select = $_POST["seos_form_select"];
		}
		

		
	echo '<p>';
	echo '' . esc_attr( get_option('seos_form_antispam') )  . ' ' . '<br/>'; 
	echo  '<input class="noselect" type="text" name="rand" value="' . rand(1,50). '+10' . '" readonly="readonly" />' ;
	if ( get_option('seos_spam')){ echo  '<label class="scf-sum">'. ' ' . esc_attr( get_option('seos_spam') ). ' ' . '</label>';}
	else {echo  '<label>'. _e(" Enter the SUM: ", "scf"). '</label>';}
	echo  '<input type="text" name="text" value="" />';
	if(isset($_POST['text']) && ($sum != $text) or empty($_POST['text']) ) { $error = true; echo ' ' . $seos_required;}
	echo '</p>';
	
	if ( get_option('seos_send_button')){ echo '<p><input type="submit" name="seos-submitted" value="' . esc_attr( get_option('seos_send_button')) . '"></p>';}
	else {echo '<p><input type="submit" name="seos-submitted" value="Send"></p>';}
	
	echo '</form>';
	
	$to = $subject  = $message = $headers = "";
	
	if ( isset( $_POST['seos-submitted'] ) and $error == false) {
		
		$to = get_option('seos_admin_email');
		
		$subject = sanitize_text_field( $_POST["seos-subject"] );
	
		$name = sanitize_text_field( $_POST["seos-name"] );
		
		if(isset( $_POST["seos-email"])){
			$email   = sanitize_email( $_POST["seos-email"] );
		}
		if (empty($_POST["seos-email"])) {
			$email  = "no@mail";		
		}
		
		if(isset($_POST['seos_form_radio']) == $new){
			$radio = $_POST['seos_form_radio'];	
		}
		
		else {
			$radio = "";
		}

		$headers  = "From: $name <$email>" . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8";
	
		$message  = "<h1><a target='_blank' href='https://seosthemes.com/seos-contact-form/'>Seos Contact Form</a></h1>" . "";
		$message .= "<table style='font-size: 14px; padding:1px;' border=1>";
		$message .= '<tr><td style="padding:5px;">From:</td><td style="padding:5px;">' . $name . "</td></tr>";
		$message .= '<tr><td style="padding:5px;">Email:</td><td style="padding:5px;">' . $email . "</td></tr>";
		$message .= '<tr><td style="padding:5px;">Phone:</td><td style="padding:5px;">' . esc_textarea( $_POST["seos-phone"] ) . "</td></tr>";		
		$message .= '<tr><td style="padding:5px;">Website:</td><td style="padding:5px;">' . $url  . "</td></tr>";
		$message .= '<tr><td style="padding:5px;">Select Options:</td><td style="padding:5px;">' . $mail_select  . "</td></tr>";
		$message .= '<tr><td style="padding:5px;">Radio Buttons:</td><td style="padding:5px;">' . $radio . "</td></tr>";
		$message .= '<tr><td style="padding:5px;">Subject:</td><td style="padding:5px;">' . $subject . "</td></tr>";
		$message .= '<tr><td style="padding:5px;">Message:</td><td style="padding:5px;">' . esc_textarea( $_POST["seos-message"] ) . "</td></tr>";
		$message .= '<tr><td style="padding:5px;">Checkbox:</td><td style="padding:5px;">' .  $checked . "<br />" . esc_attr( get_option('seos_form_checkbox_text')) . "</td></tr>";
		$message .= '<tr><td style="padding:5px;">USER IP:</td><td style="padding:5px;"><a target="_blank" href="https://seosthemes.com/seos-contact-form/">Upgrade to Pro Version</a></td></tr>';
		$message .= "</table>";

	}
		if (wp_mail( $to, $subject, $message, $headers) and $_POST['seos-submitted']) { 
			echo '<div>';
			if (get_option('seos_send')) {?> <script>document.getElementById("send").innerHTML = '<?php echo '<h1 style=\"color: #FF0000;\">' . esc_attr( get_option('seos_send')) . '</h1>' ; ?>' ;</script> <?php
			echo '</div>'; } else { 
			?>
				<script>document.getElementById("send").innerHTML = "<h1 style=\"color: #FF0000;\">Your message is send</h1>"; </script>
			<?php  }	
		} 
		elseif 
			(!wp_mail( $to, $subject, $message, $headers) and  isset($_POST['seos-submitted'])) {
				echo '<div>';
				if (get_option('seos_not_send')) {?> <script>document.getElementById("send").innerHTML = '<?php echo '<h1 style=\"color: #FF0000;\">' . esc_attr( get_option('seos_not_send')) . '</h1>' ; ?>' ;</script> <?php
				echo '</div>';} else { 
				?>
					<script>document.getElementById("send").innerHTML = "<h1 style=\"color: #FF0000;\">Your message is not sent.</h1>"; </script> 
				<?php }
}
}

function scf_shortcode() {
	ob_start();
	scf_form_html();
	return ob_get_clean();
}

add_shortcode( 'seos_form', 'scf_shortcode' );
<?php
	$msg = '';
	global $wpdb;
	if(isset($_POST['email'])){	
		$email = $_POST['email'];		
		update_option( 'pform_email', $email);		
		$msg = '<div id="setting-error-settings_updated" class="updated settings-error notice is-dismissible"> 
		<p><strong>Settings updated sucessfully.</strong></p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';					
	}
?>

<div class="wrap">
	<h1>Form Settings</h1>
	<?php echo $msg; ?>
	<form method="post" name="unsold-zip-form">
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row"><label for="location_name">Email</label></th>
					<td>
						<input name="email" class="regular-text" type="text" value="<?php echo get_option('pform_email'); ?>" required/>
					</td>				</tr>
			</tbody>
		</table>			
		<p class="submit"><input name="submit" class="button button-primary" value="Update" type="submit"></p>
	</form>	<p>Use this shortcode [prgress-form]</p>	
</div>
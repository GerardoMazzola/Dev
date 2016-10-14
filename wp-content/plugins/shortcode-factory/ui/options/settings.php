<div class="scf-notice scf-alert" style="display: none;">Saving...</div>

<form method="post" action="options.php" class="scf-form-settings">
	<?php
		settings_fields('scf-settings');
		do_settings_sections('scf-settings');

		$options = get_option('scf_options');

		// Options related to this screen only
		$button_appearance = esc_attr($options["general"]["button_appearance"]);
		$active_shortcodes = $options["general"]["active_shortcodes"];
	?>

	<table class="form-table">
		<tr valign="top">
			<th scope="row">Button Appearance</th>
			<td>
				<select name="scf_options[general][button_appearance]">
					<option value="">Default (icon and text)</option>
					<option value="icon" <?php echo ($button_appearance=="icon")?"selected":""; ?>>Icon only</option>
					<option value="text" <?php echo ($button_appearance=="text")?"selected":""; ?>>Text only</option>
				</select>
				<span class="notes">Button appearance on post editor.</span>
			</td>
		</tr>

		<tr valign="top">
			<th scope="row">Active Short Codes</th>
			<td>
				<?php
					foreach($scf_shortcode_groups as $group => $group_info) {
						$checked = "";

						if($active_shortcodes && in_array($group, $active_shortcodes)) {
							$checked = "checked";
						}

						echo '<p style="margin-bottom: 18px;">';
						echo '<input type="checkbox" name="scf_options[general][active_shortcodes][]" value="'.$group.'" '.$checked.' />';
						echo $group_info[0];
						echo '<br /><span class="notes">'.$group_info[1].'</span>';
						echo '</p>';
					}
				?>
			</td>
		</tr>
	</table>

	<?php submit_button(); ?>

</form>
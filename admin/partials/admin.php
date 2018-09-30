<?php
// Patreon Thanker!
// This is what the people see when they come to the blog.

if ( isset( $_POST[ 'update_settings' ] ) ) {
	update_option( 'mwpt_minCentsPledged', $_POST['minCentsPledged'] );
	update_option( 'mwpt_lastChargeStatus', $_POST['lastChargeStatus'] );
	update_option( 'mwpt_category', $_POST['cat'] );
}
$min_cents_pledged = get_option( 'mwpt_minCentsPledged' );
$last_charge_status = get_option( 'mwpt_lastChargeStatus' );
$category = get_option( 'mwpt_category' );

if ( isset( $_POST[ 'update_patrons' ] ) ) {

}

?>

<!-- This page should be mostly HTML with a little PHP. -->


<div class="wrap">
	<h1 class="wp-heading-inline"><?php echo esc_html( get_admin_page_title() ); ?></h1>
	<p>Love my bbys &lt;3</p>
	<h2><span class="dashicons dashicons-admin-generic"></span> Settings</h2>
	<form method="post" class="settings">
		<input type="hidden" name="update_settings" value="true">
		<table>
			<tr>
				<th>
					<label for="minCentsPledged">Min Support Price for Shoutout:</label>
				</th>
				<td>
					<select name="minCentsPledged">
						<option value="100">$1.00</option>
						<option value="300">$3.00</option>
						<option value="500">$5.00</option>
						<option value="1000">$10.00</option>
						<option value="2000">$20.00</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>
					<label for="lastChargeStatus">Last Charge Status:</label>
				</th>
				<td>
					<select name="lastChargeStatus">
						<option value="">All Charge Statuses</option>
						<option value="Paid">Paid</option>
						<option value="Refunded">Refunded</option>
						<option value="Declined">Declined</option>
						<option value="Fraud">Fraud</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>
					<label for="cat">Category of blog posts to show on:</label>
				</th>
				<td>
					<?php wp_dropdown_categories( $args ); ?> 
				</td>
			</tr>
		</table>
		<input type="submit" value="Update" />
	</form>
	<div class="actions">
		<a href="https://www.patreon.com/members?lastChargeStatus=Paid&membershipType=active_patron&sort=-pledgeAmountCents&minCentsPledged=500" target="_blank" rel="noopener noreferrer">See current $5+ tier Patrons</a> | 
		<a class="addPatron">Add Patron<span class="dashicons dashicons-plus"></span></a>
	</div>
	<form id="patrons" method="post">
		<input type="hidden" name="update_patrons" value="true">
		<input type="hidden" name="num_patrons" value="0">
		<div class="patron-repeatable">
			<label for="patron-1">Patron Twitter handle: @</label>
			<input type="text" name="patron-1" />
			<span class="dashicons dashicons-no"></span>
		</div>
	</form>
</div>

<script>
	(function( $ ) {
		'use strict';
	})( jQuery );

	jQuery(document).ready(function($){
		jQuery('select[name=minCentsPledged]').val('<?php echo $min_cents_pledged ?>');
		jQuery('select[name=lastChargeStatus]').val('<?php echo $last_charge_status ?>');
		jQuery('select[name=cat]').val('<?php echo $category ?>');
	});
</script>

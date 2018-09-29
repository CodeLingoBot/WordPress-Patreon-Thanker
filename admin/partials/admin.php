<?php
// Patreon Thanker!
// This is what the people see when they come to the blog.
?>

<!-- This page should be mostly HTML with a little PHP. -->

<div class="wrap">
	<h1 class="wp-heading-inline"><?php echo esc_html( get_admin_page_title() ); ?></h1>
	<p>Love my bbys &lt;3</p>
	<h2><span class="dashicons dashicons-admin-generic"></span> Settings</h2>
	<form method="post" class="settings">
		<input type="hidden" value="update_settings">
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
					<label for="category">Category of blog posts to show on:</label>
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
		<div class="patron-repeatable">
			<label for="patron-1">Patron Twitter handle: @</label>
			<input type="text" name="patron-1" />
			<span class="dashicons dashicons-no"></span>
		</div>
	</form>
</div>

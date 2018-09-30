<?php
// Patreon Thanker!
// This is what the people see when they come to the blog.

$num_patrons = intval( get_option( 'mwpt_num_patrons' ) );
?>

<!-- This page should be mostly HTML with a little PHP. -->

<div id="patreon-thanks">
	<p>My $<?php echo number_format( ( get_option( 'mwpt_minCentsPledged' ) / 100 ), 2, '.', ' ' ) ?>+ tier Patreons helped to support these releases!  Make sure to follow them on Twitter ^-^</p>
	<ul>
		<?php
		for ( $i=0; $i < $num_patrons; $i++ ) {
			$curr_patron = 'mwpt_patron_' . $i;
			echo '<li>';
			echo '<a href="https://twitter.com/'. get_option( $curr_patron ) .'" target="_blank" rel="noopener noreferrer">';
			echo '@' . get_option( $curr_patron );
			echo '</a>';
			echo '</li>';
		}
		?>
	</ul>
	<p class="join"><a href="https://www.patreon.com/join/telepathics/checkout?rid=1078443" target="_blank" rel="noopener noreferrer">Become a Patron! »</a></p>
</div>

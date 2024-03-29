<?php
/*
Plugin Name: Patreon Thanker
Plugin URI: https://github.com/telepathics/patreon-thanker
Description: Simple plugin for thanking your tiered Patrons on Wordpress posts.
Version: 1.0
Author: Maryn Weed
Author URI: https://www.maryn.xyz
License: GPL2

Copyright 2018  Maryn Weed  (email : hello@maryn.xyz)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
defined( 'WPINC' ) or die( 'No script kiddies please!' );

include_once('admin/dashboard.php');
include_once('public/postview.php');

?>

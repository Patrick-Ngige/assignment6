<?php
global $wpdb;
$table_name = $wpdb->prefix . 'members';


$members = $wpdb->get_results("SELECT * FROM wp_members");

?>
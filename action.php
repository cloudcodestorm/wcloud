<?php
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
global $wpdb;

$textdata = $_REQUEST['keytext'];
if($textdata == null){
 wp_redirect( "/?page_id=137" );
}
else{


$rs = $wpdb->get_results('select * from wp_serialkey where key_once like "%'.$textdata.'"'); 
//$user_db=$rs[0]->team_name;
$myvarResults = $wpdb->num_rows;
if($myvarResults == 0){
    wp_redirect( "/?page_id=137" );
}else{
    wp_redirect( "http://www.wemagin.com/register.php" );
	//print('wrong');
}
}
?>
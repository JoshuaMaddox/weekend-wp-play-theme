<?php 

//Check - Security to ensure this is not being accessed directly but by Wordpress
if( ! defined('ABSPATH') ) { exit; }

//Get's the header for the main template variation ***Add other header type then delete comment after star
get_template_part('header-main');
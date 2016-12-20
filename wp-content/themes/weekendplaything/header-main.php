<?php  
  //The main header for weekend template
  //Security Check
  if ( ! defined( 'ABSPATH' ) ) { exit; }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- Gets the name of the site as is set in Settings > General via the Template Tag bloginfo() -->
  <title><?php bloginfo( 'name' ); ?></title> 
</head>
<body>
  <div class="weekend-main-wrapper">
    <h1>This Header in header-main.php</h1>
    <!-- Function to add the search bar -->
    <?php get_search_form(); ?>
  </div>
  



  

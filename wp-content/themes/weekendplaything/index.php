<?php
get_header();
?>

<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <p>Here is some content generate from index.php</p>
    </div>
    <div class="col-sm-6">
      <p>here is more content generated from index.php</p>
    </div>
  </div>
</div>

<!-- User get_template_part to access some template file -->
<?php get_template_part('tpl-cinderhouse-portfolio-piece'); ?>

<?php  
get_footer();
?>
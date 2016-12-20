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

<!-- The Wordpress loop structure that loops through each post in the data base and displays data based on
the Template Tags we use -->

<!-- // Start the Loop. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
        <!-- // Display the post's title. -->
        <h2><?php the_title() ?></h2>
 
        <!-- // Display a link to other posts by this posts author. -->
        <small><?php _e( 'Posted by ', 'textdomain' ); the_author_posts_link() ?></small>
 
        <!-- // Display the post's content in a div. -->
        <div class="entry">
            <?php the_content() ?>
        </div>
 
        <!-- // Display a comma separated list of the post's categories. -->
        <?php _e( 'Posted in ', 'textdomain' ); the_category( ', ' ); ?>
 
    <!-- // closes the first div box with the class of "post" or "post-cat-three" -->
    </div>
 
<!-- // Stop the Loop, but allow for a "if not posts" situation -->
<?php endwhile; else :
/*
 * The very first "if" tested to see if there were any posts to
 * display. This "else" part tells what do if there weren't any.
 */
_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
 // Completely stop the Loop.
 endif;
?>


<!-- User get_template_part to access some template file -->
<?php get_template_part('tpl-cinderhouse-portfolio-piece'); ?>

<?php  
get_footer();
?>
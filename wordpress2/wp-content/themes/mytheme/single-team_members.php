<?php get_header(); ?>
<?php get_sidebar('left'); ?>
<div class="col-sm-6 blog-main">
    <?php 
    $id_image = get_post_meta( get_the_ID(), 'tmimage', true ); 
    $temp_image = wp_get_attachment_image_src( $id_image, array('200', '200') );
    if ( have_posts() ) : 
        while ( have_posts() ) : 
            the_post();
        the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); 
        ?>
        <p class="blog-main-meta"> <img src="<?php echo $temp_image[0];?>" style="float:middle; width:455px; height:455px;">
            <?php
            the_content();
            $email = get_post_meta( get_the_ID(), 'tmemail', true );
            $phone = get_post_meta( get_the_ID(), 'tmphone', true );
            $website = get_post_meta( get_the_ID(), 'tmwebsite', true );
            echo "<p><center> Email : ".$email."</center></p>";
            echo "<p><center> Phone : ".$phone."</center></p>";
            echo "<p><center> Website : ".$website."</center></p>";
            endwhile; 
            endif;     
            ?>
        </div>
        <?php get_sidebar('right'); ?>
        <?php get_footer();?>
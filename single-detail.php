<!-- Content -->
<section>
    <?php
        $wp_query = new WP_Query( $args );
        // echo '<pre>';
        // print_r($wp_query);
        // echo '<pre>';
        if ( have_posts() ) :
    ?>
    <header class="main">
        <h1><?php the_title(); ?></h1>
    </header>

    <span class="image main"><img src="
    <?php 
        if(has_post_thumbnail()){
            echo get_the_post_thumbnail_url();// $wpquery->post->post_content lấy nội dung bài viết 
        }else{
            echo get_img_url($wp_query->post->post_content);

        }
    ?>" alt="<?php the_title(); ?>" /></span>
    <span class="luot-xem"><?php echo getPostViews(get_the_ID());//hiển thị số lượt xem bài viết ?></span>
    <p><?php echo $wp_query->post->post_content; ?></p>
        <?php

        endif;
        wp_reset_postdata();// reset lại đối tương wp_query
        ?>
</section>
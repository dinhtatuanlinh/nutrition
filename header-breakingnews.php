<section id="banner">
    <?php
        $tag_slug = "noi-bat";
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1, 
            'post_status' => 'publish',
            'ignore_sticky_posts' => false,
            'tag' => $tag_slug,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $wp_query = new WP_Query( $args );
        // echo '<pre>';
        // print_r($wp_query);
        // echo '<pre>';
        if ( have_posts() ) :
            while (have_posts()) : the_post();
    ?>
    <div class="content">
        <header>
            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        </header>
        <p><?php echo mb_substr(strip_tags($wp_query->post->post_content), 0, 200) . '...' ;// lấy đoạn tóm tắt từ vị trí 0 và lấy 90?></p>
        <ul class="actions">
            <li><a href="<?php the_permalink(); ?>" class="button big">Xem chi tiết</a></li>
        </ul>
    </div>
    <span class="image object"><a href="<?php the_permalink(); ?>"><img src="
    <?php 
        if(has_post_thumbnail()){
            echo get_the_post_thumbnail_url();// $wpquery->post->post_content lấy nội dung bài viết 
        }else{
            echo get_img_url($wp_query->post->post_content);

        }
    ?>
    " alt="<?php the_title(); ?>" /></a></span>
    <?php
        endwhile;
    endif;
    wp_reset_postdata();// reset lại đối tương wp_query
    ?>
</section>
<div class="posts dttl-featured">
    <?php
        $tag_slug = "dac-trung";
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3, 
            'post_status' => 'publish',
            'ignore_sticky_posts' => false,
            'orderby' => 'date',
            'order' => 'DESC',
            'tag' => $tag_slug,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $wp_query = new WP_Query( $args );
        // echo '<pre>';
        // print_r($wp_query);
        // echo '<pre>';
        if ( have_posts() ) :
            while (have_posts()) : the_post();
    ?>
    <article>
        <a href="<?php the_permalink(); ?>" class="image"><img src="
        <?php 
        if(has_post_thumbnail()){
            echo get_the_post_thumbnail_url();// $wpquery->post->post_content lấy nội dung bài viết 
        }else{
            echo get_img_url($wp_query->post->post_content);

        }
        ?>
        " alt="<?php the_title(); ?>" /></a>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php echo mb_substr(strip_tags($wp_query->post->post_content), 0, 90) . '...' ;// lấy đoạn tóm tắt từ vị trí 0 và lấy 90?></p>
        <ul class="actions">
            <li><a href="<?php the_permalink(); ?>" class="button">Chi tiết</a></li>
        </ul>
    </article>
    <?php
        endwhile;
    endif;
    wp_reset_postdata();// reset lại đối tương wp_query
    ?>
</div>
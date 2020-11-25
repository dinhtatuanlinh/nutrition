<section>
    <header class="major">
        <h2>Bài viết mới nhất</h2>
    </header>
    <div class="posts">
        <?php
            // if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
            // elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
            // else { $paged = 1; } 
            print_r(get_query_var( 'page' )) ;
            $default_posts_per_page = get_option( 'posts_per_page' );   
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => $default_posts_per_page, 
                'post_status' => 'publish',
                'ignore_sticky_posts' => false,
                'orderby' => 'date',
                'order' => 'DESC',
                'paged' => $paged,
                'page' => $paged
            );
            $wp_query = new WP_Query( $args );
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
            <p><?php echo mb_substr(strip_tags($wp_query->post->post_content), 0, 90) . '...' ;// lấy đoạn tóm tắt từ vị trí 0 và lấy 90?>
            </p>
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
    <?php require NUTRITION_THEME_INC_DIR . '/pagination.php'; ?>
    <!-- <div class="pagination">
        <ol>
            <li><a href="#" class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">»</a></li>
        </ol>
    </div> -->
</section>
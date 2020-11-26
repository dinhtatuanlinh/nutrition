<?php get_header(); ?>
<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <div id="main">
        <div class="inner">

            <!-- Header -->
            <?php get_header("top"); ?>

            <?php
                if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
                elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
                else { $paged = 1; } 
                get_template_part('category', 'detail', array(
                    'cat' => get_query_var( 'cat' ),// lấy id của cat bằng get_query_var('cat')
                    'paged' => $paged));
            ?>


        </div>
    </div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
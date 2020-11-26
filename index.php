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
            // hàm get_query_var() phải lấy ở ngoài file index ko thể lấy bên trong template part
            // Banner
            get_header("breakingnews");
            // Section
            get_template_part( 'home', 'main', array(
                'paged' => $paged ) );//để có thể lấy biến bên trong template part phải truyền thông qua mảng
            ?>


        </div>
    </div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
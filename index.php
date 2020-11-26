<?php get_header(); ?>
<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <div id="main">
        <div class="inner">

            <!-- Header -->
            <?php get_header("top"); ?>

            <?php
            global $paged;
            if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
            elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
            else { $paged = 1; } 
            echo $paged;
            
            // Banner
            get_header("breakingnews");
            // Section
            get_template_part( 'home', 'main', array('paged' => $paged ) );
            ?>


        </div>
    </div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
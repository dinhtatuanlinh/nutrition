<?php get_header(); ?>
<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <div id="main">
        <div class="inner">

            <!-- Header -->
            <?php get_header("top"); ?>

            
            <?php if(is_home()){
                // Banner
                get_header("breakingnews");
                // Section
                get_template_part( 'home', 'main' );
            }
            ?>


        </div>
    </div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
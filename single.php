<?php get_header(); ?>
<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <div id="main">
        <div class="inner">

            <!-- Header -->
            <?php get_header("top"); ?>

            <?php
                get_template_part('single', 'detail', array('p' => get_the_ID()));// truyền id của post thông qua mảng bằng hàm get_the_ID()
            ?>
            <?php setPostViews(get_the_ID());//đếm số lượt xem bài post ?>

        </div>
    </div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
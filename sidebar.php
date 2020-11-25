<?php 
    // lấy dữ liệu từ customize footer info
    global $CustomizeVal;// gọi biến $DDNCustomize để có thể dùng ở đây
    $aboutData = $CustomizeVal->about_section_data(); // tham số desktop truyền vào để xác định các dữ liệu nằm trên giao diện desktop
    // print_r($webElements);
?>
 <!-- Sidebar -->
 <div id="sidebar">
            <div class="inner">

                <!-- Search -->
                <section id="search" class="alt">
                    <form method="post" action="#">
                        <input type="text" name="query" id="query" placeholder="Search" />
                    </form>
                </section>

                <!-- Menu -->
                <nav id="menu">
                    <header class="major">
                        <h2>Menu</h2>
                    </header>
                    <?php
                        if(has_nav_menu('main_menu')){
                            $args = array(
                                'menu'                 => '',
                                'container'            => 'div',
                                'container_class'      => '',
                                'container_id'         => '',
                                'container_aria_label' => '',
                                'menu_class'           => '',
                                'menu_id'              => '',
                                'echo'                 => true,
                                'fallback_cb'          => 'wp_page_menu',
                                'before'               => '',
                                'after'                => '',
                                'link_before'          => '',
                                'link_after'           => '',
                                'items_wrap'           => '<ul>%3$s</ul>',//%3$s tương ứng với giá trị trong cặp thẻ li đưa vào
                                'item_spacing'         => 'preserve',
                                'depth'                => 2,// cho phép menu hiện 2 cấp nếu bằng 0 thì hiện tất cả các cấp bằng 1 thì chỉ hiện menu cha
                                'walker'               => '',
                                'theme_location'       => 'main_menu',
                            );
                            wp_nav_menu( $args );
                        }
                    ?>
                    <!-- <div>
                        <ul>
                            <li><a href="index.html">Homepage</a></li>
                            <li><a href="detail.html">Detail</a></li>
                            <li><a href="elements.html">Elements</a></li>
                            <li>
                                <span class="opener">Submenu</span>
                                <ul>
                                    <li><a href="#">Lorem Dolor</a></li>
                                    <li><a href="#">Ipsum Adipiscing</a></li>
                                    <li><a href="#">Tempus Magna</a></li>
                                    <li><a href="#">Feugiat Veroeros</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> -->
                </nav>

                <!-- Section left sidebar -->
                <section>
                    <header class="major">
                        <h2>Bài viết được xem nhiều nhất</h2>
                    </header>
                    <div class="mini-posts">
                        <article>
                            <a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                        </article>
                    </div>
                    <ul class="actions">
                        <li><a href="#" class="button">More</a></li>
                    </ul>
                </section>


                <section>
                    <header class="major">
                        <h2>Thông tin liên hệ</h2>
                    </header>
                    <p class="description-web"><?php echo $aboutData['description-web']; ?></p>
                    <ul class="contact">
                        <li class="icon solid fa-envelope dttlEmail"><?php echo $aboutData['email']; ?></li>
                        <li class="icon solid fa-phone dttlHotline"><a href="tel:<?php echo $aboutData['hotline']; ?>"><?php echo $aboutData['hotline']; ?></a></li>
                        <li class="icon solid fa-home dttlAddress"><?php echo $aboutData['address']; ?></li>
                    </ul>
                </section>
                <!-- Section left sidebar -->
                <!-- Footer -->
                <footer id="footer">
                    <p class="dttlCopyright">&copy; <?php echo $aboutData['copyright']; ?></p>
                </footer>
<?php 
    // lấy dữ liệu từ customize footer info
    global $CustomizeVal;// gọi biến $DDNCustomize để có thể dùng ở đây
    $aboutData = $CustomizeVal->social_links_data(); // tham số desktop truyền vào để xác định các dữ liệu nằm trên giao diện desktop
    // print_r($webElements);
?>
<header id="header" style="background-image: url(''); background-repeat: no-repeat; background-size: cover;">
                    <a href="<?php echo home_url(); ?>" ><img class="dttllogo" src="<?php echo $aboutData['logo']; ?>" alt=""></a>
                    <ul class="icons">
                        <li><a href="<?php echo $aboutData['youtube']; ?>" class="icon brands fa-youtube dttlyoutube"><span class="label">youtube</span></a></li>
                        <li><a href="<?php echo $aboutData['facebook']; ?>" class="icon brands fa-facebook-f dttlfacebook"><span class="label">Facebook</span></a></li>
                        <!-- <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                        <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li> -->
                    </ul>
                </header>
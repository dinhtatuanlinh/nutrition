<?php
class taife_footer_info_Section{

    public function __construct($theme_mods = array()){
        // echo '<pre>';
        // print_r($theme_mods);
        // echo '</pre>';
        add_action('customize_register', array($this, 'footer_info'));
        add_action('wp_head', array($this, 'customize_css'));
        add_action('customize_preview_init', array($this, 'customize_live_preview'));
    }
    public function customize_css(){}
    public function customize_live_preview(){
        $jsUrl = get_template_directory_uri() . '/dest';
        //gọi tập tin theme-customize.js vào đồng thời gọi jquery và customize-preview là hàm preview có sẵn của wp
        wp_enqueue_script('taife_theme_customize', 
                            $jsUrl . '/theme-customize.js', 
                            array('jquery', 'customize-preview'), 
                            '1.0.0', 
                            true);
        
    }
    public function footer_info($wp_customize){
        
        // tạo section trong customize
        $sectionID = 'taife_footer_info';
        $wp_customize->add_section($sectionID, array(
            'title' => __('Footer info', 'taife'),
            'description' => __('Hiển thị thông tin ở footer', 'taife'),
            'priority' => 20
        ));
        // -------------------------
        // tạo phần tử textarea cho address
        // -------------------------
        $inputName = 'Address';
        $settingID = $sectionID . '[' . $inputName . ']';
        $wp_customize->add_setting($settingID, array(
            'default' => 'SỐ 7/22A, ẤP 6, XÃ ĐÔNG THẠNH, HUYỆN HÓC MÔN, THÀNH PHỐ HỒ CHÍ MINH',// thông số mặc định cho phần tử trong section
            'capability' => 'edit_theme_options',// phân quyền có thể chỉnh sửa cho user
            'type' => 'theme_mod',// lưu dữ liệu dưới option name là theme_mod hay có thể đặt là 'option' dự liệu sẽ lưu dưới một option name riêng
            // 'type' => 'option',// lưu dữ liệu trên bảng option với option name là $sectionID
            'transport' => 'postMessage',// dữ liệu sẽ xuất hiện sau khi refresh lại trang hoặc 'postMessage' dữ liệu sẽ xuất hiện ngay lập tức
            // 'sanitize_callback' => 'sanitize_DDN_theme_site_name'// tên của hàm lọc dữ liệu đưa vào
        ));
        $controlID = 'taife-footer-info-' . $inputName;
        $wp_customize->add_control($controlID, array(
            'label' => __('Adress', 'taife'),// Tên cho phần tử trong section
            'section' => $sectionID,// tên của section mà phần tử đang chứa trong
            'settings' => $settingID,// tên của setting mà cài đặt cho phần tử này
            'type' => 'textarea',// kiểu dữ liệu của phần tử
        ));

        // -------------------------
        // tạo phần tử text cho tel
        // -------------------------
        $inputName = 'hotline';
        $settingID = $sectionID . '[' . $inputName . ']';
        $wp_customize->add_setting($settingID, array(
            'default' => '0909.704.614',// thông số mặc định cho phần tử trong section
            'capability' => 'edit_theme_options',// phân quyền có thể chỉnh sửa cho user
            'type' => 'theme_mod',// lưu dữ liệu dưới option name là theme_mod hay có thể đặt là 'option' dự liệu sẽ lưu dưới một option name riêng
            // 'type' => 'option',// lưu dữ liệu trên bảng option với option name là $sectionID
            'transport' => 'postMessage',// dữ liệu sẽ xuất hiện sau khi refresh lại trang hoặc 'postMessage' dữ liệu sẽ xuất hiện ngay lập tức
            // 'sanitize_callback' => 'sanitize_DDN_theme_site_name'// tên của hàm lọc dữ liệu đưa vào
        ));
        $controlID = 'taife-footer-info-' . $inputName;
        $wp_customize->add_control($controlID, array(
            'label' => __('Hotline', 'taife'),// Tên cho phần tử trong section
            'section' => $sectionID,// tên của section mà phần tử đang chứa trong
            'settings' => $settingID,// tên của setting mà cài đặt cho phần tử này
            'type' => 'text',// kiểu dữ liệu của phần tử
        ));
        // -------------------------
        // tạo phần tử text cho email
        // -------------------------
        $inputName = 'email';
        $settingID = $sectionID . '[' . $inputName . ']';
        $wp_customize->add_setting($settingID, array(
            'default' => 'NOITHATRicohVN@GMAIL.COM',// thông số mặc định cho phần tử trong section
            'capability' => 'edit_theme_options',// phân quyền có thể chỉnh sửa cho user
            'type' => 'theme_mod',// lưu dữ liệu dưới option name là theme_mod hay có thể đặt là 'option' dự liệu sẽ lưu dưới một option name riêng
            // 'type' => 'option',// lưu dữ liệu trên bảng option với option name là $sectionID
            'transport' => 'postMessage',// dữ liệu sẽ xuất hiện sau khi refresh lại trang hoặc 'postMessage' dữ liệu sẽ xuất hiện ngay lập tức
            // 'sanitize_callback' => 'sanitize_DDN_theme_site_name'// tên của hàm lọc dữ liệu đưa vào
        ));
        $controlID = 'taife-footer-info-' . $inputName;
        $wp_customize->add_control($controlID, array(
            'label' => __('Email', 'taife'),// Tên cho phần tử trong section
            'section' => $sectionID,// tên của section mà phần tử đang chứa trong
            'settings' => $settingID,// tên của setting mà cài đặt cho phần tử này
            'type' => 'text',// kiểu dữ liệu của phần tử
        ));
    }
}
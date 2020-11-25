<?php
class dttl_Theme_Customizer_Manager{
    private $_theme_mods = array();
    public function __construct(){
        $options = array(
            'theme-elements' => false,
            'about' => true,
            'social-links' => false
        );
        $this->_theme_mods = get_theme_mods();// truyền dữ liệu từ theme mod vào biến $_theme_mods để sử dụng
        // echo '<pre>';
        // print_r($this->_theme_mods);
        // echo '</pre>';
        // if (isset($options['theme-elements']) == true) $this->theme_elements();
        if (isset($options['about']) == true) $this->about_section();
        if (isset($options['social-links']) == true) $this->social_links();
    }
    public function theme_elements(){
        require_once NUTRITION_THEME_CUSTOMIZER_DIR . '/theme-elements-section.php';
        new taife_Theme_Elements_Section($this->_theme_mods);
        // biến $this->_theme_mods được truyền vào lớp DDN_Theme_Elements_Section để có thể lấy dữ liệu của biến này bên trong lớp
    }
    public function about_section(){
        require_once NUTRITION_THEME_CUSTOMIZER_DIR . '/about-section.php';
        new Nutrition_About_Section($this->_theme_mods);
    }
    public function social_links(){
        require_once NUTRITION_THEME_CUSTOMIZER_DIR . '/social-links-section.php';
        new Nutrition_Social_Links_Section($this->_theme_mods);
    }
    // để update giá trị cho một option_name nào đó trong bảng option ta sử dụng
    // update_option('tên của option_name muốn thay đôi', 'giá trị thay đổi')
    // việc này để thêm vào giá trị customize mặc định sau khi thay đổi theme

    public function theme_elements_data($val = ''){// hàm này sẽ lấy dữ liệu từ customize ra để sử dụng ngoài theme
        if(empty($val)) return false;
        $options = $this->_theme_mods['DDN_theme_elements'];// lấy dữ liệu trong section có sectionID là DDN_theme_elements để đưa ra ngoài
        if($val == 'desktop'){
            return $options;
        }
    }
    public function about_section_data($val = ''){// hàm này sẽ lấy dữ liệu từ customize ra để sử dụng ngoài theme
        // if(empty($val)) return false;
        $options = $this->_theme_mods['dttl_about'];// lấy dữ liệu trong section có sectionID là DDN_theme_elements để đưa ra ngoài
        // if($val == 'desktop'){
            return $options;
        // }
    }
    public function social_links_data($val = ''){// hàm này sẽ lấy dữ liệu từ customize ra để sử dụng ngoài theme
        // if(empty($val)) return false;
        $options = $this->_theme_mods['dttl_social_links'];// lấy dữ liệu trong section có sectionID là DDN_theme_elements để đưa ra ngoài
        // if($val == 'desktop'){
            return $options;
        // }
    }

}
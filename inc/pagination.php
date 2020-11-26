<?php

    // $big = 99999999;
    // $pagenum_link = str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) );
    // $pagenum_link = str_replace('&','#038;', $pagenum_link);
    // echo get_query_var('page');
    $pagiArgs = array(
        'base' => add_query_arg('page','%#%'),
        // 'base' => '%#%',
        'format' => '?page=%#%',
        'current' => max( 1, $args['paged'] ),// đoạn code này có ý nghĩa nếu tham số sau lớn hơn tham số trước thì lấy tham số sau làm giá trị
        'total' => $wp_query->max_num_pages,
        'show_all' => false,
        'end_size' => 1,
        'mid_size' => 2,
        'prev_next' => false,
        'pre_text' => '<<',
        'next_text' => '>>',
        'type' => 'array',
        // 'add_args' => array('test' => 'abc', 'type' => 'happy'),
        // 'add_fragment' => '&test=abc',
        // 'before_page_number' => '[',
        // 'after_page_number' => ']'
    );
    $pagiArray = paginate_links($pagiArgs);
    
?>
<div class="pagination">
    <ol>
        <?php 
            if (!empty($pagiArray)){
                foreach ($pagiArray as $pagiItem){
                    echo '<li>' . $pagiItem . '</li>';
                }
            }
        ?>
    </ol>
</div>
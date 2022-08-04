<?php
//successfull
//** ADD SIDEBAR **//

register_sidebar(array(
    'id' => 'footer-column-1',
    'name' => 'Footer Column 1',
    'before_widget' => '<section id="%1$s" class="widget %2$s clearfix">',
    'after_widget' => '</section>',
    'before_title' => '<div class="widget-heading clearfix"><h6>',
    'after_title' => '</h6></div>',
));
register_sidebar(array(
    'id' => 'footer-column-2',
    'name' => 'Footer Column 2',
    'before_widget' => '<section id="%1$s" class="widget %2$s clearfix">',
    'after_widget' => '</section>',
    'before_title' => '<div class="widget-heading clearfix"><h6>',
    'after_title' => '</h6></div>',
));
register_sidebar(array(
    'id' => 'footer-column-3',
    'name' => 'Footer Column 3',
    'before_widget' => '<section id="%1$s" class="widget %2$s clearfix">',
    'after_widget' => '</section>',
    'before_title' => '<div class="widget-heading clearfix"><h6>',
    'after_title' => '</h6></div>',
));
register_sidebar(array(
    'id' => 'footer-column-4',
    'name' => 'Footer Column 4',
    'before_widget' => '<section id="%1$s" class="widget %2$s clearfix">',
    'after_widget' => '</section>',
    'before_title' => '<div class="widget-heading clearfix"><h6>',
    'after_title' => '</h6></div>',
));

//** #ADD SIDEBAR **//

function offerwall($atts){
    $default = array(
        'link' => '#',
        'height'=>'#',
    );
    $a = shortcode_atts($default, $atts);
    return '<iframe src="'.$a['link'].'" width="100%" height="'.$a['height'].'" frameborder="0" scrolling="no"></iframe>';

}

add_shortcode('germanofferwall', 'offerwall');
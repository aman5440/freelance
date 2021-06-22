<?php
function load_css() {

    wp_enqueue_style('gfont_style','https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700,900|Playfair+Display:400,700&display=swap');
    wp_enqueue_style('bootstrap_style',get_template_directory_uri() .'/css/bootstrap.css');
    wp_enqueue_style('dark_style',get_template_directory_uri() .'/css/dark.css');

    wp_enqueue_style('style_style',get_template_directory_uri() .'/style.css');
    
    wp_enqueue_style('fonts_style',get_template_directory_uri() .'/demos/resume/css/fonts.css');
    wp_enqueue_style('resume_style',get_template_directory_uri() .'/demos/resume/resume.css');


    wp_enqueue_style('font_style',get_template_directory_uri() .'/css/font-icons.css');

    wp_enqueue_style('animate_style',get_template_directory_uri() .'/css/animate.css');

    wp_enqueue_style('popup_style',get_template_directory_uri() .'/css/magnific-popup.css');

    wp_enqueue_style('custom_style',get_template_directory_uri() .'/css/custom.css');

    wp_enqueue_style('colors_style',get_template_directory_uri() .'/css/colors.php?color=7B6ED6');


    wp_enqueue_script('jquery_script', get_template_directory_uri() .'/js/jquery.js');
    wp_enqueue_script('plugin_script', get_template_directory_uri() .'/js/plugins.min.js');
    wp_enqueue_script('functions_script', get_template_directory_uri() .'/js/functions.js');


}
add_action('wp_enqueue_scripts','load_css');

function freelance_init()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
}

add_action('after_setup_theme','freelance_init');



class CreatePostType
{
    function __construct(public $name, $params){
        register_post_type($name, $params);
    }
}

/**
 * Creating New POst
 */
function freelance_post_types()
{
    new CreatePostType('portfolios',[
        'public'=>true,
        'show_in_rest' =>  true,
        'labels'=>[
            'name'=>'Portfolios',
            'add_new_item'=>'Add New Portfolio',
            'edit_item'=>'Edit Portfolio',
            'all_items'=>'All Portfolios'
        ]
    ]);

    new CreatePostType('skills',[
        'public'=>true,
        'show_in_rest' =>  true,
        'labels'=>[
            'name'=>'Skills',
            'add_new_item'=>'Add New Skill',
            'edit_item'=>'Edit Skill',
            'all_items'=>'All Skills'
        ]
    ]);

}

 add_action('init','freelance_post_types');
?>
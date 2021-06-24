<?php

/*
 * Plugin Name: User Details Plugin
 * Description: Enter User Details
 * Version: 1.0
 * Author: Amandeep Singh
 */
define('plugin_path',plugin_dir_path(__FILE__));

class UserDetailsPlugin
{
    public $fields = [];
    public $prefix = 'udp';
    public $page = 'user-detail-setting-page';
    public $section = 'user-detail-first-section';
    function __construct()
    {
        add_action('admin_menu', [$this,'adminPage']);
        add_action('admin_init',[$this,'settings']);
        array_push($this->fields,
            [
                'field_id'     => 'udp_fname',
                'section_id'   =>  $this->prefix.'_first_section',
                'title'     =>  'Name',
                'render'    =>  'renderText'
            ],
            [
                'field_id'     => 'udp_gender',
                'section_id'   =>  $this->prefix.'_second_section',
                'title'     =>  'Gender',
                'render'    =>  'renderSelect'
            ],
            [
                'field_id'     => 'udp_email',
                'section_id'   =>  $this->prefix.'_third_section',
                'title'     =>  'Email',
                'render'    =>  'renderEmail'
            ],
            [
                'field_id'     => 'udp_phone',
                'section_id'   =>  $this->prefix.'_fourth_section',
                'title'     =>  'Phone',
                'render'    =>  'renderText'
            ],
            [
                'field_id'     => 'udp_website',
                'section_id'   =>  $this->prefix.'_fifth_section',
                'title'     =>  'Website',
                'render'    =>  'renderText'
            ],
            [
                'field_id'     => 'udp_about',
                'section_id'   =>  $this->prefix.'_sixth_section',
                'title'     =>  'About Me',
                'render'    =>  'renderTextarea'
            ],
        );
    }

    function settings()
    {
        add_settings_section($this->section, null, null, $this->page);
        foreach($this->fields as $filed)
        {
            
            add_settings_field($filed['field_id'], $filed['title'], [$this, $filed['render']], $this->page, $this->section);

            register_setting('userdetailplugin', $filed['field_id'], ['sanitize_callback'=>'sanitize_text_field', 'default'=>'']);
        }
    }
    function renderEmail($name='')
    {
        ?>
        <input type="text" name="<?php echo $name; ?>" placeholder="Freelancer <?php echo $name; ?>" value="<?php echo get_option($name,''); ?>"/>
        <?php
    }
    function renderText($name='')
    {
        ?>
        <input type="text" name="<?php echo $name; ?>" placeholder="Freelancer <?php echo $name; ?>" value="<?php echo get_option($name,''); ?>"/>
        <?php
    }
    function renderTextArea($name='')
    {
        ?>
        <input type="text" name="<?php echo $name; ?>" placeholder="Freelancer <?php echo $name; ?>" value="<?php echo get_option($name,''); ?>"/>
        <?php
    }
    function renderSelect($name='')
    {
        ?>
        <input type="text" name="<?php echo $name; ?>" placeholder="Freelancer <?php echo $name; ?>" value="<?php echo get_option($name,''); ?>"/>
        <?php
    }

    function renderHTML($name='')
    {
        ?>
        <input type="text" name="<?php echo $name; ?>" placeholder="Freelancer <?php echo $name; ?>" value="<?php echo get_option($name,''); ?>"/>
        <?php
    }

    function adminPage()
    {
        add_options_page('User Details Page','User Detail','manage_options','user-detail-setting-page', [$this, 'html']);
    }

    function html()
    {
        ?>
        <div class="wrap">
            <h1>Freelancer Details</h1>
            <form action="options.php" method="post">
            <?php
                settings_fields('userdetailplugin');
                do_settings_sections('user-detail-setting-page');
                submit_button("Save");
            ?>
            </form>
        </div>
        <?php
    }
}
new UserDetailsPlugin();





?>
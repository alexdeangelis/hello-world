<?php

////o2 STUFF////

define( 'O2_DIRECTORY', plugin_dir_path( __FILE__ ) . 'customizer-settings/o2/' );
define( 'O2_DIRECTORY_URI', plugin_dir_path( __FILE__ ) . 'customizer-settings/o2/' );

//require plugin_dir_path( __FILE__ ) . 'customizer-settings/o2/controls/icon-picker/icon-picker-control.php';



////////////// REGISTER CUSTOMIZER SETTINGS HERE //////////////

//Link to the colours register file
//require_once plugin_dir_path( __FILE__ ) . 'customizer-settings/colours/register/colours-register.php';


//Link to the font sizes register file
//require_once plugin_dir_path( __FILE__ ) . 'customizer-settings/font-sizes/register/font-sizes-register.php';


//Link to the colour palette register file
require_once plugin_dir_path( __FILE__ ) . 'customizer-settings/colour-palette/register/colour-palette-register.php';

//Link to the font-family register file
require_once plugin_dir_path( __FILE__ ) . 'customizer-settings/font-family/register/font-family-register.php';

//Link to the social icons register file
//require_once plugin_dir_path( __FILE__ ) . 'customizer-settings/social-icons/register/social-icons-register.php';

require_once plugin_dir_path( __FILE__ ) . 'customizer-settings/social-icons-two/register/social-icons-two-register.php';

////////////// REGISTER CUSTOMIZER CSS HERE //////////////


//Link to the colours css file
//require_once plugin_dir_path( __FILE__ ) . 'customizer-settings/colours/css/colours-css.php';


//Link to the font sizes css file
//require_once plugin_dir_path( __FILE__ ) . 'customizer-settings/font-sizes/css/font-sizes-css.php';


//Link to the colour palette css file
require_once plugin_dir_path( __FILE__ ) . 'customizer-settings/colour-palette/css/colour-palette-css.php';


//Link to the font family css file
require_once plugin_dir_path( __FILE__ ) . 'customizer-settings/font-family/css/font-family-css.php';









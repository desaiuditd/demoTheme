<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <body>
 *
 * @package demoTheme
 * 
 */
?>
<!DOCTYPE html>
<!--[if IE 6]>
    <html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
    <html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
    <html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
    <html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />

    <title>
        <?php

            global $paged;

            if (function_exists('is_tag') && is_tag()) {
                single_tag_title('Tag Archive for &quot;');  echo '&quot; - ';
            } elseif (is_archive()) {
                wp_title('');  echo 'Archive - ';
            } elseif (is_search()) {
                echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';
            } elseif (!(is_404()) && (is_single()) || (is_page())) {
                wp_title('');  echo ' - ';
            } elseif (is_404()) {
                echo 'Not Found - ';
            } elseif (is_home()) {
                bloginfo('name');  echo ' - '; bloginfo('description');
            } else {
                bloginfo('name');
            }

            if ($paged > 1) {	
                echo ' - page '. $paged;
            }
        ?>
    </title>

    <?php //wp_enqueue_script('jquery'); ?>
    <?php wp_head(); ?>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->

</head>
<?php
/**
 * The Header for our theme
 * See @ framework/hooks/actions.php for all actions attached to your header hooks.
 *
 * IMPORTANT :	There isn't any need to modify this template file, most edits can't be done via hooks
 * 				and filters	or the partial template parts at partials/header/.
 *
 * @package		Total
 * @subpackage	Templates
 * @author		Alexander Clarke
 * @copyright	Copyright (c) 2015, WPExplorer.com
 * @link		http://www.wpexplorer.com
 * @since		1.0.0
 * @version		2.0.0
 */ ?>
 
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo get_theme_root_uri(); ?>/bluerockre/favicon.ico" />
	<?php wp_head(); ?>

   <script type="text/javascript">
    jQuery.noConflict();
    jQuery(document).ready(function(){
    var menuID = jQuery('#menu-item-5153');
    findA = menuID.find('a');
    findA.click(function(event){
    return confirm("You are entering the Bluerock Total Income+ Fund website. Thank you for your interest.")
    {
    }
    });
});
</script>
    <script type="text/javascript">
    jQuery.noConflict();
    jQuery(document).ready(function(){
    var menuID = jQuery('#menu-item-4155');
    findA = menuID.find('a');
    findA.click(function(event){
    return confirm("NOTICE: You are now leaving Bluerock Real Estate’s website and are being redirected to the Bluerock Residential Growth REIT website, which is not owned by Bluerock Real Estate. We are not responsible for the content or availability of the Bluerock Residential Growth REIT website, and Bluerock Residential Growth REIT is not responsible for the content or availability of the Bluerock Real Estate website.")
    {
    }
    });
});
</script>
         

</head>

<!-- Begin Body -->
<body <?php body_class(); ?>>

<?php wpex_outer_wrap_before(); ?>

<div id="outer-wrap" class="clr">

	<?php wpex_hook_wrap_before(); ?>

	<div id="wrap" class="clr">

		<?php wpex_hook_wrap_top(); ?>

		<?php wpex_hook_main_before(); ?>

		<div id="main" class="site-main clr">

			<?php wpex_hook_main_top(); ?>
            
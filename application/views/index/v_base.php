<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title><?php echo $site_name; ?> | <?php echo $page_title; ?></title>
        <meta name="description" content="<?php echo $site_description; ?>" />
	<?php foreach ($styles as $file_style): ?>
	    <?php echo HTML::style($file_style) ?>
	<?php endforeach; ?>
	<?php foreach ($scripts as $file_script): ?>
	    <?php echo HTML::script($file_script) ?>
	<?php endforeach; ?>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <div id="logo">
                    <a href="<?php echo URL::site(''); ?>"><img src="/media/img/logo_1.png" alt="ygserver.com" /></a>
                </div><!-- #logo -->
		<div id="head_img">
                    <img src="/media/img/bg_header_1.png" alt="ygserver.com" />
                </div><!-- #head_img -->
            </div><!--#header-->
            <div id="topmenu">
		<?php echo $top_menu; ?>
            </div><!-- #topmenu -->
            <div id="content">
                <div id="sidebar">
		    <?php if (isset($block_left)): ?>
			<?php foreach ($block_left as $lblock): ?>
			    <?php echo $lblock; ?>
			<?php endforeach; ?>
		    <?php endif; ?>
                </div><!-- #sidebar  -->
                <div id="cont">
		    <?php if (isset($block_center)): ?>
			<?php foreach ($block_center as $cblock): ?>
			    <?php echo $cblock; ?>
			<?php endforeach; ?>
		    <?php endif; ?>
                </div><!-- #cont -->
            </div><!--#content-->
            <div style="clear:both"></div><!--#clear-->
            <div id="empty"></div><!--#empty-->
        </div><!--#container-->
        <div id="footer">           
	    <p>&copy; <?php echo (date("Y")); ?> <a href="<?php echo URL::site(); ?>" target="blank"><?php echo $site_name; ?></a></p>
        </div><!--#footer-->
    </body>
</html>




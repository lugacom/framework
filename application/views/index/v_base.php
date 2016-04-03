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
	    <div class="copy">
		<p>&copy; <?php echo (date("Y")); ?> <a href="<?php echo URL::site(); ?>" target="blank"><?php echo $site_name; ?></a></p>
	    </div>
	    <div class="count">
		<p>
		    <!-- HSDN Top COUNTER for ID 4270 -->
		    <script type="text/javascript">
			(function (doc, win, cb) {
			    (win[cb] = win[cb] || []).push(function () {
				try {
				    win.hsdnTop4270 = new Hsdn.Top({id: 4270});
				} catch (e) {
				}
			    });
			    var hte = doc.getElementsByTagName("script")[0],
				    hts = doc.createElement("script");
			    hts.type = "text/javascript";
			    hts.async = true;
			    hts.src = (doc.location.protocol == "https:" ? "https:" : "http:") + "//c3.top.hsdn.org/ht.js";
			    hte.parentNode.insertBefore(hts, hte);
			})(document, window, "hsdn_top_callbacks");
		    </script>
		    <noscript><img src="//c3.top.hsdn.org/hit?id=4270" style="position:absolute; left:-9999px;" alt="" /></noscript>
		    <a target="_top" href="//top.hsdn.org/redirect?from=4270"><img src="//c3.top.hsdn.org/logo?ic=5.6&amp;id=4270" style="border:0" alt="HSDN &mdash; Рейтинг сайтов" title="HSDN &mdash; Рейтинг сайтов" /></a>
		    <!-- /HSDN Top COUNTER -->



		    <!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='//www.liveinternet.ru/click' " +
				"target=_blank><img src='//counter.yadro.ru/hit?t18.5;r" +
				escape(document.referrer) + ((typeof (screen) == "undefined") ? "" :
				";s" + screen.width + "*" + screen.height + "*" + (screen.colorDepth ?
					screen.colorDepth : screen.pixelDepth)) + ";u" + escape(document.URL) +
				";" + Math.random() +
				"' alt='' title='LiveInternet: показано число просмотров за 24" +
				" часа, посетителей за 24 часа и за сегодня' " +
				"border='0' width='88' height='31'><\/a>")
//--></script><!--/LiveInternet-->
		</p>
	    </div>
        </div><!--#footer-->
    </body>
</html>




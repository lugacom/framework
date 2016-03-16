<div class="vidget">
    <h1>Меню</h1>
    <ul>
	<?php foreach ($left_menu as $l_menu): ?>
            <li><?php echo HTML::anchor($l_menu['url'], $l_menu['title'], array('target'=>$l_menu['target'],)); ?></li>
	<?php endforeach; ?>
    </ul>
</div><!-- #vidget -->


<div class="vidget">
    <h1>Меню</h1>
    <ul>
	<?php foreach ($left_menu as $l_menu): ?>
            <li><a href="<?php echo ($l_menu['url']); ?>" target="<?php echo $l_menu['target']; ?>"><?php echo $l_menu['title'] ?></a></li>
	<?php endforeach; ?>
    </ul>
</div><!-- #vidget -->


<ul id="menu">
    <?php foreach ($top_menu as $top_menu): ?>
        <li><a href="<?php echo ($top_menu['url']); ?>" target="<?php echo $top_menu['target']; ?>"><?php echo $top_menu['title'] ?></a></li>
    <?php endforeach; ?>
</ul>
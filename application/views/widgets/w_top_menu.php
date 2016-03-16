<ul id="menu">
    <?php foreach ($top_menu as $top_menu): ?>
        <li><?php echo HTML::anchor($top_menu['url'], $top_menu['title'], array('target'=>$top_menu['target'],)); ?></li>
    <?php endforeach; ?>
</ul>
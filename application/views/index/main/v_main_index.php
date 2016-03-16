<?php foreach ($articles as $article): ?>
    <div class="post-main">
        <h1><a href="<?php echo URL::site('article/' . $article['id'] . '-' . $article['alt_title']); ?>"><?php echo $article['title']; ?></a>
    	<span class="articles_date"><?php echo $article['date'] . 'г.'; ?></span><!--date-->
        </h1>
        <div class="post">
    	<p><?php echo $article['intro']; ?></p>
        </div><!-- #post -->
        <div class="post-info">
    	<a href="<?php echo URL::site('article/' . $article['id'] . '-' . $article['alt_title']); ?>">Подробнее...</a>
        </div><!-- #post-info -->
    </div><!-- #post-main -->
<?php endforeach; ?>
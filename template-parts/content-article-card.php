<?php 
	$excerpt = strval(get_the_excerpt());
	$excerpt_length = strlen($excerpt);
	$limit = 30;
	$excerpt = ($excerpt_length > $limit) ? substr($excerpt, 0, $limit).'...' : $excerpt;
?>

<div class="blog-article" style="background: url('<?php echo $args['img_url']; ?>') no-repeat top center / 100% 100% transparent;">
	<div class="blog-article-info">
		<h3 class="blog-article-info__title"><?php echo $args['title']; ?></h3>
		<p class="blog-article-info__extract"><?php echo $excerpt; ?></p>
		<a href="<?php echo $args['permalink']; ?>" class="blog-article-info__read-more">Leer m&aacute;s</a>
	</div>
</div>
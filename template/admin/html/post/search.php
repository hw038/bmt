<h1><i class="fa fa-search"></i><?=$Language->text('title_post_search')?></h1>
<p><?=$Language->text('search_post_desc')?></p>

<form id="search-form" method="GET">
	<div class="flex flex-padding background">
		<input id="search-text" type="search" name="q" placeholder="<?=$Language->text('placeholder_search')?>" value="<?=escapeHTML($QUERY)?>" />
	</div>
	<div class="flex flex-padding background">
		<input id="update-button" type="submit" value="<?=$Language->text('search')?>" />
	</div>
</form>

<div class="item-container post">
	<?php foreach($POSTS as $post): ?>
		<?php echo $post; ?>
	<?php endforeach; ?>
</div>
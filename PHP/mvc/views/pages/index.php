<?php
foreach($posts as $k => $v){
?>

<div class="item">
	<h3>
		<a href="<?php echo URL_BASE. '?controller=pages&action=detail&id='.$v['id'];?>">
		<?php echo $v['title'];?>
		</a>
	</h3>
	<div class="item-content"><?php echo $v['content'];?></div>
</div>
<hr>

<?php
}
?>
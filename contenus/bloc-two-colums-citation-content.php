<?php
if($content['citation'] && $content['content']) $col='6';
else $col='12';
if($content['citation'] || $content['content']){
	?>
	<div class="row">
		<?php
		if($content['citation']){
			?>
			<div class="col-<?php echo $col;?>">
				<div class="one_column"><?php echo $content['citation']['text'];?></div>
				<div class="one_column"><?php echo $content['citation']['name'];?></div>
				<div class="one_column"><?php echo $content['citation']['company'];?></div>
			</div>
			<?php
		}
		?>
		<?php
		if($content['content']){
			?>
			<div class="col-<?php echo $col;?>">
				<div class="one_column"><?php echo $content['content'];?></div>
			</div>
			<?php
		}
		?>
	</div>
	<?php
}
?>
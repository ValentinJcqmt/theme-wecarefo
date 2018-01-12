<?php
if($content['text_left'] && $content['text_right']) $col='6';
else $col='12';

if($content['text_left'] || $content['text_right']){
	?>
	<div class="row">
		<?php
		if($content['text_left']){
			?>
			<div class="col-<?php echo $col;?>">
				<div class="one_column"><?php echo $content['text_left'];?></div>
			</div>
			<?php
		}
		?>
		<?php
		if($content['text_right']){
			?>
			<div class="col-<?php echo $col;?>">
				<div class="one_column"><?php echo $content['text_right'];?></div>
			</div>
			<?php
		}
		?>
	</div>
	<?php
}
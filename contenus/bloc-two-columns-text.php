<?php
if($content['text_left'] && $content['text_right']) $col='6';
else $col='12';

if($content['text_left'] || $content['text_right']){
	?>
	<div class="content-1013">
	<div class="row">
		<?php
		if($content['text_left']){
			?>
			<div class="col-12 col-sm-12 col-md-<?php echo $col;?> pr-2">
				<div class="content-text"><?php echo $content['text_left'];?></div>
			</div>
			<?php
		}
		?>
		<?php
		if($content['text_right']){
			?>
			<div class="col-12 col-sm-12 col-md-<?php echo $col;?> pl-2">
				<div class="content-text"><?php echo $content['text_right'];?></div>
			</div>
			<?php
		}
		?>
	</div>
	</div>
	<?php
}
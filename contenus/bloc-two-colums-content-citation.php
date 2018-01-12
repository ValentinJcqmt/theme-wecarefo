<?php
if($content['citation'] && $content['content']) $col='6';
else $col='12';
if($content['citation'] || $content['content']){
	?>
	<div class="content-1013">
	<div class="row">
		<?php
		if($content['content']){
			?>
			<div class="col-12 col-sm-12 col-md-<?php echo $col;?> pr-2">
				<div class="content-text"><?php echo $content['content'];?></div>
			</div>
			<?php
		}
		?>
		<?php
		if($content['citation']){
			?>
			<div class="col-12 col-sm-12 col-md-<?php echo $col;?> pl-2">
				<div class="citation"><?php echo $content['citation']['text'];?></div>
				<div class="name text-right"><?php echo $content['citation']['name'];?></div>
				<div class="company text-right"><?php echo $content['citation']['company'];?></div>
			</div>
			<?php
		}
		?>
		
	</div>
	</div>
	<?php
}
?>
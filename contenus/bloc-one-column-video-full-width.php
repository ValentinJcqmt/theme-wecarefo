<?php
if($content['video']){
	?>
	<div class="content-1013">
		<div class="row">
			<div class="col-12">
				<div class="one_column text-center video-full-vidth embed-responsive embed-responsive-21by9"><?php echo apply_filters('the_content', $content['video']);?></div>
			</div>
		</div>
	</div>
	<?php
}
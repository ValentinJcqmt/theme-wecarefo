<?php
if($content['citation']){
	?>
	<div class="row">
		<div class="col-12">
			<div class="one_column"><?php echo $content['citation'];?></div>
			<div class="one_column"><?php echo $content['name'];?></div>
			<div class="one_column"><?php echo $content['company'];?></div>
		</div>
	</div>
	<?php
}
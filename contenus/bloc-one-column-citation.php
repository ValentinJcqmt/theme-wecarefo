<?php
if($content['citation']){
	?>
	<div class="content-1013">
		<div class="row">
			<div class="col-12">
				<div class="text-center citation font-didot font-style-italic text-uppercase font-weight-400 size-30">
					<span><?php echo $content['citation'];?></span></div>
				<div class="name font-didot size-36 font-weight-400 text-right"><?php echo $content['name'];?></div>
				<div class="company text-right"><?php echo $content['company'];?></div>
			</div>
		</div>
	</div>
	<?php
}
<?php
if($content['slider']){
	?>
	<div class="content-1365">
		<div class="row">
			<div class="col-12">
				<div class="owl-carousel-hp owl-carousel text-white">
					<?php foreach($content['slider'] as $item){ ?>
						
							<img src="<?php echo $item['image']['url'] ?>" class="img-fluid">
							
						
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<?php
}
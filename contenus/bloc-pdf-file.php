<?php
if($content['title'] || $content['file']){
	?>
	<div class="content-1013 documents">
		<div class="row">
			<div class="col-12 px-1 px-md-2 py-1 py-sm-2 py-md-4 pdf-panels text-center">
					<a class="mx-auto doc-link text-left text-orange font-helvetica-md bg-light-pink text-uppercase font-weight-bold d-block my-1" href="<?php echo $content['file']; ?>" download>
						<?php echo $content['title']; ?>
					</a>
			</div>
		</div>
	</div>
	<?php
}
?>
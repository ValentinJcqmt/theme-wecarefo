<?php
if($content['btn_list'] && !empty($content['btn_list'])){
	?>
	<div class="content-1013">
		<div class="row">
			<?php foreach($content['btn_list'] as $btn){ ?>
				<div class="col-12 col-sm-6 text-center text-uppercase">
					<a class="d-block push-btn bg-light-pink text-black font-helvetica-lt font-weight-bold p-2 m-1" href="<?php echo $btn['page_link']; ?>">
						<?php echo $btn['texte']; ?>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
	<?php
}
?>
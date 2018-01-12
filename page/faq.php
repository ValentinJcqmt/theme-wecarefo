<div class="main page page-faq">
	<div class="heading-1 text-center content-1013">
		<?php if(get_field('subtitle_faq')){ ?>
			<div class="category"><?php echo get_field('subtitle_faq'); ?></div>
		<?php } ?>
		<?php if(get_field('title_faq')){ ?>
			<h1 class="mb-2"><?php echo get_field('title_faq'); ?></h1>
		<?php }
		else{ ?>
			<h1 class="mb-2"><?php the_title();?></h1>
		<?php } ?>
	</div>
	<div class="content-1013">
		<div class="row">
			<div class="col-12">
				<div class="relative heading-2">
					<h2>FAQ</h2>
				</div>
			</div>
		</div>
	</div>
	<?php if(get_field('faq_intro')){ ?>
		<div class="content-1013">
			<div class="row">
				<div class="col-12 p-1 p-md-2">
					<div class="content-text font-eaves-rom"><?php echo get_field('faq_intro');?></div>
				</div>
			</div>
		</div>
	<?php }

	if(get_field('faq_panels')){
		$faq_panels = get_field('faq_panels');
		$npanel = 1; ?>
		<div class="content-1013">
			<div class="row">
				<div class="col-12 p-2 p-md-4 faq-panels">
					<?php foreach ($faq_panels as $panel) { ?>
						<button type="button" class="mt-2 bg-pink text-uppercase text-left font-helvetica-md text-black btn-panel collapsed" data-toggle="collapse" data-target="#panel-<?php echo $npanel; ?>">
							<?php echo $panel['panel_title']; ?>
						</button>
						<div id="panel-<?php echo $npanel; ?>" class="collapse panel">
							<?php if($panel['questions']){
								$questions = $panel['questions'];
								$nquestion = 1;
								foreach ($questions as $question) { ?>
									<button type="button" class="<?php if($nquestion === 1) echo"first-question";?> text-left bg-white font-didot text-black btn-question collapsed font-eaves-rom" data-toggle="collapse" data-target="#question-<?php echo($npanel."-".$nquestion); ?>">
										<?php echo $question['question']; ?>
									</button>
									<div id="question-<?php echo($npanel."-".$nquestion); ?>" class="text-left font-eaves-rom collapse answer">
										<div class="p-1">
											<?php echo $question['answer']; ?>
										</div>
									</div>
									<?php $nquestion++;
								}
							}?>
						</div>
						<?php $npanel++;
					} ?>
				</div>
			</div>
		</div>
	<?php } ?>

	<div class="content-1013">
		<div class="row">
			<div class="col-12">
				<div class="relative heading-2">
					<h2>DOCUMENTS</h2>
				</div>
			</div>
		</div>
	</div>

	<?php if(get_field('doc_intro')){ ?>
		<div class="content-1013">
			<div class="row">
				<div class="col-12 p-2">
					<div class="content-text font-eaves-rom"><?php echo get_field('doc_intro');?></div>
				</div>
			</div>
		</div>
	<?php }


	if(get_field('documents')){
		$documents = get_field('documents'); ?>
		<div class="content-1013 documents">
			<div class="row">
				<div class="col-12 p-1 p-sm-2 p-md-4 faq-panels text-center">
					<?php foreach ($documents as $doc) { ?>
						<a class="mx-auto doc-link text-left text-orange font-helvetica-md bg-light-pink text-uppercase font-weight-bold d-block my-1" href="<?php echo $doc['document_file']['url']; ?>" download>
							<?php echo $doc['document_title']; ?>
						</a>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php } ?>
</div>

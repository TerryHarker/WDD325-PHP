<section class="main-section">
	<div class="container">
		<?php print_r($portfoliodaten); ?>
		
		<div class="mt-5">
			<h2>Aktuelle Projekte</h2>
		</div>
		<div class="row mt-4 mb-5">

		<?php foreach( $portfoliodaten as $portfolio){ ?>
			<div class="col-12 col-sm-6 col-md-3 mb-4">
				<img src="media/<?php echo $portfolio['bild']; ?>">
				<div class="caption">
					<h6 class="mt-2 mb-0"><?php echo $portfolio['titel']; ?></h6>
					<span><?php echo $portfolio['zeit']; ?></span>
				</div>
			</div>
		<?php } ?>
			
		</div>
		<div>
			<em class="text-muted">image credit: webflow.io</em>
		</div>
	</div>
</section>
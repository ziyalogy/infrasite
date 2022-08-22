<?php
/**
 * ------------------------------------------------------------------------
 * CFTSkin
 * ------------------------------------------------------------------------
 * Copyright (C) CFTS . All Rights Reserved.
 * @license - Copyrighted Commercial Software
 * Author: J.O.O.M
 * Websites:  http://www.cfts.co -  http://www.buildal.ug
 * This file may not be redistributed in whole or significant part.
 * ------------------------------------------------------------------------
 */
defined('_JEXEC') or die();
$count = $helper->getRows('data.title');
$column = $helper->get('columns');
?>

<div class="acm-teams style-1">
	<div id="acm-teams-<?php echo $module->id; ?>" class="owl-slide">
		<div class="owl-carousel owl-theme">
			<?php for ($i = 0; $i < $count; $i++): ?>
				<div class="teams-item">
					<div class="teams-item-inner">
						<?php if ($helper->get('data.img', $i)): ?>
							<?php if ($helper->get('data.link', $i)): ?>
								<a href="<?php echo $helper->get('data.link', $i); ?>" title="">
							<?php endif; ?>
							<div class="teams-img">
								<img src="<?php echo $helper->get('data.img', $i); ?>" alt="" />
							</div>
							<?php if ($helper->get('data.link', $i)): ?>
								</a>
							<?php endif; ?>
						<?php endif; ?>
						
						<?php if (
          $helper->get('data.title', $i) ||
          $helper->get('data.description', $i)
      ): ?>
						<div class="teams-text">
							<?php if ($helper->get('data.title', $i)): ?>
								<h4>
									<?php if ($helper->get('data.link', $i)): ?>
										<a href="<?php echo $helper->get('data.link', $i); ?>" title="">
									<?php endif; ?>
									
										<?php echo $helper->get('data.title', $i); ?>
									
									<?php if ($helper->get('data.link', $i)): ?>
										</a>
									<?php endif; ?>
									</h4>
							<?php endif; ?>

							<?php if ($helper->get('data.team-position', $i)): ?>
								<span>
									<?php echo $helper->get('data.team-position', $i); ?>		
								</span>
							<?php endif; ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</div>

	<?php if ($helper->get('desc')): ?>
		<div class="team-description bottom-description">
			<?php if ($helper->get('desc')): ?>
			<div class="desc">
				<?php echo $helper->get('desc'); ?>
			</div>
			<?php endif; ?>

			<?php if ($helper->get('button') || $helper->get('btn-link')): ?>
			<a href="<?php echo $helper->get(
       'btn-link'
   ); ?>" title="<?php echo $helper->get(
    'button'
); ?>" class="btn btn-<?php echo $helper->get('btn-type'); ?>">
				<?php echo $helper->get('button'); ?>
			</a>
			<?php endif; ?>
		</div>
	<?php endif; ?>
</div>

<script>
(function($){
  jQuery(document).ready(function($) {
    $("#acm-teams-<?php echo $module->id; ?> .owl-carousel").owlCarousel({
      addClassActive: true,
      items: <?php echo $column; ?>,
      margin: 36,
      responsive : {
      	0 : {
      		items: 1,
      	},

      	768 : {
      		items: 2,
      	},

      	979 : {
      		items: 3,
      	},

      	1199 : {
      		items: <?php echo $column; ?>,
      	}
      },
      loop: false,
      nav : false,
      dots: <?php echo $column >= $count ? 'false' : 'true'; ?>,
      autoplay: false
    });
  });
})(jQuery);
</script>
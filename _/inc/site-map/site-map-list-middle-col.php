<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
	
	<?php if ($topics) { ?>
		<h3><a href="<?php echo get_permalink($news_page->ID); ?>"><i class="icon fa fa-rss fs-lg"></i><?php echo $news_page->post_title; ?><i class="fa fa-angle-right fa-lg"></i></a></h3>
		
		<div class="list-block">
			<ul class="list-unstyled">
		<?php foreach ($topics as $topic) { ?>

				<li><a href="<?php echo get_category_link($topic->term_id); ?>"><?php echo $topic->name; ?></a></li>
			
		<?php } ?>
			</ul>
		</div>
			
	<?php } ?>

	
	<?php if ($subjects) { ?>
		<h3><i class="icon fa fa-tags fs-lg"></i><?php echo $news_page->post_title; ?>: Subjects</h3>
		
		<div class="list-block">
			<ul class="list-unstyled">
		<?php foreach ($subjects as $subject) { ?>

				<li><a href="<?php echo get_tag_link($subject->term_id); ?>"><?php echo $subject->name; ?></a></li>
			
		<?php } ?>
			</ul>
		</div>
			
	<?php } ?>
		
</div>
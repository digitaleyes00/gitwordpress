<div id="sidebar">
<div id="janine">
	<div class="avatar col-md-6">
		<img src="<?php bloginfo('template_directory'); ?>/images/janine.jpg" alt="Janine Geauvreau" />
	</div>
	<div id="about-me">
	<h2>Hi! My name is Janine</h2>
		<p>
		I recently graduated with a diploma in holistic nutrition and am thrilled to be 
		helping others achieve optimal health through the foods they eat! I am a new mom 
		to a little girl, she is my driving force to educate people on healthy eating. 
		Helping the next generation achieve good health is a very important issue for me.
		</p>
	</div>
</div>
	<h2><?php _e('Categories'); ?></h2>
	<ul>
<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>
	<h2><?php _e('Archives'); ?></h2>
	<ul>
<?php wp_get_archives('type=monthly'); ?>
<?php wp_meta(); ?>
</ul>
</div>
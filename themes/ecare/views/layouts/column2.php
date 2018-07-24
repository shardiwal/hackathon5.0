<?php $this->beginContent('//layouts/main'); ?>
 <div class="row-fluid">
    <div class="span3 submenus noprint">
     <?php
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'itemCssClass' => 'btn btn-primary',
			'htmlOptions'=>array('class'=>'sidebar'),
		));
	?>
	</div><!-- sidebar span3 -->

	<div class="span9 body">
		<div class="main ff">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
</div>
<?php $this->endContent(); ?>

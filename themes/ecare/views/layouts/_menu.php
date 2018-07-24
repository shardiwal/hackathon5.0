<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
		<a class="navbar-brand" href="/">
		<?php
			echo Yii::app()->params->org['name'];
		?>
		</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

		<?php $this->widget('zii.widgets.CMenu',array(
			'htmlOptions'=>array('class'=>'nav navbar-nav navbar-right'),
			'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
			'itemCssClass'=>'',
			'encodeLabel'=>false,
			'items'=>array(
				array('label'=>'Home',     'url'=>array('/site/index')),
				array('label'=>'Invoices', 'url'=>array('/jobRegister/admin')),
				array('label'=>'Proforma Invoices', 'url'=>array('/jobRegister/challan')),
				array('label'=>'Clients',  'url'=>array('/client/admin')),
				array('label'=>'Products', 'url'=>array('/labCategory/admin')),
				array(
					'label'=>'My Account <span class="caret"></span>',
					'url'=>'#',
					'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),
					'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
					'items'=>array(
						array('label'=>'My Profile', 'url'=> Yii::app()->createUrl('user/view', array('id' => Yii::app()->user->id) ), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
					)
				),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
			),
		)); 
		?>
	  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div class='franchies_header'><?php 
    $frnch = Yii::app()->user->getState('frnch'); 
    echo $frnch ? CHtml::encode($frnch->franchise_name) : '';
    ?></div>
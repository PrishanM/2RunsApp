<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<section class="main-body" >
  <div class="container" >
  
  <div class="row-fluid">
	<div class="span12">
		<?php if(isset($this->breadcrumbs)):?>
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>$this->breadcrumbs,
                'homeLink'=>CHtml::link('Dashboard'),
                'htmlOptions'=>array('class'=>'breadcrumb')
            )); ?><!-- breadcrumbs -->
        <?php endif?>
	</div><!--/span-->
  </div>
  
  <div class="row-fluid" >	
	
	 <div class="span0.5">
       
	</div><!--/span--> 
	
	<div class="span2">
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operations',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
		?>
	</div>
	
	 <div class="span8">
        <!-- Include content pages -->
        <?php echo $content; ?>

	</div><!--/span--> 

  
     
	
  </div><!--/row-->
  
  <div class="row-fluid" >
	<div class="span12">
		
	</div><!--/span-->
  </div>
  
 
</div>
</section>


<?php $this->endContent(); ?>
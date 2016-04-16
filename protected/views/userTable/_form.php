<?php
/* @var $this UserTableController */
/* @var $model UserTable */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-table-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<b><p class="note" style="color:#ff0000;">Fields with <span class="required" > * </span> are required.</p></b>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'first_name',array('style'=>'color:#ff0000;')); ?>
	</div>
	
	</br>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'last_name',array('style'=>'color:#ff0000;')); ?>
	</div>
	
	</br>
	
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'email',array('style'=>'color:#ff0000;')); ?>
	</div>
	
	</br>

	<div class="row">
		<?php echo $form->labelEx($model,'user_name'); ?>
		<?php echo $form->textField($model,'user_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'user_name',array('style'=>'color:#ff0000;')); ?>
	</div>
	
	</br>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'password',array('style'=>'color:#ff0000;')); ?>
	</div>
	
	</br>

	<div class="row">
		<?php echo $form->labelEx($model,'role'); ?>
		<?php echo $form->textField($model,'role',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'role',array('style'=>'color:#ff0000;')); ?>
	</div>

	<div class="row buttons">
		
		
		<?php
		echo '<br>';
		 $this->widget('zii.widgets.jui.CJuiButton', array(
					'id'=>'submitButton',
				    'buttonType'=>'submit',
				    'name'=>'btnSubmit',
				    'value'=>'1',
				    'caption'=>'Save',
				    'htmlOptions'=>array('class'=>'ui-button-primary ui-button ui-widget ui-state-default ui-corner-all','style'=>'background:#b88007;color:#ffffff;',) 
					)); 
		?>
		
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">

$(function(){
  if(!$("#UserTable_user_name").val()){
	$("#UserTable_user_name").val(' ');
  }
});

</script>


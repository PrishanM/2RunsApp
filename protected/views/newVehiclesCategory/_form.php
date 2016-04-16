<?php
/* @var $this NewVehiclesCategoryController */
/* @var $model NewVehiclesCategory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'new-vehicles-category-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Mode_id'); ?>
		<?php echo $form->textField($model,'Mode_id'); ?>
		<?php echo $form->error($model,'Mode_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Category'); ?>
		<?php echo $form->textField($model,'Category',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_10KM_price'); ?>
		<?php echo $form->textField($model,'first_10KM_price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'first_10KM_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'additional_KM'); ?>
		<?php echo $form->textField($model,'additional_KM',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'additional_KM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waiting_charges_half_hour'); ?>
		<?php echo $form->textField($model,'waiting_charges_half_hour',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'waiting_charges_half_hour'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this NewVehiclesCategoryController */
/* @var $model NewVehiclesCategory */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_category'); ?>
		<?php echo $form->textField($model,'id_category'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Mode_id'); ?>
		<?php echo $form->textField($model,'Mode_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Category'); ?>
		<?php echo $form->textField($model,'Category',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'first_10KM_price'); ?>
		<?php echo $form->textField($model,'first_10KM_price',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'additional_KM'); ?>
		<?php echo $form->textField($model,'additional_KM',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'waiting_charges_half_hour'); ?>
		<?php echo $form->textField($model,'waiting_charges_half_hour',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
<?php
/* @var $this NewVehiclesCategoryController */
/* @var $data NewVehiclesCategory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_category')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_category), array('view', 'id'=>$data->id_category)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mode_id')); ?>:</b>
	<?php echo CHtml::encode($data->Mode_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Category')); ?>:</b>
	<?php echo CHtml::encode($data->Category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_10KM_price')); ?>:</b>
	<?php echo CHtml::encode($data->first_10KM_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('additional_KM')); ?>:</b>
	<?php echo CHtml::encode($data->additional_KM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waiting_charges_half_hour')); ?>:</b>
	<?php echo CHtml::encode($data->waiting_charges_half_hour); ?>
	<br />


</div>
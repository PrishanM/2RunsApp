<?php
/* @var $this NewVehiclesCategoryController */
/* @var $model NewVehiclesCategory */

$this->breadcrumbs=array(
	'New Vehicles Categories'=>array('index'),
	$model->id_category,
);

$this->menu=array(
	array('label'=>'List NewVehiclesCategory', 'url'=>array('index')),
	array('label'=>'Create NewVehiclesCategory', 'url'=>array('create')),
	array('label'=>'Update NewVehiclesCategory', 'url'=>array('update', 'id'=>$model->id_category)),
	array('label'=>'Delete NewVehiclesCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_category),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NewVehiclesCategory', 'url'=>array('admin')),
);
?>

<h1>View NewVehiclesCategory #<?php echo $model->id_category; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_category',
		'Mode_id',
		'Category',
		'first_10KM_price',
		'additional_KM',
		'waiting_charges_half_hour',
	),
)); ?>

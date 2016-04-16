<?php
/* @var $this NewVehiclesCategoryController */
/* @var $model NewVehiclesCategory */

$this->breadcrumbs=array(
	'New Vehicles Categories'=>array('index'),
	$model->id_category=>array('view','id'=>$model->id_category),
	'Update',
);

$this->menu=array(
	array('label'=>'List NewVehiclesCategory', 'url'=>array('index')),
	array('label'=>'Create NewVehiclesCategory', 'url'=>array('create')),
	array('label'=>'View NewVehiclesCategory', 'url'=>array('view', 'id'=>$model->id_category)),
	array('label'=>'Manage NewVehiclesCategory', 'url'=>array('admin')),
);
?>

<h1>Update NewVehiclesCategory <?php echo $model->id_category; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
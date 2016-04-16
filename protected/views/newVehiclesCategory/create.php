<?php
/* @var $this NewVehiclesCategoryController */
/* @var $model NewVehiclesCategory */

$this->breadcrumbs=array(
	'New Vehicles Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NewVehiclesCategory', 'url'=>array('index')),
	array('label'=>'Manage NewVehiclesCategory', 'url'=>array('admin')),
);
?>

<h1>Create NewVehiclesCategory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
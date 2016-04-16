<?php
/* @var $this NewVehiclesCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'New Vehicles Categories',
);

$this->menu=array(
	array('label'=>'Create NewVehiclesCategory', 'url'=>array('create')),
	array('label'=>'Manage NewVehiclesCategory', 'url'=>array('admin')),
);
?>

<h1>New Vehicles Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

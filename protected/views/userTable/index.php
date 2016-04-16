<?php
/* @var $this UserTableController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Management','View Users',
);

$this->menu=array(
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>View Users</h1>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

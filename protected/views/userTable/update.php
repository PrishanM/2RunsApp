<?php
/* @var $this UserTableController */
/* @var $model UserTable */

$this->breadcrumbs=array(
	'User Management',
	'Update',
);

$this->menu=array(
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->first_name.' '.$model->last_name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
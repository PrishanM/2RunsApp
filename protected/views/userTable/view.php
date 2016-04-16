<?php
/* @var $this UserTableController */
/* @var $model UserTable */

$this->breadcrumbs=array(
	'User Tables'=>array('index'),
	$model->user_id,
);

$this->menu=array(
	array('label'=>'List UserTable', 'url'=>array('index')),
	array('label'=>'Create UserTable', 'url'=>array('create')),
	array('label'=>'Update UserTable', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'Delete UserTable', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserTable', 'url'=>array('admin')),
);
?>

<h1>View UserTable #<?php echo $model->user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'first_name',
		'last_name',
		'user_name',
		'password',
		'role',
	),
)); ?>

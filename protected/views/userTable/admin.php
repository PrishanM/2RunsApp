<?php
/* @var $this UserTableController */
/* @var $model UserTable */

$this->breadcrumbs=array(
	'User Management',
	'Manage',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-table-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Users</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-table-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'htmlOptions'=>array('style'=>'width: 100%; overflow: auto;' ),
	'columns'=>array(
		'first_name',
		'last_name',
		'email',
		'role',
		array(
			'header'=>'View/Edit/Delete',
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('width'=>'80','align'=>'center'),
		),
	),
)); ?>

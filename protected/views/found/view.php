<?php
/* @var $this FoundController */
/* @var $model Found */

$this->breadcrumbs=array(
	'Founds'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Found', 'url'=>array('index')),
	array('label'=>'Create Found', 'url'=>array('create')),
	array('label'=>'Update Found', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Found', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Found', 'url'=>array('admin')),
);
?>

<h1>View Found #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'amount',
		'user_id',
		'project_id',
	),
)); ?>

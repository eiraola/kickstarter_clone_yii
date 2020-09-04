<?php
/* @var $this LikeProjectController */
/* @var $model LikeProject */

$this->breadcrumbs=array(
	'Like Projects'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LikeProject', 'url'=>array('index')),
	array('label'=>'Create LikeProject', 'url'=>array('create')),
	array('label'=>'Update LikeProject', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LikeProject', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LikeProject', 'url'=>array('admin')),
);
?>

<h1>View LikeProject #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'project_id',
	),
)); ?>

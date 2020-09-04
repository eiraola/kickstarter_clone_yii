<?php
/* @var $this LikeProjectController */
/* @var $model LikeProject */

$this->breadcrumbs=array(
	'Like Projects'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LikeProject', 'url'=>array('index')),
	array('label'=>'Create LikeProject', 'url'=>array('create')),
	array('label'=>'View LikeProject', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LikeProject', 'url'=>array('admin')),
);
?>

<h1>Update LikeProject <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
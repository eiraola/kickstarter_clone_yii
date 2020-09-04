<?php
/* @var $this LikeProjectController */
/* @var $model LikeProject */

$this->breadcrumbs=array(
	'Like Projects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LikeProject', 'url'=>array('index')),
	array('label'=>'Manage LikeProject', 'url'=>array('admin')),
);
?>

<h1>Create LikeProject</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
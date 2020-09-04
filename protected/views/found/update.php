<?php
/* @var $this FoundController */
/* @var $model Found */

$this->breadcrumbs=array(
	'Founds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Found', 'url'=>array('index')),
	array('label'=>'Create Found', 'url'=>array('create')),
	array('label'=>'View Found', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Found', 'url'=>array('admin')),
);
?>

<h1>Update Found <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
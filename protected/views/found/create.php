<?php
/* @var $this FoundController */
/* @var $model Found */

$this->breadcrumbs=array(
	'Founds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Found', 'url'=>array('index')),
	array('label'=>'Manage Found', 'url'=>array('admin')),
);
?>

<h1>Create Found</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
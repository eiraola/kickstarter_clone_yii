<?php
/* @var $this LikeProjectController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Like Projects',
);

$this->menu=array(
	array('label'=>'Create LikeProject', 'url'=>array('create')),
	array('label'=>'Manage LikeProject', 'url'=>array('admin')),
);
?>

<h1>Like Projects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

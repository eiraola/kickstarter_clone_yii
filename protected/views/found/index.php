<?php
/* @var $this FoundController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Founds',
);

$this->menu=array(
	array('label'=>'Create Found', 'url'=>array('create')),
	array('label'=>'Manage Found', 'url'=>array('admin')),
);
?>

<h1>Founds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

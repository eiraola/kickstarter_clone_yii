<?php
/* @var $this ProjectController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Projects',
);

$this->menu=array(
	array('label'=>'Create Project', 'url'=>array('create')),
	array('label'=>'Manage Project', 'url'=>array('admin')),
);
?>

<div class="sectiontitle"><h1>Your projects</h1></div>
<div class="sectionsubtitle">Manage your projects</div>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_manage',
)); ?>

<?php
/* @var $this ProjectController */
/* @var $data Project */
?>

<div class="view">

    <b> Author </b>: <?php   echo  $data->author->username ?><br />
    <b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>: </b>:
    <?php   echo  $data->types->name ?><br />



	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />


	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode(date("Y-m-d h:i:s",$data->create_time)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode(date("Y-m-d",$data->update_time). ' at '.date("h:i:s",$data->update_time)); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('author_id')); ?>:</b>
	<?php echo CHtml::encode($data->author_id); ?>
	<br />

	*/ ?>

</div>
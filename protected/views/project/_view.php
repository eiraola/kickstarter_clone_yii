<?php
/* @var $this ProjectController */
/* @var $data Project */
?>

<div class="view">
    <div class="projPic">
        <?php echo CHtml::link( '<img src="images/profile.jpg" class="projPic">', array('view', 'id'=>$data->id));?></h1>

    </div>

    <b><?php /*echo CHtml::encode($data->getAttributeLabel('type'));*/ ?> </b>
    <?php   /*echo  $data->types->name*/ ?>



	<b><?php /*echo CHtml::link(CHtml::encode($data->getAttributeLabel('title')), array('view', 'id'=>$data->id));*/ ?></b>
	<h1><?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id));?></h1>


	<b><?php //echo CHtml::encode($data->getAttributeLabel('content')); ?></b>
	<?php //echo CHtml::encode($data->content); ?>
    <div class="author"><b> Author </b>: <?php   echo  $data->author->username ?><br /></div>




    <div class="time">
        <b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?></b>
        <?php echo CHtml::encode(date("Y-m-d h:i:s",$data->create_time)); ?>
    </div>


	<b><?php /*echo CHtml::encode($data->getAttributeLabel('update_time')); */?></b>
	<?php /*echo CHtml::encode(date("Y-m-d",$data->update_time). ' at '.date("h:i:s",$data->update_time));*/ ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('author_id')); ?>:</b>
	<?php echo CHtml::encode($data->author_id); ?>
	<br />

	*/ ?>

</div>
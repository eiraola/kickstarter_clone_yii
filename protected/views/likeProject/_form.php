<?php
/* @var $this LikeProjectController */
/* @var $model LikeProject */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'like-project-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>



	<?php echo $form->errorSummary($model); ?>
    <div style="display: none">
        <div class="row">
            <?php echo $form->labelEx($model,'user_id'); ?>
            <?php echo $form->textField($model,'user_id'); ?>
            <?php echo $form->error($model,'user_id'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'project_id'); ?>
            <?php echo $form->textField($model,'project_id'); ?>
            <?php echo $form->error($model,'project_id'); ?>
        </div>
    </div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Like' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
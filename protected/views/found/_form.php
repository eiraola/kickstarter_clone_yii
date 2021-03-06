<?php
/* @var $this FoundController */
/* @var $model Found */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'found-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>



	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Set an amount as your donation!'); ?>
		<?php echo $form->numberField($model,'amount'); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>




	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Support this project' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
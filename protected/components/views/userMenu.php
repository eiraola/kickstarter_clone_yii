

    <?php echo CHtml::link('Create new project',array('project/create')); ?>
<?php //echo CHtml::link('Manage Posts',array('project/admin')); ?><br/>

<?php echo CHtml::link('Logout('.Yii::app()->user->name.')',array('site/logout')); ?>

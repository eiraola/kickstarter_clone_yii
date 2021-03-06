<?php
/* @var $this ProjectController */
/* @var $model Project */

$this->breadcrumbs = array(
    'Projects' => array('index'),
    $model->title,
);

$this->menu = array(
    array('label' => 'List Project', 'url' => array('index')),
    array('label' => 'Create Project', 'url' => array('create')),
    array('label' => 'Update Project', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Project', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Project', 'url' => array('admin')),
);
?>

<div class="ptitle"><h1><?php echo $model->title; ?></h1></div>
<?php if (Yii::app()->user->hasFlash('commentSubmitted')): ?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
    </div>
<?php endif; ?>
<div class="ppicDiv">
    <img src='<?php echo Yii::app()->request->getBaseUrl(true).'\images\img'. $model->id.'.jpg'; ?>' class="pprojPic" />

</div>

<div class="information">
    <div class="donations">
        <?php if($model->foundsum>=$model->aim):?>
            <div class="achieved">
                 <?php echo $model->foundsum. '&#36';?><br/>
            </div>
        <?php else: ?>
            <div class="notachieved">
                <?php echo $model->foundsum. '&#36';?><br/>
            </div>
        <?php endif ?>
        <?php echo 'of <span class="users">'.$model->aim. '&#36</span> objective.';?><br/>
        <?php echo 'contributed from <span class="users">'. $model->founders.' </span>user(s)!'; ?><br/><br/>
        <?php $this->renderPartial('/found/_form', array(
            'model' => $founds,
        )); ?>
        <?php echo '<span class="users">'.$model->likeCounts.'</span> user(s) liked this project! '; ?><br/><br/>
        <?php $this->renderPartial('/likeProject/_form', array(
            'model' => $like,
        )); ?>
    </div>


</div>

<div class="pview">


    <div class="author"><b> Author </b>: <?php echo $model->author->username ?><br/></div>

   <!-- <b><?php echo CHtml::encode($model->getAttributeLabel('content')); ?>: </b>-->
    <div class="proContent"><?php echo CHtml::encode($model->content); ?></div>


    <div class="time">
        <b><?php echo CHtml::encode($model->getAttributeLabel('create_time')); ?></b>
        <?php echo CHtml::encode(date("Y-m-d h:i:s", $model->create_time)); ?>
    </div>

</div>


</div>


<div class="commentBlock">









    <div id="comments">
        <?php if ($model->commentCount >= 1): ?>
            <h3>
                <?php echo $model->commentCount . ' comment(s)';   ?>
            </h3>

            <?php $this->renderPartial('_comments', array(
                'data' => $model,
                'comments' => $model->comments,
            )); ?>
        <?php else: ?> There are no comments
        <?php endif; ?>


    </div>
    <h3>Leave a Comment</h3>
    <?php $this->renderPartial('/comment/_form', array(
        'model' => $comment,
    )); ?>
</div>
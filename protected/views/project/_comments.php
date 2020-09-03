<?php
/* @var $data Project */
/* @var $this ProjectController */

?>

<div class="view">



    <?php foreach($comments as $comment): ?>
    hola
        <div class="comment" id="c<?php echo $comment->id; ?>">

            <?php /*echo CHtml::link("#{$comment->id}", $comment->getUrl($data), array(
                'class'=>'cid',
                'title'=>'Permalink to this comment',
            )); */?>

            <div class="author">
                <?php echo $comment->authore->username; ?> says:
            </div>

            <div class="time">
                <?php echo date('F j, Y \a\t h:i a',$comment->create_time); ?>
            </div>

            <div class="content">
                <?php echo nl2br(CHtml::encode($comment->content)); ?>
            </div>

        </div><!-- comment -->
    <?php endforeach; ?>

</div>
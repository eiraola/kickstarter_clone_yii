<?php

Yii::import('zii.widgets.CPortlet');

class GuestMenu extends CPortlet
{
    public function init()
    {

        parent::init();
    }

    protected function renderContent()
    {
        $this->render('guestMenu');
    }
}
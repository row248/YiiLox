<?php

Yii::import('zii.widgets.CPortlet');

class UserMenu extends CPortlen {

    protected function renderContent() {
        $this->render('userMenu');
    }
}
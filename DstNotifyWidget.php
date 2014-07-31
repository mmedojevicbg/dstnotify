<?php
class DstNotifyWidget extends CWidget {
    private $_assetsUrl;
    public $message;

    public function init() {
        parent::init();
        $this->initAssets();
    }

    protected function initAssets() {
        if ($this->_assetsUrl === null)
            $this->_assetsUrl = Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('ext.dstnotify.assets') );
        $cs = Yii::app()->clientScript;
        $cs->registerCssFile($this->_assetsUrl . '/style.css');
    }

    public function run() {
        $this->render('ext.dstnotify.views.notification', array('message' => $this->message));
    }
}
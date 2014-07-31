<?php

class DstNotify {
    const MESSAGE_TYPE_NOTICE = 1;
    const MESSAGE_TYPE_SUCCESS = 2;
    const MESSAGE_TYPE_WARNING = 3;
    const MESSAGE_TYPE_ERROR = 4;

    /**
     * @return DstNotify singleton instance
     */
    public static function getInstance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new DstNotify();
        }
        return $inst;
    }

    private function __construct() {
        // TODO find better way to make sure that session has been started
        Yii::app()->session;
        // ===============================================================

        if(!array_key_exists('dstnotify', $_SESSION)) {
            $_SESSION['dstnotify'] = array();
        }
    }

    public function render() {
        $messages = $_SESSION['dstnotify'];
        foreach($messages as $m) {
            Yii::app()->controller->widget('ext.dstnotify.DstNotifyWidget', array('message' => $m));
        }
        $this->flush();
    }

    public function addMessage($type, $text) {
        $_SESSION['dstnotify'][] = array(
            'type' => $type,
            'text' => $text
        );
    }

    protected  function flush() {
        $_SESSION['dstnotify'] = array();
    }
}
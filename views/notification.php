<?php
if($message) {
    switch($message['type']) {
        case DstNotify::MESSAGE_TYPE_NOTICE:
            ?>
            <div class="alert-box notice"><span>notice: </span><?php echo $message['text']; ?></div>
            <?php
        break;
        case DstNotify::MESSAGE_TYPE_SUCCESS:
            ?>
            <div class="alert-box success"><span>notice: </span><?php echo $message['text']; ?></div>
            <?php
        break;
        case DstNotify::MESSAGE_TYPE_WARNING:
            ?>
            <div class="alert-box warning"><span>notice: </span><?php echo $message['text']; ?></div>
            <?php
        break;
        case DstNotify::MESSAGE_TYPE_ERROR:
            ?>
            <div class="alert-box error"><span>notice: </span><?php echo $message['text']; ?></div>
            <?php
        break;
    }
}
?>
DstNotify
=============

Flash messages extensions for YII 1.x framework.

### Features
* easy way for generating one time notifications
* four type of messages (success, warning, error and notice)
* style with images for each message type

### Examples

#### Render message in view (e.g. header of main layout view)
	DstNotify::getInstance()->render();

#### Add info message
	DstNotify::getInstance()->addMessage(DstNotify::MESSAGE_TYPE_INFO, 'Lorem ipsum ...');

#### Add success message
	DstNotify::getInstance()->addMessage(DstNotify::MESSAGE_TYPE_SUCCESS, 'Lorem ipsum ...');

#### Add error message
	DstNotify::getInstance()->addMessage(DstNotify::MESSAGE_TYPE_ERROR, 'Lorem ipsum ...');

#### Add warning message
	DstNotify::getInstance()->addMessage(DstNotify::MESSAGE_TYPE_WARNING, 'Lorem ipsum ...');
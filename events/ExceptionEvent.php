<?php
namespace apaoww\yii2websocket\events;

use yii\base\Event;

class ExceptionEvent extends Event
{
    /**
     * @var \Exception $exception
     */
    public $exception;
}
<?php
namespace apaoww\yii2websocket\events;

class WSClientCommandEvent extends WSClientEvent
{
    /**
     * @var string $command
     */
    public $command;

    /**
     * @var mixed $result
     */
    public $result;
}
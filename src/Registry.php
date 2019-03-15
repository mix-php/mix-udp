<?php

namespace Mix\Udp;

use Mix\Core\Component\ComponentInterface;
use Mix\Core\Component\AbstractComponent;

/**
 * Class Registry
 * @package Mix\Udp
 * @author LIUJIAN <coder.keda@gmail.com>
 */
class Registry extends AbstractComponent
{

    /**
     * 协程模式
     * @var int
     */
    public static $coroutineMode = ComponentInterface::COROUTINE_MODE_REFERENCE;

    /**
     * 处理者
     * @var \Mix\Udp\Handler\HandlerInterface
     */
    public $handler;

    /**
     * 获取处理器
     * @return \Mix\Udp\Handler\HandlerInterface
     */
    public function getHandler()
    {
        return $this->handler;
    }

}

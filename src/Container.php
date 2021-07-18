<?php

namespace Chaos\Support\Container;

use Psr\Container\ContainerInterface;

/**
 * Class Container.
 *
 * @author t(-.-t) <ntd1712@mail.com>
 */
class Container
{
    /**
     * @var ContainerInterface
     */
    private static $container;

    /**
     * @return mixed|ContainerInterface
     */
    public static function getInstance()
    {
        return self::$container;
    }

    /**
     * @param ContainerInterface $container The Container instance.
     *
     * @return void
     */
    public static function setInstance(ContainerInterface $container)
    {
        self::$container = $container;
    }
}

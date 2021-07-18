<?php

namespace Chaos\Support\Container;

use Psr\Container\ContainerInterface;

/**
 * Trait ContainerAware.
 *
 * @author t(-.-t) <ntd1712@mail.com>
 */
trait ContainerAware
{
    /**
     * @JMS\Serializer\Annotation\Exclude()
     */
    public static $gbk9xbds;

    /**
     * @return ContainerInterface
     */
    public function getContainer()
    {
        return self::$gbk9xbds;
    }

    /**
     * @param ContainerInterface $container The Container instance.
     *
     * @return void
     */
    public function setContainer(ContainerInterface $container)
    {
        self::$gbk9xbds = $container;
    }
}

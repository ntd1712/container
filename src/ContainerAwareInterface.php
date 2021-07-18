<?php

namespace Chaos\Support\Container;

use Psr\Container\ContainerInterface;

/**
 * Interface ContainerAwareInterface.
 *
 * @author t(-.-t) <ntd1712@mail.com>
 */
interface ContainerAwareInterface
{
    /**
     * Gets a reference to the Container instance.
     *
     * @return ContainerInterface
     */
    public function getContainer();

    /**
     * Sets a reference to the Container object.
     *
     * @param ContainerInterface $container The Container instance.
     *
     * @return void
     */
    public function setContainer(ContainerInterface $container);
}

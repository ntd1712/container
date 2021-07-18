<?php

namespace Chaos\Support\Container;

use Interop\Container\ContainerInterface;
use Psr\Container\ContainerInterface as PsrContainerInterface;

/**
 * Class PsrContainerDecorator.
 */
final class PsrContainerDecorator implements ContainerInterface
{
    /**
     * @var PsrContainerInterface
     */
    private $container;

    /**
     * Constructor.
     *
     * @param PsrContainerInterface $container The Container instance.
     */
    public function __construct(PsrContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * {@inheritDoc}
     *
     * @param string $id Identifier of the entry to look for.
     *
     * @return mixed Entry.
     */
    public function get($id)
    {
        return $this->container->get($id);
    }

    /**
     * {@inheritDoc}
     *
     * @param string $id Identifier of the entry to look for.
     *
     * @return bool
     */
    public function has($id)
    {
        return $this->container->has($id);
    }
}

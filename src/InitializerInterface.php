<?php

namespace Chaos\Support\Container;

/**
 * Interface InitializerInterface.
 *
 * An initializer can be registered to a service locator, and are run after an instance is created
 * to inject additional dependencies through setters.
 */
interface InitializerInterface
{
    /**
     * Initializes the given instance.
     *
     * @param \Psr\Container\ContainerInterface $container The Container instance.
     * @param object $instance The instance.
     *
     * @return void
     */
    public function __invoke($container, $instance);
}

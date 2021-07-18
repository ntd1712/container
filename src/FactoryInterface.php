<?php

namespace Chaos\Support\Container;

/**
 * Interface FactoryInterface.
 *
 * A factory is an callable object that is able to create an object. It is
 * given the instance of the service locator, the requested name of the class
 * you want to create, and any additional options that could be used to
 * configure the instance state.
 */
interface FactoryInterface
{
    /**
     * Creates an object.
     *
     * @param \Psr\Container\ContainerInterface $container The Container instance.
     * @param string $requestedName The ID of the object being instantiated.
     * @param null|array $options An array of configuration relevant to the object.
     *
     * @return object
     */
    public function __invoke($container, $requestedName, array $options = null);
}

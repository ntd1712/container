<?php

namespace Chaos;

/**
 * Gets the available container instance.
 *
 * @param null|string $id Identifier of the entry to look for.
 *
 * @return mixed Entry.
 */
function app($id = null)
{
    $container = Support\Container\Container::getInstance();

    if (empty($id)) {
        return $container;
    }

    return $container->get($id);
}

/**
 * @return \Psr\EventDispatcher\EventDispatcherInterface
 */
function dispatcher()
{
    return app('dispatcher');
}

/**
 * @return \Doctrine\Persistence\ManagerRegistry
 */
function doctrine()
{
    return app('doctrine');
}

/**
 * @return \JMS\Serializer\Serializer|\JMS\Serializer\SerializerInterface
 */
function serializer()
{
    return app('serializer');
}

/**
 * @return \Chaos\Support\Config\ConfigInterface
 */
function vars()
{
    return app('vars');
}

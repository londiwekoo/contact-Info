<?php

namespace ContainerHPV9PI0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Gv2EfUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Gv2EfU_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Gv2EfU_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'emailService' => ['privates', 'App\\Service\\EmailService', 'getEmailServiceService', true],
        ], [
            'emailService' => 'App\\Service\\EmailService',
        ]);
    }
}

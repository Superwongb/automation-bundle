<?php

namespace Harryn\Jacobn\AutomationBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Harryn\Jacobn\AutomationBundle\DependencyInjection\UVDeskExtension;
use Harryn\Jacobn\AutomationBundle\DependencyInjection\Compilers as UVDeskAutomationCompilers;

class UVDeskAutomationBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new UVDeskExtension();
    }

    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new UVDeskAutomationCompilers\WorkflowPass());
        $container->addCompilerPass(new UVDeskAutomationCompilers\PreparedResponsePass());
    }
}

<?php

namespace Harryn\Jacobn\AutomationBundle\Package;

use Harryn\Jacobn\PackageManager\Composer\ComposerPackage;
use Harryn\Jacobn\PackageManager\Composer\ComposerPackageExtension;

class Composer extends ComposerPackageExtension
{
    public function loadConfiguration()
    {
        $composerPackage = new ComposerPackage();
        $composerPackage
            ->combineProjectConfig('config/packages/twig.yaml', 'Templates/twig.yaml');
        
        return $composerPackage;
    }
}

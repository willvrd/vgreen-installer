<?php

namespace WillVrd\VgreenInstaller;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class VgreenInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        
        $p1 = explode("/",$package->getPrettyName());
        $p2 = explode("-",$p1[1]);

        $nModule = ucfirst($p2[0]);
        
        return 'Modules/'.$nModule;
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'vgreen-module' === $packageType;
    }
}
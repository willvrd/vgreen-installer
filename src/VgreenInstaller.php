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
        
        echo "AQUI: ".$package->getPrettyName();

        $p1 = explode("/",$package->getPrettyName());
        $p2 = explode("-",$p1);

        $nModule = $p2[0];
        
        return 'Modules/'.$nModule;
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'greenlaravel-module' === $packageType;
    }
}
<?php
/**
 * Custom Installer Plugin.
 *
 * @author William Verde 
 *
 */

namespace WillVrd\VgreenInstaller;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class VgreenInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new VgreenInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}
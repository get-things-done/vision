<?php

namespace GetThingsDone\Vision;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use GetThingsDone\Vision\Commands\VisionCommand;

class VisionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('vision')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_vision_table')
            ->hasCommand(VisionCommand::class);
    }
}

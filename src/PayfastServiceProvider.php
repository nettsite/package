<?php

namespace NettSite\Payfast;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use NettSite\Payfast\Commands\PayfastCommand;

class PayfastServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-payfast')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-payfast_table')
            ->hasCommand(PayfastCommand::class);
    }
}

<?php

namespace prdp543\PasswordNotification;




class PasswordChangedServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('password-notification')

            ->hasViews();

    }
}
 
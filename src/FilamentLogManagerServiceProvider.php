<?php

namespace DrkMode\FilamentLogManager;

use Filament\PluginServiceProvider;
use DrkMode\FilamentLogManager\Commands\FilamentLogManagerCommand;
use DrkMode\FilamentLogManager\Pages\Logs;
use Spatie\LaravelPackageTools\Package;

class FilamentLogManagerServiceProvider extends PluginServiceProvider
{
    protected array $styles = [
        'filament-log-manager-styles' => __DIR__.'/../resources/css/styles.css',
    ];

    protected array $pages = [
        Logs::class,
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-log-manager')
            ->hasConfigFile()
            ->hasViews()
            ->hasTranslations()
            ->hasCommand(FilamentLogManagerCommand::class);
    }
}

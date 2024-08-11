<?php namespace NiaInteractive\Breadcrumbs;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'NiaInteractive\Breadcrumbs\Components\Breadcrumbs' => 'Breadcrumbs',
        ];
    }
}

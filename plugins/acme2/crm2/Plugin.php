<?php namespace Acme2\Crm2;

use Backend;
use System\Classes\PluginBase;

/**
 * crm2 Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'crm2',
            'description' => 'Customer Relationship Management',
            'author'      => 'acme2',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Acme2\Crm2\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'acme2.crm2.some_permission' => [
                'tab' => 'crm2',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'crm2' => [
                'label'       => 'crm2',
                'url'         => Backend::url('acme2/crm2/opportunities'),
                'icon'        => 'icon-leaf',
                'permissions' => ['acme2.crm2.*'],
                'order'       => 500,
            ],
        ];
    }

}

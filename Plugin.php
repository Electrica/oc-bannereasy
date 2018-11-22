<?php namespace Electrica\BannerEasy;

use Backend;
use System\Classes\PluginBase;

/**
 * BannerEasy Plugin Information File
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
            'name'        => 'BannerEasy',
            'description' => 'No description provided yet...',
            'author'      => 'Electrica',
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
        return [
            'Electrica\BannerEasy\Components\BannerEasy' => 'BannerEasy',
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
            'electrica.bannereasy.some_permission' => [
                'tab' => 'BannerEasy',
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
        return [
            'bannereasy' => [
                'label'       => 'BannerEasy',
                'url'         => Backend::url('electrica/bannereasy/bannereasy'),
                'icon'        => 'icon-desktop',
                'permissions' => ['electrica.bannereasy.*'],
                'order'       => 500,

                'sideMenu' => [
                    'banner' => [
                        'label' => 'Баннеры',
                        'icon' => 'icon-desktop',
                        'url' => Backend::url('electrica/bannereasy/bannereasy')
                    ],
                    'category' => [
                        'label' => 'Категории',
                        'icon' => 'icon-folder-open',
                        'url' => Backend::url('electrica/bannereasy/bannereasycategory')
                    ]
                ]
            ],
        ];
    }
}

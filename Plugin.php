<?php namespace JuntaDigital\Carousel;

use Backend;
use System\Classes\PluginBase;

/**
 * Carousel Plugin Information File
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
            'name'        => 'Carousel',
            'description' => 'Provides a Carousel Gallery',
            'author'      => 'JuntaDigital',
            'icon'        => 'icon-picture-o'
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
            'JuntaDigital\Carousel\Components\Carousel' => 'carousel',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

        return [
            'juntadigital.carousel.manage_carousel' => [
                'tab' => 'Carousel',
                'label' => 'Manage Carousel'
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
            'carousel' => [
                'label'       => 'Carousel',
                'url'         => Backend::url('juntadigital/carousel/carousel'),
                'icon'        => 'icon-picture-o',
                'permissions' => ['juntadigital.carousel.manage_carousel'],
            ],
        ];
    }

}

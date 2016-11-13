<?php namespace JuntaDigital\Carousel\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Carousel Back-end Controller
 */
class Carousel extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('JuntaDigital.Carousel', 'carousel', 'carousel');
    }
}

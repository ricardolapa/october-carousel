<?php namespace JuntaDigital\Carousel\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use JuntaDigital\Carousel\Models\Images as SlideModel;

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

    public function onDelete() {

        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $objectId) {

                if (!$object = SlideModel::find($objectId))
                    continue;
                $object->delete();
            }

        }

        return $this->listRefresh();
    }
}

<?php namespace JuntaDigital\Carousel\Components;

use Cms\Classes\ComponentBase;
use JuntaDigital\Carousel\Models\Image as ImageModel;

class Carousel extends ComponentBase
{

    /**
     * Returns an array of images from a gallery
     * @var Array
     */
    public $carousel;

    public function componentDetails()
    {
        return [
            'name'        => 'Carousel Component',
            'description' => 'Lists a Carousel from an Image Gallery'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun () {
        $this->carousel = ImageModel::all();
    }

}

<?php namespace JuntaDigital\Carousel\Models;

use Model;

/**
 * Image Model
 */
class Image extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'juntadigital_carousel_images';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Relations
     */
    public $attachOne = [
        'image_gallery' => 'System\Models\File',
    ];

    // verify the form field state
    public function filterFields ($fields, $context = null) {

        if ($this->headline_state) {
            $fields->headline->disabled = false;
        } else {
            $fields->headline->disabled = true;
        }

        if ($this->baseline_state) {
            $fields->baseline->disabled = false;
        } else {
            $fields->baseline->disabled = true;
        }

        if ($this->call_to_action_state) {
            $fields->call_to_action->disabled = false;
            $fields->action_link->disabled = false;
        } else {
            $fields->call_to_action->disabled = true;
            $fields->action_link->disabled = true;
        }

    }

}

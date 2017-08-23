<?php
/**
 *
 * @author    Vadim Goncharov
 * @copyright Copyright (c) 2017 Vadim Goncharov
 * @link      http://roundhouseagency.com/
 * @package   Nutshell
 * @since     1.0.0
 */

namespace Craft;

class NutshellService extends BaseApplicationComponent
{
    // public $reviews;

    public function init()
    {
        parent::init();

        // $this->reviews = Craft::app()->getComponent('guestReviews_reviews');
    }

    public function getArrayList($data)
    {
        $array = ['apples', 'orange', 'banana', 'peach'];

        ArrayHelper::prependOrAppend($array, $data, true);

        return $array;
    }

}
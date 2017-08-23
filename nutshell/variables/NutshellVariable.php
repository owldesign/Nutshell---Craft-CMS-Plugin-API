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

class NutshellVariable
{
    public function loadScripts()
    {
        craft()->templates->includeJsResource('nutshell/js/nutshell-front.js');
    }
}
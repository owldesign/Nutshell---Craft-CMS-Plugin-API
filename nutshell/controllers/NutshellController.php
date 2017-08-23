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

class NutshellController extends BaseController
{
    protected $allowAnonymous = true;

    public function actionIndexTemplate(array $variables = array())
    {
        $variables['title'] = 'Nutshell';

        $this->renderTemplate('nutshell/index', $variables);
    }
    
    public function actionTestApi()
    {
        $foo = craft()->request->getRequiredPost('foo');

        try {
            $this->returnJson(nut()->getArrayList($foo));
        } catch (Exception $exception) {
            $this->returnErrorJson($exception->getMessage());
        }
    }
}
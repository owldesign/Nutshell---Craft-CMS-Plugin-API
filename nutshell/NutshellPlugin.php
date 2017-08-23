<?php
/**
 *
 * @author    Vadim Goncharov
 * @copyright Copyright (c) 2017 Vadim Goncharov
 * @link      http://roundhouseagency.com/
 * @package   Nutshell
 * @since     1.0.3
 */

namespace Craft;

class NutshellPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
        parent::init();

        // Getting date for releases.json
        // Craft::dd(DateTimeHelper::toIso8601(DateTimeHelper::currentTimeStamp()));
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Nutshell API');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Manage reviews for craft elements.');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/roundhouse/guestreviews/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/owldesign/Nutshell---Craft-CMS-Plugin-API/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.3';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Vadim Goncharov';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'http://roundhouseagency.com/';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return true;
    }

    /**
     * @return mixed
     */
    // public function addTwigExtension()
    // {
    //     Craft::import('plugins.guestreviews.twigextensions.GuestReviewsTwigExtension');

    //     return new GuestReviewsTwigExtension();
    // }

    /**
     */
    public function onBeforeInstall()
    {
    }

    /**
     */
    public function onAfterInstall()
    {
        gr()->installDefaultReviewStatuses();
    }

    /**
     */
    public function onBeforeUninstall()
    {
    }

    /**
     */
    public function onAfterUninstall()
    {
    }

    /**
     * @return array
     */
    // protected function defineSettings()
    // {
    //     return array(
    //         'someSetting' => array(AttributeType::String, 'label' => 'Some Setting', 'default' => ''),
    //     );
    // }

    /**
     * @return mixed
     */
    // public function getSettingsHtml()
    // {
    //    return craft()->templates->render('guestreviews/GuestReviews_Settings', array(
    //        'settings' => $this->getSettings()
    //    ));
    // }

    /**
     * @return mixed
     */
    // public function prepSettings($settings)
    // {
    //     // Modify $settings here...

    //     return $settings;
    // }

    /**
     * @return array
     */
    public function registerCpRoutes()
    {
        return array(
            'nutshell' => array('action' => 'nutshell/indexTemplate')
        );
    }

    /**
     * @return array
     */
    public function registerUserPermissions()
    {
        return array(
            'editReviews' => array(
                'label' => Craft::t('Edit Reviews')
            )
        );
    }

}

/**
 * @return Nutshell Service
 */
function nut()
{
    return Craft::app()->getComponent('nutshell');
}
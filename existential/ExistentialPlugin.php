<?php
/**
 * Existential plugin for Craft CMS
 *
 * Check whether a file exists
 *
 * @author    MoreSoda
 * @copyright Copyright (c) 2018 MoreSoda
 * @link      https://moresoda.co.uk
 * @package   Existential
 * @since     1.0.0
 */

namespace Craft;

class ExistentialPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Existential');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Check whether a file exists');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/moresoda/existential/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/moresoda/existential/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.0';
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
        return 'MoreSoda';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'https://moresoda.co.uk';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     * @return mixed
     */
    public function addTwigExtension()
    {
        Craft::import('plugins.existential.twigextensions.ExistentialTwigExtension');

        return new ExistentialTwigExtension();
    }

    /**
     */
    public function onBeforeInstall()
    {
    }

    /**
     */
    public function onAfterInstall()
    {
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
}
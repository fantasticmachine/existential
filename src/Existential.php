<?php
/**
 * Existential plugin for Craft CMS 3.x
 *
 * A simple Craft 3 plugin which adds a Twig filter for checking whether a file exists
 *
 * @link      https://moresoda.co.uk
 * @copyright Copyright (c) 2019 Moresoda
 */

namespace moresoda\existential;

use moresoda\existential\variables\ExistentialVariable;
use moresoda\existential\twigextensions\ExistentialTwigExtension;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 *
 * @author    Moresoda
 * @package   Existential
 * @since     1.0.0
 *
 */
class Existential extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * Static property that is an instance of this plugin class so that it can be accessed via
     * Existential::$plugin
     *
     * @var Existential
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * To execute your plugin’s migrations, you’ll need to increase its schema version.
     *
     * @var string
     */
    public $schemaVersion = '1.0.1';

    // Public Methods
    // =========================================================================

   
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        // Register Twig extensions
        Craft::$app->view->registerTwigExtension(new ExistentialTwigExtension());

      
        Craft::info(
            Craft::t(
                'existential',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}

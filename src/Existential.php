<?php
/**
 * Existential plugin for Craft CMS 3.x
 *
 * A simple Craft 3 plugin which adds a Twig filter for checking whether a file exists
 *
 * @link      https://fantasticmachine.co.uk
 * @copyright Copyright (c) 2019 Fantastic Machine
 */

namespace moresoda\existential;

use fantasticmachine\existential\variables\ExistentialVariable;
use fantasticmachine\existential\twigextensions\ExistentialTwigExtension;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 *
 * @author    Fantastic Machine
 * @package   Existential
 * @since     1.0.3
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
    public string $schemaVersion = '1.0.3';

    // Public Methods
    // =========================================================================

   
    public function init()
    {
        parent::init();
        // Defer most setup tasks until Craft is fully initialized
        Craft::$app->onInit(function() {

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
        });
    }

    // Protected Methods
    // =========================================================================

}

<?php
/**
 * common plugin for Craft CMS 3.x
 *
 * common
 *
 * @link      https://newism.com.au
 * @copyright Copyright (c) 2019 Newism
 */

namespace newism\common;


use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 * Class Common
 *
 * @author    Newism
 * @package   Common
 * @since     0.0.0
 *
 */
class Common extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var Common
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '0.0.0';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'common',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}

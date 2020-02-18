<?php
/**
 * Existential plugin for Craft CMS 3.x
 *
 * A simple Craft 3 plugin which adds a Twig filter for checking whether a file exists
 *
 * @link      https://moresoda.co.uk
 * @copyright Copyright (c) 2019 Moresoda
 */

namespace moresoda\existential\twigextensions;

use moresoda\existential\Existential;

use Craft;

/**
 * Twig can be extended in many ways; you can add extra tags, filters, tests, operators,
 * global variables, and functions. You can even extend the parser itself with
 * node visitors.
 *
 * http://twig.sensiolabs.org/doc/advanced.html
 *
 * @author    Moresoda
 * @package   Existential
 * @since     0.1
 */
class ExistentialTwigExtension extends \Twig_Extension
{
    // Public Methods
    // =========================================================================

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'Existential';
    }

    /**
     * Returns an array of Twig filters, used in Twig templates via:
     *
     *      {{ 'something' | someFilter }}
     *
     * @return array
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('fileExists', [$this, 'fileExists']),
        ];
    }

    /**
     *
     * @param null $url
     *
     * @return string
     */
    public function fileExists($url = null)
    {
        $urlParsed = parse_url($url, PHP_URL_PATH);
        $fullUrl = '.'.'/'.ltrim($urlParsed,'/');
        return file_exists($fullUrl);
    }
}

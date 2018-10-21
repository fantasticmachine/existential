<?php
/**
 * Existential plugin for Craft CMS
 *
 * Existential Twig Extension
 *
 * @author    Pete Eveleigh
 * @copyright Copyright (c) 2018 Pete Eveleigh
 * @link      https://moresoda.co.uk
 * @package   Existential
 * @since     1.0.0
 */

namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class ExistentialTwigExtension extends \Twig_Extension
{
    /**
     * @return string The extension name
     */
    public function getName()
    {
        return 'Existential';
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return array(
            'fileExists' => new \Twig_Filter_Method($this, 'fileExists'),
        );
    }

    /**
    * @return array
     */
    public function getFunctions()
    {
        return array(
            'fileExists' => new \Twig_Function_Method($this, 'fileExists'),
        );
    }

     /**
     * @return string
     */
    public function fileExists($url = null)
    {
        $fullUrl = '.'.'/'.ltrim($url,'/');
        return IOHelper::fileExists($fullUrl);
    }
}
}

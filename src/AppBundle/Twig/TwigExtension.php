<?php
/**
 * Created by PhpStorm.
 * User: cerynna
 * Date: 21/12/17
 * Time: 05:23
 */

namespace AppBundle\Twig;

class TwigExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('slugFilter', [$this, 'slugFilter'], [
                'needs_environment' => true,
            ]),
        );
    }
    public function slugFilter(\Twig_Environment $env, $value)
    {

    }
}
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * hold PhpMyAdmin\Twig\TransformationsExtension class
 *
 * @package PhpMyAdmin\Twig
 */
namespace PhpMyAdmin\Twig;

use PhpMyAdmin\Transformations;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Class TransformationsExtension
 *
 * @package PhpMyAdmin\Twig
 */
class TransformationsExtension extends AbstractExtension
{
    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return TwigFunction[]
     */
    public function getFunctions()
    {
        $transformations = new Transformations();
        return array(
            new TwigFunction(
                'Transformations_getDescription',
                [$transformations, 'getDescription']
            ),
            new TwigFunction(
                'Transformations_getName',
                [$transformations, 'getName']
            ),
        );
    }
}

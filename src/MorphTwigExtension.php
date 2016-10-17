<?php

namespace Butterfly\Component\ThumbnailGenerator;

use Butterfly\Component\Morph\NumberWordEnding;

class MorphTwigExtension extends \Twig_Extension
{
    /**
     * @var NumberWordEnding
     */
    protected $numberWordEnding;

    /**
     * @return array
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('morph_number', [$this->numberWordEnding, 'get']),
        ];
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'data.morph';
    }
}

<?php

namespace Butterfly\Component\Morph;

class MorphTwigExtension extends \Twig_Extension
{
    /**
     * @var NumberWordEnding
     */
    protected $numberWordEnding;

    /**
     * @param NumberWordEnding $numberWordEnding
     */
    public function __construct(NumberWordEnding $numberWordEnding)
    {
        $this->numberWordEnding = $numberWordEnding;
    }

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

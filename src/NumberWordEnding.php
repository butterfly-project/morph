<?php

namespace Butterfly\Component\Morph;

class NumberWordEnding
{
    /**
     * @param int $number
     * @param int $firstForm
     * @param int $secondForm
     * @param int $thirdForm
     * @return mixed
     */
    public function get($number, $firstForm, $secondForm, $thirdForm)
    {
        $number     = (int)$number;
        $lastNumber = substr($number, 0, -1);

        if (1 == $lastNumber) {
            $word = $firstForm;
        } elseif ($lastNumber >= 2 && $lastNumber <=4) {
            $word = $secondForm;
        } else {
            $word = $thirdForm;
        }

        return $word;
    }
}

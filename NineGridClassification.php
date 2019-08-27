<?php
namespace defyma\helper;

/**
 *  Implement 9 Grid Classification.
 *  Example case For 9-Box Talent Grid, with input X as score performance assessment and Y as score potential assessment.
 *
 *  Author: Defy Muhammad Aminuddin.
 *  website: defyma.com
 *  License: MIT
 *
 *  example:
 *  if $maxX = 3 and $maxY = 3, then 9 Grid will be like:
 *
 *        Y
 *        |
 *      3 +--+---+----+
 *        | 7 | 8 | 9 |
 *      2 +---+---+---+
 *        | 4 | 5 | 6 |
 *      1 +---+---+---+
 *        | 1 | 2 | 3 |
 *        +---+---+---+---X
 *      0     1   2   3
 *
 *  [Ex.1] if $valueX = 2.3 & $valueY = 1.2
 *       then will return 6
 *  [Ex.2] if $valueX = 0 & $valueY = 1.6
 *       then will return 4
 *  [Ex.3] if $valueX = 1 & $valueY = 1
 *       then will return 1
 *  [Ex.3] if $valueX = 3.5 & $valueY = 1.3
 *       then will return null, because $maxX = 3
 *
 * @param $valueX
 * @param $valueY
 * @param int $maxX
 * @param int $maxY
 * @return int|string|null
 */

/**
 * Class NineGridClassification
 * @package defyma
 * @property int $maxX
 * @property int $maxY
 * @property int $valueX
 * @property int $valueY
 */
Class NineGridClassification {

    /**
     * @param $valueX
     * @param $valueY
     * @param int $maxX
     * @param int $maxY
     * @return int|null
     */
    public static function calculate($valueX, $valueY, $maxX = 6, $maxY = 6)
    {
        if (
            $valueX < 0 ||
            $valueY < 0 ||
            $valueX > $maxX ||
            $valueY > $maxY ||
            $maxX <= 0 ||
            $maxY <= 0 ||
            is_null($valueX) ||
            is_null($valueY) ||
            is_null($maxX) ||
            is_null($maxY)
        ) return null;

        $_X = $maxX / 3;
        $_Y = $maxY / 3;

        //Classification Range
        $classRange = [
            [
                "x" => [0, $_X],
                "y" => [0, $_Y]
            ],
            [
                "x" => [$_X, $_X * 2],
                "y" => [0, $_Y]
            ],
            [
                "x" => [$_X * 2, $_X * 3],
                "y" => [0, $_Y]
            ],
            [
                "x" => [0, $_X],
                "y" => [$_Y, $_Y * 2]
            ],
            [
                "x" => [$_X, $_X * 2],
                "y" => [$_Y, $_Y * 2]
            ],
            [
                "x" => [$_X * 2, $_X * 3],
                "y" => [$_Y, $_Y * 2]
            ],
            [
                "x" => [0, $_X],
                "y" => [$_Y * 2, $_Y * 3]
            ],
            [
                "x" => [$_X, $_X * 2],
                "y" => [$_Y * 2, $_Y * 3]
            ],
            [
                "x" => [$_X * 2, $_X * 3],
                "y" => [$_Y * 2, $_Y * 3]
            ]
        ];

        foreach ($classRange as $key => $value) {
            if (
                ($valueX >= $value["x"][0] && $valueX <= $value['x'][1])
                &&
                ($valueY >= $value['y'][0] && $valueY <= $value['y'][1])
            ) {
                return ($key + 1);
            }
        }

        return null;
    }
}


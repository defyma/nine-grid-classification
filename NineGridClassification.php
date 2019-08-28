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
 *  if $this->_X = 3 and $this->_Y = 3, then 9 Grid will be like:
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
 *       then will return null, because $this->_X = 3
 *
 *  Class NineGridClassification
 *  @package defyma
 */
Class NineGridClassification {

    private $_X = null;
    private $_X1 = null;
    private $_X2 = null;

    private $_Y = null;
    private $_Y1 = null;
    private $_Y2 = null;

    /**
     * @param $X
     * @param $Y
     * @param null $X1
     * @param null $Y1
     * @param null $X2
     * @param null $Y2
     */
    public function setPoin($X, $Y, $X1 = null, $X2 = null, $Y1 = null, $Y2 = null)
    {
        $this->_X = $X;
        $this->_Y = $Y;

        if(
            !is_null($X1) ||
            !is_null($X2) ||
            !is_null($Y1) ||
            !is_null($Y2)
        ) {
            $this->_X1 = $X1;
            $this->_X2 = $X2;
            $this->_Y1 = $Y1;
            $this->_Y2 = $Y2;
        }
    }

    /**
     * @param $valueX
     * @param $valueY
     * @return int|null
     */
    public function calculate($valueX, $valueY)
    {
        if (
            $valueX < 0 ||
            $valueY < 0 ||
            $valueX > $this->_X ||
            $valueY > $this->_Y ||
            $this->_X <= 0 ||
            $this->_Y <= 0 ||
            is_null($valueX) ||
            is_null($valueY) ||
            is_null($this->_X) ||
            is_null($this->_Y)
        ) return null;

        if(
            !is_null($this->_X1) ||
            !is_null($this->_X2) ||
            !is_null($this->_Y1) ||
            !is_null($this->_Y2)
        ) {
            //Classification Range
            $classRange = [
                [
                    "x" => [0, $this->_X1],
                    "y" => [0, $this->_Y1]
                ],
                [
                    "x" => [$this->_X1, $this->_X2],
                    "y" => [0, $this->_Y1]
                ],
                [
                    "x" => [$this->_X2, $this->_X],
                    "y" => [0, $this->_Y1]
                ],
                ///////////
                [
                    "x" => [0, $this->_X1],
                    "y" => [$this->_Y1, $this->_Y2]
                ],
                [
                    "x" => [$this->_X1, $this->_X2],
                    "y" => [$this->_Y1, $this->_Y2]
                ],
                [
                    "x" => [$this->_X2, $this->_X],
                    "y" => [$this->_Y1, $this->_Y2]
                ],
                ///////
                [
                    "x" => [0, $this->_X1],
                    "y" => [$this->_Y2, $this->_Y]
                ],
                [
                    "x" => [$this->_X1, $this->_X2],
                    "y" => [$this->_Y2, $this->_Y]
                ],
                [
                    "x" => [$this->_X2, $this->_X],
                    "y" => [$this->_Y2, $this->_Y]
                ],
            ];

        } else {
            $_X = $this->_X / 3;
            $_Y = $this->_Y / 3;

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
                /////////////
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
                /////////////
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
        }

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


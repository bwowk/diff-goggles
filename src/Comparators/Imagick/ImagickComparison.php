<?php
/**
 * Created by PhpStorm.
 * User: bwowk
 * Date: 20/12/17
 * Time: 11:58
 */

namespace bwowk\DiffGoggles\Comparators\Imagick;


use bwowk\DiffGoggles\Model\Comparison;

class ImagickComparison implements Comparison
{

    private $imagickImage;
    private $difference;

    /**
     * ImagickComparison constructor.
     * @param $imagickImage
     * @param $difference
     */
    public function __construct(\Imagick $imagickImage, float $difference)
    {
        $this->imagickImage = $imagickImage;
        $this->difference = $difference;
    }


    public function getDifference(): float
    {

        return $this->difference;
    }
}
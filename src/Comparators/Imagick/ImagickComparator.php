<?php
/**
 * Created by PhpStorm.
 * User: bwowk
 * Date: 20/12/17
 * Time: 11:24
 */

namespace bwowk\DiffGoggles\Comparators\Imagick;

use bwowk\DiffGoggles\Model\Comparator;
use bwowk\DiffGoggles\Model\Comparison;
use bwowk\DiffGoggles\Model\Image;
use Imagick as Imagick;

class ImagickComparator implements Comparator
{

    public function compare(Image $imgA, Image $imgB): Comparison
    {

        $image1 = new Imagick($imgA->getPath());
        $image2 = new Imagick($imgB->getPath());

        $result = $image1->compareImages($image2, Imagick::METRIC_ABSOLUTEERRORMETRIC);

        $percentDiff = $result[1] * 100 / ($image1->getimagewidth() * $image1->getimageheight());

        return new ImagickComparison($result[0], $percentDiff);
    }
}
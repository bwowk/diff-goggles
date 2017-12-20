<?php
/**
 * Created by PhpStorm.
 * User: bwowk
 * Date: 20/12/17
 * Time: 10:29
 */

namespace bwowk\DiffGoggles\Model;


interface Comparator
{

    public function compare(Image $imgA, Image $imgB): Comparison;

}
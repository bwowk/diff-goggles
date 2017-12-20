<?php
/**
 * Created by PhpStorm.
 * User: bwowk
 * Date: 20/12/17
 * Time: 10:34
 */

namespace bwowk\DiffGoggles\Model;


interface Comparison
{
    public function getDifference(): float;

}
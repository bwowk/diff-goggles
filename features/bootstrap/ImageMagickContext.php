<?php
/**
 * Created by PhpStorm.
 * User: bwowk
 * Date: 20/12/17
 * Time: 10:15
 */

use Behat\Behat\Context\Context;
use bwowk\DiffGoggles\Comparators\Imagick\ImagickComparator;
use bwowk\DiffGoggles\fixtures;
use bwowk\DiffGoggles\Model\Comparator;
use bwowk\DiffGoggles\Model\Comparison;
use bwowk\DiffGoggles\Model\Image;
use PHPUnit\Framework\Assert;


class ImageMagickContext implements Context
{

    /**
     * @var Image[]
     */
    private $images;
    /**
     * @var Comparator
     */
    private $comparator;
    /**
     * @var Comparison
     */
    private $comparison;

    /**
     * @Given /^I have two identical images "([^"]*)" and "([^"]*)"$/
     */
    public function iHaveTwoIdenticalImagesAnd($i1, $i2)
    {
        $this->images[$i1] = new Image("Image " . $i1, fixtures\fixtures::PATH . "/goggles.png");
        $this->images[$i2] = new Image("Image " . $i2, fixtures\fixtures::PATH . "/goggles.png");
    }

    /**
     * @When /^I compare "([^"]*)" to "([^"]*)"$/
     */
    public function iCompareTo($i1, $i2)
    {
        $this->comparator = new ImagickComparator();
        $this->comparison = $this->comparator->compare($this->images[$i1], $this->images[$i2]);
    }

    /**
     * @Then /^the reported difference should be "([^"]*)"$/
     * @param $percent float
     */
    public function theReportedDifferenceShouldBe($percent)
    {
        Assert::assertEquals((float)$percent, $this->comparison->getDifference());
    }

    /**
     * @Given /^I have an image "([^"]*)"$/
     * @param $i string
     */
    public function iHaveAnImage($i)
    {
        $this->images[$i] = new Image("Image " . $i, fixtures\fixtures::PATH . "/goggles.png");
    }

    /**
     * @Given /^it's inverted version "([^"]*)"$/
     * @param $i string
     */
    public function itSInvertedVersion($i)
    {
        $this->images[$i] = new Image("Image " . $i, fixtures\fixtures::PATH . "/inverted-goggles.png");
    }
}
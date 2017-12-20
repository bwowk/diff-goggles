Feature: Comparing two images

  As a Diff Goggles user
  In order to identify all visual changes on my application
  I want to compare two images and highlight the differences

  Scenario: Comparing two identical images should report 0% difference
    Given I have two identical images "A" and "B"
    When I compare "A" to "B"
    Then the reported difference should be "0%"

  Scenario: Comparing an image with it's inverted version should report 100% difference
    Given I have an image "A"
    And it's inverted version "B"
    When I compare "A" to "B"
    Then the reported difference should be "100%"
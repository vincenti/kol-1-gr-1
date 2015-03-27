Feature: Web pages

  Scenario: Different segments
    Given I am on homepage
    When I follow "Different"
    Then I should see "Different segments of your life must remain contiguous such as business, your love life and leisure"
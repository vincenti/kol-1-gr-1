Feature: Web pages

  Scenario: Careless
    Given I am on homepage
    When I follow "Careless"
    Then I should see "Careless talk costs lives."
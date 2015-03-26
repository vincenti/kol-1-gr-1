Feature: Web pages

  Scenario: My house
    Given I am on homepage
    When I follow "My house"
    Then I should see "My house is my castle"
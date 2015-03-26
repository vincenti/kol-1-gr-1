Feature: Web pages

  Scenario: Insanity
    Given I am on homepage
    When I follow "Insanity..."
    Then I should see "Insanity is doing the same thing over and over, expecting different results."
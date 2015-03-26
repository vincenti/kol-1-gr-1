Feature: Web pages

  Scenario: Curiosity 
    Given I am on homepage
    When I follow "Curiosity"
    Then I should see "Curiosity killed the cat."
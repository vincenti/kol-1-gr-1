Feature: Web pages

  Scenario: Room without books
    Given I am on homepage
     When I follow "Room"
     Then I should see "A room without books is a body without soul."

Feature: Hello Controller


Scenario: Check Hello page redirects to my Blog

  Given I am on "/hello"
  Then I should be on "http://shashikantjagtap.net"

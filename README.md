### SETUP

* Please ensure Apache is installed on your system
* Please ensure PHPUnit is installed on your system

### Running
* Startup your local Apache server
* Navigate to your localhost and load this app via the local host


### Comments about production
2 main problems arose during the completion of the task:
1) I'm a slow developer
2) My internet connection repeatedly bugged out

That being said I enjoyed the challenge. This represents about 2 days of programming work for me. It was challenging enough
to push my skills but not so much that I was completely disheartened. The request to use minimal frameworking lead to a compliation
with writing tests. I'd only tested PHP in Laravel with the help of PHPUnit and in Python with Selenium, I hadn't tested
outside a framework. I wasted some time attempting to test this with Selenium to avoid Laravel but eventually discovered PHPUnit 
worked outside Laravel. I would be faster at that in the future.

As regards the code, I choose OOP because it worked best with PHPUnit. I lost a lot of time and spent great effort over the 
problem of validating user input. Ironically there is no consensus over what the Romans actually used in their notation. That aside, 
I made many failed attempts at input validation, some of them failed at that stage and some approaches failed at later stages.

The actual problem of converting Latin notation and value into Decimal was super hard but took about 2 hours of trial and error.

## Refactoring
Were I to refactor I would revisit the validation and see if there's a more clean way to handle user input.
I think there are probably inefficiencies at that stage that add unneeded complexity down the line. 

But the biggest refactor I would perform is the general layout. I wanted to keep the code simple so the MVC pattern is
is reduced to View+Controller and Model+View across only 2 files. I would have much preferred to separate the concerns
more fully into the MVC pattern. I didn't do this because I was running out of time.

## Summary
My internet problem was hugely disruptive to my workflow. The task would have been completed faster with less stress
had my internet service not kept failing. Also I was very tired and had to take 2 days break in the middle of the task.
I mention this because my stamina for coding is one of the prime factors holding back my growth rate. That being said,
I'm getting exponentially faster at developing.

There were a few moments of strong frustration, the validation problem and regression through the number list to convert values.
But on hindsight I enjoyed growing better at setting up and writing tests and OOP. I feel generally pleased with my performance but 
obviously there is room for improvement. Writing better README's being one such improvement.


## P3 Peer Review

+ Reviewer's name: Josh Lim
+ Reviwee's name: Sean Lim
+ URL to Reviewe's P3 Github Repo URL: *https://github.com/seanlimxD/p3*

## 1. Interface
Address as many of the following points as applicable:

+ The site has a simple design that can be easily understood.
+ The age does not seem to have much effect on the output.
+ All the parts of the interface worked as intended, I did not encounter any problems.
+ The age should have more effect on the overall output.


## 2. Functional testing
One challenge of developing software is thinking of all the unexpected ways users might interact with our applications. It's easy to develop &ldquo;blinders&rdquo; to methods of interaction because we know so much about *how* our application works, and so we have a hard time imagining how our interfaces might be misinterpreted. Thus, it can be useful to have an outsider rigorously test our applications with the explicit intention of trying to break it.

Knowing this, it's time to put your reviewee's application to the test. Think of all the unexpected ways their application could be used with the intention of trying to produce some unexpected/undesirable outcome.

+ If a no fields are filled, gives errors for missing fields
+ If a few fields are filled, gives errors for missing fields
+ If extremely large number is inputted, it gives the "The age must be an integer." error.
+ When trying to access an URL that does not exist, the output is a 404 not found page.

__Summarize what you tried, and describe any unexpected/undesirable outcomes.__

+ If extremely large number is inputted, it gives the "The age must be an integer." error.



## 3. Code: Routes

There is no code that should be placed in a controller.

## 4. Code: Views
Skim through the View files in `/resources/views` and address as many of the following points as applicable:

+ Template inheritance is used.
+ There was no non-display specific logic in the view files.
+ Based on my diagnosis, Blade was used as much as it could have been used.
+ No they did not use any Blade syntax/techniques I were unfamiliar with.

## 5. Code: General
Address as many of the following points as applicable:

+ I did not notice any inconsistencies between the code and the course notes.
+ I felt that this code followed all best practices discussed in the course material.
+ Most codes that weren't self evident were followed by comments.
+ The logic of his code was interesting, I personally would have approached the idea a different way.
+ Any code I didn't understand was explained with comments.

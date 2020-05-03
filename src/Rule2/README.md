# Rule 2: Don’t use the ELSE keyword

How many times did you stumble in a code with `ifs / else's` where you had to think 
more than necessary to understand the logic? And even after this you was not sure about the impact changing that code?

What is pleasant to read that code? Is it something you would like to work with everyday?

The `else` operator is never necessary and can be avoided 100% of the cases. 

It generally encourages developer to introduce a new __else/if__ and increase the code complexity, 
add more responsibilities, different behaviors, increase tests costs, code maintainability and the list goes on.

## Goals / Advantages

:white_check_mark: Reinforce Open/Closed Principle.
:white_check_mark: Reinforce Polymorphism.
:white_check_mark: Better readability.
:white_check_mark: Better maintainability.
:white_check_mark: Increase cohesion.
:white_check_mark: Reinforce Single responsibility principle.
:white_check_mark: Reinforce KISS.
# Rule 5: One dot per line

Sometimes it’s hard to know which object should take responsibility for an activity. If you start
looking for lines of code with multiple dots, you’ll start to find many misplaced responsibilities.

If you’ve got more than one dot on any given line of code, the activity is happening in the wrong
place. Maybe your object is dealing with two other objects at once. If this is the case, your
object is a middleman; it knows too much about too many people. Consider moving the activity
into one of the other objects.

This is a good way to apply the The [Law of Demeter](https://en.wikipedia.org/wiki/Law_of_Demeter) 
(“Only talk to your friends”) is a good place to start, but think about it this way: 

> You can play with your toys, toys that you make, and toys that someone gives you. You don’t ever, ever play with your toy’s toys.

## Goals / Advantages

- Increase readability.
- Increase maintainability.
- Increase testability.
- Reinforce Single Responsibility Principle.
- Reinforce KISS Principle.
- Reinforce last Knowledge principle.
- Increase cohesion.
- Decrease coupling.
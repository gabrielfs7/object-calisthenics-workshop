# Rule 4: First class collections

Application of this rule is simple: __any class that contains a collection should contain no other member variables__. 
Each collection gets wrapped in its own class, so now behaviors related to the collection have a home. 

You may find that filters become a part of this new class. Also,
your new class can handle activities like joining two groups together or applying a rule to each
element of the group. 

- Only a Collection itself should know how to do operations on it!

## Goals / Advantages

- More expressive classes.
- Simpler code.
- Self-documented objects.
- Reinforce Single Responsibility.
- Increase cohesion.
- Decrease coupling.
- Better readability.
- Better maintainability.
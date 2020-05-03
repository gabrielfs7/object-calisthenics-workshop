# Rule 9: No getters/setters/properties

This rules is partially related to [Domain Driven Design](https://github.com/dddinphp).

- Classes should not contain public properties.
- Method should represent behavior, not set values.

:warning: Important

> You can use accessors to get the state the object, as long as you don’t use the result to 
> make decisions outside the object. Any decisions based entirely upon the state of one object should be made 
> inside the object itself.
 
## Goals / Advantages

- :white_check_mark: Reinforces Least Privilege principle.
- :white_check_mark: Reinforces Single Responsibility Principle.
- :white_check_mark: Reinforces DRY principle.
- :white_check_mark: More expressive classes.
- :white_check_mark: Decreases Coupling.
- :white_check_mark: Increases Cohesion.
- :white_check_mark: Better Readability.
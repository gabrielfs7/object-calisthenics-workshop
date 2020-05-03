# Rule 3: Wrap all primitives and Strings

If the variable of your primitive type has a behavior, encapsulate it within objects, 
in order to avoid the [Primitive Obsession anti-pattern](http://wiki.c2.com/?PrimitiveObsession).

This is especially true for __Domain Driven Design__. 
__DDD__ describes Value Objects like __Money__, or __Hour__ for instance.

## Goals / Advantages

:white_check_mark: Decouple general logic.
:white_check_mark: Increase cohesion.
:white_check_mark: Reinforce Single responsibility principle.
:white_check_mark: Reinforce DRY.
:white_check_mark: Reinforce KISS.
:white_check_mark: Avoid discrepancy.
:white_check_mark: Avoid primitive Obsession anti-pattern.
:white_check_mark: Better readability.
:white_check_mark: Better maintainability.
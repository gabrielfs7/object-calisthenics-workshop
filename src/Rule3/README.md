# Rule 3: Wrap all primitives and Strings

If the variable of your primitive type has a behavior, encapsulate it within objects, 
in order to avoid the [Primitive Obsession anti-pattern](http://wiki.c2.com/?PrimitiveObsession).

This is especially true for __Domain Driven Design__. 
__DDD__ describes Value Objects like __Money__, or __Hour__ for instance.
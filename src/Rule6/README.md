# Rule 6: Don’t abbreviate

It’s often tempting to abbreviate in the names of classes, methods, or variables. Resist the
temptation – abbreviations can be confusing, and they tend to hide larger problems.

Think about why you want to abbreviate. Is it because you’re typing the same word over and
over again? If that’s the case, perhaps your method is used too heavily and you are missing
opportunities to remove duplication. Is it because your method names are getting long? 
This might be a sign of a misplaced responsibility, or a missing class.

Try to keep class and method names to 1-2 words, and avoid names that duplicate the context. If
the class is an Order, the method doesn’t need to be called shipOrder(). Simply name the method
ship() so that clients call order.ship() – a simple and clear representation of what’s going on. 

## Goals / Advantages

:x: Expose weak domain.
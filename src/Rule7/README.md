# Rule 7: Keep all entities small

This means no class over `50` lines and no package over `10` files. 

> This units (50 and 10) can be changed by your team/company.

Classes over `50` lines usually do more than one thing, which makes them harder to understand
and harder to reuse. 50-line classes have the added benefit of being visible on one screen
without scrolling, which makes them easier to grasp quickly.

## Goals / Benefits

- :white_check_mark: Reinforces Single Responsibility Principle.
- :white_check_mark: Reinforces DRY Principle.
- :white_check_mark: Decreases Coupling.
- :white_check_mark: Increases Coupling.
- :white_check_mark: Improves Testability.
- :white_check_mark: Improves Readability.
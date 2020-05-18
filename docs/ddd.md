## Domain-driven-design

### Value Objects
Value Objects are arguably one of the most important parts of DDD as they allow you to explicitly capture behaviour and encapsulate business rules in immutable objects.
    
For example: Email, Username and Password objects, dates and times, IPs or co-ordinates, a Product Price, Number, Date, String, Money.

One of the important attributes of a Value Object is that it should have equality with another Value Object instance if they both posses the same properties but equality is not based on identity. This way, you can have multiple copies of the same conceptual value object.

If you want to change a value object you should replace the object with a new one and not be allowed to update the values of the value object itself.

One of the main goals of Value Objects is also the holy grail of Object Oriented design: encapsulation. By following this abstraction, you will end up with a dedicated location to put all the validation, comparison logic and behaviour for a given concept.


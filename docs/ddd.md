## Domain-driven-design

### Value Objects
Value Objects are arguably one of the most important parts of DDD as they allow you to explicitly capture behaviour and encapsulate business rules in immutable objects.
    
For example: Email, Username and Password objects, dates and times, IPs or co-ordinates, a Product Price, Number, Date, String, Money.

One of the important attributes of a Value Object is that it should have equality with another Value Object instance if they both posses the same properties but equality is not based on identity. This way, you can have multiple copies of the same conceptual value object.

If you want to change a value object you should replace the object with a new one and not be allowed to update the values of the value object itself.

One of the main goals of Value Objects is also the holy grail of Object Oriented design: encapsulation. By following this abstraction, you will end up with a dedicated location to put all the validation, comparison logic and behaviour for a given concept.

code: https://github.com/rilwanfit/api-platform-learning/commit/667539076a08393a8092dc10877bc6718b280634

### Entity
Entities are objects that have an identity within the application. This means the properties of the Entity can change, but the identity of the Entity will remain consistent.
Most of the time the identity of an entity is represented as a primitive type: usually a string or an integer. But using a value object to represent it has more advantages:

- Value Objects are immutable, so they cannot be modified.
- Value Objects are complex types that can have custom behaviours that otherwise with primitive types cannot have. Put for example the equality operation. With value objects, equality operations can be modelled and encapsulated in their own classes, making concepts go from implicit to explicit.

code: https://github.com/rilwanfit/api-platform-learning/commit/e91ffd3308b4c77497ada33471bb6abf3248f01d

### Aggregate

An aggregate is a cluster of associated objects that we treat as a unit for the purpose of data changes.
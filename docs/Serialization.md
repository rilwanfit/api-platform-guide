## Serialization

The Symfony Serializer Component used transform PHP entities into API responses

### Enable serialization support

you can verify the config by running this command. `bin/console debug:config framework serializer`.

Make sure `enabled` and `enable_annotations` set to `true`

### Using Serialization Groups

- Add the `normalizationContext` and `denormalizationContext`
- Apply the ``@Groups` annotation to properties in the object.

These settings will allow you to control the `Book` object serialization based on the operations.

- `name` and `author` properties are exposed to ready mode [GET]
- Only `name` property exposed to write mode [PUT/POST]
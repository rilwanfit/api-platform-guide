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

Code: https://github.com/rilwanfit/api-platform-learning/commit/f2fc191ef9d35ba728d368e24c6bcffd6916e2c1

### Using Serialization Groups per Operation

it is also possible to defife normalizationContext/denormalizationContext per operations itemOperation/CollectionOperation level

- Operation level configuration will be overriding the general settings

### API Resource Relations
by default serializer provide relations with an IRI, which allows the client to make separate call to get details of related API resource.serializer

However, for performance reasons, It is possible to embed related API resource in the parent resource and which allow customization too.

Code: https://github.com/rilwanfit/api-platform-learning/commit/5d0cd3de4fd99a78e5cd176e631e400a050ed952


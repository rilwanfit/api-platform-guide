## Data Providers

by default Doctrine ORM data providers are enabled.

### Custom Collection Data Provider

- Create `BlogPostCollectionDataProvider` which implements CollectionDataProviderInterface, RestrictedDataProviderInterface
- Doesn't required to register the service. symfony autowiring will help you to register this service with default priority. if you want to customize priority
``` yaml
App\DataProvider\BlogPostCollectionDataProvider:
    tags: [ { name: 'api_platform.collection_data_provider', priority: 2 } ]
    # Autoconfiguration must be disabled to set a custom priority
    autoconfigure: false
```

- Create and Entity to utilize newly created data provider.
    - Register the entity as @ApiResource
    - Add the path mapping in `api_platform.yaml`
```yaml
api_platform:
    mapping:
        paths: ['%kernel.project_dir%/src/Entity', '%kernel.project_dir%/src/Domain/Blog/Entity']
```

code: https://github.com/rilwanfit/api-platform-learning/commit/668cf4940ac0e1156526fc6d48e74d30b6441998

### Custom Item Data Provider

- Create `BlogPostItemDataProvider` which implements ItemDataProviderInterface, RestrictedDataProviderInterface
- Doesn't required to register the service. symfony autowiring will help you to register this service with default priority. if you want to customize priority
``` yaml
App\DataProvider\BlogPostItemDataProvider:
    tags: [ { name: 'api_platform.item_data_provider', priority: 2 } ]
    # Autoconfiguration must be disabled to set a custom priority
    autoconfigure: false
```

- Create and Entity to utilize newly created data provider.
    - Register the entity as @ApiResource
    - Add the path mapping in `api_platform.yaml`

code: https://github.com/rilwanfit/api-platform-learning/commit/d0e8c836c5c109a7e47ac96c35cbfa2c3b9bc93f

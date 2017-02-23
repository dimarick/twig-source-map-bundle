Installation
============

Add repositories and packages to your composer.json

```json
{
    "repositories": [
        {
            "url": "git@github.com:dimarick/twig-source-map.git",
            "type": "git"
        },
        {
            "url": "git@github.com:dimarick/twig-source-map-bundle.git",
            "type": "git"
        }
    ],
    "require": {
        "dimarick/twig-source-map": "dev-master",
        "dimarick/twig-source-map-bundle": "dev-master"
    }
}
```

Add options to config.yml:

```yml
twig_source_map:
    enabled: true
```

And register bundle in your AppKernel:

```php
class AppKernel extends Kernel
{

    public function registerBundles()
    {
        $bundles = [
            // ...
            new TwigSourceMapBundle\TwigSourceMapBundle(),
            // ...
        ];
    // ...
```

Run `composer update`
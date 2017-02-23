Installation
============

Add repositories and packages to your composer.json

```
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
    },
```

Add options to config.yml:

```
twig_source_map:
    enabled: true
```

Run `composer update`
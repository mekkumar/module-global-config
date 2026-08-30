# Kumar Global Config

Magento 2 module for centralized global storefront configuration.

## Features

- Centralized storefront styling configuration.
- Store View, Website and Default scope support.
- Native HTML color picker for color settings.
- CSS custom properties exposed as `--kumar-*` variables.
- No bundled third-party libraries or vendor code.

## Configuration

`Stores > Configuration > Kumar > Global Config`

## Installation with Composer

```bash
composer require kumar/module-global-config
php bin/magento module:enable Kumar_GlobalConfig
php bin/magento setup:upgrade
php bin/magento cache:flush
```

For production mode:

```bash
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
```

## Manual Installation

Copy the module to:

```text
app/code/Kumar/GlobalConfig
```

Then run:

```bash
php bin/magento module:enable Kumar_GlobalConfig
php bin/magento setup:upgrade
php bin/magento cache:flush
```

## License

This project is licensed under the MIT License. See [LICENSE](LICENSE).

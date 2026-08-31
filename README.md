# Kumar Global Config

Magento 2 module for centralized global storefront configuration and styling.

Kumar Global Config allows Magento administrators to manage common storefront styling values, such as colors for navigation, buttons, forms, product cards, messages, modals and other global UI elements, directly from the Magento Admin Panel.

Configured values are exposed to the storefront as CSS custom properties (`--kumar-*`), making them easy to use throughout your theme without hard-coding the same values in multiple CSS files.

## What does this module do?

Instead of defining global storefront colors directly inside your theme CSS, Kumar Global Config provides a centralized configuration area in Magento Admin.

For example, you can configure the navigation background color from:

`Stores > Configuration > Kumar > Global Config`

The configured value is then available on the storefront as a CSS custom property:

```css
var(--kumar-navigation-background-color)
```

You can use this variable anywhere in your theme CSS:

```css
.navigation {
    background-color: var(--kumar-navigation-background-color);
}
```

This makes global styling easier to maintain and allows different Magento Websites and Store Views to have their own configuration.

## Features

* Centralized storefront styling configuration.
* Manage common global UI colors from Magento Admin.
* Store View, Website and Default scope support.
* Color settings with a dedicated color picker.
* CSS custom properties exposed as `--kumar-*` variables.
* Automatic CSS variable generation from Magento configuration.
* Supports theme-level usage through standard CSS `var()` syntax.
* No bundled third-party libraries or vendor code.
* Works with Magento's native configuration system.

## How It Works

The module follows a simple flow:

```text
Magento Admin
     ↓
Kumar Global Config
     ↓
Magento Store Configuration
     ↓
CSS Custom Properties
     ↓
Magento Storefront
```

For example:

```text
Admin setting:
Navigation → Background Color → #ab0d0d

Generated CSS variable:
--kumar-navigation-background-color: #ab0d0d;
```

The variable can then be consumed by your theme:

```css
.navigation {
    background-color: var(--kumar-navigation-background-color);
}
```

## CSS Variable Naming Convention

CSS variables follow this naming convention:

```text
--kumar-{group}-{field}
```

Magento configuration field names are converted to kebab-case.

For example:

| Configuration                 | CSS Variable                          |
| ----------------------------- | ------------------------------------- |
| Navigation → Background Color | `--kumar-navigation-background-color` |
| Navigation → Text Color       | `--kumar-navigation-text-color`       |
| Buttons → Primary Background  | `--kumar-buttons-primary-background`  |
| Product Card → Price Color    | `--kumar-product-card-price-color`    |

Example usage:

```css
.button-primary {
    background-color: var(--kumar-buttons-primary-background);
    color: var(--kumar-buttons-primary-text);
}
```

## Configuration

After installation, go to:

`Stores > Configuration > Kumar > Global Config`

The module provides centralized configuration for common storefront UI areas.

Depending on the installed version, available configuration groups can include areas such as:

* Global / General
* Navigation
* Buttons
* Forms
* Messages
* Links
* Product Cards
* Breadcrumbs
* Tabs
* Modal / Popup
* Loader
* Accessibility / Focus States
* Page / Content Areas

All configurable values are managed through Magento's standard configuration system.

## Configuration Scope

The module supports Magento's standard configuration scopes:

* Default
* Website
* Store View

This allows different storefronts to use different styling configurations when required.

For example:

```text
Website A
    Navigation Background → #000000

Website B
    Navigation Background → #ffffff
```

The appropriate value is then exposed to the corresponding storefront.

## Using the Variables in Your Theme

Once a value is configured, use the generated CSS custom property in your theme CSS.

Example:

```css
.header {
    background-color: var(--kumar-navigation-background-color);
}

.header a {
    color: var(--kumar-navigation-text-color);
}

.button-primary {
    background-color: var(--kumar-buttons-primary-background);
}
```

This keeps styling values centralized while allowing your existing Magento theme to consume them normally.

## Installation with Composer

Install the module using Composer:

```bash
composer require kumar/module-global-config
```

Enable the module:

```bash
php bin/magento module:enable Kumar_GlobalConfig
```

Run Magento setup:

```bash
php bin/magento setup:upgrade
```

Flush the cache:

```bash
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

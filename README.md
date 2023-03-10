# GrumPHP Prettier

A [Prettier](https://prettier.io/) task for [GrumPHP](https://github.com/phpro/grumphp).

## Installation

```shell-script
	composer require indykoning/grumphp-prettier
```

And at the very least you need prettier installed in your node_modules folder.

```shell-script
yarn add prettier
```
## Usage

In your grumphp.yml : 

```yaml
grumphp:
  extensions:
    - Indykoning\GrumPHPPrettier\ExtensionLoader
  tasks:
    prettier:
```

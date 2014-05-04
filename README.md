## Requirements

The Emoji result printer for PHPUnit requires: 

 * PHP 5.3.3 or later.
 * A terminal emulator with emoji support.

## Installation

The recommended way to install the Emoji result printer for PHPUnit is
[through composer](http://getcomposer.org). Just create a `composer.json` file
and run the `php composer.phar install` command to install it:

~~~json
{
    "require-dev": {
        "whatthejeff/emoji-phpunit-resultprinter": "~1.0"
    }
}
~~~

**NOTE:** If PHPUnit was not installed via composer, you also need to include
the composer autoloader when running your tests. One easy way to do this is to 
add the following attribute to the `<phpunit>` element in your `phpunit.xml` 
file:

    bootstrap="vendor/autoload.php"

## Available printers

The available printers are listed below. To enable one, just copy the 
attributes from the code section under the title and paste it to the 
`<phpunit>` element in your `phpunit.xml` file.

### Default printer

~~~
printerFile="vendor/whatthejeff/emoji-phpunit-resultprinter/src/Emoji/PHPUnit/ResultPrinter.php"
printerClass="Emoji\PHPUnit\ResultPrinter"
~~~

* **Error:** :boom:
* **Failure:** :rotating_light:
* **Incomplete:** :construction:
* **Risky:** :warning:
* **Skipped:** :triangular_flag_on_post:
* **Pass:** :star:

### Face printer

~~~
printerFile="vendor/whatthejeff/emoji-phpunit-resultprinter/src/Emoji/PHPUnit/FaceResultPrinter.php"
printerClass="Emoji\PHPUnit\FaceResultPrinter"
~~~

* **Error:** :astonished:
* **Failure:** :rage:
* **Incomplete:** :no_mouth:
* **Risky:** :grimacing:
* **Skipped:** :expressionless:
* **Pass:** :blush:

### Weather printer

~~~
printerFile="vendor/whatthejeff/emoji-phpunit-resultprinter/src/Emoji/PHPUnit/WeatherResultPrinter.php"
printerClass="Emoji\PHPUnit\WeatherResultPrinter"
~~~

* **Error:** :zap:
* **Failure:** :umbrella:
* **Incomplete:** :cloud:
* **Risky:** :partly_sunny:
* **Skipped:** :cyclone:
* **Pass:** :sunny:

### Cat printer

~~~
printerFile="vendor/whatthejeff/emoji-phpunit-resultprinter/src/Emoji/PHPUnit/CatResultPrinter.php"
printerClass="Emoji\PHPUnit\CatResultPrinter"
~~~

* **Error:** :scream_cat:
* **Failure:** :crying_cat_face:
* **Incomplete:** :cat:
* **Risky:** :pouting_cat:
* **Skipped:** :smirk_cat:
* **Pass:** :heart_eyes_cat:

### Fruit printer

~~~
printerFile="vendor/whatthejeff/emoji-phpunit-resultprinter/src/Emoji/PHPUnit/FruitResultPrinter.php"
printerClass="Emoji\PHPUnit\FruitResultPrinter"
~~~

* **Error:** :apple:
* **Failure:** :tomato:
* **Incomplete:** :lemon:
* **Risky:** :tangerine:
* **Skipped:** :melon:
* **Pass:** :green_apple:

### Heart printer

~~~
printerFile="vendor/whatthejeff/emoji-phpunit-resultprinter/src/Emoji/PHPUnit/HeartResultPrinter.php"
printerClass="Emoji\PHPUnit\HeartResultPrinter"
~~~

* **Error:** :broken_heart:
* **Failure:** :broken_heart:
* **Incomplete:** :yellow_heart:
* **Risky:** :green_heart:
* **Skipped:** :blue_heart:
* **Pass:** :heart:

### Hand printer

~~~
printerFile="vendor/whatthejeff/emoji-phpunit-resultprinter/src/Emoji/PHPUnit/HandResultPrinter.php"
printerClass="Emoji\PHPUnit\HandResultPrinter"
~~~

* **Error:** :punch:
* **Failure:** :punch:
* **Incomplete:** :raised_hand:
* **Risky:** :raised_hand:
* **Skipped:** :fist:
* **Pass:** :thumbsup:

## Tests

[![Build Status](https://travis-ci.org/whatthejeff/emoji-phpunit-resultprinter.png?branch=master)](https://travis-ci.org/whatthejeff/emoji-phpunit-resultprinter)

To run the test suite, you need [composer](http://getcomposer.org).

    $ php composer.phar install
    $ vendor/bin/phpunit

## License

The Emoji result printer for PHPUnit is licensed under the [MIT license](LICENSE).
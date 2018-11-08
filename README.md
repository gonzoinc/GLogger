# GLogger 

Project created by [Greg Dean](https://github.com/gonzoinc) 

## About

Glogger is a simple logger class implementing [Klogger](https://github.com/katzgrau/KLogger). It's basically a wrapper. The purpose of this was a simpler way to use Klogger throughout an application. Constants are now used which allows easier management, configurability and ease of use.

## Installation

Installation is done strictly with Composer and loaded with it's autoload feature.

```bash
composer require gonzoinc/glogger
```
In your `composer.json`:

``` json
{
    "require": {
        "gonzoinc/glogger": "1.0.0"
    }
}
```

## Usage

Check Sample file for working example of the class and examples of the various logging levels.

The Constants used are defined in the init.php file.  Be sure to copy them over to your application and set them as needed.

```php

<?php

require_once "init.php";

// Composer required modules
require_once 'vendor/autoload.php';

use Glogger\Log;

$logger = new Log();

$logger->debug("This is a debug message");

$logger->warn("This is a warning message");

$logger->info("This is an info message");

$logger->error("This is an error message");

$logger->critical("This is a critical message");
```
The logger class is set to create the log file in a JSON logstash format. This was personal taste since I use elasticsearch to consume all my logs. 

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate. *** PHPUnit Tests are to Follow ***

## License
[GPL-3.0](https://choosealicense.com/licenses/gpl-3.0/)
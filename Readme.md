# SendException Package
## Installation
 After installing, add the below text to config/app, under Application Service Providers
#### \Jimmyjetter\Sendexception\SendExceptionServiceProvider::class 

### Autoload files
You have to autoload the files in the package with the composer command. An example is illustrated below.
#### composer dump-autoload

### Publish vendor files
The last thing to do is publish the vendor files.
#### php artisan vendor:publish


## Usage
Import Jimmyjetter\Sendexception\SendException to anyfile you will be using the package in with the "use" keyword.
### Eg
use Jimmyjetter\Sendexception\SendException;  

$send_exception = new SendException();  
$send_exception->notifyUser();


# SendException Package
 After installing, add the below text to config/app, under Application Service Providers
### \Jimmyjetter\Sendexception\SendExceptionServiceProvider::class 

Import Jimmyjetter\Sendexception\SendException to anyfile you will be using the package in with the "use" keyword.
## Eg
use Jimmyjetter\Sendexception\SendException;  

$send_exception = new SendException();  
$send_exception->notifyUser();


Installation
============
This was built on using Laravel/Homestead as the virtual
environment.

- Clone this repository
- Ensure you have Vagrant and VirtualBox installed
- Download and setup homestead by following instructions
at https://symfony.com/doc/current/setup/homestead.html and 
https://laravel.com/docs/5.6/homestead
- Edit the Homestead.yaml to reflect the clone directory and 
add calculator.test to the urls and webroot
- Add calculator.test to your hosts file 192.168.10.10
- Vagrant up
- Go to calculator.test

Version 0.2
=========
This was done to reduce the controller code signficantly. 
The factory is used for IoC, but I am wondering if this 
is possible to do via Symfony's DIContainer.

There are still a couple of issues with this, some of those
improvements are listed below. Mainly, its not quite following
the Liskov Sub because some of the calculators return 
different types (they are all technically capable of 
returning anything). 

A better way would be to assume integers to begin with and 
use the same Exceptions for each. 
(e.g. InvalidArgumentException). This can then be extended 
to include decimal calculations (probablly via a different
interface).

Hopefully it does enough to demonstrate the approach and 
exposes a few Symfony components.


Improvements
============
There are a number of ways this would need to be improved:
- Validation - Ensure all inputs are numeric / integers where 
appropriate
- Exceptions - Better error handling for divide by zero and 
other validation issues
- Arithmetic Typecast left open to allow for float and 
integers. Investigate better way to do this to include input 
and output casting.

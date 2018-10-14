# php_autoloading
A small, simple, no-dependancy PHP autoloader using spl_autoload_register. 

I recently had a project that simply did not want to work with Composer's autoloading due to some quirky 3rd party dependencies, so I instead created this simple autoloader. It's nearly as simple as the Composer Autoloader everyone uses, but doesn't require Composer.

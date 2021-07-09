# MindGeek

Version: 1.0.0

--- Interview : WIP.

What you need to open the files: 
Laravel 8
Composer
Git
Xampp (or virtualization, I like XAMPP the best, it's nicer on my computer resources)
Node 

----------------------
After installing the project dependencies, you can add the host in your hosts file on your machine, for a private host.
For the purpose of this demo I simply used the one Laravel command:
 php artisan serve
-----------------------
After the migration part is done, you will need to migrate the database and then seed it with data. 
-----------------------

Left to do: (For version 1.1.0)
Database migration, database seeding instead of eternal caching.
A caching strategy to be used for caching, at the middleware level, between calls to databse, perhaps use the Proxy design pattern for it
Right now we only have this one single object on the model side, which is called movie, however Movie is far to general and more classes 
for OOP are going to be needed
Unit tests for everything
Tests for external resurces (pictures, movies, so that they do not change)
Two view proposals for an individual movie - perhaps kept on separate branches (looks, matter :) )

-------------------------------

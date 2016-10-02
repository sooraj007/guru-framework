<?php
/**
 * Author Sooraj Narayan.
 *  Copyright (c) 2016 Sooraj Narayan.
 *  Mail: surajnarayann@gmail.com.
 *  Github: https://github.com/sooraj007
 *  Permission is hereby granted, free of charge, to any person obtaining a copy of this software.
 *  Software and associated documentation files (the "Software"), to deal in the Software without restriction.
 *  Which includes the right to use without limitation .
 */

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = new Dotenv\Dotenv($_SERVER['DOCUMENT_ROOT']);
$dotenv->load();

/*
|--------------------------------------------------------------------------
| Register Service Providers
|--------------------------------------------------------------------------
|
| Here we will register all of the application's service providers which
| are used to bind services into the container. Service providers are
| totally optional, so you are not required to uncomment this line.
|
*/

use App\Routes\Route ;


//use App\Controllers\BaseController ;



/*
|--------------------------------------------------------------------------
| Load The Application Methods
|--------------------------------------------------------------------------
|
| Next we will include the routes file so that they can all be added to
| the application. This will provide all of the URLs the application
| can respond to, as well as the controllers that may handle them.
|
*/

$route = new Route();
//$route->start($Flight);

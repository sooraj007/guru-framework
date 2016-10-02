<?php

namespace App\Controllers;
use App\Helpers\helper;
use flight as app;


/*
|--------------------------------------------------------------------------
| Base Controller
|--------------------------------------------------------------------------
|
| Write your controllers here as static Methods so that you can call that
| Method in your route file easily , these methods can be extended using the
| namespace.
|
*/


/**
 * Class BaseController
 * @package App\Controllers
 */
Class BaseController
{



public static function User()
{

//$re = app::request()->data->name;

Helper::run()->mail("sooraj@gmail.com","proflicxx@gmail.com");

//echo app::json(["name"=>$re]);



}



}
